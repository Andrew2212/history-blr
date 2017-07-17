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
<? include ("../_include/header_download.php"); ?>
  
<!-- ***Content & Sidebars*** -->
<div class="container-fluid">
  
	<!-- ***Sidebar Left - include CurrentDir*** -->
	<? include ("../_include/dir_download.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
    
   		<!-- ***Top list [A-Z] *** -->
    	<? include ("../_include/top_list_download.php"); ?>
    
		<h1>Шаблон страницы</h1>
		
		<p class="img-float-left">
		<a href="../../images/img-download/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
		<img alt="Описание картинки" src="../../images/img-download/stub_thumb.jpg" height="140">
		<br><small>Описание</small>
		</a>
		</p>
		
		<p class="img-float-right">
		<a href="../../images/img-download/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
		<img alt="Описание картинки" src="../../images/img-download/stub_thumb.jpg" height="140">
		<br><small>Описание</small>
		</a>
		</p>
				
		<p>
		Абзац текста. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
		</p>
		<p>
		Абзац текста. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
		</p>
		
		<div class="col-md-12 img-float-center">	
		
		<div class="col-md-3">
		<a href="../../images/img-download/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
			<img alt="ОПИСАНИЕ КАРТИНКИ" src="../../images/img-download/stub_thumb.jpg" height="100" >
			<br><small>Описание</small>
		</a>
		</div>
		
		<div class="col-md-3">
		<a href="../../images/img-download/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
			<img alt="ОПИСАНИЕ КАРТИНКИ" src="../../images/img-download/stub_thumb.jpg" height="100" >
			<br><small>Описание</small>
		</a>
		</div>
		
		<div class="col-md-3">
		<a href="../../images/img-download/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
			<img alt="ОПИСАНИЕ КАРТИНКИ" src="../../images/img-download/stub_thumb.jpg" height="100" >
			<br><small>Описание</small>
		</a>
		</div>
		
		<div class="col-md-3">
		<a href="../../images/img-download/stub.jpg" class="highslide"
        onclick="return hs.expand(this)">
			<img alt="ОПИСАНИЕ КАРТИНКИ" src="../../images/img-download/stub_thumb.jpg" height="100" >
			<br><small>Описание</small>
		</a>
		</div>
		
		</div>
		

		
<!--Spoiler-->
<!--http://forwebmaster.net/prostoy-spoyler-dlya-sayta-v-html/-->
<div class="spoil">	
	<p>
	<div class="smallfont">
	<h3>Информация, скрытая спойлером <br><small>не входящая в текст статьи, но желательная</small></h3>		
	<input type="button" class="btn btn-info btn-sm" value="Показать / Скрыть" class="input-button" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = 'Скрыть'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = 'Показать / скрыть'; }">
	</p>
</div>

<div class="alt2">
	<div style="display: none;">

	<div class="col-md-12">		
   		 <ul class="nav nav-list">
        <!--It's just line-->
        <li class="nav-divider"></li>
    	</ul>    	
   	</div>
   	
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

		<div class="col-md-12">
   		 <ul class="nav nav-list">
        <!--It's just line-->
        <li class="nav-divider"></li>
    	</ul>
   		</div>     
      
</div>
</div>
</div>	
<!--/Spoiler-->
		
	
		<!-- Ссылки по теме -->
		<br><br><br>
		<p><small>
		be-x-old.wikipedia.org<br>
		be.wikipedia.org<br>
		pl.wikipedia.org<br>
		uk.wikipedia.org<br>
		ru.wikipedia.org<br>
		</small></p>
				
	<!-- ***/Page Content*** -->	
	</div>
	
	<!-- ***Sidebar Right*** -->
	<? include ("../_include/right_sidebar_download.php"); ?>

<!-- ***/Content & Sidebars*** -->	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>