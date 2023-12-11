<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>View List</title>
  </head>
  <body>
    <?php include('Header_add.php');?>

 <form class="d-flex mt-2 p-2" id="searchForm">
    <input class="form-control w-75" type="search" placeholder="Search" aria-label="Search"  id="getName" name="name" autocomplete="off">
  </form>
<!----- Table if desktop mode ------->
<div class="table-responsive">
  <table id="dataTable" class="table table-hover w-100">
    <thead>
      <tr>
        <th scope="col">Customer Name</th>
        <th scope="col">Email</th>
        <th scope="col">Date Arrival</th>
        <th scope="col">Time Arrival</th>
        <th scope="col">Therapist Agent</th>
        <th scope="col">Type of Services</th>
        <th scope="col">Type of Massage</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody id="displayData">
      <!-- Your table body content goes here -->
    </tbody>
  </table>
</div>
<!----- Table if mobile mode ------->
    <!--table  id="dataTable" class="table table-hover w-100">
  <thead>
    <tr>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
   <tbody id="displayData">

  </tbody>
</table-->   
<!----- Table if mobile mode ------->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script>
$(document).ready(function(){
   $('#getName').on("keyup", function(){
     var getName = $(this).val();
     $.ajax({
       method:'POST',
       url:'search.php',
       data:{name:getName},
       success:function(response)
       {
            $("#dataTable tbody").html(response);
       } 
     });
     });
     });
 
$(document).ready(function(){
    loadData(); // Load data when the page is ready
$('#dataTable').on('click', '.delete-btn', function(){
        var idToDelete = $(this).data('id');
        deleteData(idToDelete);
    });
    
  $('#dataTable').on('click', '.update-btn', function(){
        var idToUpdate = $(this).data('id');
       var date = window.open("update_me.php");
        
        if (newName !== null) {
            updateData(idToUpdate, date);
        }
    });  
    
});

function loadData() {
    $.ajax({
        url: 'main_func.php',
        type: 'GET',
        success: function(data) {
            $('#dataTable tbody').html(data);
        }
    });
}

function deleteData(id) {
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {id: id},
        success: function(response) {
            if (response.success) {
                loadData(); // Reload data after successful deletion
            } else {
                alert('Error deleting record');
            }
        }
    });
}


</script>
  </body>
</html>