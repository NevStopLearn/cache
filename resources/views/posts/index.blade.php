@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="container">

                        @foreach($posts as $post)
                            <h3><a href="{{ route('posts.show',['id'=>$post->id]) }}">{{ $post->title }}</a></h3>
                            <hr>
                            @endforeach
                        <div class="text-center">{{ $posts->links() }}</div>

                </div>
            </div>
        </div>
    </div>
@endsection