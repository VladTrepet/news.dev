<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Category;

use Carbon\Carbon;

class CategoryArchiveController extends Controller
{
    public function getArchive($name){

        $today = Carbon::today('Europe/London');
        $now = Carbon::now('Europe/London');
        $yesterday = Carbon::yesterday('Europe/London');


        $header_news = [
            'slider_news'=>News::where('date',$today)->where('date_timestamp' ,'>=', $now->timestamp - 43200)->get(),
            'popular_news'=>News::where('date',$today)->orderBy('views','desc')->limit(9)->get()
        ];

        $category_news = News::where('category',$name)->orderBy('created_at','desc')->get();


        $leftSiteBar_news = [
            'recent_news'=>News::where('date',$yesterday)->limit(4)->get(),
        ];

        $rightSiteBar_news = [
            'popular_news'=>News::where('date',$today)->orderBy('views','desc')->limit(10)->get()
        ];

        $footer_news = [
            'popular_news'=>News::where('date',$today)->orderBy('views','desc')->limit(3)->get()
        ];

        $categories = Category::all();


        $data = [
            'header_news'=>$header_news,
            'categories'=>$categories,
            'leftSiteBar_news'=>$leftSiteBar_news,
            'rightSiteBar_news'=>$rightSiteBar_news,
            'category_news'=>$category_news,
            'footer_news'=>$footer_news,
        ];

        return view('archive.CategoryArchive',$data);
    }
}
