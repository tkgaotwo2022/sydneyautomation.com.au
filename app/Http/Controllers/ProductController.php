<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Menu;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Stripe;



class ProductController extends Controller
{

    public function ProductAddPage()
    {
        $cat = Menu::where('stage', '2')->orderBy('page_title')->get();
        $subcat = Menu::where('stage', '3')->orderBy('page_title')->get();
        return view('admin.add_product', compact('cat', 'subcat'));
    }

    public function ProductAdd(Request $req)
    {

        if ($req->hasFile('pro_image')) {
            $fileName1 = pathinfo($req->pro_image->getClientOriginalName(), PATHINFO_FILENAME);
            $fullFileName1 = $fileName1 . "-" . time() . "." . $req->pro_image->getClientOriginalExtension();
            $req->pro_image->move('product_images', $fullFileName1);
            $product_id = Product::insertGetId(
                [
                    'product_name' => $req->pro_name,
                    'product_description' => $req->pro_desc,
                    'product_slug' => Str::slug($req->pro_name, '-'),
                    'product_image' => $fullFileName1,
                    'product_category_id' => isset($req->pro_category) ? implode(",", $req->pro_category) : null,
                    'product_subcategory_id' => isset($req->pro_subcategory) ? implode(",", $req->pro_subcategory) : null,
                    'sku' => $req->sku,
                    'product_type' => $req->select_product_type
                ]
            );
        } else {
            $product_id = Product::insertGetId(
                [
                    'product_name' => $req->pro_name,
                    'product_description' => $req->pro_desc,
                    'product_slug' => Str::slug($req->pro_name, '-'),
                    'product_category_id' => isset($req->pro_category) ? implode(",", $req->pro_category) : "",
                    'product_subcategory_id' => isset($req->pro_subcategory) ? implode(",", $req->pro_subcategory) : "",
                    'sku' => $req->sku,
                    'product_type' => $req->select_product_type

                ]
            );
        }
        if ($req->select_product_type == "Variable Product") {

            DB::table('variant')
                ->insert([
                    'product_id' => $product_id,
                    'variant_names' => isset($req->variant_name) ? implode(",", $req->variant_name) : "",
                    'variant_prices' => isset($req->variant_price) ? implode(",", $req->variant_price) : ""
                ]);
        }

        if ($req->hasFile('product_images')) {


            foreach ($req->product_images as $image) {
                $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $fullFileName = $fileName . "-" . Str::random(8) . "." . $image->getClientOriginalExtension();
                $image->move('product_images', $fullFileName);
                DB::table('product_gallery_images')->insert(['product_id' => $product_id, 'images' => $fullFileName]);
            }
        }

        return redirect()->route('product_add');
    }

    public function ProductListPage(Request $req)
    {
        $products = Product::get();
        if ($req->product_delete_id) {
            DB::table('products')->leftJoin('variant', 'products.id', '=', 'variant.product_id')->where('products.id', decrypt($req->product_delete_id))
                ->delete();
            return back();
        }

        if ($req->product_edit_id) {
            $pro = Product::where('id', decrypt($req->product_edit_id))->first();
            $cat = Menu::where('stage', '2')->orderBy('page_title')->get();
            $subcat = Menu::where('stage', '3')->orderBy('page_title')->get();
            $all_cat = Menu::where('id', $pro->product_category_id)->get();
            $all_subcat = Menu::where('id', $pro->product_subcategory_id)->get();
            $categories = explode(",", $pro->product_category_id);
            $subcategories = explode(",", $pro->product_subcategory_id);
            $add_info = DB::table('variant')->where('product_id', decrypt($req->product_edit_id))->get();
            $vnames = DB::table('variant')->where('product_id', decrypt($req->product_edit_id))->pluck('variant_names');
            $vprices = DB::table('variant')->where('product_id', decrypt($req->product_edit_id))->pluck('variant_prices');
            $product_gallery = DB::table('product_gallery_images')->where('product_id', decrypt($req->product_edit_id))->get();

            return view('admin.add_product', compact('pro', 'cat', 'subcat', 'categories', 'subcategories', 'vnames', 'all_cat', 'all_subcat', 'add_info', 'product_gallery'));
        }

        return response()->view('admin.all_product', ["products" => json_encode($products)]);
    }


    public function updateProduct(Request $req)
    {
        if ($req->hasFile('pro_image')) {
            $fileName1 = pathinfo($req->pro_image->getClientOriginalName(), PATHINFO_FILENAME);
            $fullFileName1 = $fileName1 . "-" . time() . "." . $req->pro_image->getClientOriginalExtension();
            $req->pro_image->move('product_images', $fullFileName1);
            Product::where('id', decrypt($req->id))->update(['product_image' => $fullFileName1]);
        }
        Product::where('id', decrypt($req->id))
            ->update([
                'product_name' => $req->pro_name,
                'product_description' => $req->pro_desc,
                'product_slug' => Str::slug($req->pro_name, '-'),
                'product_category_id' => implode(",", $req->pro_category),
                'product_subcategory_id' => implode(",", $req->pro_subcategory),
                'sku' => $req->sku,
                'product_type' => $req->select_product_type

            ]);

        if ($req->select_product_type == "Variable Product") {

            $data =
                [
                    'variant_names' => isset($req->variant_name) ? implode(",", $req->variant_name) : null,
                    'variant_prices' => isset($req->variant_price) ? implode(",", $req->variant_price) : null

                ];


            DB::table('variant')->updateOrInsert(['product_id' => decrypt($req->id)], $data);
        }

        if ($req->hasFile('product_images')) {


            foreach ($req->product_images as $image) {
                $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $fullFileName = $fileName . "-" . Str::random(8) . "." . $image->getClientOriginalExtension();
                $image->move('product_images', $fullFileName);
                DB::table('product_gallery_images')->where('product_id', decrypt($req->id))
                    ->update(['images' => $fullFileName]);
            }
        }

        return back();
    }






