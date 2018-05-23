@extends('layouts.app')

@section('content')

     <h1>新規タスク作成ページ</h1>

<div class="row">
    <div class="col-xs-6">
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

    <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('title') !!}
    </div>
        
    <div class="form-group">
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}
    </div>

        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    
　　</div>
</div>
<!-- ここにページ毎のコンテンツを書く -->

@endsection