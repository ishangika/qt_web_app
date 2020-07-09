<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forgot Password</title>
	<?php include 'template/template.php';?>

</head>
<body scroll="no" style="overflow: hidden">

<div class="imgcontainer">
    <img class="img-responsive" src="/qt_web_app/application_resources/images/logo.png">
</div>
<div class="form">
<div class="container">
		<div class="row">
			<h1>Edit Profile</h1>
		</div>
	</div>
</div>
<?php 
$attributes = array('name' => 'login_data');

echo form_open_multipart('login/do_upload', $attributes);
?>
<div class="container">
    <div class="form-group">
                    <!-- <input type="hidden" name="id" class="form-control" value="<?php echo $user_detail->id;?>"> -->
        NAME :   <input type="hidden" name="id" class="form-control" value="4">
        <input type="text" name="name" class="form-control" value="<?php echo $user_detail->name;?>">
     </div>
                 
    <div class="form-group">
       designation : <input type="text" name="designation" class="form-control" value="<?php echo $user_detail->designation;?>">
    </div>
    <div class="form-group">
    User Name : <input type="text" name="user_name" class="form-control" value="<?php echo $user_detail->user_name;?>">
    </div>
    <div class="form-group">
    Department : <input type="text" name="department" class="form-control" value="<?php echo $user_detail->department;?>">
    </div>
    <div class="form-group">
    Email : <input type="text" name="email" class="form-control" value="<?php echo $user_detail->email;?>">
    </div>
    <div class="form-group">
    Date Of Birth : <input type="text" name="dob" class="form-control" value="<?php echo $user_detail->dob;?>">
    </div>
                </div>
                 
                 

                <div class="form-group">
                   Profile Picutre <input type="file" name="image">
                </div>
 

                <div class="form-group">
                    <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
                </div>

</div>
</div>
