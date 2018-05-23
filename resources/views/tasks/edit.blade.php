@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

 <div class="row">
        <div class="col-xs-12"></div>
        <div class="col-sm-offset-2 col-sm-6"></div>
        <div class="col-md-offset-2 col-sm-6"></div>
        <div class="col-lg-offset-3 col-lg-3"></div>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}<!-- ここにページ毎のコンテンツを書く -->

</div>
    </div>

@endsection