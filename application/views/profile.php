<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<?php include 'template/template.php';?>
</head>
<body>

<div id="container-fluid">
	<div class="col-md-12 col-sm-12 nopadding">
		<div class="profile_pic">
		<img class="img-responsive" src="<?php echo base_url()?>application_resources/images/profile_pic.png">
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="col-md-12 col-sm-12 profile_details">
		<div class="row">
			<div class="col-md-9 col-sm-9 name"><?php echo $user_detail->user_name;?></div>
			<div class="col-md-3 col-sm-3 department"><p><?php echo $user_detail->department;?></p></div>
		</div>
		
		<div class="location">
			<i class="fa fa-map-marker" aria-hidden="true"></i>
			San Francisco, CA
		</div>
		<div class="b_day">
			<i class="fa fa-birthday-cake" aria-hidden="true"></i>
			<?php echo date('d M', strtotime($user_detail->dob));?>
		</div>
		<div class="row note_icon">
			<div class="container">
				<div class="row">
					<div class="tab">
						<div class="col-md-3 col-sm-3">
							<button class="tablinks" onclick="openreplies_tab()"><i class="fa fa-users" aria-hidden="true"></i><br/>Replies</button>
						</div>
						<div class="col-md-3 col-sm-3">
							<button class="tablinks" onclick="openmentions()"><i class="fa fa-at" aria-hidden="true"></i><br/>Mentions</button>
						</div>
						<div class="col-md-3 col-sm-3">
							<button class="tablinks" onclick="opennotifications()"><i class="fa fa-bell-o" aria-hidden="true"></i><br/>Notifications</button>
						</div>
						<div class="col-md-3 col-sm-3">
							<button class="tablinks" onclick="openstatus_tab()"><i class="fa fa-list" aria-hidden="true"></i><br/>Status</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="container">
	<div class="row">
		<!-- Tab content -->
		<!-- <div id="box1">
			<?php //include 'template/replies.php';?>
		</div>
		<div class="box2">
			<?php //include 'template/mentions.php';?>
		</div>
		<div class="box3">
			<?php// include 'template/notifications.php';?>
		</div> -->
		<div id="box4">
			<?php //include 'template/status.php';?>
		</div>
	</div>
</div>





<script type="text/javascript">

	function openreplies_tab(){

		 $.post('<?php echo base_url();?>index.php/profile/load_replies',function(msg) {
            $('#box4').html(msg);
        });
	}
	
	function openmentions(){

		 $.post('<?php echo base_url();?>index.php/profile/load_mentions',function(msg) {
            $('#box4').html(msg);
        });
	}

	function opennotifications(){

		 $.post('<?php echo base_url();?>index.php/profile/load_notifications',function(msg) {
            $('#box4').html(msg);
        });
	}
	
	function openstatus_tab(){

		 $.post('<?php echo base_url();?>index.php/profile/load_status',function(msg) {
            $('#box4').html(msg);
        });
	}




	// function open_check_in_replies(data){

	// 	 $.post('<?php echo base_url();?>index.php/profile/get_waterpooler_replies',{question: data} ,function(msg) {
 //            $('#Watercooler').html(msg);
 //        });
	// }
</script>





</body>
</html>