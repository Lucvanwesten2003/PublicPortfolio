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
          <th>Toets</th>
          <th>Cijfer</th>
        </tr>
        <tr>
          <td rowspan="3">1</td>
          <td>Programme and Career Orientation</td>
          <td style="background-color: orange;">2.5</td>
          <td>Assessment exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Computer Science Basics</td>
          <td style="background-color: orange;">7.5</td>
          <td>Written exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Programming Basics</td>
          <td style="background-color: orange;">5</td>
          <td>Case Study exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td rowspan="3">2</td>
          <td rowspan="2">Object Oriented Programming</td>
          <td rowspan="2" style="background-color: orange;">10</td>
          <td>Case Study</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Project</td>
          <td>-</td>

        </tr>
        <tr>
          <td>Professional Skills 1</td>
          <td style="background-color: orange;">2.5</td>
          <td>Portfolio exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td rowspan="8">3</td>
          <td rowspan="2">Framework Project 1</td>
          <td rowspan="2" style="background-color: orange;">5</td>
          <td>Portfolio exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Portfolio exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Framework development 1</td>
          <td style="background-color: orange;">5</td>
          <td>Case Study</td>
          <td>-</td>
        </tr>
        <tr>
        <tr>
          <td>Professional Working Environment</td>
          <td style="background-color: orange;">2.5</td>
          <td>Assessment</td>
          <td>-</td>
        </tr>

        <tr>
          <td rowspan="3">Professional Skills 2</td>
          <td rowspan="3" style="background-color: orange;">2.5</td>
          <td>Portfolio exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Written exam</td>
          <td>-</td>
        </tr>

        <tr>
          <td>Written exam</td>
          <td>-</td>
        </tr>

        <tr>
          <td rowspan="5">4</td>
          <td>Framework Project 2</td>
          <td style="background-color: orange;">5</td>
          <td>Portfolio exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Framework Development 2</td>
          <td style="background-color: orange;">5</td>
          <td>Portfolio exam</td>
          <td>-</td>
        </tr>

        <tr>
          <td rowspan="3">Professional Skills 3</td>
          <td rowspan="3" style="background-color: orange;">2.5</td>
          <td>Portfolio exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Written exam</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Written exam</td>
          <td>-</td>
        </tr>

        <tr>
          <td rowspan="2">Whenever</td>
          <td>HZ Personality</td>
          <td style="background-color: orange;">2.5</td>
          <td>Portfolio</td>
          <td>-</td>
        </tr>


        <tr>
          <td>IT Personality</td>
          <td style="background-color: orange;">2.5</td>
          <td>Portfolio</td>
          <td>-</td>
        </tr>

        <td style="background-color: black;"></td>
        <td style="background-color: black;"></td>
        <td style="background-color: black;"></td>
        <td style="background-color: black;"></td>
        <td style="background-color: black;"></td>
      </tr>


      <tr>
        <td rowspan="3">Totale EC</td>
        <td style="text-align:center; background-color: greenyellow;">Gehaald</td>
        <td rowspan="3" style="text-align: center;">0</td>
        <td style="background-color: black;"></td>
        <td style="background-color: black;"></td>
      </tr>

      <tr>
          <td style="text-align:center; background-color: orange;">Nog te doen</td>
          <td style="background-color: black;"></td>
          <td style="background-color: black;"></td>


        </tr>

        <tr>
          <td style="text-align:center; background-color: red;">Niet gehaald</td>
          <td style="background-color: black;"></td>
          <td style="background-color: black;"></td>

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
