<?php

include('update.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit in Database</title>

</head>

<style>
      .button {
        /* margin-left: 10%; */
        display: inline-block;
        padding: 15px 25px;
        font-size: 15px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
      }

      .button:hover {background-color: #3e8e41}

      .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
      }

   </style>

<body>
<!--====form section start====-->

<div class="user-detail">

    <div class="form-title">
    <h2>Edit Record</h2>
    
    
    </div>
 
    <p style="color:red">
    
<?php if(!empty($msg)){echo $msg; }?>
</p>
    <form method="post" action="">
            <label>Hospital Name : </label>       
            <input name="hname" required value="<?php echo isset($editData) ? $editData['hname'] : '' ?>" style="padding: 12px 20px;  box-sizing: border-box; margin-left:1.4%">
            <br> <br>
        
            <label>City : </label>
            <input name="city" required value="<?php echo isset($editData) ? $editData['city'] : '' ?>" style="padding: 12px 20px; box-sizing: border-box; margin-left:5.9%">
            <br> <br>

            <label>Blood Group : </label>    
            <input name="bgroup" required value="<?php echo isset($editData) ? $editData['bgroup'] : '' ?>" style="padding: 12px 20px; box-sizing: border-box; margin-left:2.2%">
            <br> <br>

            <label>Available Blood : </label>
            <input name="ablood" required value="<?php echo isset($editData) ? $editData['ablood'] : '' ?>" style="padding: 12px 20px; box-sizing: border-box; margin-left:0.9%">
            <br> <br>

            <label>Contact no. : </label>     
            <input name="cno" required value="<?php echo isset($editData) ? $editData['cno'] : '' ?>" style="padding: 12px 20px; box-sizing: border-box; margin-left:3%">
            <br> <br>

            <button type="submit" name="update" class="button">Submit</button>
    </form>
        </div>
</div>



</body>
</html>