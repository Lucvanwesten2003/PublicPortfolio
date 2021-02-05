<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>
    <link rel="stylesheet"  type="text/css" href="css\style.css">
</head>
<body>

<div class="topnav">

  <a href="/">Home </a>

    <div class="topnav-right">
       <a href="profiel">Profiel</a>
      <a href="dashboard">Dashboard</a>
      <a href="profession">Profession</a>
      <a href="motivation">My motivation</a>
      <a href="faq" class="active">FAQ</a>
    </div>


  </div>
  <img class="middenfoto" src="img\codebackground.jpg">
  <div class="tekstvak1">

    <h1 class="titel">Frequently Asked Questions</h1>
    <hr>
    <div class="vraag1">
        <ul>
            @foreach($posts as $post)
                <p class="vraag1tekst">{{ $post->question }}</p>
                <li class="vraag1tekstA">{{ $post->answer }}</li>
            @endforeach
        </ul>

    </div>


</body>
</html>
