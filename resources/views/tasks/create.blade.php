@extends('layouts.master')

@section('content')

<h1>Добавление новой задачи</h1>
<p class="lead">Заполните поля, чтобы создать новую задачу.</p>
<hr>

@include('partials.alerts.errors')

{!! Form::open([
    'route' => 'tasks.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Заголовок:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Описание:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Создать новую задачу', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop