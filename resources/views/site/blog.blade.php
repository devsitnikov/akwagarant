@extends('layouts.site')

@section('content')
<div class="main-header blog-header" style="background-image: url('{{asset('img/headbg.jpg')}}')">
<div class="content">
    <h1 class="header-title">Наши статьи</h1>
</div>
</div>

    <div class="blog-wrapper">
        <div class="article-list">
            @foreach($articles as $article)
            <div class="article">
                <div class="article-header">{{$article->name}}</div>
                <div class="article-preview">
                    <?= strip_tags(mb_strimwidth($article->content,0,500,'...')); ?>
                </div>
                <div class="article-footer">
                    <div class="date">{{$article->updated_at}}</div>
                    <a href="{{route('article',[$article->slug])}}">Читать далее...</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="category-list">
            <span>Категории</span>
            <ul>
                @foreach ($categories as $category)
                <li><i class="far fa-folder"></i> {{$category->name}}</li>
                    @endforeach
            </ul>
        </div>
    </div>

@endsection