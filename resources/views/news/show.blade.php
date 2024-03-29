@extends('layouts.app')
<body class="theme">
    <header class="header-blog" style="background-image: url('/images/header.png');">
        <div class="container">
            <div class="d-flex header-nav">
                <a class="nav-icon-logo" href="/"><i class="icon ion-md-list"></i></a>
                <ul class="nav">
                    <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin">Conteúdo</a></li>
                </ul>
            </div>
            <div class="header-content">
                <h1 class="header-title">{{ $news->title }}</h1>
            </div>
        </div>
    </header>
</body>
@section('content')
<div class="container news-content">
    <div class="news-feed">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                    	<div class="header-news">
                        	<span class="post-card-tags"><i class="icon ion-md-pricetag"></i>Tags: {{ $news->category }}</span>
                            @if(isset($news->author))
                        	   <span class="post-card-author"><i class="icon ion-md-contact"></i>Autor: {{ $news->author }}</span>
                            @endif
                        </div>
                        <p class="card-text">{{ $news->body }}</p>
                        @if(isset($news->keywords))
                            <span class="card-keywords"><b>Palavras-chave: </b>{{ $news->keywords }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection