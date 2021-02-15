@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Create Article</h1>
        <hr>
        <div class="vraag1">
            <form method="POST" action="/articles">
                @csrf
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" value="title"><br>
                <label for="excerpt">Excerpt:</label><br>
                <input type="text" id="excerpt" name="excerpt" value="excerpt"><br>
                <label for="body">Body:</label><br>
                <input type="text" id="body" name="body" value="body"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>

    </div>
@endsection
