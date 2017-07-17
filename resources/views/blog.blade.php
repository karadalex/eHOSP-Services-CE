@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1> @lang('nav.Blog') </h1>
            <div class="container">
                @foreach ($posts as $post)
                    <a href="{{url('blog/'.kebab_case(title_case($post->title)))}}">
                        <h3> {{$post->title}} </h3>
                    </a>
                    <p style="word-wrap: break-word;">
                        {{$post->description}}
                    </p>
                    <br>
                @endforeach
                
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
