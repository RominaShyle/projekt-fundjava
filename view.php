<?php

require 'includes/db.php';

$result = $conn->query('SELECT * FROM books ORDER BY id ');

?>


<table class="table table-bordered">
    <tr class="info">
        <th>ID</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>PUBLISHER</th>
        <th>ACTION</th>
    </tr>


    <?php 
    
    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){
            echo '
            <tr>
            <td>'.$row["id"].'</td>
            <td>'.$row["title"].'</td>
            <td>'.$row["author"].'</td>
            <td>'.$row["publisher"].'</td>
            <td>
            <button id="'.$row['id'].'" class = "edit btn btn-info">Edit </button>
            <button id="'.$row['id'].'" class = "delete btn btn-danger">Delete </button>

            </td>

            </tr>';
        }

        echo '</table>';
        
        
    }?>

</table>
<div class="modal" tabindex="-1" role="dialog" id ="delete_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete book!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are You sure you want to delete this book?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="deletebtn">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

$('.delete').click(function(){

    var id = $(this).attr('id');
   
    $('#delete_modal').modal('show');

    $('#deletebtn').click(function(){


    $.ajax({
        url: 'delete.php',
        type: 'post',
        data: {id:id},
        success: function(data){
            $('#records_content').fadeOut(1000).html(data);
            $.get('view.php', function(data){
                $('#table_content').html(data)
            })
        }
    })
    $('#delete_modal').modal('hide');
    });

});


$('.edit'). click(function(){

    var id = $(this).attr('id');
    $('#show_add').hide(500);


    $.ajax({

        url: "edit.php",
        type: "post",
        data: {id:id},
        success: function(data){
            $('#link_add').html(data);
            $('#link_add').show();
        }
    })
})

</script>