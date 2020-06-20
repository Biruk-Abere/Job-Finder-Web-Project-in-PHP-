 $sql = "SELECT * from seler_reg WHERE seller_name='$name'";
      $sql_result = mysqli_query($conn , $sql);
      $result_fetch = mysqli_num_rows($sql_result);
      if ($result_fetch>0) {
        # code...
        echo '<script type="text/javascript">alert("The Username Taken"); window.location=\'signupForm.php\';</script>';
        exit();

      }