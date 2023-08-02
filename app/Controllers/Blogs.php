<?php

namespace App\Controllers;

class Blogs extends BaseController
{
    public function top5()
    {
        return view('top_5_blogs');
    }

    public function allBlogs()
    {
        return view('all_blogs');
    }

    public function createABlog()
    {
        return view('create_blog');
    }
}
