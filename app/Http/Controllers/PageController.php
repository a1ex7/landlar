<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($alias) {
        $page = Page::where('alias', $alias)->first();

        return view('page', ['page' => $page]);
    }
}
