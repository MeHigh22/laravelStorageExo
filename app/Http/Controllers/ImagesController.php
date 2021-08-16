<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function indexadmin(){
        $images = Image::all();
        return view("admin.welcome", compact('images'));
    }

    public function create(){
        return view("admin.crud.create");
    }

    public function store(Request $request){

        $store = new Image();
        $store->src = $request->file('src')->hashName();
        $store->save();
        Storage::put("public/img", $request->file("src"));
    }

    public function edit($id){
        $edit = Image::find($id);
        return view("admin.crud.edit", compact('edit'));
    }

    public function update(Request $request, $id){

        $update = Image::find($id);
        Storage::delete("public/img" .$update->src);
        $update ->src = $request->file('src')->hashName();
        $update->save();
        Storage::put("public/img". $request->file("src"));

        return redirect("/admin");
    }

    public function destroy($id){
        $destroy = Image::find($id);
        Storage::delete("public/img" .$destroy->src);
        $destroy->delete();
        return redirect("/admin");
    }
}

