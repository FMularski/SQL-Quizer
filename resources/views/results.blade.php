@extends('layout.base')

@section('content')
    <div class="quiz-header">
        <h1> Results </h1>
    </div>
    <section class="jumbotron">
        <form action="{{action('QuizController@index')}}"> 
            @for ($i = 0; $i < 5; $i++)
                @if ($flags[$i] == 1) 
                <h5 class="alert correct"><span class="badge badge-pill badge-primary">Task {{$i + 1}}</span>Correct! 
                @else <h5 class="alert incorrect"><span class="badge badge-pill badge-primary">Task {{$i + 1}}</span> Wrong!<br/>
                Your answer: {{$answers[$i]}}<br/>
                Correct answer: {{$corrects[$i]}}
                @endif</h5>
            @endfor

            <button class="submit-btn" type="submit">Back to Home</button> 
        </form>
    </section>
@stop