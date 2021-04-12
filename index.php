	<!DOCTYPE html>
<?php
define('COPYRIGHT', 'Веб-мастер');
 setlocale(LC_ALL, "russian");

$day = strftime('%d');

$mon = strftime('%M');

$year = strftime('%Y');
$leftMenu = [

	['link'=>'Домой', 'href'=>'index.php'],
	
	['link'=>'О нас', 'href'=>'about.php'],
	
	['link'=>'Контакты', 'href'=>'contact.php'],
	['link'=>'Таблица', 'href'=>'table.php']
	
	];

?> 
<html>
	<head>
		<title>Наш сайт</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="header">
			<!-- Верхняя часть страницы -->
			<span class="slogan">Знания - сила</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1><?php $hour = (int)strftime('%H');
$welcome = '';
if ($hour < 6) $welcome = 'Добрый ночи,';
elseif (($hour >= 6) && ($hour <= 12)) $welcome = 'Доброе утро,';
elseif (($hour > 12) && ($hour <= 18)) $welcome = 'Добрый день,';
elseif (($hour > 18) && ($hour <= 24)) $welcome = 'Доброй ночи,';
echo $welcome?> Гость!</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<blockquote> <?php echo "Сегодня $day число, $mon месяц, $year год.";

?>

</blockquote>
			<h3>PHP</h3>
			<p>
			PHP (англ. PHP: Hypertext Preprocessor — «PHP: препроцессор гипертекста»; первоначально Personal Home Page Tools — «Инструменты для создания персональных веб-страниц»; произносится пи-эйч-пи) — скриптовый язык программирования общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков программирования, применяющихся для создания динамических веб-сайтов.
			</p>
			<h3>Динамический веб-сайт</h3>
			<p>
			Динамический сайт — сайт, состоящий из динамичных страниц — шаблонов, контента, скриптов и прочего, в виде отдельных файлов. Страница сайта, показываемая в итоге браузеру пользователя, формируется на стороне сервера динамически, по запросу, из страницы-шаблона и отдельно хранимого содержимого (информации, скриптов и др.). 
			</p>
			<p>
			Как правило для отображения любого количества однотипных страниц используется одна страница-шаблон, в которую подгружается соответствующее содержимое, это позволяет единомоментно корректировать внешний вид сайта (множество всех его страниц), редактируя всего лишь один шаблон.
			</p>	
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<?php
foreach ($leftMenu as $item) {
	echo "<ul>";
		echo "<li>";
			echo "<a href='{$item['href']}'> {$item['link']} </a>"; 
		echo "</li>";
	echo "</ul>";
}

?>
			
			<!-- Меню -->
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; <?php echo COPYRIGHT?> <?= strftime('%Y')?> 
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>