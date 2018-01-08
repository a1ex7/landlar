<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagesStoreRequest;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('admin.pages', ['title' => 'Страницы материала', 'pages' => $pages]);
    }

    public function create()
    {

        $page = new Page();

        return view('admin.pages.add', ['title' => 'Добавление материала', 'page' => $page]);
    }

    public function store(Page $page, PagesStoreRequest $request)
    {

        $input = $request->all();

        if ($request->hasFile('images')) {

            $file = $request->file('images');
            $input['images'] = $file->getClientOriginalName();
            $file->move(public_path('assets/img'), $input['images']);

        }

        $page->fill($input);
        $page->save();

        return redirect()->route('pages.index')->with('status', 'Страница добавлена');

    }

    public function edit(Page $page) {

        return view('admin.pages.edit', ['title' => 'Редактирование материала - '.$page->name, 'page' => $page]);
    }

    public function update(Page $page, PagesStoreRequest $request) {

        $input = $request->all();

        if ($request->hasFile('images')) {

            $file = $request->file('images');
            $input['images'] = $file->getClientOriginalName();
            $file->move(public_path('assets/img'), $input['images']);

        }
        
        $page->fill($input);
        $page->update();

        return redirect()->route('pages.index')->with('status', 'Страница \''.$page->name.'\' изменена');
    }

    public function destroy(Page $page){

        $page->delete();

        return redirect()->route('pages.index')->with('status', 'Страница удалена');
    }
}
