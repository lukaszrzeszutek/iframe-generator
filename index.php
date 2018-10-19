<!DOCTYPE html>
<html>
<head>
	<title>YT Generator</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style type="text/css">
		iframe {
		margin: 0 auto;
		display:block;
		}
	</style>

</head>

<body>

https://www.youtube.com/watch?v=j5-yKhDd64s
<br>
https://youtu.be/AdBoybKnzZw


<script type="text/javascript">
	$('body').html(function(i, html) {

    return html.replace(/(?:https:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?(.+)/g, '<iframe width="560" height="315" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>');

});
</script>

</body>
</html>

