<?php
include('header.php');
include('dbcon.php');
?>
    <h1>hello</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add students</button>
<form action="insert_data.php" method="post">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
        <!---form-->
        <div class="row">
  <div class="col">
    <input type="text" name="f_name" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" name="l_name" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col">
    <input type="number" name="age" class="form-control" placeholder="age" aria-label="age">
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="add_students" value="ADD"> 
      </div>
    </div>
  </div>
</div>
</form>



    <table class="table container">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">f_name</th>
      <th scope="col">l_name</th>
      <th scope="col">age</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
$query="SELECT * FROM  `students`" ;
$result=mysqli_query($connection,$query);
if(!$result){
    die("not conected");
}
else{
    while($row=mysqli_fetch_Assoc($result)){
       ?>
     
  <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['f_name'] ?></td>
  <td><?php echo $row['l_name'] ?></td>
  <td><?php echo $row['age'] ?></td>
  <td><a href= "update_data.php? id=<?php echo $row['id'] ?>" class="btn btn-success" >Update </a>  </td>
  <td><a href="#" class="btn btn-danger">Delete </a> </td>
</tr>
<?php
    }
}

?>
  
   
  </tbody>
</table>
