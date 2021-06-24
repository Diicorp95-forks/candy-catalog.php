<?php

$load_time_start = hrtime(true);

define("tabulationx3", chr(9));
define("images_url_base", 'http://diicorp95.neonarod.com/bobs/');
const changelog_new = 'CHANGELOG_NEW';
const product_version = '1.2.8';
$fname = explode('?',basename($_SERVER['REQUEST_URI']),2)[0];;
const flavors = array(
	'honey-lemon' => 'Медово-лимонные',
	'ice-fresh' => 'Ледяная Свежесть',
	'mentol-extra' => 'Ментол Экстра',
	'raspberry-tea' => 'Малиновый Чай',
	'wild-berries' => 'Лесные Ягоды',
	'mint-with-eucalyptus' => 'Мята с эквалиптом',
	'orange-and-limon' => 'Апельсин и лимон',
	'crystals-strawberry' => 'Клубника - с кристаллами',
	'crystals-green-tea' => 'Зелёный чай - с кристаллами',
	'crystals-melon' => 'Дыня - с кристаллами'
);
$get_bebra = htmlspecialchars($_GET['config'], ENT_QUOTES);
$get_flavor = htmlspecialchars($_GET['flavor'], ENT_QUOTES);

function nhline($string, $iflabelname = 0) {
	if (
		($string === 1) ||
		($string === 2) ||
		(
			($string === 3) &&
			($iflabelname !== 0)
		) ||
		($string === 4)
	   )
	{
		switch ($string) {
			case 1:
				echo(tabulationx3.'<a href="candy-catalog">Назад на главную страницу выбора</a>'.PHP_EOL);
				break;
			case 2:
				echo(tabulationx3.'<h1>Магазин БОБСов</h1>'.PHP_EOL
				.tabulationx3.'<img alt="" src="https://diicorp95.vercel.app/BOBS.jpg" width="400" height="300" style="display: block; margin: 4px 0; padding: 0; border: 0;">'.PHP_EOL
				.tabulationx3.'Выбери свой БОБС!'.PHP_EOL
				.tabulationx3.'<ul>'.PHP_EOL);
				
				foreach (flavors as $sysname => $labelname) {
					echo(tabulationx3.'<li><a href="?flavor='.$sysname.'">БОБС "'.$labelname.'"</a></li>'.PHP_EOL);
				}

				echo(tabulationx3.'</ul>'.PHP_EOL
				.tabulationx3.'<div class="quote">«ЖАЛКИЙ БОБС, Я СЪЕМ ТЕБЯ.»</div>'.PHP_EOL);
				break;
			case 3:
				echo(tabulationx3.'<div class="quote">«ЖА'.(string)/*random_bytes((int)rand(1,15))*/''.'ЛКИЙ БОБС "'.$iflabelname.'", Я СЪЕМ ТЕБЯ.»</div>'.PHP_EOL);
				break;
			case 4:
				echo(tabulationx3.'<h1>Магазин БОБСов — ЛГБТ-версия</h1>'.PHP_EOL
				.tabulationx3.'<div style="margin:0 0 8px 0;display:inline-block;">Ещё в разработке!</div><br>'.PHP_EOL
				.tabulationx3.'<img alt="" class="locked-image" src="bebra.jpg">'.PHP_EOL
				.tabulationx3.'<div class="quote">«БОБС, Я ЛЮБЛЮ ТЕБЯ.»</div>'.PHP_EOL);			
				break;
			}
	} else {
		echo(tabulationx3.$string.PHP_EOL);
	}
}

