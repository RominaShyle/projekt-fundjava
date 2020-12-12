<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php require 'includes/links.php';?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
    <style>
        img.card-img-top{
            max-height: 520px!important;

        }
        </style>
</head>
<body>
<?php require 'includes/navbar.php'; ?>

<div class="container my-5">
    <center>
        <h2>My List of Books</h2>
    </center>
    <div class="text-right">
        <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#book_modal"> Add a new book</button>
    </div>
    <div class="row my-5">
    <div class="card-group">
  <div class="card px-3">
    <img class="card-img-top" src="images/hp1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Harry Potter and The Sorcerers Stone</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. <a href="#">Read More...</a></p>
      <div class="form-inline form-group row">
<div class="col-md-2"></div>   
<div class="col-md-4">
<button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#book_modal">Show</button>

    </div>
    <div class="col-md-4">
    <button class="btn btn-outline-danger btn-block">Delete</button>
    </div>


    <div class="col-md-2"></div>   

   

</div>     </div>
  </div>
  <div class="card px-3">
    <img class="card-img-top" src="images/hp-7.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Harry Potter and The Deathly Hallows</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. <a href="#">Read More...</a></p>
<div class="form-inline form-group row">
<div class="col-md-2"></div>   
<div class="col-md-4">
<button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#book_modal">Show</button>

    </div>
    <div class="col-md-4">
    <button class="btn btn-outline-danger btn-block">Delete</button>
    </div>


    <div class="col-md-2"></div>   

   

</div>    </div>
  </div>
  <div class="card px-3">
    <img class="card-img-top" src="images/hp-4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Harry Potter and The Goblet of Fire</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. <a href="#">Read More...</a></p>
      <div class="form-inline form-group row">
<div class="col-md-2"></div>   
<div class="col-md-4">
<button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#book_modal">Show</button>

    </div>
    <div class="col-md-4">
    <button class="btn btn-outline-danger btn-block">Delete</button>
    </div>


    <div class="col-md-2"></div>   

   

</div>     </div>
  </div>
</div>
    </div>
    <div class="row my-5">
    <div class="card-group">
  <div class="card px-3">
    <img class="card-img-top" src="images/hp1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Harry Potter and The Sorcerers Stone</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. <a href="#">Read More...</a></p>
      <div class="form-inline form-group row">
<div class="col-md-2"></div>   
<div class="col-md-4">
<button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#book_modal">Show</button>

    </div>
    <div class="col-md-4">
    <button class="btn btn-outline-danger btn-block">Delete</button>
    </div>


    <div class="col-md-2"></div>   

   

</div>     </div>
  </div>
  <div class="card px-3">
    <img class="card-img-top" src="images/hp-7.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Harry Potter and The Deathly Hallows</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. <a href="#">Read More...</a></p>
<div class="form-inline form-group row">
<div class="col-md-2"></div>   
<div class="col-md-4">
<button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#book_modal">Show</button>

    </div>
    <div class="col-md-4">
    <button class="btn btn-outline-danger btn-block">Delete</button>
    </div>


    <div class="col-md-2"></div>   

   

</div>    </div>
  </div>
  <div class="card px-3">
    <img class="card-img-top" src="images/hp-4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Harry Potter and The Goblet of Fire</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. <a href="#">Read More...</a></p>
      <div class="form-inline form-group row">
<div class="col-md-2"></div>   
<div class="col-md-4">
    <button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#book_modal">Show</button>

    </div>
    <div class="col-md-4">
    <button class="btn btn-outline-danger btn-block">Delete</button>
    </div>


    <div class="col-md-2"></div>   

   

</div>     </div>
  </div>
</div>
    </div> 
</div>


<!--Modal -->
<!-- Modal -->
<div class="modal fade" id="book_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Show Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" >
  </div>
  <div class="form-group">
    <label for="summary">Summary</label>
    <textarea name="summary" id="summary" cols="30" rows="10"  class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" >
  </div>
  <div class="form-group">
    <label for="pages">No. of Pages</label>
    <input type="text" class="form-control" id="pages" >
  </div>
  <div class="form-group">
    <label for="publisher">Publisher</label>
    <input type="text" class="form-control" id="publisher" >
  </div>
  <div class="form-group text-right">

 
  <button type="submit" class="btn btn-primary">Save</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>