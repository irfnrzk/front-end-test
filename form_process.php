<?php
  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $email = "";
  // $date = $_POST['date'];
  // $selected_val = $_POST['country'];  // Storing Selected Value In Variable

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; 
      }
    }   
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  echo "<h2>Your Input:</h2>";


            

  if ($emailErr == ''){
    echo $email;
    echo "<br>";
    if(isset($_POST['submit'])){
      $selected_val = $_POST['country'];  // Storing Selected Value In Variable
      $date = $_POST['date'];
      echo $selected_val;
      echo "<br>";
      echo $date;
    }
    // echo $date;
  }

  header('Location: ./?success');

