<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>{{ isset($_title) ? $_title.' | NhAcUaBaO.cOm' : 'NhAcUaBaO.cOm' }}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta name="keywords" content="{{ isset($_keywords) ? $_keywords : '' }}"/>
	<meta content="{{ isset($_description) ? $_description : '' }}" name="description"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ asset("assets/scripts/main.js") }}"></script>

	<link rel="stylesheet" href="{{ asset("css/bootstrap/css/bootstrap.css") }}" />
	<link rel="stylesheet" href="{{ asset("css/font-awesome/css/font-awesome.min.css") }}" />
	<link rel="stylesheet" href="{{ asset("css/reset.css") }}" />
	<script>
		var _base_url = "{{ asset('') }}";
		var _base_url_admin = "{{ asset('admin') }}";
	</script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=624101920982827";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</head>
<body>
	<div id="fb-root"></div>
	@yield('body')
</body>
</html>