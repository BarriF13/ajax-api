<?php


// Connect to database --make database in localhost/phpadmin first ajaxcrashcoursetest
$conn = mysqli_connect('localhost', 'root','ajaxcrashcoursetest');

echo 'Processing .....';

//check for POST var
if(isset($_POST['name'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  echo 'POST: Your name is '.$_POST['name'];

  $query = "INSERT INTO users(name) VALUES('$name')";

  if(mysqli_query($conn, $query)){
    echo 'User Added...';
  } else {
    echo 'ERROR: '. mysqli_error($conn);
  }
}
//check for get var
if(isset($_GET['name'])){
  echo 'GET: Your name is '. $_GET['name'];
}