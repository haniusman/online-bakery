<?php

namespace App\Http\Controllers;
use App\Item;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $items = Item::all();
       return view('adminpage', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.adminpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */
    public function store(Request $request)
    {
        $item = new Item;
        $item->CatId = $request->CatId;
        $item->iname = $request->iname;
        $item->size=$request->size;
        $item->stock=$request->stock;
        $item->price=$request->price;

        if($file = $request->file('file'))
        {
          $name = $file->getClientOriginalName();
          $file->move('Images',$name);
          $item->path = $name;
        }

        $item->save();
        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $items = Item::all();
        return view('bake',compact('items'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cakes_page()
    {
      $items = Item::all();
        return view('/layouts.temp',compact('items'));
    }
    public function cupcakes_page()
    {
      $items = Item::all();
        return view('/cupcake',compact('items'));
    }
    public function brownies_page()
    {
      $items = Item::all();
        return view('/brownies',compact('items'));
    }
    public function bread_page()
    {
      $items = Item::all();
        return view('/bread',compact('items'));
    }
    public function cookies_page()
    {
      $items = Item::all();
        return view('/cookies',compact('items'));
    }


}
