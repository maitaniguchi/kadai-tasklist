@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <p>タスク内容：{{ $task->content }}</p>
    <p>ステータス：{{ $task->status }}</p>

    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除') !!}
    {!! Form::close() !!}

    <p>{!! link_to_route('tasks.index', '一覧ページへ戻る') !!}</p>
@endsection
