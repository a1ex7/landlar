@extends('layouts.admin')


@section('content')

    <div class="wrapper container-fluid">
        {{ Form::model($page, ['route' => 'pages.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}

        @include('admin.pages.form')

        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                {{ Form::submit('Создать', ['class' => 'btn btn-info']) }}
            </div>
        </div>

        {{ Form::close() }}
    </div>

@endsection