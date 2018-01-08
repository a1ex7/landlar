@extends('layouts.admin')

@section('content')

    <div class="wrapper container-fluid">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Alias</th>
                <th>Image</th>
                <th>Текст</th>
                <th>Создано</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ Html::link(route('pages.edit', ['id' => $page->id]), $page->name) }}</td>
                    <td>{{ $page->alias }}</td>
                    <td>{!! Html::image('assets/img/'.$page->images, '' , ['class'=>'img-rounded', 'width' => 80]) !!}</td>
                    <td>{{ $page->text }}</td>
                    <td>{{ $page->created_at }}</td>
                    <td>
                        {{ Form::open(['route' => ['pages.destroy', $page->id], 'method' => 'delete']) }}
                        {{ Form::submit('Удалить', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ Html::link(route('pages.create'), 'Новый материал', ['class' => 'btn btn-info']) }}
    </div>

@endsection