<?php
// include('security.php');
// include('includes/header.php'); 

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 



?>

<!-- Modal -->
<div class="modal fade" id="facultyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Faculty</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

     <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
     <div class="form-group">
                <label> Name </label>
                <input type="text" name="faculty_name" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label>Designation</label>
                <input type="text" name="faculty_designation" class="form-control" placeholder="Enter Designation" required>
                
            </div>
            <div class="form-group">
                <label>Desciption</label>
                <input type="text" name="faculty_description" class="form-control" placeholder="Enter Description" required>
            </div>
            <div class="form-group">
                <label>Upload Images </label>
                <input type="file" name="file" id="faculty_image" class="form-control"required >
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save_faculty" class="btn btn-primary">Save changes</button>
      </div>
   </form>
    </div>
  </div>
</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Counsellor
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#facultyModal">
              Add 
            </button>
    </h6>
  </div>

  <div class="card-body">

  <?php
       if(isset($_SESSION['success']) && $_SESSION['success']!='')
           {

            echo '<h2 class="bg-primary text-white">' .$_SESSION['success'].' </h2>';
             unset($_SESSION['success']);

           }

           if(isset($_SESSION['status']) && $_SESSION['status']!='')
           
           {

            echo '<h2 class="bg-danger text-white">' .$_SESSION['status'].' </h2>';
             unset($_SESSION['status']);

           }
             ?>

    <div class="table-responsive">
    
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Name </th>
            <th>Designation</th>
            <th>Description </th>
            <th>Image</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
          

    <tr>
        <td>1</td>
        <td>Counsellor 1</td>
        <td>BCA</td>
        <td>I am computer science teachers</td>
        <td>image</td>
        <td><a href="#" class="btn btn-success"> EDIT</a></td>
        <td><a href="#" class="btn btn-danger"> DELETE</a></td>

        
    </tr>
     
        </tbody>
      </table>
      
    </div>
  </div>
</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
