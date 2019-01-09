@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="container">
                    <h3>{{ $post->title }}</h3>
                    <div style="float:left">访问次数：{{ $post->visited_number }}</div>
                    <div style="float:right">--{{ $post->user->name }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection