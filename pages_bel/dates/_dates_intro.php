<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>

<!-- ***Include Header*** -->
<? include ("../_include/header_dates.php"); ?>
  
  <!-- ***Content & Sidebars*** -->
  <div class="container-fluid">
  

      <!-- ***Sidebar Left - include CurrentDir*** -->
<? include ("../_include/dir_dates.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
		<h3>Календарь</h3>
		<p>
			<h4>Раздел в разработке</h4>
				<div class="col-md-3">
				<ul>
					<li><a href="january.php">Январь </a></li>							
				</ul>
				<ul>
					<li><a href="february.php">Февраль </a></li>							
				</ul>
				<ul>
					<li><a href="march.php">Март </a></li>							
				</ul>
				</div>
				
				<div class="col-md-3">
				<ul>
					<li><a href="april.php">Апрель </a></li>							
				</ul>
				<ul>
					<li><a href="may.php">Май </a></li>							
				</ul>
				<ul>
					<li><a href="june.php">Июнь </a></li>							
				</ul>				
				</div>
				
				<div class="col-md-3">
				<ul>
					<li><a href="july.php">Июль </a></li>							
				</ul>
				<ul>
					<li><a href="august.php">Август </a></li>							
				</ul>
				<ul>
					<li><a href="september.php">Сентябрь </a></li>							
				</ul>
				</div>
				
				<div class="col-md-3">
				<ul>
					<li><a href="october.php">Октябрь </a></li>							
				</ul>
				<ul>
					<li><a href="november.php">Ноябрь </a></li>							
				</ul>
				<ul>
					<li><a href="december.php">Декабрь </a></li>							
				</ul>				
				</div>
			
		</p>

	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_dates.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>