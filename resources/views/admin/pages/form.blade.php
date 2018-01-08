<div class="form-group">
    {{ Form::label('name', 'Название:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Введите заголовок материала']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('alias', 'Псевдоним:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::text('alias', old('alias'), ['class' => 'form-control', 'placeholder' => 'Введите псевдоним']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('text', 'Текст:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::textarea('text', old('text'), ['id' => 'ck-editor', 'class' => 'form-control', 'placeholder' => 'Введите текст статьи']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('images', 'Изображение:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::file('images', [
            'class' => 'filestyle',
            'data-buttonText' => 'Выберите изображение',
            'data-buttonName'=>'btn-primary',
            'data-placeholder'=>'Файл не выбран'
        ]) }}
    </div>
</div>