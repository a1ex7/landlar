@extends('layouts.admin')


@section('content')

    <div class="wrapper container-fluid">
        {{ Form::model($portfolio, ['route' => ['portfolio.update', 'id' => $portfolio->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}

        @include('admin.portfolio.form')

        <div class="form-group">
            {{ Form::label('images', 'Изображение:', ['class' => 'col-md-2 control-label']) }}
            <div class="col-md-8">
                {!! Html::image('assets/img/'.$portfolio->images, 'Portfolio Image' , ['class'=>'img-rounded', 'height' => 200]) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                {{ Form::submit('Обновить', ['class' => 'btn btn-info']) }}
            </div>
        </div>

        {{ Form::close() }}
    </div>

@endsection