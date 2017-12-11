<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  
  <!-- ***Title*** -->
 	<title>Шаблон страницы</title>

<!-- ***Meta*** -->
	<!-- ***ОПИСАНИЕ СТРАНИЦЫ*** -->
    <meta name="description" content="ОПИСАНИЕ СТРАНИЦЫ, показываемое при публикации в соцсетях или при поиске
	" />
	<!-- ***ПОИСКОВЫЕ СЛОВА*** -->
    <meta name="keywords" itemprop="keywords" content=" ПОИСКОВЫЕ СЛОВА ДЛЯ ЭТОЙ СТРАНИЦЫ,..., 
	 ВКЛ, Великое княжество Литовское, Литва, Беларусь, белорусский этнос, религия в Беларуси, белорусы, краткая история Беларуси, история Беларуси, история Белоруссии, История беларуси кратко в датах" />
	<!-- ***КАРТИНКА для публикаций в соцсетях*** -->
	<meta property="og:image" content="http://history-belarus.by/img/Lithvaniae_Blr.jpg" />

<!-- ***Include Header*** -->
<? include ("../_include/header_events.php"); ?>
  
<!-- ***Content & Sidebars*** -->
<div class="container-fluid">
  
	<!-- ***Sidebar Left - include CurrentDir*** -->
	<? include ("../_include/dir_events.php"); ?>

	
<!-- ***Page Content*** -->
<div class="col-md-8">
		<h1>Шаблон страницы</h1>
		
		<div class="img-float-left">
		<a href="../../images/img-about/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
		<img alt="Описание картинки" src="../../images/img-about/stub_thumb.jpg" class="thumbInfo">
		<p class="img-float-center">
		<small>Описание</small>
		</p>
		</a>
		</div>
		
		<div class="img-float-right">
		<a href="../../images/img-about/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
		<img alt="Описание картинки" src="../../images/img-about/stub_thumb.jpg" class="thumbInfo">
		<p class="img-float-center">
		<small>Описание</small>
		</p>
		</a>
		</div>
				
		<p>
		Абзац текста. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
		</p>
		
	<div class="col-md-12 img-float-center">	
		
		<div class="col-md-4">
		<a href="../../images/img-about/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
			<img alt="ОПИСАНИЕ КАРТИНКИ" src="../../images/img-about/stub_thumb.jpg" class="thumb" >
			<br><small>Описание</small>
		</a>
		</div>
		
		<div class="col-md-4">
		<a href="../../images/img-about/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
			<img alt="ОПИСАНИЕ КАРТИНКИ" src="../../images/img-about/stub_thumb.jpg" class="thumb" >
			<br><small>Описание</small>
		</a>
		</div>
		
		<div class="col-md-4">
		<a href="../../images/img-about/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
			<img alt="ОПИСАНИЕ КАРТИНКИ" src="../../images/img-about/stub_thumb.jpg" class="thumb" >
			<br><small>Описание</small>
		</a>
		</div>
				
	</div>
		
		
<!--Spoiler-->
<div class="col-md-12">
<h2>Что-то под спойлером:</h2>		
<? include ("../_include/_include_spoiler-Start.php"); ?>
   	
	<p>
		<h4>Список:</h4>
		<ul>
			<li>
				Пункт первый. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			</li>
			<li>
				Пункт второй. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			</li>
			<br>
			<li>
				Пункт третий. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
			</li>			
		</ul>				
	</p>
	
	<p>
		Абзац текста. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>		

<!--/Spoiler-->		
<? include ("../_include/_include_spoiler-End.php"); ?>
</div>		
	
		<!-- Ссылки по теме -->
		<br><br><br>
		<p><small>
		<!-- Адреса нужных ссылок -->
		</small></p>
				
<!-- ***/Page Content div class="col-md-8"*** -->	
</div>
	
	<!-- ***Sidebar Right*** -->
	<? include ("../_include/right_sidebar_events.php"); ?>

<!-- ***/Content & Sidebars*** -->	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>