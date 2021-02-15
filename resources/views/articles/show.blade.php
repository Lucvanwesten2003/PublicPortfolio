@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Article</h1>
        <hr>
        <div class="vraag1">

                <p>{{ $article->title}}</p>
                <p style="width: 80%; word-wrap:break-word; display:inline-block;">{{ $article->body}}</p>
        </div>

        </div>
@endsection
