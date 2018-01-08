<?php

namespace App\Http\Controllers;

use App\Mail\UserMessage;
use App\Page;
use App\People;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function show (Request $request) {

        if ($request->isMethod('post')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'email' => 'Поле :attribute должно быть адресом электронной почты'
            ];

            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'text' => 'required',
            ], $messages);

            $data = $request->all();

            $adminMail = env('MAIL_ADMIN');

            Mail::to($adminMail)->send(new UserMessage($data));

        }

        $pages = Page::all();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $peoples = People::all();

        return view('index', compact('pages', 'services', 'portfolios', 'peoples'));
    }
}
