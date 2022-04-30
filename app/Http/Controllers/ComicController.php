<?php

namespace App\Http\Controllers;

use App\comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'title'=>'required|string|min:3',
            'description'=>'nullable|string',
            'thumb'=>'required|url',
            'price'=>'required|numeric|min:0',
            'series'=>'required|string|min:3',
            'sale_date'=>'required|date',
            'type'=>'required|string|min:3'
        ]);
        $data = $request->all();
        $comic = new comic;
        $comic->fill($data);
        $comic->save();

        return redirect()->route('Comic.show',$comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        try {
            $comics = comic::findOrFail($id);
        } catch (\Exception $e) {
           return view('404');
        }


        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|string|min:3',
            'description'=>'nullable|string',
            'thumb'=>'required|url',
            'price'=>'required|numeric|min:0',
            'series'=>'required|string|min:3',
            'sale_date'=>'required|date',
            'type'=>'required|string|min:3'
        ]);
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($data);
        return redirect()->route('Comic.show',$comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('Comic.index');
    }
}
