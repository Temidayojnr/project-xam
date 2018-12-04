<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>LMS course Quiz</title>
  </head>
  <body>
    <center><h1>Answer the following questions</h1></center>
    <div class="container">
    <form action="" class="form" id="quiz_form">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Question</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

    <!-- option 1 -->
        <div class="form-group">
            <div class="col-md-8">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Option 1</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="colFormLabel" placeholder="Option 1">
                </div>
            </div>
        </div>

    <!-- option 2 -->
        <div class="form-group">
            <div class="col-md-8">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Option 2</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colFormLabel" placeholder="Option 2">
                    </div>
                </div>
        </div>

    <!-- option 3 -->
        <div class="form-group">
            <div class="col-md-8">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Correct option</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colFormLabel" placeholder="Correct Option">
                    </div>
                </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>  
    
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>