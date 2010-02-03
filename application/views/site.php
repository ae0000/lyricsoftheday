<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>lyricsoftheday</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="generator" content="HAPedit 3.1">
<style type="text/css">
html,body{margin:0;padding:0}
body {
color:#333333;
font-family:'Lucida Grande',sans-serif;
font-size:0.75em;
font-size-adjust:none;
font-style:normal;
font-variant:normal;
font-weight:normal;
line-height:normal;
}
p{margin:0 10px 10px}
a{color: #006;padding:10px}
div#header{position:relative}
div#header h1{height:80px;line-height:80px;margin:0;
padding-left:10px;background: #EEE;color: #111111}
div#header a{position:absolute;right:0;top:23px}
div#content p{line-height:1.4}
div#lyrics{ }
div#albums{ }
div#footer{background: #333;color: #FFF}
div#footer p{margin:0;padding:5px 10px}
div#footer a{display:inline;padding:0;color: #C6D5FD}
h3{padding:10px}
div#lyrics{float:left;width:50%}
div#albums{float:left;width:49.9%}
div.tweet{width:45%;padding-left:20px;}
div#footer{clear:left;width:100%}
</style>
<script type="text/javascript" src="filler.js"></script>
</head>
<body>
<div id="container">
<div id="header"><h1>Lyrics and albums of the day skimmed from twitter</h1><a href="http://ae.hugeobject.com">More info</a></div>

<div id="wrapper">
<div id="content">
<p><strong>Need some styles eh?</strong></p>
</div>
</div>
<div id="lyrics">
<h3>#lyricsoftheday</h3>
<?php foreach ($tweets['lyricsoftheday'] as $tweet): ?>

<div class="tweet">
	<img src="<?php echo $tweet->profile_image_url; ?>" />
	<p><a href="http://twitter.com/<?php echo $tweet->from_user; ?>"><?php echo $tweet->from_user; ?></a> <?php echo $tweet->text; ?></p>

</div>
<?php endforeach; ?>
</div>
<div id="albums">

<h3>#albumoftheday</h3>
<?php foreach ($tweets['albumoftheday'] as $tweet): ?>

<div class="tweet">
	<img src="<?php echo $tweet->profile_image_url; ?>" />
	<p><a href="http://twitter.com/<?php echo $tweet->from_user; ?>"><?php echo $tweet->from_user; ?></a> <?php echo $tweet->text; ?></p>

</div>
<?php endforeach; ?>
</div>
<div id="footer"><p>This is the end</p></div>
</div>
<script type="text/javascript">AddFillerLink("content","lyrics","albums")</script>
</body>
</html>
