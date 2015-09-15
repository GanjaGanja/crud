@extends('layouts.master')

@section('content')

<h1>Редактирование "{{ $task->title }}"</h1>
<p class="lead">Отредактируйте поля и обновите задачу или <a href="{{ route('tasks.index') }}">вернитесь к списку задач.</a></p>
<hr>

@include('partials.alerts.errors')

{!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['tasks.update', $task->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Заголовок:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Описание:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Обновить задачу', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop