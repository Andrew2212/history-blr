<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>

<!-- ***Include Header*** -->
<? include ("../_include/header_places.php"); ?>
  
  <!-- ***Content & Sidebars*** -->
  <div class="container-fluid">
  

      <!-- ***Sidebar Left - include CurrentDir*** -->
<? include ("../_include/dir_places.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
		<h3>Море Геродота</h3>
		<p>
			Статья на 6000 знаков (с пробелами)</br></br>
		
		</p>
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_places.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>