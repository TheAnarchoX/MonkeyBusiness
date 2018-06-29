<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Activity;
use App\News;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$recentNews = News::query();
    	$recentNews->orderBy('publication_date');
    	$recentNews->take(5)->get();

    	
        return view('frontend.landing');
    }
}
