<?php

  if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $selected_val = $_POST['country'];  // Storing Selected Value In Variable
    $date = $_POST['date'];

    $errorEmpty = false;
    $errorEmail = false;
    $errorDate = false;

    if (empty($email)){
      echo "<span class='form-error'>Input email!</span><br>";
      $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "<span class='form-error'>Email is not valid!</span><br>";
      $errorEmail = true;
    }
    if (empty($date)){
      echo "<span class='form-error'>Input date!</span>";
      $errorDate = true;
    }
    elseif ($errorEmpty == false && $errorEmail == false && $errorDate == false){     
      echo "<span class='form-correct'>Submitted!</span><br>"; 
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

