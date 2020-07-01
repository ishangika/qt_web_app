<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<?php include 'template/template.php';?>
</head>
<body>

<div id="container-fluid">
	<div class="col-md-12 col-sm-12 nopadding">
		<div class="profile_pic">
		<img class="img-responsive" src="/qt-web-app-master/application_resources/images/profile_pic.png">
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="col-md-12 col-sm-12 profile_details">
		<div class="row">
			<div class="col-md-9 col-sm-9 name">Belinda Lee</div>
			<div class="col-md-3 col-sm-3 department"><p>Marketing</p></div>
		</div>
		
		<div class="location">
			<i class="fa fa-map-marker" aria-hidden="true"></i>
			San Francisco, CA
		</div>
		<div class="b_day">
			<i class="fa fa-birthday-cake" aria-hidden="true"></i>
			20 May
		</div>
		<div class="row note_icon">
			<div class="container">
				<div class="row">
					<div class="tab">
						<div class="col-md-3 col-sm-3">
							<button class="tablinks" onclick="openNote(event, 'Replies')"><i class="fa fa-users" aria-hidden="true"></i><br/>Replies</button>
						</div>
						<div class="col-md-3 col-sm-3">
							<button class="tablinks" onclick="openNote(event, 'Mentions')"><i class="fa fa-at" aria-hidden="true"></i><br/>Mentions</button>
						</div>
						<div class="col-md-3 col-sm-3">
							<button class="tablinks" onclick="openNote(event, 'Notifications')"><i class="fa fa-bell-o" aria-hidden="true"></i><br/>Notifications</button>
						</div>
						<div class="col-md-3 col-sm-3">
							<button class="tablinks" onclick="openNote(event, 'Status')"><i class="fa fa-list" aria-hidden="true"></i><br/>Status</button>
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
		<div class="box1">
			<?php include 'template/replies.php';?>
		</div>
		<div class="box2">
			<?php include 'template/mentions.php';?>
		</div>
		<div class="box3">
			<?php include 'template/notifications.php';?>
		</div>
		<div class="box4">
			<?php include 'template/status.php';?>
		</div>
	</div>
</div>











</body>
</html>