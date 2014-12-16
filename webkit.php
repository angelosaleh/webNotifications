<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
	</head>
	<body>
		<header>
			<div id="head_left">&nbsp;</div>
			<div id="head_middle"><h1>WEBkit notification</h1></div>
			<div id="head_right">&nbsp;</div>
		</header>
		<section id="section_middle">
			<div id="div-menu" class="class-menu" style="vertical-align:middle;">
				<div id='div-link-user' class="class-menu" style='float:right'>
				</div>
			</div>
			<div id="div-content" >
<button onclick="allowMe()">Allow me webkit!</button>
<button onclick="notifyMe()">Notify me webkit!</button>
			</div>
		</section>
	</body>
	<script type="text/javascript" >
		function allowMe() {
			if (window.webkitNotifications.checkPermission() == 0) {
			// Good to go, you can create a notification.
			} else {
				window.webkitNotifications.requestPermission(function(){});
			}
  		}

  		function notifyMe() {
			var myNotification = window.webkitNotifications.createNotification('','New Content Available', 'Click to view');
			myNotification.onclick = function() {
				window.location = 'http://teamtreehouse.com/new/content';
			}
			myNotification.show();
  		}

	</script>
</html>
