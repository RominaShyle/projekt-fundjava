<?php
require 'includes/db.php';

$id = $_POST['id'];

if(empty($id)){

    echo '
    <div class="text-center>" No records found </div>;';
}

$sql = 'SELECT * FROM books where id = '. $id;


$result = $conn->query($sql);


while($row = $result->fetch_assoc()){
    ?>

<div class="form-inline" id="edit_data">
    <div class="form-group col-md-3">
        <input type="text" name="title" id="title" value="<?= $row['title']?> " class="form-control" placeholder="Title">
    </div>
    <div class="form-group col-md-3">
        <input type="text" name="author" id="author" value="<?= $row['author']?> " class="form-control" placeholder="Author">
    </div>
    <div class="form-group col-md-3">
        <input type="text" name="publisher" id="publisher" value="<?= $row['publisher']?> " class="form-control" placeholder="Publisher">
    </div>
    <div class="form-group col-md-3">
<button type="button" name="update" class="update btn btn-outline-secondary mx-3" id="<?= $row['id']?>">Update</button>  
<button type="button" name="add" class="update btn btn-outline-danger" id="" href="javascript:void(0)"
onclick="$('#link_add').slideUp(); $('#show_add').show(500);"
>Cancel</button>  
</div>
</div>


<?php 
}

?>


<script>

$('.update').click(function(){
 var id = $(this).attr('id');
 var author = $('#author').val();
 var publisher = $('#publisher').val();
 var title = $('#title').val();



$.ajax({
    url:"update.php",
    type:"post",
    data: {id:id, author:author, publisher:publisher, title:title},
success : function(data,status,xhr){
    var author = $('#author').val('');
 var publisher = $('#publisher').val('');
 var title = $('#title').val('');
 $('#records_content').fadeOut(1100).html(data);
$.get("view.php", function(html){

  $('#table_content').html(html);
})
$('#records_content').fadeOut(1100).html(data);
},
complete: function(){
  $('#link_add').hide();
  $('#show_add').show(750);
}
 

})

})


</script>