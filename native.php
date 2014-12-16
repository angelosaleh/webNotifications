<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
	</head>
	<body>
		<header>
			<div id="head_left">&nbsp;</div>
			<div id="head_middle"><h1>Native</h1></div>
			<div id="head_right">&nbsp;</div>
		</header>
		<section id="section_middle">
			<div id="div-menu" class="class-menu" style="vertical-align:middle;">
				<div id='div-link-user' class="class-menu" style='float:right'>
				</div>
			</div>
			<div id="div-content" >
<button onclick="notifyMe()">Notify me!</button>				
			</div>
		</section>
	</body>
	<script type="text/javascript" >
		function notifyMe() {
  if (!Notification) {
    alert('Please us a modern version of Chrome, Firefox, Opera or Firefox.');
    return;
  }

  if (Notification.permission !== "granted")
    Notification.requestPermission();

  var notification = new Notification('Notification title', {
    icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
    body: "Hey there! You've been notified!",
  });


  notification.onclick = function () {
    window.open("http://stackoverflow.com/a/13328397/1269037");
  }
}
	</script>
</html>
