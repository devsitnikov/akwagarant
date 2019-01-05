@extends('layouts.site')

@section('content')
    <div class="main-header blog-header" style="background-image: url('{{asset('img/headbg.jpg')}}')">
        <div class="content">
            <h1 class="header-title">{{$name}}</h1>
        </div>
    </div>

<div class="article-body">
    {!! $content !!}
</div>
@endsection