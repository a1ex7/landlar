<?php

namespace App\Http\Controllers;


use App\Http\Requests\ServiceStoreRequest;
use App\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('admin.service', ['title' => 'Сервис', 'services' => $services]);
    }

    public function create()
    {

        $service = new Service();

        return view('admin.service.add', ['title' => 'Добавление сервиса', 'service' => $service]);
    }

    public function store(Service $service, ServiceStoreRequest $request)
    {

        $input = $request->all();

        $service->fill($input);
        $service->save();

        return redirect()->route('service.index')->with('status', 'Сервис добавлен');

    }

    public function edit(Service $service) {

        return view('admin.service.edit', ['title' => 'Редактирование сервиса - '.$service->name, 'service' => $service]);
    }

    public function update(Service $service, ServiceStoreRequest $request) {

        $input = $request->all();

        $service->fill($input);
        $service->update();

        return redirect()->route('service.index')->with('status', 'Сервис \''.$service->name.'\' изменен');
    }

    public function destroy(Service $service){

        $service->delete();

        return redirect()->route('service.index')->with('status', 'Сервис удален');
    }
}
