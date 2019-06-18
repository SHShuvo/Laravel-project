<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title='Passing data from controllers to index with object creating way';
      //return view('pages.index',compact('title'));
      return view('pages.index')->with('title',$title);
    }

    public function about(){
      $title='Passing data from controllers to About';
      return view('pages.about')->with('tit',$title);
    }

    public function services(){
      $data=array(
        'title' => 'Services',
        'services'=>['web design','progamming','seo']
      );
      return view('pages.services')->with($data);
    }
}
