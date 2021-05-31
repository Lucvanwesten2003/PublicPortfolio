@extends ('layout')

@section('header')
@endsection

@section('content')
    <img class="middenfoto" src="/img\codebackground.jpg">
    <div class="tekstvak1">

        <h1 class="titel">Grades</h1>
        <hr>
        <div class="vraag1">

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
                        @if(Auth::check())
                        <td>
                            <button onclick="location.href = '{{ url('grades/'.$grade->id.'/edit')}}'">Edit</button>
                        <form method="POST" action="{{ $grade->path() }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
@endsection
