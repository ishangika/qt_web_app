<div class="container">
	<div class="row">
		<div class="status">
		<div class="tab">
			<div class="col-md-6 col-sm-6">
				<button class="tabstatus" onclick="openstatus(event, 'watercooler_status')">Watercooler</button>
			</div>
			<div class="col-md-6 col-sm-6">
				<button class="tabstatus" onclick="openstatus(event, 'checkin_status')">Check- In</button>
			</div>
		</div>
</div>
		<div id="watercooler_status" class="tabcontentstatus">
		<h3>Chat Status</h3>
			<div class="chat_status">
			
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
					<span class="sr-only">70% Complete</span>
					</div>
				</div>
				<ul>
					<li>Responded 8/8</li>
					<li>Activity level Cheetah</li>
				</ul>
			</div>
			
			<h3>Pending Watercooler Replies</h3>
			<div class="chat_status">
			<div class="status_wc">Hurray! you've responded to all tasks. Good job!</div>

			</div>

		</div>

		<div id="checkin_status" class="tabcontentstatus">
		<h3>Check-in Stats</h3>
		<div class="chat_status">
			
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
					<span class="sr-only">70% Complete</span>
					</div>
				</div>
				<ul>
					<li>Check-ins 22/22</li>
					<li>Compliance 100%</li>
				</ul>
			</div>
			
			<h3>Yet to Check-In</h3>
			<div class="chat_status">
			<div class="status_wc">Yes! all check-in's done.  Keep it up!</div>

			</div>
		</div>



<script>
function openstatus(evt, statusName) {
  var i, tabcontentstatus, tabstatus;
  tabcontentstatus = document.getElementsByClassName("tabcontentstatus");
  for (i = 0; i < tabcontentstatus.length; i++) {
    tabcontentstatus[i].style.display = "none";
  }
  tabstatus = document.getElementsByClassName("tabstatus");
  for (i = 0; i < tabstatus.length; i++) {
    tabstatus[i].className = tabstatus[i].className.replace(" active", "");
  }
  document.getElementById(statusName).style.display = "block";
  status.currentTarget.className += " active";
}
</script>
