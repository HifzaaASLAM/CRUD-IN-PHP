<?php
include('dbcon.php');
include('header.php');
?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query="SELECT * FROM  `students` where `id`='$id'" ;
    $result=mysqli_query($connection , $query);
    if(!$result){
        die("not conected");
    }
    else{
       $row = mysqli_fetch_assoc($result);
                print_r($row);
       
}
}
?>
<?php
if(isset($_POST['update_students'])){


    if(isset($_GET['id_new'])){
        $idnew=$_GET['id_new'];
    }
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $age=$_POST['age'];
    $query="UPDATE `students` set `f_name`='$f_name',`l_name`='$l_name',`age`='$age' where `id` = '$idnew'";
$result=mysqli_query($connection,$query);
if(!$result){
    die("not connected...");
}
else{
    header('Location:index.php?update_msg=successfuly ypdated');
}
}

?>
<form action="update_data.php?id_new=<?php  echo $id;?>" method="post">
<div class="row">
  <div class="col">
    <input type="text" name="f_name" class="form-control" placeholder="First name" aria-label="First name" value=" <?php   echo $row['f_name'] ?>">
  </div>
  <div class="col">
    <input type="text" name="l_name" class="form-control" placeholder="Last name" aria-label="Last name" value=" <?php   echo $row['l_name'] ?>">
  </div>
  <div class="col">
    <input type="number" name="age" class="form-control" placeholder="age" aria-label="age" value=" <?php   echo $row['age'] ?>" >
  </div>
</div>
<input type="submit" class="btn btn-primary" name="update_students" value="update">
</form>