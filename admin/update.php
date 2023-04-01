<?php

include('db.php');
// $sql = "SELECT * FROM `adata` where id=$id";
// $result = mysqli_query($con,$sql);

if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($con, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($con,$id);
    
    
} 
function edit_data($con, $id)
{
 $query= "SELECT * FROM adata WHERE id= $id";
 $exec = mysqli_query($con, $query);
//  $row= mysqli_fecth_assoc($exec);
 $row = mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($con, $id){

      $hname= $_POST['hname'];
      $city = $_POST['city'];
      $bgroup= $_POST['bgroup'];
      $ablood = $_POST['ablood'];
      $cno = $_POST['cno'];

      $query="UPDATE adata 
            SET hname='$hname',
                city= '$city',
                bgroup= '$bgroup',
                ablood= '$ablood',
                cno='$cno' WHERE id=$id";

      $exec= mysqli_query($con,$query);
  
      if($exec){
         header('location:blood_search.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($con);
         echo $msg;  
      }
}

?>