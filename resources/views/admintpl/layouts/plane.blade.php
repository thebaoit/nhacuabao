<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>{{ isset($_title) ? $_title.' | Nh4cUaBa0.c0m' : 'Nh4cUaBa0.c0m' }}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="{{ isset($_description) ? $_description : '' }}" name="description"/>

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
	<script src="{{ asset("assets/scripts/ckeditor/ckeditor.js") }}"></script>
	<script src="{{ asset("assets/scripts/ckfinder/ckfinder.js") }}"></script>
	<script>
		var _base_url = "{{ asset('') }}";
		var _base_url_admin = "{{ asset('admin') }}";
	</script>
	
</head>
<body>
	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
</body>
</html>