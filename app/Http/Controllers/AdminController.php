<?php

namespace App\Http\Controllers;

use App\Models\FrontController;
use Illuminate\Http\Request;
use App\Models\Menu;

class AdminController extends Controller
{
    public function CategoryListPage()
    {
        $secondmenu = Menu::where('stage', '2')->get();
        $thirdmenu = Menu::where('stage', '3')->get();
        return view('admin.all_category', compact('secondmenu', 'thirdmenu'));
    }
    public function GetAddCategory(Request $request)
    {
        $request->validate(
            [
            'page_slug'=>'unique:menu_page_table,page_slug'    
                ],
                [
                    'page_slug.unique'=>'This is already exists'
                    ]
            
            );
        
        $res = new Menu;
        $res->page_title = $request->input('page_title');
        $res->page_slug = $request->input('page_slug');
        $res->stage = $request->input('stage');
        $res->is_parrent = $request->input('is_parrent');
        $res->parent_id = $request->input('parent_id');
        $res->page_seotitle = $request->input('page_seotitle');
        $res->page_seo_description = $request->input('page_seo_description');
        if ($request->hasfile('page_banner')) {
            $file = $request->file('page_banner');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/', $filename);
            $res->page_banner = $filename;
        }
        $res->save();
        $request->session()->flash('msg', 'Category Add');
        return back();
    }
    public function GetEditCategory(Request $request)
    {
        $id = $request->input('id');
        $res = Menu::find($id);
        $res->page_title = $request->input('page_title');
        $res->page_slug = $request->input('page_slug');
        $var = $request->input('is_parrent');
        if($var == "0"){
            $res->stage = "3";
        }else{
            $res->stage = "2";
        }
        $res->is_parrent = $request->input('is_parrent');
        $res->parent_id = $request->input('parent_id');
        $res->page_seotitle = $request->input('page_seotitle');
        $res->page_seo_description = $request->input('page_seo_description');
        if ($request->hasfile('page_banner')) {
            $file = $request->file('page_banner');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/', $filename);
            $res->page_banner = $filename;
        }
        $res->update();
        $request->session()->flash('msg', 'Category Update');
        return back();
    }
    
    
}