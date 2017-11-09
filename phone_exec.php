<?php
  /*
  *this accepts POST requests - it can be changed if neccesary
  *all responses are in json format so a javascript file can pick them up for AJAX processes
  */
  if($_POST){

    if ($_POST['phone'] == "") {
      echo json_encode(array("response" => "0", "message" => "Please enter phone number!"));
      exit;
    }

    if (validate_phone( $_POST['phone']) == true ) {
      echo json_encode(array("response" => "1", "message" => "Hurray phone number is valid!"));
    } else {
      echo json_encode(array("response" => "1", "message" => "Ouch the phone number does not look like a valid one!"));
    }


  }
    /*
    * This function matches strings using a regex pattern. It can be modified to accept only local
    * numbers without the international code (+233)
    */
    function validate_phone($str){
        if(preg_match("/^\+?(233|0)[235]\d{8}$/", $str)){
             return true;
        }
        else {
             return false;
        }
    }


 ?>
