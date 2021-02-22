@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Articles</h1>
        <hr>
        <div class="vraag1">
            @foreach($articles as $article)
                <p><a href="{{ $article->path() }}">{{ $article->title}}</a></p>
            <p style="width: 80%; word-wrap:break-word; display:inline-block;">{{ $article->body}}</p>
                @endforeach
        </div>

    </div>
@endsection
