<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>

<!-- ***Include Header*** -->
<? include ("../_include/header_articles.php"); ?>
  
  <!-- ***Content & Sidebars*** -->
  <div class="container-fluid">
  

      <!-- ***Sidebar Left - include CurrentDir*** -->
<? include ("../_include/dir_articles.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
		<h3>Введение</h3>
		<img src="../../images/img-articles/hem.jpg" height="120" class="img-float-left"/>
		<p>
		<i>По-настоящему серьезное отношение к писательскому делу – одно из двух непременных условий. 
		</br>Второе, к сожалению, – талант. </i>
		</br>
		<small>
		Эрнест Хемингуэй (1899–1961)
		</br>[американец? кубинец? англичанин? испанец?]
		</small>
		</p>
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_articles.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>