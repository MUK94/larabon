<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * Return all static pages:
		 *  about,contact page
     */
    public function about(): View
    {
			$title = 'A Propos';
      return view('pages.about')->with(['title' => $title]);
    }

		public function contact(): View
    {
			$title = 'Contact';
      return view('pages.contact')->with(['title' => $title]);
    }

}
