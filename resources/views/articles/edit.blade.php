@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Edit Article</h1>
        <hr>
        <div class="vraag1">
            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" value="{{ $article->title }}"><br>
                <label for="excerpt">Excerpt:</label><br>
                <input type="text" id="excerpt" name="excerpt" value="{{ $article->excerpt }}"><br>
                <label for="body">Body:</label><br>
                <input type="text" id="body" name="body" value="{{ $article->body }}"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <div class="vraag1">
            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>

    </div>
@endsection
