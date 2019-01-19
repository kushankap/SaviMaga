<?php

session_start();

include_once '../classes/DBConnection.php';

require_once '../classes/debitor_control.php';
    $dc = new debitor_function();


try {

    
    
    
    if(isset($_POST['debitor_reg'])){
    
        $nic=$_POST['nic'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $address1=$_POST['address1'];
        $address2=$_POST['address2'];
        $pno1=$_POST['phno1'];
        $pno2=$_POST['phno2'];
    
    
       
        $result= $dc -> debitor_reg($nic, $fname, $lname, $address1, $address2, $pno1, $pno2, $email);

       if ($result) {

        $_SESSION['de_msg']='<div class="alert alert-success alert-rounded"> <i class="fa fa-check-circle"></i> Debetor registration success.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>';
       
        header('Location:../debitor_reg.php');
        exit();

    } else {
        $_SESSION['de_msg']='<div class="alert alert-danger alert-rounded"> <i class="fa fa-exclamation-circle"></i> Debetor registration failed.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>';
        
        header('Location:../debitor_reg.php');
        exit();

    }
    
}else if(isset($_POST['debitor_edit'])){
    
    $nic=$_POST['nic'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $pno1=$_POST['phno1'];
    $pno2=$_POST['phno2'];
    $id=$_POST['idDebitors'];


                            
    $result= $dc -> debitor_update( $id,$nic, $fname, $lname, $address1, $address2, $pno1, $pno2, $email);

   if ($result) {

    $_SESSION['de_msg']='<div class="alert alert-success alert-rounded"> <i class="fa fa-check-circle"></i> Debetor update success.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>';
       
    header('Location:../debitor_manage.php');
    exit();

} else {

    $_SESSION['de_msg']='<div class="alert alert-danger alert-rounded"> <i class="fa fa-exclamation-circle"></i> Debetor update failed.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>';
       
    header('Location:../debitor_manage.php');
    exit();

}


}else if(isset($_GET['debitor_delete'])){

    $id =$_GET['debitor_delete'];

    $result= $dc -> debitor_change_status( $id,'0');

   if ($result) {

    $_SESSION['de_msg']='<div class="alert alert-success alert-rounded"> <i class="fa fa-check-circle"></i> Debetor delete success.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>';
      
    header('Location:../debitor_manage.php');
    exit();

} else {
    $_SESSION['de_msg']='<div class="alert alert-danger alert-rounded"> <i class="fa fa-exclamation-circle"></i> Debetor delete failed.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>';
       
    header('Location:../debitor_manage.php');
    exit();

}


    }else {

        header('Location:../debitor_reg.php');
        exit();

    }



} catch (Exception $e) {

    echo 'Message: ' . $e->getMessage();

}

