<?php
if(isset($_POST['submit'])) {
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $score = $q1 + $q2 + $q3;
  
  if($score < 3) {
    $result = "You may be experiencing some mental health issues. It's important to seek help from a mental health professional.";
  } elseif($score >= 3 && $score <= 5) {
    $result = "You are doing fairly well with your mental health, but there is always room for improvement.";
  } else {
    $result = "You are doing great with your mental health! Keep up the good work.";
  }
}
?>
