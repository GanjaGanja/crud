@extends('layouts.master')

@section('content')

<h1>Список задач</h1>
<p class="lead">Вот список всех ваших задач. <a href="{{ route('tasks.create') }}">Добавить ещё одну?</a></p>
<hr>

@foreach($tasks as $task)
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description}}</p>
    <p>
        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Просмотреть</a>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Обновить</a>
    </p>
    <hr>
@endforeach

@stop