if($match > 0){
     $msg = 'Login Complete! Thanks';
     echo "<script> window.location.assign('login.php'); </script>";
 }
 else{
     $msg = 'Login Failed!<br /> Please make sure that you enter the correct  details and that you have activated your account.';
 }