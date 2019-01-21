<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/monster-admin/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 17:36:45 GMT -->
<?php include 'head.php'; ?>

<?php


/* require_once 'classes/debitor_control.php';
$dc = new debitor_function();

if(isset($_POST['debitor_reg'])){

    $nic=$_POST['nic'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $pno1=$_POST['phno1'];
    $pno2=$_POST['phno2'];


   
   echo $result= $dc -> debitor_reg($nic, $fname, $lname, $address1, $address2, $pno1, $pno2, $email);

} */
?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ==========================header==================================== -->
       <?php include 'header.php'; ?>
        <!-- ==========================header finish==================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">New Debitor</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                      
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <?php
									if(isset($_SESSION['de_msg'])){
										echo $_SESSION['de_msg'];
										unset($_SESSION['de_msg']);

									}
									
									?>
                                <h4 class="card-title">Customer Registration</h4>
                                <h6 class="card-subtitle"></h6>

                                <form class="form p-t-20" id="deb_regform" name="deb_regform" action="Controller/debitorControl.php" method="POST">

                                    <input type="hidden" name="frontend_testing" value=0> <!--value should set to 0 in production :Prince-->

                                    <div class="form-group">
                                        <label for="nic">NIC No.</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-book"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="nic" id="nic" placeholder="ID Card No.">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputuname">First Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputuname">Last Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-email"></i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="exampleInputuname">Address 1</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-home"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="address1" id="address1" placeholder="Address 1">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputuname">Address 2</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-home"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="address2" id="address2" placeholder="Address 2">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputuname">Phone No 1</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-mobile"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="phno1" id="phno1" placeholder="Phone No 1">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputuname">Phone No 2</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-mobile"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="phno2" id="phno2" placeholder="Phone No 2">
                                        </div>
                                    </div>
                                    
                                   <!--  <div class="form-group">
                                        <label for="pwd1">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-lock"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" id="pwd1" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd2">Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="ti-lock"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" id="pwd2" placeholder="Enter email">
                                        </div>
                                    </div>
 -->
                                    <button type="submit" name="debitor_reg" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    <a href="debitor_reg.php" class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                   
                   
                </div>
                
               
            </div>
           
            <!-- footer -->
            <!-- ============================================================== -->
           <?php
			include 'footer.php';
			?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
   
    <script>
        $(document).ready(function() {
            var str_inputNIC_required = "Please enter your National ID Card number";
            var str_inputNIC_minlength = "Your National ID card number consists of at least 9 characters";
            var str_inputNIC_regx = "For example: 850961188v or 198509601188";

            var str_inputNameF_required = "Please enter your First Name";
            var str_inputNameF_minlength = "Please enter a valid First Name";
            var str_inputNameF_maxlength = "Your First Name seems too long!";
            var str_inputNameF_regx = "Please enter valid characters";



            //--form validation code begin--[PF]
            var str_validatorAddMethod_regx = "Please enter a valid value.";
            $.validator.addMethod("regx", function(value, element, regexpr) {    
                var re = new RegExp(regexpr);     
                return this.optional(element) || re.test(value);
            }, str_validatorAddMethod_regx);

            $("#deb_regform").validate({    
                rules: {
                    nic: {
                        required: true, 
                        minlength: 9,
                        maxlength: 12,
                        regx: /^([0-9]{9}[V|v|X|x]$|[0-9]{12}$)/
                    },
                    fname: {
                        required: true, 
                        minlength: 3,
                        maxlength: 40, //--should decide on this [PF]
                        regx: /^[^0-9@+-]{3,}$/
                    },
                },
                messages: {
                    nic: {
                        required: str_inputNIC_required, 
                        minlength: str_inputNIC_minlength,
                        regx: str_inputNIC_regx
                    },
                    fname: {
                        required: str_inputNameF_required,
                        minlength: str_inputNameF_minlength,
                        maxlength: str_inputNameF_maxlength,
                        regx: str_inputNameF_regx
                    },
                  
                },
                validClass: "success",
                errorPlacement: function(error, element) {
                    //console.log(element.attr('id')+' '+element.closest('div').attr('class'));
                    if( element.closest('div').is('[class^="input-group"]') ) {
                        //to check one particular element, you'd use .is(), not hasClass:

                        //otherwise bootsrap labels break when on displaying validation error
                        error.insertAfter(element.closest('div'));
                    }
                    else {
                        error.insertAfter(element);
                    }
                },
                invalidHandler: function(event, validator) {
                    //Callback for custom code when an invalid form is submitted. 

                    var errors = validator.numberOfInvalids(); //number of errors
                    console.log('errors: ' + errors);

                    for (var i=0;i<validator.errorList.length;i++){
                        console.log(validator.errorList[i]);
                    } 

                    for (var i in validator.errorMap) {
                        console.log(i, ":", validator.errorMap[i]);
                    }                                          
                }                  

            });


            //these edits are important for form validation to works nicely--[PF]
            $("#deb_regform input, #deb_regform select").focus(function() {
                //checkboxes also includes if any
                var enteredValue = $(this).val();
                console.log($(this).attr('id') +' [focused] val: '+enteredValue+' class: '+$(this).attr('class'));

                //removing success class when no valid value (Choose.. OR selectedIndex is 0) selected in a dropdown (on focus of dropdown menu)
                if( ($(this)[0].selectedIndex == 0) && $(this).hasClass('success')) {
                    $(this).removeClass('success');
                }  
            });

            //these edits are important for form validation to works nicely--[PF]
            $("#deb_regform input, #deb_regform select").blur(function() {
                //checkboxes also includes
                var enteredValue = $(this).val();
                console.log($(this).attr('id') +' [blured] val: '+enteredValue +' class: '+$(this).attr('class'));
                
                if( (enteredValue == null || enteredValue == "") && $(this).hasClass('success')) {
                    $(this).removeClass('success');
                }

                if( ($(this)[0].selectedIndex == 0) && $(this).hasClass('success')) {
                    $(this).removeClass('success');
                }                     
            });            
            
            //--[PF]
            $("#deb_regform select").change(function() {
                var enteredValue = $(this).val();
                console.log($(this).attr('id') +' [changed] val: '+enteredValue+' class: '+$(this).attr('class'));
            }); 

            //--form validation code end--[PF]

        });



    </script>



    </body>


</html>