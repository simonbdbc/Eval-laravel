<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Validator;

class PhotoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin', ['photos' => Photo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'legende'=>'required|string|min:2',
            'description'=> 'required|string'
        ]);
// dd($validator);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        } else {

            $photo = new Photo([
                'legende' => $request->get('legende'),
                'description'=> $request->get('description'),
                'url'=> 'http://lorempixel.com/800/400/cats/Faker'
            ]);
            $photo->save();
            return redirect()->route('admin')->with('success', 'Stock has been added');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('edit', ['photo' => Photo::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'legende'=>'required|string|min:2',
            'description'=> 'required|string'
        ]);
        // dd($validator);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        } else {
            $photo = Photo::find($id);
            // dd($photo);
            $photo->legende = $request->legende;
            $photo->description = $request->description;

            $photo->save();
            return redirect()->route('admin');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        // return redirect()->route('liste');

        return redirect()->route('admin')->with('success', 'Item Has Been Delete');
    }
}
