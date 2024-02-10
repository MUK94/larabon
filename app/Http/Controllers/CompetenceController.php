<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
      return view('competences.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
      $validated = $request->validate([
				'title' => 'required|string|max:100',
				'description' => 'required',
				'price' => 'required',
				'author_bio' => 'required',
				'address' => 'required',
				'phone_number' => 'required',
			]);

			$request->user()->competences()->create($validated);

			return redirect(route('competences.index'))->with('sucess', 'Successfull saved in the DB');
    }

    /**
     * Display the specified resource.
     */
    public function show(Competence $competence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competence $competence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Competence $competence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competence $competence)
    {
        //
    }
}
