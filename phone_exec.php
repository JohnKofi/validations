<?php
  //make sure all request are POST - this can be changed if neccesary
  // all resonses are in json format so a javascript file can pick them up for AJAX processes
  if($_POST){

    if ($_POST['phone'] == "") {
      echo json_encode(array("resonse" => "0", "message" => "Please enter phone number!"));
      exit;
    }
    /*
    if ($_POST['password'] == "") {
      echo json_encode(array("resonse" => "0", "message" => "Please enter password!"));
      exit;
    }
    */

    if (validate_phone( $_POST['phone']) == true ) {
      echo json_encode(array("resonse" => "1", "message" => "Hurray phone number is valid!"));
    } else {
      echo json_encode(array("resonse" => "1", "message" => "Ouch the phone number does not look like a valid one!"));
    }
    /*
    if (passwordStrenght( $_POST['password']) == true ) {
      echo json_encode(array("resonse" => "1", "message" => "That's a strong password you have there!"));
    } else {
      echo json_encode(array("resonse" => "1", "message" => "MMMMM!!! That's kinda weak please try another one!"));
    }
    */

  }

    function validate_phone($str){
        if(preg_match("/^\+?(233|0)[235]\d{8}$/", $str)){
             return true;
        }
        else {
             return false;
        }
    }

    /*
    function passwordStrenght($str){
      #"%\A(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-Z])(?=[-_a-zA-Z0-9]*?[0-9])\S{6,10}\z%"
      if(preg_match("%\A(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-Z])(?=[-_a-zA-Z0-9]*?[0-9])\S{6,10}\z%", $str)){
           return true;
         }
         else {
           return false;
         }
    }
    */

 ?>
