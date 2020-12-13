
<?php
session_start();
if(!isset($_SESSION['logged_in'])){
  header('location: login.php');
  exit;
}
?>
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
<div class="container-fluid">
      <div class="jumbotron m-5">
          <h1 class="text-center"> MY BOOKS </h1>
      </div>

    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pull-right">
            <button class="btn btn-success" id="show_add" style="float:right"> Add a New Book</button>
          </div>
<div class="form-inline" id="link_add">

  <div class="form-group col-md-3">
    <input type="text" name="title" value="" id="title" placeholder="Title" class="form-control" required>

  </div>
  

  <div class="form-group col-md-3">
    <input type="text" name="author" value="" id= "author" placeholder="Author" class="form-control" required>

  </div>
  <div class="form-group col-md-3">
    <input type="text" name="publisher" value="" id="publisher" placeholder="Publisher" class="form-control" required>

  </div>

  <div class="form-group col-md-3">
<button type="button" name="add" class="btn btn-outline-success mx-3 px-4" id="add_new"> Add</button>
 <button type="button" name="add" class="btn btn-outline-danger" href="javascript:void(0);" id="cancel"
 onclick="$('#link_add').slideUp(500); $('#show_add').show(500);"> Cancel</button>
 </div>

</div>

        </div>

      </div>

<div class="row">
<div class="col-md-12">
  <div class="" id="records_content">
    <!-- KJO DO MANIPULOHET ME ANE TE JAVASCRIPT DOM-->
  </div>

  <br>
  <div class="col-md-offset-1 col-md-10" id="table_content">

  </div>
</div>
</div>
    </div>

<script src="scripts/app.js"></script>
</body>
</html>