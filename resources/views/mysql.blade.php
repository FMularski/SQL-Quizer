@extends('layout.base')

@section('content')
    <div class="quiz-header">
        <h1>MySQL Quiz <img src="img/mysql.svg"/></h1>
    </div>
    <section class="jumbotron">
        <form>
            <h4 class="alert alert-primary"><span class="badge badge-pill badge-primary">Task 1</span> task here</h4>
            <div class="form-group shadow-textarea">
                <textarea name="answer1" class="form-control z-depth-1" rows="3" placeholder="Write your query here..."></textarea>
            </div> 
            <h4 class="alert alert-primary"><span class="badge badge-pill badge-primary">Task 2</span> task here</h4>
            <div class="form-group shadow-textarea">
                <textarea name="answer2" class="form-control z-depth-1" rows="3" placeholder="Write your query here..."></textarea>
            </div>
            <h4 class="alert alert-primary"><span class="badge badge-pill badge-primary">Task 3</span> task here</h4>
            <div class="form-group shadow-textarea">
                <textarea name="answer3" class="form-control z-depth-1" rows="3" placeholder="Write your query here..."></textarea>
            </div>  
            <h4 class="alert alert-primary"><span class="badge badge-pill badge-primary">Task 4</span> task here</h4>
            <div class="form-group shadow-textarea">
                <textarea name="answer4" class="form-control z-depth-1" rows="3" placeholder="Write your query here..."></textarea>
            </div>  
            <h4 class="alert alert-primary"><span class="badge badge-pill badge-primary">Task 5</span> task here</h4>
            <div class="form-group shadow-textarea">
                <textarea name="answer5" class="form-control z-depth-1" rows="3" placeholder="Write your query here..."></textarea>
            </div>

            <button class="submit-btn" type="submit">Submit</button> 
        </form>
    </section>
@stop