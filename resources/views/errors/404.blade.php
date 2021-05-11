@extends ('layout')

@section('header')
@section('title', '404')
@endsection

@section('content')
<img class="middenfoto" src="img\codebackground.jpg">
<div class="tekstvak1">
    <h1>Whoops!</h1>
    <h2 style="opacity: 0.5">404 Error<h2>
    <p style="font-size: 70%;"> The page you are trying to reach could not be found,
        click the button below to go back to the previous page.<p>
    <button class="button button1" onclick="location.href = '{{ url()->previous() }}';">Go Back</button>
    @section('title', __('Not Found'))
    @section('code', '404')
    @section('message', __('Not Found'))
</div>
@endsection


