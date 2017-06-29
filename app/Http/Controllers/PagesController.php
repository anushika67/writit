<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

    public function getIndex() {
      return view('pages.welcome');
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
