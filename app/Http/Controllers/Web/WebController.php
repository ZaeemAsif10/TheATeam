<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Blog_slider;
use App\Models\News;
use App\Models\News_slider;
use App\Models\Slider;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('web-side.index', compact('sliders'));
    }

    public function about()
    {
        return view('web-side.about');
    }

    public function project()
    {
        return view('web-side.project');
    }

    public function alNoor()
    {
        return view('web-side.al_noor');
    }

    public function alJalil()
    {
        return view('web-side.al-jalil');
    }

    public function westMarina()
    {
        return view('web-side.west-marina');
    }

    public function alBari()
    {
        return view('web-side.al-bari');
    }

    public function westMarinaExecutive()
    {
        return view('web-side.west-marina-exicutive');
    }

    public function westMarinaCotalages()
    {
        return view('web-side.west_marina_cotalages');
    }

    public function marinaSports()
    {
        return view('web-side.marina-sports');
    }

    public function Blog()
    {
        $blogs = Blog::all();
        $blog_slider = Blog_slider::all();
        return view('web-side.blog', compact('blogs','blog_slider'));
    }

    public function News()
    {
        $news = News::all();
        $news_slider = News_slider::all();
        return view('web-side.news', compact('news','news_slider'));
    }

    public function Gallery()
    {
        return view('web-side.gallery');
    }

    public function Contact()
    {
        return view('web-side.contact');
    }

    public function annualConference()
    {
        return view('web-side.annual_conference');
    }

    public function dubaiEvents()
    {
        return view('web-side.dubai_events');
    }
}
