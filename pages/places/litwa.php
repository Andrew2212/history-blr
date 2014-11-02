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
		<h3>Литва</h3>
		<p>
			Some context
		</p>
		<p class="img-float-center">
			<img src="../../images/img-places/litwa/map_litwa_14_century_by_historic_source.jpg"/>
		</p>
		
		<p class="img-float-center">
			<img src="../../images/img-places/litwa/Goroda VKL_Rus.jpg"/>
		</p>

		
		
		</br></br></br>
		<p><small>
		be-x-old.wikipedia.org</br>
		be.wikipedia.org</br>
		pl.wikipedia.org</br>
		uk.wikipedia.org</br>
		ru.wikipedia.org</br>
		</small></p>
		
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_places.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>