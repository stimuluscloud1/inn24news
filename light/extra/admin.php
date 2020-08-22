<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include('../config.php');

class Admin extends Config
{
    
    function getHeaderFooter(){
        $conn = $this->myConfig();
        $sql="SELECT `aboutus`, `ceo`, `ceomobile`, `ceoemail`, `editor`, `editoremail`, `editormobile`,`facebook`, `instagram`, `twitter`, `linkedin` FROM `app_setting`";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        return $row;

    }
    
    function updateHeaderFooter($data){
        
        $conn = $this->myConfig();
        $aboutus=$data['aboutus'];
        $ceo=$data['ceo'];
        $ceomobile=$data['ceomobile'];
        $ceoemail=$data['ceoemail'];
        $editor=$data['editor'];
        $editormobile=$data['editormobile'];
        $editoremail=$data['editoremail'];
        $facebook=$data['facebook'];
        $instagram=$data['instagram'];
        $twitter=$data['twitter'];
        $linkedin=$data['linkedin'];

        $sql="UPDATE `app_setting` SET `aboutus`='$aboutus',`ceo`='$ceo',`ceomobile`='$ceomobile',`ceoemail`='$ceoemail',`editor`='$editor',`editoremail`='$editoremail',`editormobile`='$editormobile',`facebook`='$facebook',`instagram`='$instagram',`twitter`='$twitter',`linkedin`='$linkedin'";
        $result=$conn->query($sql);
        if($result==true){
            $resultMessage="Updated Successfully";
            return $resultMessage;
        }else{
            $resultMessage="Something went wrong, please try again";
            return $resultMessage;
        }

        
    }

    function addHeaderFooter($data){
        
        $conn = $this->myConfig();
        $aboutus=$data['aboutus'];
        $ceo=$data['ceo'];
        $ceomobile=$data['ceomobile'];
        $ceoemail=$data['ceoemail'];
        $editor=$data['editor'];
        $editoremail=$data['editoremail'];
        $facebook=$data['facebook'];
        $instagram=$data['instagram'];
        $twitter=$data['twitter'];
        $linkedin=$data['linkedin'];

        $sql="INSERT INTO `app_setting`(`aboutus`, `ceo`, `ceomobile`, `ceoemail`, `editor`, `editoremail`, `facebook`, `instagram`, `twitter`, `linkedin`) VALUES ('$aboutus','$ceo','$ceomobile','$ceoemail','$editor','$editoremail','$facebook','$instagram','$twitter','$linkedin')";
        $conn->query($sql);
    
        return true;
        
    }


}
