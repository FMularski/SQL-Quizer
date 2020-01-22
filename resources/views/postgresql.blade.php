@extends('layout.base')

@section('content')
    <div class="quiz-header">
        <img src="img/postgresql.png"/></h1>
    </div>
    <section class="jumbotron">
        <form>
            @for ($i = 0; $i < 5; $i++)
                <h6 class="alert alert-primary"><span class="badge badge-pill badge-primary">Task {{$i + 1}}</span>{{$texts[$i]}}</h6>
                <img src="{{$paths[$i]}}" alt="">
                <div class="form-group shadow-textarea">
                    <textarea name="answer{{$i + 1}}" class="form-control z-depth-1" rows="3" placeholder="Write your query here..."></textarea>
                </div> 
            @endfor

            <button class="submit-btn" type="submit">Submit</button> 
        </form>
    </section>
@stop