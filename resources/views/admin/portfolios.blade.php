@extends('layouts.admin')

@section('content')

    <div class="wrapper container-fluid">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Image</th>
                <th>Фильтр</th>
                <th>Создано</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($portfolios as $portfolio)
                <tr>
                    <td>{{ $portfolio->id }}</td>
                    <td>{{ Html::link(route('portfolio.edit', ['id' => $portfolio->id]), $portfolio->name) }}</td>
                    <td>{!! Html::image('assets/img/'.$portfolio->images, '' , ['class'=>'img-rounded', 'width' => 180]) !!}</td>
                    <td>{{ $portfolio->filter }}</td>
                    <td>{{ $portfolio->created_at }}</td>
                    <td>
                        {{ Form::open(['route' => ['portfolio.destroy', $portfolio->id], 'method' => 'delete']) }}
                        {{ Form::submit('Удалить', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ Html::link(route('portfolio.create'), 'Новое портфолио', ['class' => 'btn btn-info']) }}
    </div>

@endsection