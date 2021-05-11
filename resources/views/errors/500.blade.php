@extends ('layout')

@section('header')
@section('title', '500')
@endsection

@section('content')
<img class="middenfoto" src="img\codebackground.jpg">
<div class="tekstvak1">
    <h1>Whoops!</h1>
    <h2 style="opacity: 0.5">500 Error<h2>
    <p style="font-size: 70%;">There is something wrong on our end (internal server error). You can try refreshing the page or come back later.<p>
        <p style="font-size: 70%"> Press te button below to go back to the previous page. </p>
    <button class="button button1" onclick="location.href = '{{ url()->previous() }}';">Go Back</button>
    @section('title', __('Not Found'))
    @section('code', '500')
    @section('message', __('Not Found'))
</div>
@endsection
