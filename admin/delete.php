<?php

include("db.php");
if(isset($_GET['delete'])){

    $id= $_GET['delete'];
  delete_data($con, $id);

}

// delete data query
function delete_data($con, $id){
   
    $query="DELETE from adata WHERE id=$id";
    $exec= mysqli_query($con,$query);

    if($exec){
      header('location:blood_search.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($con);
      echo $msg;
    }
}
?>