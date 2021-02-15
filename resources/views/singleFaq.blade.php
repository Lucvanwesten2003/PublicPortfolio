@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Frequently Asked Questions</h1>
        <hr>
        <div class="vraag1">
            <ul>
                    <p class="vraag1tekst">{{ $faq->question }}</p>
                    <li class="vraag1tekstA">{{ $faq->answer }}</li>
            </ul>

        </div>
@endsection
