<!DOCTYPE html>
<html lang="en">
<head>

    
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <title>Quiz</title>
</head>
    <body>

    <br>

    <center><h3>Course quiz</h3></center>
    <br>
    <hr>

        <div class="container">
            <a href="/questions" class="btn btn-primary">Quiz board</a>
        </div>

        <br>

        <div class="container">
            @foreach($questions as $question)
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-6">{{ $question->name }}</h1>
                    <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
                </div>
            </div>


                <!-- options -->
                @foreach($question->options as $option)
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio{{ $option->id }}" name="customRadio{{ $option->id }}" class="custom-control-input">
                        <label class="custom-control-label display-5" for="customRadio{{ $option->id }}">{{ $option->text }}</label>
                    </div>  
                @endforeach
            <br>

                <br>

                <hr>

            @endforeach

                    <a href="#" class="btn btn-primary">Submit</a>
                <br>
            </div>
                        
            <br>

        </div>

        <br>




            

            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>