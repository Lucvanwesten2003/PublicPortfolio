@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Create Grade</h1>
        <hr>
        <div class="vraag1">
            <form method="POST" action="/grades">
                @csrf
                <label for="blok">Blok:</label><br>
                <input type="text" id="blok" name="blok" value=" {{ old('blok') }}"><br>
                @error('blok')
                <p style="color: red;">{{ $errors->first('blok') }}</p>
                @enderror
                <label for="excerpt">Course name:</label><br>
                <input type="text" id="course_name" name="course_name" value=" {{ old('course_name') }}"><br>
                @error('course_name')
                <p style="color: red;">{{ $errors->first('course_name') }}</p>
                @enderror
                <label for="body">EC:</label><br>
                <input type="text" id="EC" name="EC" value=" {{ old('EC') }}"><br><br>
                @error('EC')
                <p style="color: red;">{{ $errors->first('EC') }}</p>
                @enderror
                <label for="body">Best grade:</label><br>
                <input type="text" id="best_grade" name="best_grade" value=" {{ old('best_grade') }}"><br><br>
                @error('best_grade')
                <p style="color: red;">{{ $errors->first('best_grade') }}</p>
                @enderror
                <input type="submit" value="Submit">
            </form>
        </div>

    </div>
@endsection
