<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\blog_categories;
use App\Models\blog_content;
use App\Models\blog_relate_tags;


class BlogController extends BaseController
{

    function onLoadBlog() {

    }

    function onLoadPage() {
      return view('frontend.blog');
    }

    function onLoadBlogs() {
      return view('frontend.blogs');
    }

    function onLoadTest() {
      return view('frontend.test');
    }

    function index(){
      $blog = blog_content::get();
      dd($blog);



      return view('frontend.softwaredev');
    }

}
