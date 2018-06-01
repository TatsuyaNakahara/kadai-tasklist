@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <p>ステータス: {{ $task->status }}</p>
    <p>{{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id]) !!}
  <div class="container">
    <div class="row">
        <div class="col-xs-12">col-xs-12</div>
        <div class="col-sm-8 col-sm-offset-2">col-sm-8 col-sm-offset-2</div>
        <div class="col-md-8 col-md-offset-2">col-md-8 col-md-offset-2</div>
        <div class="col-lg-6 col-lg-offset-3">col-lg-6 col-lg-offset-3</div>
             {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
               {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
    </div>
  </div>
@endsection