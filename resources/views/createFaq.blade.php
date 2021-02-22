@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Create a FAQ</h1>
        <hr>
        <div class="vraag1">
            <form method="POST" action="/faq">
                @csrf
                <label for="Question">Question:</label><br>
                <input type="text" id="question" name="question" value="{{ old('question') }}"><br>
                @error('question')
                <p style="color: red;">{{ $errors->first('question') }}</p>
                @enderror
                <label for="Answer">Answer:</label><br>
                <input type="text" id="answer" name="answer" value="{{ old('answer') }}"><br><br>
                @error('answer')
                <p style="color: red;">{{ $errors->first('answer') }}</p>
                @enderror
                <input type="submit" value="Submit">
            </form>

        </div>
@endsection
