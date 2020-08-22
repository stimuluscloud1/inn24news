<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include('../config.php');

class Admin extends Config
{
    function userLogin($data)
    {
        $conn = $this->myConfig();
        $email = $data['email'];
        $password = md5($data['password']);

        $sql = "SELECT `email`, `password` FROM `user_info` WHERE email='$email' AND password = '$password'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($result->num_rows > 0) {
            $_SESSION['email'] = $email;
                return true;
            
        } else {
            return false;
        }
    }

    function userLinkToRest($data){
        $conn = $this->myConfig();
        $email = $data['email'];
        
        $sql = "SELECT `id`,`email` FROM `user_info` WHERE email='$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $userID=$row['id'];
        if ($result->num_rows > 0) {
            //if($this->loginEmail($email)==true){
                $this->loginEmail($email);
                return $userID;
            // }
            // else{
            //     return false;
            //}
             
        }else{
            return false;
        }
    }

    function loginEmail($email){
        $randNumber=rand(100000,999999);
        $_SESSION['otp']=$randNumber;
        //print_r($_SESSION['otp']);
        $sessionValue="NO";
        $_SESSION['otpVerify']=$sessionValue;
        $userEmail=$email;
        $msg = 'Welcome, your login OTP is '.$randNumber;    
        $headers = "From: stimuluscloud@gmail.com" . "\r\n" .
        "CC: stimuluscloud@gmail.com";    
        // send email
        mail($userEmail,"One Time Password",$msg,$headers);
        return true;
            
        }
    
    function updatePassword($data, $userID){
        $conn = $this->myConfig();
        $password = md5($data['password']);
        $sql = "UPDATE `user_info` SET `password`='$password' WHERE id='$userID'";
        $conn->query($sql);
        return true;
    }    

    function addReporter($data){
    
        $conn = $this->myConfig();

                // Image Upload
                $target_dir = "uploads/";
                $target_file = $target_dir.time().rand(10,1000).basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                  if($check !== false) {
                    $result= "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                  } else {
                    $result= "File is not an image.";
                    $uploadOk = 0;
                  }
                }
                
                // Check if file already exists
                if (file_exists($target_file)) {
                    $result= "Sorry, file already exists.";
                  $uploadOk = 0;
                }
                
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 50000000) {
                    $result= "Sorry, your file is too large.";
                  $uploadOk = 0;
                }
                
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    $result= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  $uploadOk = 0;
                }
                
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $result= "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $result= "Reporter added successfully.";
                  } else {
                    $result= "Sorry, there was an error uploading your file.";
                  }
                }
        $email=$data['email'];        
        $fullName=$data['fullName'];
        $fatherName=$data['fatherName'];
        $mobile=$data['mobile'];
        $aadharNumber=$data['aadharNumber'];
        $gender=$data['gender'];
        $dob=$data['dob'];
        $address1=$data['address1'];
        $address2=$data['address2'];
        $city=$data['city'];
        $state=$data['state'];
        $country=$data['country'];
        $pinCode=$data['pinCode'];
        $image=$target_file;
        $status='1';
        $facebook=$data['facebook'];
        $instagram=$data['instagram'];
        $twitter=$data['twitter'];
        $linkedin=$data['linkedin'];
        $sql="INSERT INTO `reporter_info`(`fullName`, `fatherName`, `mobile`, `aadharNumber`, `gender`,`email`, `dob`, `address1`, `address2`, `city`, `state`, `country`, `pinCode`,`image`,`facebook`, `instagram`, `twitter`, `linkedin`,`status`) VALUES ('$fullName','$fatherName','$mobile','$aadharNumber','$gender',$email,'$dob','$address1','$address2','$city','$state','$country','$pinCode','$image','$facebook','$instagram','$twitter','$linkedin','$status')";
        $conn->query($sql);
    
        return $result;
        
    }

    // function getReporter(){

    // }

}
