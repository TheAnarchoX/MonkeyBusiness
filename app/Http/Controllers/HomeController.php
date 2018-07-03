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
    	$recentNews = News::query()->orderByDesc('publication_date')->take(5)->get();

	    $recentActivity = Activity::query()->orderByDesc('event_date')->take(5)->get();

    	$home =[
    		'recentNews' => $recentNews,
		    'recentActivity' => $recentActivity
	    ];
        return view('frontend.landing', compact('home'));
    }
}
