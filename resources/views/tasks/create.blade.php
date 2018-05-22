@extends('layouts.app')

@section('content')

     <h1>新規タスク作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
<!-- ここにページ毎のコンテンツを書く -->

@endsection