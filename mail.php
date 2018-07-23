<?php

  if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $selected_val = $_POST['country'];  // Storing Selected Value In Variable
    $date = $_POST['date'];

    $errorEmpty = false;
    $errorEmail = false;

    if (empty($email)){
      echo "<span class='form-error'>Input email!</span>";
      $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "<span class='form-error'>email not valid</span>";
      $errorEmail = true;
    }
    elseif ($errorEmpty == false && $errorEmail == false){

      
      echo $email;
      echo "<br>";
      echo $selected_val;
      echo "<br>";
      echo $date;
    }
  }
  else{
    echo 'an error occured';
  }

?>

<script>

  var errorEmpty = "<?php echo $errorEmpty; ?>";
  var errorEmail = "<?php echo $errorEmail; ?>";

  if (errorEmpty == true){
    $('#form-email').addClass('input-error');
  }
  if (errorEmail == true){
    $('#form-email').addClass('input-error');
  }
  if (errorEmpty == false && errorEmail == false){
    $('#form-email').val('');
  }

</script>

