<!DOCTYPE html>
<html>
<head>
	<title>FB Messenger</title>
</head>
<body>
	<div class="fb-customerchat"
	 page_id="721112324743394"
	 minimized="true">
	</div>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId            : '2139187569495735',
	      autoLogAppEvents : true,
	      xfbml            : true,
	      version          : 'v2.11'
	    });
	  };
	(function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
</body>
</html>