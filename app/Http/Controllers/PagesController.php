<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller{

    public function getIndex() {

      $post = Post::orderBy('created_at','desc')->limit(4)->get();
      return view('pages.welcome')->withPost($post);
     }

    public function getAbout() {

        $first = "anushika";
        $last = "anand";
        $full = $first . " " . $last;

        return view('pages.about')->withfullname($full);
    }

    public function getContact() {

      return  view('pages.contact');
    }

}
