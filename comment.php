  <?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='Comments';
 include('include/header.php');

  ?>
  <div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
         
          <li class="breadcrumb-item active">All Jobs</li>
        </ul>       
  </div>



  <div style=" width: 75%; margin-left: 20%; margin-top: 1%">


      <table class="table table-bordered">
        <tr>
          <th>Id</th>
            <th>Name</th>
              <th>Email</th>
                <th>Description</th>
                <th>Delete</th>
        </tr>
  <?php
 include('db/connection.php');
 

  $query=mysqli_query($conn,"select * from comment ");

 while ($row=mysqli_fetch_array($query)) {
  
  ?>
		  <tr>
        <td><?php echo $row['id'];?></td>
         <td><?php echo $row['name'];?></td>
          <td><?php echo $row['email'];?></td>
           <td><?php echo $row['comment'];?></td>
           <td><a class="btn btn-danger" href="comment_delete.php?del=<?php echo $row['id'];?>">Delete</a></td>
      </tr>
      <?php } ?>
</table>


		
  </div>




  <?php
 include('include/footer.php');

  ?>
