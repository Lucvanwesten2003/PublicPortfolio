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
                <input type="text" id="title" name="title" value=" {{ old('title') }}"><br>
                @error('title')
                <p style="color: red;">{{ $errors->first('title') }}</p>
                @enderror
                <label for="excerpt">Excerpt:</label><br>
                <input type="text" id="excerpt" name="excerpt" value=" {{ old('excerpt') }}"><br>
                @error('excerpt')
                <p style="color: red;">{{ $errors->first('excerpt') }}</p>
                @enderror
                <label for="body">Body:</label><br>
                <input type="text" id="body" name="body" value=" {{ old('body') }}"><br><br>
                @error('body')
                <p style="color: red;">{{ $errors->first('body') }}</p>
                @enderror
                <input type="submit" value="Submit">
            </form>
        </div>

    </div>
@endsection
