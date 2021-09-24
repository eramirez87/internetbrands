<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    public function index()
    {
        $params = ['items' => Items::getAll()];
        return view("welcome",$params);
    }

    public function create()
    {
        return view("item.create");
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $_Items = new Items();
        $_Items->saveItem($data);
        return redirect()->route("Item.index");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $_Items = new Items();
        $params = ['item' => $_Items->getById($id)];
        return view("item.edit",$params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['_token','_method']);
        $_Items = new Items();
        $_Items->editById($id, $data);
        return redirect()->route("Item.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $_Items = new Items();
        $_Items->dropById($id);
        return redirect()->route("Item.index");
    }
}
