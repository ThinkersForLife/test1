<html>
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<script type="text/javascript">
   		

		$.fn.stars = function() {
			return $(this).each(function() {
				$(this).html($('<span />').width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 16));
			});
		}
	</script>
	<style type="text/css">
		span.stars, span.stars span {
			display: block;
			background: url(http://www.ulmanen.fi/stuff/stars.png) 0 -16px repeat-x;
			width: 80px;
			height: 16px;
		}
	
		span.stars span {
			background-position: 0 0;
		}
	</style>
</head>
<body>

	<input type="text" name="amount" value="2.53" />
	<input type="submit" value="update">
<p>
   <span class="stars">2.4618164</span></p>

</body>
</html>


