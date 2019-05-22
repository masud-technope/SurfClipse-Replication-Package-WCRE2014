<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Context-Menu Based Web Search</title>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="../css/jquery.lightbox-0.5.css" media="screen" />

<script type="text/javascript">
$(function() {
$('a[@rel*=lightbox]').lightBox();
$('#gallery a').lightBox();
$('a.lightbox').lightBox();
$('a').lightBox();
});
</script>

	<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	#gallery {
		background-color: #444;
		padding: 10px;
		width: 520px;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #3e3e3e;
		border-width: 5px 5px 20px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 20px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	</style>
</head>

<body style="padding-left:200px;padding-right:200px">
<h1>Context-Menu Based Search</h1>
<hr />
<spacer></spacer>
<p>
Context-Menu Based Search of SurfClipse requires these following steps:
</p>
<div id="gallery">
<ul>
<li>
<a href="1.png" title="Step 1"><img src="1.png" width="72" rel="lightbox" height="72" alt="" /></a>
</li>
<li>
<a href="2.png" title="Step 2"><img src="2.png" width="72" rel="lightbox" height="72" alt="" /></a>
</li>
<li>
<a href="3.png" title="Step 3"><img src="3.png" width="72" rel="lightbox" height="72" alt="" /></a>
</li>
</ul>
</div>
</body>
</html>
