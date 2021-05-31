@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Create Grade</h1>
        <hr>
        <div class="vraag1">
            <form method="POST" action="{{ $grade->path() }}">
                @csrf
                @method('PUT')
                <label for="blok">Blok:</label><br>
                <input type="text" id="blok" name="blok" value=" {{ $grade->blok  }}"><br>
                @error('blok')
                <p style="color: red;">{{ $errors->first('blok') }}</p>
                @enderror
                <label for="course_name">Course name:</label><br>
                <input type="text" id="course_name" name="course_name" value=" {{ $grade->course_name }}"><br>
                @error('course_name')
                <p style="color: red;">{{ $errors->first('course_name') }}</p>
                @enderror
                <label for="EC">EC:</label><br>
                <input type="text" id="EC" name="EC" value=" {{ $grade->EC }}"><br>
                @error('EC')
                <p style="color: red;">{{ $errors->first('EC') }}</p>
                @enderror
                <label for="best_grade">Best grade:</label><br>
                <input type="text" id="best_grade" name="best_grade" value=" {{ $grade->best_grade }}"><br><br>
                @error('best_grade')
                <p style="color: red;">{{ $errors->first('best_grade') }}</p>
                @enderror
                <input type="submit" value="Submit">
            </form>
        </div>


    </div>
@endsection
