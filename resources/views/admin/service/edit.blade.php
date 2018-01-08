@extends('layouts.admin')


@section('content')

    <div class="wrapper container-fluid">
        {{ Form::model($service, ['route' => ['service.update', 'id' => $service->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}

        @include('admin.service.form')

        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                {{ Form::submit('Обновить', ['class' => 'btn btn-info']) }}
            </div>
        </div>

        {{ Form::close() }}
    </div>

@endsection