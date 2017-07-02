<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function getAddNews(){
        return view('admin.addNews');
    }
    public function postAddNews(Request $request){
        $input = $request->except('_token');

        $input['date'] = Carbon::today('Europe/London');
        $input['date_timestamp'] = Carbon::today('Europe/London')->timestamp;
        $input['created_at'] = Carbon::now('Europe/London');


        $file = $request->file('img');
        $input['img'] = $file->getClientOriginalName();
        $file->storeAs(
            'images', $input['img'],'public'
        );


        $news = new News();
        $news->fill($input);

        if($news->save()){
            return redirect()->route('index');
        }





    }
}