    public function CategoryProduct(Request $request)
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();

        if ($request->get('sub-category')) {
            $allcontent = Menu::where('page_slug', $request->get('sub-category'))->first();

            $products = Product::whereRaw("find_in_set('" . $allcontent->id . "',product_subcategory_id)")
                ->whereRaw("find_in_set('" . $allcontent->parent_id . "',product_category_id)")
                ->orderBy('product_name')->get();
        } else {
            $allcontent = Menu::where('page_slug', $request->get('category'))->first();
            $products = Product::whereRaw("find_in_set('" . $allcontent->id . "',product_category_id)")->orderBy('product_name')->get();
        }
        return view('website.category', compact('secondmenu', 'thirdmenu', 'allcontent', 'products'));
    }

    public function AddtoCart(Request $req)
    {

        $cart = Cart::where('session_id', $req->guest_id)->pluck('product_id')->toArray();

        if (in_array(decrypt($req->pro_cart_id), $cart))
            Cart::where('product_id', decrypt($req->pro_cart_id))->increment('quantity', $req->pro_cart_qty);
        else
            Cart::insert([
                'session_id' => $req->guest_id,
                'name' => $req->pro_cart_name,
                'price' => $req->pro_cart_price,
                'product_id' => decrypt($req->pro_cart_id),
                'quantity' => $req->pro_cart_qty,
                'img' => $req->pro_cart_img
            ]);

        return redirect()->route('show_cart', ['random_id' => Str::random(8)]);
    }

    public function updateCart(Request $req)
    {


        Cart::where('id', decrypt($req->update_product))->where('session_id', session()->getId())->update(['quantity' => $req->quantity]);

        return back();
    }

    public function CartPage(Request $req)
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();
        $cartItem = Cart::where('session_id', session()->getId())->get();
        if ($cartItem->count())
            return view('website.cart', compact('secondmenu', 'thirdmenu', 'cartItem'));
        else
            return view('website.home', compact('secondmenu', 'thirdmenu'));
    }

    public function removeCart(Request $req)
    {

        Cart::where('id', decrypt($req->remove_product))->where('session_id', session()->getId())->delete();
        return back();
    }

    public function removeAll(Request $req)
    {
        Cart::where('session_id', session()->getId())->delete();
        return back();
    }



    public function checkOut()
    {
        $secondmenu = Menu::where('stage', '2')->get();
        $thirdmenu = Menu::where('stage', '3')->get();
        $cartItem = Cart::where('session_id', session()->getId())->get();

        return view('website.checkout', compact('secondmenu', 'thirdmenu', 'cartItem'));
    }

    public function doPayment()
    {
        $secondmenu = Menu::where('stage', '2')->get();
        $thirdmenu = Menu::where('stage', '3')->get();
        return view('website.payment', compact('secondmenu', 'thirdmenu'));
    }

    public function ProductSinglePage(Request $req)
    {
        $secondmenu = Menu::where('stage', '2')->get();
        $thirdmenu = Menu::where('stage', '3')->get();
        $inner_product = Product::where('product_slug', $req->product)->first();
        $all_cat = Menu::whereIn('id', explode(",", $inner_product->product_category_id))->get();
        $all_subcat = Menu::whereIn('id', explode(",", $inner_product->product_subcategory_id))->get();
        $variant_inner_product = DB::table('variant')->where('product_id', $inner_product->id)->get();
        $review = DB::table('review')->where('product_review_id', $inner_product->id)->get();
        $product_gallery = DB::table('product_gallery_images')->where('product_id', $inner_product->id)->get();

        if ($req->review_form == "Submit") {
            DB::table('review')->insert([
                'product_review_id' => $inner_product->id, 'name' => $req->nm,
                'email' => $req->em, 'review' => $req->rev, 'rating' => $req->rate
            ]);
            return back();
        }



        return view('website.shop', compact(
            'inner_product',
            'variant_inner_product',
            'secondmenu',
            'thirdmenu',
            'review',
            'all_cat',
            'all_subcat',
            'product_gallery'
        ));
    }






    public function saveShippingDetails(Request $req)
    {
        $req->validate(
            [
                'chk_fname' => 'required',
                'chk_lname' => 'required',
                'chk_phone' => 'required|numeric|min:10',
                'chk_email' => 'required|email:rfc,dns',
                'chk_address.*' => 'required'
            ],
            [
                'chk_fname.required' => 'First Name is required',
                'chk_lname.required' => 'Last Name is required',
                'chk_phone.required' => 'Phone no is required',
                'chk_phone.numeric' => 'Phone no should be in number',
                'chk_phone.min' => 'Phone no should be minimum number of 10 digits',
                'chk_email.required' => 'Email is required',
                'chk_email.email' => 'Email should be in valid format',
                'chk_address.*.required' => 'Address is required'
            ]
        );

        //dd($req->all());


        DB::table('shipping')->insert([
            'fname' => $req->chk_fname, 'lname' => $req->chk_lname,
            'phone' => $req->chk_phone, 'email' => $req->chk_email, 'address' => implode(",", $req->chk_address), 'total_amount' => $req->total_amount, 'session_id' => session()->getId()
        ]);

        return redirect()->route('do_payment');
    }

    public function postPayment(Request $req)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\PaymentIntent::create([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $req->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);

        session()->flash('success', 'Payment successful!');

        return back();
    }
}
