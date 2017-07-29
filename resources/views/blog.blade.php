@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1> @lang('nav.Blog') </h1>
            <div class="container">
                @foreach ($posts as $post)
                    <div class="col-md-8 col-md-offset-1">
                        <a href="{{url('blog/'.kebab_case(title_case($post->title)))}}">
                            <h3> {{$post->title}} </h3>
                        </a>

                        <?php
                        $date = new DateTime($post->created_at);
                        ?>
                        <i style="font-size: 12px" class="pull-right">{{date_format($date, 'd-m-Y')}}</i>
                        <br>
                        <i style="font-size: 14px" class="pull-right">{{$post->author}}</i>
                        <br><br>

                        @isset($post->img)
                            <img src="{{ $post->img }}" alt="" style="width: 100%; height: 100%">
                        @endisset
                        
                        <p style="word-wrap: break-word;">
                            {{$post->description}}
                        </p>
                        <h6 class="pull-right">
                            <a href="{{url('blog/'.kebab_case(title_case($post->title)))}}"> Read more ... </a>
                        </h6>
                    </div>
                    <br><br>
                @endforeach
                
            </div>
            <div class="col-sm-5 col-sm-offset-4 col-xs-8 col-xs-offset-2">
                {{ $posts->links() }}
            </div>
            <br>
        </div>
    </div>
</div>
@endsection
