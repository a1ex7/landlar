<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioStoreRequest;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();

        return view('admin.portfolios', ['title' => 'Портфолио', 'portfolios' => $portfolios]);
    }

    public function create()
    {

        $portfolio = new Portfolio();

        return view('admin.portfolio.add', ['title' => 'Добавление портфолио', 'portfolio' => $portfolio]);
    }

    public function store(Portfolio $portfolio, PortfolioStoreRequest $request)
    {

        $input = $request->all();

        if ($request->hasFile('images')) {

            $file = $request->file('images');
            $input['images'] = $file->getClientOriginalName();
            $file->move(public_path('assets/img'), $input['images']);

        }

        $portfolio->fill($input);
        $portfolio->save();

        return redirect()->route('portfolio.index')->with('status', 'Портфолио добавлено');

    }

    public function edit(Portfolio $portfolio) {

        return view('admin.portfolio.edit', ['title' => 'Редактирование портфолио - '.$portfolio->name, 'portfolio' => $portfolio]);
    }

    public function update(Portfolio $portfolio, PortfolioStoreRequest $request) {

        $input = $request->all();

        if ($request->hasFile('images')) {

            $file = $request->file('images');
            $input['images'] = $file->getClientOriginalName();
            $file->move(public_path('assets/img'), $input['images']);

        }

        $portfolio->fill($input);
        $portfolio->update();

        return redirect()->route('portfolio.index')->with('status', 'Портфолио \''.$portfolio->name.'\' изменено');
    }

    public function destroy(Portfolio $portfolio){

        $portfolio->delete();

        return redirect()->route('portfolio.index')->with('status', 'Портфолио удалено');
    }
}
