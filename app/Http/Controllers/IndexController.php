<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use App\News;
use App\Category;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function getHome(){

        $today = Carbon::today('Europe/London');
        $now = Carbon::now('Europe/London');
        $yesterday = Carbon::yesterday('Europe/London');
        $week_ago = Carbon::today('Europe/London')->subDays(7);

        $header_news =[
            'slider_news'=>News::where('date',$today)->where('date_timestamp' ,'>=', $now->timestamp - 43200)->get(),
            'popular_news'=>News::where('date',$today)->orderBy('views','desc')->limit(9)->get()
        ];

        $content_news = [
            'culture_news'=>News::where('date',$today)->where('category','Culture')->orderBy('views','desc')->limit(4)->get(),
            'science_news'=>News::where('date',$today)->where('category','Science')->orderBy('views','desc')->limit(2)->get(),
            'politics_news'=>News::where('date',$today)->where('category','Politics')->orderBy('views','desc')->limit(5)->get(),
            'sport_news'=>News::where('date',$today)->where('category','Sport')->orderBy('views','desc')->limit(5)->get(),
            'other_news'=>News::where('date',$today)->where('category','Other')->orderBy('views','desc')->limit(6)->get(),
            'week_news'=>News::where('date','>=',$week_ago)->orderBy('views','desc')->limit(4)->get()
        ];


        $leftSiteBar_news = [
            'recent_news'=>News::where('date',$yesterday)->orderBy('views','desc')->limit(4)->get(),
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
          'content_news'=>$content_news,
          'categories'=>$categories,
          'leftSiteBar_news'=>$leftSiteBar_news,
          'rightSiteBar_news'=>$rightSiteBar_news,
          'footer_news'=>$footer_news
        ];

        return view('home.index',$data);
    }

    public function contact(Request $request){


        $validator = Validator::make($request->all(), [
            'name'=>'max:100|unique:contacts,name',
            'email'=>'email|required|unique:contacts,email',
            'message'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous() . '#footer')
                ->withErrors($validator)
                ->withInput();
        }

        $input = [
            'name'=>$request->name,
            'email'=>$request->email,
            'text'=>$request->message,
        ];

        $contact = new Contact;
        $contact->fill($input);
        if($contact->save()){
            return redirect()->route('index');
        }


    }
}
