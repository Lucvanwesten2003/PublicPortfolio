@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Edit a FAQ</h1>
        <hr>
        <div class="vraag1">
            <form method="POST" action="/faq/{{ $faq->id }}">
                @csrf
                @method("PUT")
                <label for="Question">Question:</label><br>
                <input type="text" id="question" name="question" value="{{ $faq->question }}"><br>
                <label for="Answer">Answer:</label><br>
                <input type="text" id="answer" name="answer" value="{{ $faq->answer }}"><br><br>
                <input type="submit" value="Submit">
            </form>

        </div>

        <div class="vraag1">
            <form method="POST" action="/faq/{{ $faq->id }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
@endsection
