<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ServiceListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
      $title = "Tous Les Services";
			$services = Service::with('user')->latest()->get();
			$categories = Category::all();
      return view('serviceListings.index')->with(['services'=>$services, 'title'=>$title, 'categories'=>$categories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
			$title = 'Postez un Service';
			$categories = Category::all();

      return view('serviceListings.create')->with(['title'=>$title, 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
		{
			// Validate the incoming request data
			$validatedData = $request->validate([
				'title' => 'required|string|max:100',
				'description' => 'required',
				'price' => 'required',
				'author_bio' => 'required',
				'address' => 'required',
				'phone_number' => 'required',
				'category_id' => 'required',
				'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
			]);

			// $filenameToStore = 'noimage.jpg';

			// if ($request->hasFile('cover_image')) {
			// 		$file = $request->file('cover_image');
			// 		$filenameToStore = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . 'service' . time() . '.' . $file->getClientOriginalExtension();
			// 		$file->storeAs('public/cover_images', $filenameToStore);
			// }

			$service = new Service;
			$service->user_id = auth()->user()->id;
			$service->title = $validatedData['title'];
			$service->slug = Str::slug($validatedData['title'], '-');
			$service->description = $validatedData['description'];
			$service->price = $validatedData['price'];
			$service->author_bio = $validatedData['author_bio'];
			$service->address = $validatedData['address'];
			$service->phone_number = $validatedData['phone_number'];
			$service->category_id = $validatedData['category_id'];

			$service->save();

			if ($request->hasFile('cover_image')) {
				$file = $request->file('cover_image');
				$imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . 'service' . time() . '.' . $file->getClientOriginalExtension();

				Storage::disk('public')->put(
						$imageName,
						file_get_contents($request->file('cover_image')->getRealPath())
				);
				$service -> cover_image = $imageName;
				$service -> save();
		}

			return redirect('/services')->with('success', 'Service ajouté avec succès');
		}

    /**
     * Display the specified resource.
     */
    // public function show(Service $service)
		public function show($slug)
    {

			$service = Service::where('slug', $slug)->first();
			$categories = Category::all();
			$title = $service->title;
			return view('serviceListings.detail')->with(['service'=>$service, 'categories'=>$categories, 'title'=>$title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
