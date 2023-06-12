<?php
  include("database2.php");

  $sql = "INSERT INTO users (id, user, password)
          VALUES (3, 'Sopngebo2', 'pineapple')";

  try{
     mysqli_query($conn, $sql);
     echo"User is now register";
  }
  catch(mysqli_sql_exception){
    echo"Could not register user";
  }



  mysqli_close($conn);

?>