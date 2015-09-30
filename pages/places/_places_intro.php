<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  
<!-- ***Title*** -->
 	<title>Топонимика. История Беларуси</title>

<!-- ***Meta*** -->
	<meta name="description" content="
	История Беларуси. Краткие интерактивные статьи об исторически значимых местах белорусских земель. Старые карты и архивные документы" />
  	<meta name="keywords" itemprop="keywords" content="
	  Исторические места Беларуси, памятные места Беларуси"/>
  	<meta property="og:image" content="http://history-belarus.by/images/img-places/places_title.jpg" />

<!-- ***Include Header*** -->
<? include ("../_include/header_places.php"); ?>
  
  <!-- ***Content & Sidebars*** -->
  <div class="container-fluid">
  

      <!-- ***Sidebar Left - include CurrentDir*** -->
<? include ("../_include/dir_places.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
               
    <!-- ***Top list [A-Z] *** -->
    <? include ("../_include/top_list_places.php"); ?>
  

		<h3>Введение</h3>
		<p>
		Топоним — имя собственное, обозначающее название (идентификатор) географического объекта — от небольших (колодец, овраг) до целых территорий.
		</p>
		<p>
		<i>
		"Основной целью изучения топонимики в школьном курсе географии является использование топонимов в географическом краеведении. 
		</br>Главной задачей является изучение и сохранение местных топонимов, раскрытие новых страниц истории родного края. 
		Решение данной задачи позволит  не потерять связь поколений, даст дополнительную информацию о природе, истории и географии родного края."
		</i>
		</br><small>festival.1september.ru</small>
		</p>
		
		<p>
		Вся новейшая топонимика РБ, календарь дат и событий, официальная символика — ничто не проникает в историю глубже 1924 года. 
		В таком контексте даже древние названия теряют свой смысл.
		</p>
		
		<p>
		Характерные старые названия несут в себе память <a href="../terms/blr_etnos.php">народа</a> о своих корнях, <a href="../terms/litwiny.php">этнонимах</a>. В Беларуси это Литовка, Литва (Гродненская обл.), Кривичи (Минская и Витебская обл.).
		В Летуве — Жмуйдки (Жямайткямис), в России — Мамаев Курган, Бахчисарай, Инсар.
	  
		</p>

			
		<div class="col-md-12 img-float-center">
			<img src="../../images/img-places/vostraja_brama.jpg" height="200"/>
			
		</br>
			<small><a href="wostra_brama.php">Вострая Брама</a> на обложке Виленского альбома.
			</br>Это ее вспоминает <a href="../figures/bogdanowich.php">поэт</a> в национальном <a href="../terms/blr_hymn.php">гимне</a>
			</small>
		</div>
		
		
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_places.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>