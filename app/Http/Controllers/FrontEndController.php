<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        $images = Image::all();
        return view("welcome", compact('images'));
    }
}
