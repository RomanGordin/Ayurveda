<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Заголовок</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="test, test, test ,test ,test ,test" />
	<meta name="description" content="test" />
	<meta name="owner" content="test.mail.ru" />
	<meta name="author" lang="ru" content="test" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="content-language" content="ru" />

	<!-- Open Graph -->
	<meta name="og:title" content="test">
	<meta name="og:description"
		content="testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest">
	<meta name="og:url" content="https://test.ru">
	<meta name="og:site_name" content="test">
	<meta name="og:locale" content="ru_RU">
	<meta name="og:type" content="website">
	<meta property="og:image" content="/small-im.png" />
	<!-- Twitter -->
	<meta name="twitter:description"
		content="testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest">
	<meta name="twitter:site" content="@test">
	<meta name="twitter:creator" content="@test">
	<meta name="twitter:image:src" content="https://test.ru">

	<link rel="icon" type="image/png" href="img/favicon/favicon.png" />
	<link rel="apple-touch-icon" href="img/favicon/favicon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/favicon.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/favicon.png">

	<?function isBot(&$botname = ''){
		$bots = array(
			'rambler','googlebot','aport','yahoo','msnbot','turtle','mail.ru','omsktele',
			'yetibot','picsearch','sape.bot','sape_context','gigabot','snapbot','alexa.com',
			'megadownload.net','askpeter.info','igde.ru','ask.com','qwartabot','yanga.co.uk',
			'scoutjet','similarpages','oozbot','shrinktheweb.com','aboutusbot','followsite.com',
			'dataparksearch','google-sitemaps','appEngine-google','feedfetcher-google',
			'liveinternet.ru','xml-sitemaps.com','agama','metadatalabs.com','h1.hrn.ru',
			'googlealert.com','seo-rus.com','yaDirectBot','yandeG','yandex',
			'yandexSomething','Copyscape.com','AdsBot-Google','domaintools.com',
			'Nigma.ru','bing.com','dotnetdotcom',"Chrome-Lighthouse"
		);
		foreach($bots as $bot)
			if(stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false){
					$botname = $bot;
					return true;
			}
		return false;
	} ?>

	<style>
		@font-face {
			font-family: 'Inter';
			src: url('/fonts/Inter/Inter-SemiBold.woff') format('woff'),
				url('/fonts/Inter/Inter-SemiBold.woff2') format('woff2');
			font-weight: 400;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Inter';
			src: url('/fonts/Inter/Inter-SemiBold.woff') format('woff'),
				url('/fonts/Inter/Inter-SemiBold.woff2') format('woff2');
			font-weight: 500;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Inter';
			src: url('/fonts/Inter/Inter-SemiBold.woff') format('woff'),
				url('/fonts/Inter/Inter-SemiBold.woff2') format('woff2');
			font-weight: 600;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Inter';
			src: url('/fonts/Inter/Inter-Bold.woff') format('woff'),
				url('/fonts/Inter/Inter-Bold.woff2') format('woff2');
			font-weight: 700;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Inter';
			src: url('/fonts/Inter/Inter-SemiBold.woff') format('woff'),
				url('/fonts/Inter/Inter-SemiBold.woff2') format('woff2');
			font-weight: 800;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'icomoon';
			src: url('/fonts/icomoon/icomoon.eot?1qs9pr');
			src: url('/fonts/icomoon/icomoon.eot?1qs9pr#iefix') format('embedded-opentype'),
				url('/fonts/icomoon/icomoon.ttf?1qs9pr') format('truetype'),
				url('/fonts/icomoon/icomoon.woff?1qs9pr') format('woff'),
				url('/fonts/icomoon/icomoon.svg?1qs9pr#icomoon') format('svg');
			font-weight: normal;
			font-style: normal;
			font-display: block;
		}

		body {
			font-family: 'Inter', 'open-sans' !important;
			background-color: #E5E5E5;
		}

		/* preloader  */

		.preloader {
			position: fixed;
			left: 0;
			top: 0;
			right: 0;
			bottom: 0;
			background: white;
			z-index: 1001;
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 100%;
		}
	</style>

	<?if(!isBot()) {?>
	<link rel="stylesheet" href="/libs/bootstrap-4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/header.min.css">
	<link rel="stylesheet" href="/css/main.min.css">
	<link rel="stylesheet" href="/css/media.min.css">
	<link rel="stylesheet" href="/libs/slick/slick-theme.css">
	<link rel="stylesheet" href="/libs/slick/slick.css">
	<link rel="stylesheet" href="/libs/fancybox/jquery.fancybox.min.css">

	<script src="/libs/jquery-3.4.1/jquery.min.js"></script>
	<script src="/libs/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
	<script src="/libs/fontawesome/fontawesome.js"></script>
	<script src="/libs/slick/slick.min.js"></script>
	<script src="/libs/Inputmask/jquery.maskedinput.min.js"></script>
	<script src="/libs/fancybox/jquery.fancybox.min.js"></script>
	<?}?>

</head>

<body>