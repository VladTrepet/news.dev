<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Category;

use Carbon\Carbon;

class SinglePageController extends Controller
{
    public function getSinglePage($id){

        $news = News::find($id);

        if(!$news){
            abort(404);
        }

        if(url()->previous() != url()->current()){
            $news->views +=1;
            $news->save();
        }

        $today = Carbon::today('Europe/London');
        $now = Carbon::now('Europe/London');
        $yesterday = Carbon::yesterday('Europe/London');


        $header_news =[
          'slider_news'=>News::where('date',$today)->where('date_timestamp' ,'>=', $now->timestamp - 43200)->get(),
          'popular_news'=>News::where('date',$today)->orderBy('views','desc')->limit(9)->get()
        ];

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
            'footer_news'=>$footer_news,
            'news'=>$news
        ];


        return view('single.singlePage',$data);
    }
}
