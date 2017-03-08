<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/css/custom/style.css">
	 <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' };</script>
</head>
<body>
	<div id="app">
		@yield('content')
	</div>
</body>
</html>
<script src="/js/app.js"></script>