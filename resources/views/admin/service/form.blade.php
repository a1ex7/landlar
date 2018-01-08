<div class="form-group">
    {{ Form::label('name', 'Название:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Введите название портфолио']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('icon', 'Иконка:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::text('icon', old('icon'), ['class' => 'form-control', 'placeholder' => 'Введите имя иконки fa']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('text', 'Текст:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::textarea('text', old('text'), ['id' => 'ck-editor', 'class' => 'form-control', 'placeholder' => 'Введите текст статьи']) }}
    </div>
</div>