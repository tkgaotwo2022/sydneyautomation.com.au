<x-app-layout>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product Add</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product Add</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @if (Session::has('msg'))
            <p class="alert alert-success">{{ Session::get('msg') }}</p>
        @endif

        <section class="woo-com">
            <div class="container">
                <div class="row">


                    <!-- left side cod editor -->


                    <div class="col-md-9">
                        <form action="{{ route('add_product') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if (isset(request()->product_edit_id))
                                @method('PUT')
                            @endif
                            <div class="add-product-details">
                                <div class="heading-woo">
                                    <h3>Add new product</h3>

                                    <div class="woform-1">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="pro_name" name="pro_name"
                                                aria-describedby="emailHelp"
                                                value="@isset($pro){{ $pro->product_name }}@endisset"
                                                placeholder="Product Name">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="text-top border-bottom">
                                <h6>Product Description</h6>
                            </div>
                            <textarea class="form-control product_description" name="pro_desc" id="{{ Str::random(40) }}">
                                                @isset($pro)
{{ $pro->product_description }}
@endisset
                               </textarea>

                            <div class="new-form mb">

                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="exampleFormControlInput1" class="form-label">SKU</label>

                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name="sku"
                                            value="@isset($pro){{ $pro->sku }}@endisset"
                                            placeholder="SKU">
                                    </div>
                                </div>

                            </div>

                            <div class="new-form mb">

                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="exampleFormControlInput1" class="form-label">Categories:</label><br>

                                        <div class="row">
                                            @isset($all_cat)
                                                @foreach ($all_cat as $all_c)
                                                    <div class="col-xs-2">
                                                        <a
                                                            href="{{ route('product-category', ['category' => $all_c->page_slug]) }}">{{ $all_c->page_title }}</a>
                                                        @isset($all_subcat)
                                                            @foreach ($all_subcat as $all_s)
                                                                <a
                                                                    href="{{ route('product-category', ['category' => $all_c->page_slug, 'sub-category' => $all_s->page_slug]) }}">{{ $all_s->page_title }}</a>
                                                            @endforeach
                                                        @endisset
                                                    </div>
                                                @endforeach
                                            @endisset

                                        </div>


                                    </div>


                                </div>
                            </div>

                            <div class="woo-product-description my-5 scolpu">
                                <div class="text-top border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <h6>Product Data --</h6>
                                        </div>

                                        <div class="col-md-8">
                                            <select class="form-control" aria-label="Default select example"
                                                id="select_product_type" name="select_product_type">
                                                <option value="Simple Product"
                                                    @isset($pro){{ $pro->product_type == 'Simple Product' ? 'selected' : '' }}@endisset>
                                                    Simple Product</option>
                                                <option value="Variable Product"
                                                    @isset($pro){{ $pro->product_type == 'Variable Product' ? 'selected' : '' }}@endisset>
                                                    Variable Product</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="add-media-2" id="simple-product"
                                    style="@isset($pro){{ $pro->product_type == 'Simple Product' ? 'display:block' : 'display:none' }}@endisset">
                                    <div class="new-form mb-4">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="exampleFormControlInput1" class="form-label">Regular Price
                                                    ($)</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Regular Price">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="new-form mb-4">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="exampleFormControlInput1" class="form-label">Sale Price
                                                    ($)</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Sale Price">
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <div class="add-media-2" id="variable-product"
                                    style="@isset($pro){{ $pro->product_type == 'Variable Product' ? 'display:block' : 'display:none' }}@endisset">
                                    <div class="text-right">
                                        <button type="button" onclick="addVariant()" class="btn btn-info"
                                            value="Add Variant"><i class="fas fa-plus"></i>&nbsp;Add Additional
                                            Informations</button>

                                    </div>

                                    @isset($add_info)
                                        @foreach ($add_info as $add)
                                            <div class='card text-center mt-4 border border-primary'
                                                style='border-width:5px'>
                                                <div class='card-header'>Enter Additional Informations</div>
                                                <div class='card-body'>
                                                    <input type='text' class='form-control' placeholder='Field Name'
                                                        name="variant_name[]" value="{{ $add->variant_names }}"><br>
                                                    <input type='text' class='form-control' placeholder='Field Value'
                                                        name="variant_price[]" value="{{ $add->variant_prices }}"><br>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endisset



                                    <div id="newAdd"></div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-3 mt-5">
                        <div class="woo-product-description prod-img">
                            <div class="text-top border-bottom">
                                <h6>Product image</h6>
                            </div>
                            <div class="drag-drop">
                                <div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="preview-zone hidden">
                                                        <div class="box box-solid">
                                                            <div class="box-header with-border">
                                                                <div><b>Preview</b></div>
                                                            </div>
                                                            <div class="box-body"></div>
                                                        </div>
                                                    </div>
                                                    @if (isset($pro))
                                                        <img src="product_images/{{ $pro->product_image }}"
                                                            id="product_image_preview" alt="Product Image"
                                                            width="100%">
                                                    @else
                                                        <img src="" id="product_image_preview"
                                                            alt="Product Image" width="100%">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="product_image"
                                                    name="pro_image" accept="image/*">
                                                <label class="custom-file-label" for="product_image">Choose Product
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="woo-product-description prod-img mt-5">
                            <div class="text-top border-bottom">
                                <h6>Product Categories</h6>
                            </div>

                            <div class="drag-drop ">
                                <div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="height: 450px; overflow-y: scroll;">
                                                    <div class="form-group">

                                                        @foreach ($cat as $c)
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="pro_category[]" value="{{ $c->id }}"
                                                                    id="flexCheckDefault"
                                                                    @isset($categories){{ in_array($c->id, $categories) ? 'checked' : '' }}@endisset />
                                                                <label class="form-check-label"
                                                                    for="flexCheckDefault"><b>{{ $c->page_title }}</b></label>
                                                            </div>

                                                            @foreach ($subcat as $sub)
                                                                @if ($sub->parent_id == $c->id)
                                                                    <div class="form-check ml-3">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" name="pro_subcategory[]"
                                                                            value="{{ $sub->id }}"
                                                                            id="flexCheckDefault"
                                                                            @isset($subcategories){{ in_array($sub->id, $subcategories) ? 'checked' : '' }}@endisset />
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault">{{ $sub->page_title }}</label>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        @endforeach


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="woo-product-description prod-img mt-5">
                            <div class="text-top border-bottom">
                                <h6>Product Gallery</h6>
                            </div>

                            <div class="drag-drop">
                                <div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">

                                                    <div class="preview-zone hidden">
                                                        <div class="box box-solid">
                                                            <div class="box-header with-border">
                                                                <div><b>Preview</b></div>
                                                                <p><span id="total-images">0</span> File(s) Selected
                                                                </p>
                                                            </div>
                                                            <div class="box-body"></div>
                                                        </div>
                                                    </div>

                                                    <div id="product_images_preview">
                                                        @isset($product_gallery)
                                                            @foreach ($product_gallery as $pr_gal)
                                                                <img src="{{ asset('product_images/' . $pr_gal->images) }}"
                                                                    width="50px" />
                                                            @endforeach

                                                        @endisset

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                    name="product_images[]" id="product_images" accept="image/*"
                                                    multiple />
                                                <label class="custom-file-label" for="product_image">Choose Product
                                                    Images</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        @if (request()->product_edit_id)
                            <button class="btn btn-outline-primary w-50" name="update" type="submit"
                                formaction="{{ route('update_product', ['id' => encrypt($pro->id)]) }}">Update
                                Product</button>
                        @else
                            <button class="btn btn-outline-success w-50" name="add" type="submit">Add
                                Product</button>
                        @endif

                    </div>
                </div>
            </div>
            </form>
        </section>
    </div>
</x-app-layout>
