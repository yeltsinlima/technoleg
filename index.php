<!DOCTYPE html>
<html lang="pt-br">

	<head>
	
		<meta charset="utf-8">
	
		<title>Technoleg - Seu canal de Tecnologia, Games, Fotografia, Social Media</title>
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		
		<!-- Meta -->
		<link rel="dns-prefetch" href="//ajax.microsoft.com">
		<link rel="dns-prefetch" href="//ajax.aspnetcdn.com">
		<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
		
		<!-- IE9 Pinned Tab -->
		<meta name="application-name" content="Technoleg - Seu canal de Tecnologia, Games, Fotografia, Social Media">
		<meta name="msapplication-tooltip" content="Technoleg é um portal de tecnologia, games, fotografia e social media.">
		<meta name="msapplication-starturl" content="http://www.technoleg.com.br/?pinned=true">
		<meta name="msapplication-window" content="width=1200;height=600">
		
		<!-- IE Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- IE6 Kill Toolbar -->
		<meta http-equiv="imagetoolbar" content="false">
		
		<!-- Facebook Open Graph -->
		<meta property="og:title" content="">
		<meta property="og:description" content="">
		<meta property="og:image" content="">
		
		<!-- Twitter Cards -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@site_account">
		<meta name="twitter:creator" content="@individual_account">
		<meta name="twitter:url" content="http://www.example.com/path/to/page.html">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image" content="http://www.example.com/path/to/image.jpg">
		
		<!-- Canocinal URLs -->
		<link rel="canonical" href="">
		
		<!-- Shortlink -->
		<link rel="shortlink" href="h5bp.com">
		
		<!-- RSS -->
		<link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.xml">
		
		<!-- Atom -->
		<link rel="alternate" type="application/atom+xml" title="Atom" href="/atom.xml">
		
		<!-- Pingback -->
		<link rel="pingback" href="">
		
		<!-- Apple Icons -->
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-144x144-precomposed.png">
	
	</head>
	
	<body>
	
		<div id="banner" class="container">
		
			<div class="row">
			
				<div class="span12 center">
				
					<!-- Isso é um Banner 728x90 -->
					<img src="http://placehold.it/728x90">
				
				</div>
			
			</div>
		
		</div>
		
		<div id="header" class="container">
		
			<div class="row">
			
				<div class="span4">
				
					<h1><a href="index.html" title="Technoleg - Seu canal de Tecnologia, Games, Fotografia, Social Media">TECHNOLEG</a></h1>
					<h2>Não, ainda não temos uma logo...</h2>
				
				</div>
			
			</div>
		
		</div>
	
	<!-- Javascript -->
	<script src="js/bootstrap.min.js"></script>
	
	<!-- Google Analyics -->
	<script>
		var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
		
		$(function(){
		    var isDuplicateScrollEvent,
		        scrollTimeStart = new Date,
		        $window = $(window),
		        $document = $(document),
		        scrollPercent;
		
		    $window.scroll(function() {
		        scrollPercent = Math.round(100 * ($window.height() + $window.scrollTop())/$document.height());
		        if (scrollPercent > 90 && !isDuplicateScrollEvent) { //page scrolled to 90%
		            isDuplicateScrollEvent = 1;
		            _gaq.push(['_trackEvent', 'scroll',
		                'Window: ' + $window.height() + 'px; Document: ' + $document.height() + 'px; Time: ' + Math.round((new Date - scrollTimeStart )/1000,1) + 's',
		                undefined, undefined, true
		            ]);
		        }
		    });
		});
	</script>
	
	</body>

</html>