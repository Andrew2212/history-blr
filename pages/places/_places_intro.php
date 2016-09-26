<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>
  
<!-- ***Title*** -->
 	<title>Топонимика Беларуси</title>

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
  
		<p>
		Топоним — имя собственное, обозначающее название (идентификатор) географического объекта — от небольших (колодец, овраг) до целых территорий.
		</p>
		<div class="col-md-12">
		<p class="img-float-left">
			<a href="../../images/img-figures/gusowsky/1539_Carta_Marina.jpg" class="highslide"
        	onclick="return hs.expand(this)">
			<img alt="Великое княжество Литовское, ВКЛ" src="../../images/img-figures/gusowsky/1539_Carta_Marina_thumb.jpg" height="120" >
			</a>
		</p>
		<p>
		<i>
		"Основной целью изучения топонимики в школьном курсе географии является использование топонимов в географическом краеведении. 
		</br>Главной задачей является изучение и сохранение местных топонимов, раскрытие новых страниц истории родного края. 
		Решение данной задачи позволит  не потерять связь поколений, даст дополнительную информацию о природе, истории и географии родного края."
		</i>
		</br><small>festival.1september.ru</small>
		</p>
		</div>
		
		<p>
		Вся новейшая топонимика РБ, календарь дат и событий, официальная символика — ничто не проникает в историю глубже 1924 года. 
		В таком контексте даже древние названия теряют свой смысл.
		</p>
		
		<p>
		Характерные старые названия несут в себе память <a href="../terms/blr_etnos.php">народа</a> о своих корнях, <a href="../terms/litwiny.php">этнонимах</a>. В Беларуси это Литовка, Литва (Гродненская обл.), Кривичи (Минская и Витебская обл.).
		В Летуве — Жмуйдки (Жямайткямис), в России — Мамаев Курган, Бахчисарай, Инсар.	  
		</p>
		
		<p>
		Такие топонимы, как <a href="../events/battle_nemiga.php">Немига</a>, <a href="../events/orsha_battle.php">Крапивенское поле</a>,
		 <a href="../events/battle_polonka.php">Полонка</a>, <a href="../places/wostra_brama.php">Вострая Брама</a>,
		  <a href="../places/krevo.php">Крево</a> — это живая память о том, что происходило на нашей земле.
		</p>
	
	<!-- *** blr_entire *** -->
  	<? include ("../_include/include_blr_entire.php"); ?>	
				
</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_places.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>