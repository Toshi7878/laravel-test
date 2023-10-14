<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    //
    public function index(){
        $view = view('index');

        // クエリビルダー

        return $view;
    }

    public function one(){
        $view = view('one');
        $view->sub_title = 'サブタイトル';
        $users = DB::table('users')->get();
        print_r($users);
        $view->now_date = date('Y年m月d日 H時i分s秒');
        $view->index = 3;
        $view->array = ['らっぱ','たぬき','きつね','ねこ'];
        $view->object = [
            'orange' => 'みかん',
            'apple' => 'りんご',
            'banana' => 'バナナ',
            'peach' => 'もも'
        ];
        // return $view;
    }

    public function two(){
        $view = view('two');
        $view->sub_title = 'サブタイトル';
        $view->now_date = date('Y年m月d日 H時i分s秒');
        $view->index = 3;
        $view->array = ['らっぱ','たぬき','きつね','ねこ'];
        $view->object = [
            'orange' => 'みかん',
            'apple' => 'りんご',
            'banana' => 'バナナ',
            'peach' => 'もも'
        ];
        return $view;
    }

    public function three(){
        $view = view('three');
        $view->sub_title = 'サブタイトル';
        $view->now_date = date('Y年m月d日 H時i分s秒');
        $view->index = 3;
        $view->array = ['らっぱ','たぬき','きつね','ねこ'];
        $view->object = [
            'orange' => 'みかん',
            'apple' => 'りんご',
            'banana' => 'バナナ',
            'peach' => 'もも'
        ];
        return $view;
    }

}