function nhimg($name, $raw_link = false) {
	$temp_prefix = null;
	$temp_suffix = null;
	$temp_link = images_url_base.''.md5($name).'.jpg';
	
	if ($raw_link == false) {
		$temp_prefix = tabulationx3.'<img alt="" class="locked-image" src="';
		$temp_suffix = '">'.PHP_EOL;
	}
	
	$temp_donestr = $temp_link;
	
	if (
		($temp_prefix !== null) &&
		($temp_suffix !== null)
	) {
		$temp_donestr = $temp_prefix.$temp_donestr;
		$temp_donestr .= $temp_suffix;
	}
	echo($temp_donestr);
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>&#9794;&nbsp;BOBS master&nbsp;&#9794;</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<?php

if (!($get_bebra == 'nb')) {
	echo(chr(9).chr(9).'<link rel="icon" href="'.$fname.'.ico" type="image/x-icon">'.PHP_EOL);
} else {
	echo(chr(9).chr(9).'<link rel="icon" href="'.$fname.'-lgbt.ico" type="image/x-icon">'.PHP_EOL);
}

?>
		<style type="text/css">
			body {
				background-color: #ECECEC;
				background-image: url('A053.JPG');
				background-attachment: fixed;
				background-position: left top;
				background-repeat: repeat repeat;
				color: #1E1E1E;
				font-family: 'Georgia', sans-serif;
				font-size: 14pt;
				font-style: normal;
				font-weight: normal;
				padding: 14px;
				margin: 0;
				text-align: left;
			}
			h1 {
				margin: 0 0 10px 0;
				font-size: 16pt;
				font-weight: bold;
			}
			div.quote {
				background-color: #D3D38A;
				font-size: 14pt;
				font-family: 'Times New Roman', 'Times', serif;
				font-style: italic;
				color: #3E3E3E;
				padding: 10px;
				margin: 8px 0;
				border: 2px solid #1E1E1E;
				border-radius: 6px;
				min-width: 400px;
				max-width: 800px;
				white-space: normal;
			}
			ul {
				list-style-type: square;
				min-width: 400px;
				max-width: 800px;
			}
			li {
				font-size: 14pt;
			}
			a,
			a:link,
			a:focus,
			a:focus-within,
			a:visited {
				color: #0A0AFF;
				text-decoration: underline;
			}
			a:hover,
			a:active {
				color: #0A70FF;
				text-decoration: none;
			}
			a.darkbg,
			a.darkbg:link,
			a.darkbg:focus,
			a.darkbg:focus-within,
			a.darkbg:visited {
				color: #8080FF;
				text-decoration: underline;
			}
			a.darkbg:hover,
			a.darkbg:active {
				color: #5C5CA3;
				text-decoration: none;
			}
			div.copyright-notice {
				background-color: #2B2B2B;
				color: #E1E1E1;
				margin: 16px 0 0 0;
				padding: 10px;
				font-size: 12pt;
				font-family: 'Consolas', 'Courier New', 'Courier', monospace;
				font-weight: normal;
				font-style: normal;
				min-width: 400px;
				max-width: 800px;
			}
			.locked-text {
				-moz-user-select: none;
				-o-user-select: none;
				-khtml-user-select: none;
				-webkit-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			.locked-image {
				pointer-events: none;
				user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				-webkit-user-select: none;
				max-width: 500px;
				height: auto;
				object-fit: cover;
			}
			div.iml {
				margin: 4px 4px 4px 0;
				padding: 0;
				display: inline-block;
			}
			a.iml,
			a.iml:link,
			a.iml:focus
			a.iml:focus-within,
			a.iml:visited,
			a.iml:hover,
			a.iml:active {
				color: #1E1E1E;
				text-decoration: none;
				border: none;
				padding: 0;
				margin: 0;
			}
			img.iml {
				border: 0;
				margin: 0;
				padding: 4px;
				background-color: #808080;
				cursor: pointer;
			}
			img.iml:hover,
			img.iml:active {
				background-color: #6E6E6E;
			}
			div.changelog {
				background-color: #C0C0C0;
				color: #000000;
				font-size: 12pt;
				font-family: 'Consolas', 'Courier New', 'Courier', monospace;
				font-weight: normal;
				font-style: normal;
				white-space: pre-wrap;
				word-wrap: normal;
				padding: 10px;
				margin: 4px 0;
				min-width: 400px;
				max-width: 800px;
			}
			div.imglabel-new {
				color: #FF6E6E;
				font-size: 8pt;
				vertical-align: top;
				padding: 0 2px;
				margin: 0 0 0 4px;
				display: inline-block;
			}
		</style>
	</head>
	<body>
	<div class="locked-text">
<?php

if ($get_bebra == 'nb') {
	nhline(4);
} else if (($get_bebra == 'changelog') || ($get_bebra == 'changelog;nb')) {
	nhline('<h1>Список изменений</h1>');
	nhline('<div class="changelog">'.file_get_contents($fname.'-changelog.txt').'</div>');
} else {
if (isset($_GET['flavor'])) {
	foreach (flavors as $sysname => $labelname) {
		if ($get_flavor == $sysname) {
			nhimg($sysname);
			nhline(3,$labelname);
			nhline(1);
			break;
		}
	}
	//}
} else {
	nhline(2);
}
}

?>
	<div class="copyright-notice">BOOBSA LIST <?php echo(product_version); ?> &copy; Diicorp95<br>
	Подлинным производителем является МАК-Иваново, ООО<br>
	<br>
	Сообщить о неприсутствующем БОБСе Вы можете письмом на одну из электронных почт.<br>
	<script type="text/javascript">
		var addrs = ['kotman2000@yandex.com','larry.holst@disroot.org'];
		
		function email_follow(address) {
			window.open('mailto:'+address+'?subject=Hello%2C%20Diicorp95!', '_BLANK');
		}
		
		function email2(which) {
			email_follow(addrs[which-1]);
		}
	</script>
	<div class="iml"><img class="iml" src="http://diicorp95.neonarod.com/1.gif" alt="Yandex Mail" onclick="javascript:email2(1)"></div><!--
	--><div class="iml"><img class="iml" src="http://diicorp95.neonarod.com/2.gif" alt="Disroot.org Mail" onclick="javascript:email2(2)"></div><br>
<?php
	if ($get_bebra == 'changelog') {
		echo (tabulationx3.'<a class="darkbg" href="'.$fname.'">Главная страница</a>'.PHP_EOL);
	} else if ($get_bebra == 'changelog;nb') {
		echo (tabulationx3.'<a class="darkbg" href="'.$fname.'?config=nb">Главная страница</a>'.PHP_EOL);
	} else {
		if (isset($_GET['flavor'])) {
			$temp_flavor_transfer = 'flavor='.htmlspecialchars($_GET['flavor'],ENT_QUOTES);
		} else {
			$temp_flavor_transfer = '';
		}
		if ($get_bebra == 'nb') {
			if (isset($_GET['flavor'])) { $temp_flavor_transfer = '?flavor='.htmlspecialchars($_GET['flavor'],ENT_QUOTES); } else { $temp_flavor_transfer = ''; }
			echo (tabulationx3.'<a class="darkbg" href="'.$fname.'?config=changelog;nb">Список изменений</a><br>'.PHP_EOL);
			echo (tabulationx3.'<a class="darkbg" href="'.$fname
			.$temp_flavor_transfer
			.'"><img alt="" class="locked-image" style="vertical-align:middle;margin:0 4px 0 0;padding:0;" src="'
			.$fname.'-binary1.gif">Перейти на версию для бинарных<img alt="" class="locked-image" style="vertical-align:middle;margin:0 0 0 4px;padding:0;" src="'
			.$fname.'-binary2.gif"></a>'.PHP_EOL);
		} else {
			if (isset($_GET['flavor'])) { $temp_flavor_transfer = '&amp;flavor='.htmlspecialchars($_GET['flavor'],ENT_QUOTES); } else { $temp_flavor_transfer = ''; }
			echo (tabulationx3.'<a class="darkbg" href="'.$fname.'?config=changelog">Список изменений</a><br>'.PHP_EOL);
			echo (tabulationx3.'<a class="darkbg" href="'.$fname.'?config=nb'
			.$temp_flavor_transfer
			.'"><img alt="" class="locked-image" style="vertical-align:middle;margin:0 4px 0 0;padding:0;" src="'
			.$fname.'-heart.gif">Перейти на версию для небинарных<img alt="" class="locked-image" style="vertical-align:middle;margin:0 0 0 4px;padding:0;" src="lgbt.gif"></a>'.PHP_EOL);
		}
	}
	
?>
	<br>
	Время на сервере: <?php
$tz = 'Europe/Moscow';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz));
$dt->setTimestamp($timestamp);
echo $dt->format('H:i:s');	
?> (GMT+3)<br>
	Страница загружена за <?php
echo (round(((hrtime(true) - $load_time_start) * 0.001),1,PHP_ROUND_HALF_ODD));
?> миллисекунд
	</div>
	</div>
	</body>
</html>
