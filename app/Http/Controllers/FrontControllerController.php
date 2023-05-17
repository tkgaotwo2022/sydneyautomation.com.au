<?php

namespace App\Http\Controllers;

use App\Models\FrontController;
use Illuminate\Http\Request;
use App\Models\Menu;

class FrontControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();
        return view('website.home', compact('secondmenu', 'thirdmenu'));
    }
    public function Products()
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();
        return view('website.products', compact('secondmenu', 'thirdmenu'));
    }
    public function Support()
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();
        return view('website.support', compact('secondmenu', 'thirdmenu'));
    }
    public function About()
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();
        return view('website.about', compact('secondmenu', 'thirdmenu'));
    }
    public function Contact()
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();
        return view('website.contact', compact('secondmenu', 'thirdmenu'));
    }

    public function AccessControlSystem()
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();
        return view('website.access-control-system', compact('secondmenu', 'thirdmenu'));
    }

    public function SlidingandSwinging()
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();
        return view('website.access-control-system', compact('secondmenu', 'thirdmenu'));
    }

    public function BoomandIndustrial()
    {
        $secondmenu = Menu::where('stage', '2')->orderBy('page_title')->get();
        $thirdmenu = Menu::where('stage', '3')->orderBy('page_title')->get();
        return view('website.access-control-system', compact('secondmenu', 'thirdmenu'));
    }
}
