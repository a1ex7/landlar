<div class="form-group">
    {{ Form::label('name', 'Название:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Введите название портфолио']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('filter', 'Фильтр:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::text('filter', old('filter'), ['class' => 'form-control', 'placeholder' => 'Введите фильтр']) }}
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