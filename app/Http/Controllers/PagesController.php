<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * Return all static pages:
		 *  about,contact page
     */
		public function home(): View
    {
			$title = 'Accueil';
			$services = Service::all();
			$categories = Category::all();
      	return view('home')->with(['title' => $title, 'services' => $services, 'categories' => $categories]);
    }

    public function about(): View
    {
			$title = 'A Propos';
			$services = Service::all();
			$categories = Category::all();
      	return view('pages.about')->with(['title' => $title, 'services' => $services, 'categories' => $categories]);
    }

		public function contact(): View
    {
			$title = 'Contact';
			$services = Service::all();
			$categories = Category::all();
      return view('pages.contact')->with(['title' => $title, 'services' => $services, 'categories' => $categories]);
    }

}
