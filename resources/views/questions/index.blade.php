<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Questions</title>
  </head>
  <body>

        <div class="header">
        <br>
            <center><h2>LMS Quiz board</h2></center>
        </div>

        <br>
        
        <div class="container">
        <a href="/questions/create" class="btn btn-primary">Add New question</a>
        </div>

        <br>

        <div class="container">
            <div class="question-table">
                
                
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Question</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($questions as $question)
                    <tr>
                    <th scope="row">{{ $question->id }}</th>
                    <td>{{ $question->name }}</td>
                    <td>
                        <a href="#"><button type="edit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button></a>
                        <a href="#"><button type="delete" class="btn btn-danger">Delete</button></a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </div>
        </div>
</table>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" class="form-edit">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Question</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="name" value="" rows="3"></textarea>
        </div>

            <!-- option 1 -->
                <div class="form-group">
                    <div class="col-md-8">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" name="option1" value="" placeholder="Option 1">
                        </div>
                    </div>
                </div>

            <!-- option 2 -->
                <div class="form-group">
                    <div class="col-md-8">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Option 2</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="colFormLabel" name="option2" value=""  placeholder="Option 2">
                            </div>
                        </div>
                </div>

            <!-- option 3 -->
                <div class="form-group">
                    <div class="col-md-8">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Correct option</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="colFormLabel" name="correctoption" value="" placeholder="Correct Option">
                            </div>
                        </div>
                </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>