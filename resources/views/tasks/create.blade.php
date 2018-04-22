@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-lg-6 col-sm-8">

            {!! Form::model($task, ['route' => 'tasks.store'])  !!}
    
                <div class="form-group">
                    {!! Form::label('content','タスク内容') !!}
                    {!! Form::text('content',null,['class'=>'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('status','ステータス') !!}
                    {!! Form::text('status',null,['class'=>'form-control']) !!}
                </div>
                {!! Form::submit('作成',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
