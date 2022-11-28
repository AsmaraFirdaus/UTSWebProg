<?php

namespace App\Http\Controllers;

use App\Models\publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('publisher.index', compact('categories', 'publishers'));
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $categories = Category::all();
        $publisher = Publisher::find($id);
        if (!isset($publisher)) return abort(404);

        return view('publisher.detail', compact('categories', 'publisher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function show(publishers $publishers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function edit(publishers $publishers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publishers $publishers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function destroy(publishers $publishers)
    {
        //
    }
}
