@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$article->title}}</div>
                    <div class="panel-body">
                        {!! $article->body !!}
                    </div>
                    <button class="btn btn-success pull-right" type="submit">修改文章</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        .panel-body img{
            width: 100%;
        }
    </style>
@endsection

