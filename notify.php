<?php

echo "hello world";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
                <script src="notify.js/notify.js"></script>
                <script src="jquery.js"></script>
	</head>
	<body>
		<header>
			<div id="head_left">&nbsp;</div>
			<div id="head_middle"><h1>Bienvenido</h1></div>
			<div id="head_right">&nbsp;</div>
		</header>
		<section id="section_middle">
			<div id="div-menu" class="class-menu" style="vertical-align:middle;">
				<div id='div-link-user' class="class-menu" style='float:right'>
				</div>
			</div>
			<div id="div-content" >
				<input type="button" value="Capacity Chart" id="MyButton" >
			</div>
		</section>
	</body>
	<script type="text/javascript" >
		$(document).ready(function(){
    			$('#MyButton').click(function(){
      				myNotification.show();
			});
 		
		var myNotification = new Notify('Yo dawg!', {
		    body: 'This is an awesome notification',
		    icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
		    notifyShow: onNotifyShow
		});
		});
		function onNotifyShow() {
    			console.log('notification was shown!');
		}
		function checkhh() {
    			console.log('notssssssssssification was shown!');
		}
	</script>
</html>
