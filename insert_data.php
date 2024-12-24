<?php
include('dbcon.php');

if(isset($_POST['add_students'])){
   $f_name=$_POST['f_name'];
   $l_name=$_POST['l_name'];
   $age=$_POST['age'];
   if($f_name==" "|| empty($f_name)){
echo"error...";
   }
   else{
$query="INSERT INTO  `students` (`f_name`,`l_name`,`age`) VALUES('$f_name','$l_name','$age')";
$result=mysqli_query($connection,$query);
if(!$result){
die("query failed");
}
else{
    header('Location:index.php?insert_ms=data inserted');
}

}
}

?>