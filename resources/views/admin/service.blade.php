@extends('layouts.admin')

@section('content')

    <div class="wrapper container-fluid">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Icon</th>
                <th>Текст</th>
                <th>Создано</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ Html::link(route('service.edit', ['id' => $service->id]), $service->name) }}</td>
                    <td>{{ $service->icon }}</td>
                    <td>{{ $service->text }}</td>
                    <td>{{ $service->created_at }}</td>
                    <td>
                        {{ Form::open(['route' => ['service.destroy', $service->id], 'method' => 'delete']) }}
                        {{ Form::submit('Удалить', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ Html::link(route('service.create'), 'Новый сервис', ['class' => 'btn btn-info']) }}
    </div>

@endsection