@extends ('layout')

@section('header')
@endsection

@section('content')
  <img class="middenfoto" src="img\codebackground.jpg">
  <div class="tekstvak1">
    <h1 class="titel">Study Monitor</h1>

    <table>
        <tr>
          <th>Blok</th>
          <th>Cursus</th>
          <th>EC</th>
          <th>Cijfer</th>
        </tr>
            @foreach($grades as $grade)
                <tr>
                <td>{{ $grade->blok }}</td>
                <td>{{ $grade->course_name }}</td>
                <td @if($grade->best_grade >= $grade->lowest_passing_grade)
                    style="background-color: green"
                    @else style="background-color: red"
                @endif>{{ $grade->EC}}</td>
                <td>{{ $grade->best_grade}}</td>
                </tr>
        @endforeach
        <tr>
            <td>Total EC</td>
            <td></td>
            <td>{{ $totalEC }}</td>
            <td></td>
        </tr>
      </table>

      <h1>Study Guide</h1>
      <hr>
      <p><a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">HZ Course and Examination Regulations (CER)</p>
        <p><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf">Implementation Regulations (IR) of the HBO-ICT programme</p>
          <p><a href="https://learn.hz.nl/my">Learn environment</p>
            <p><a href="https://teams.microsoft.com/_#/school//?ctx=teamsGrid">Teams environment of the study programme</p>
              <p><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Page in MyHZ with your study progress</p>
                <p><a href="https://github.com/Lucvanwesten2003/Lucvanwesten2003.github.io">Github enivronment of the study programme</p>

      </div>
@endsection
