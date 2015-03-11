<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>

<!-- ***Include Header*** -->
<? include ("../_include/header_download.php"); ?>
  
  <!-- ***Content & Sidebars*** -->
  <div class="container-fluid">
  

      <!-- ***Sidebar Left - include CurrentDir*** -->
<? include ("../_include/dir_download.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
		<h3>Монеты Беларуси до 1707 года</h3>
			<p>
			<img src="../../images/img-download/monet_blr.jpg" class="img-float-left"/>
			<p>
	
			</p>


			<p>
			Файл PDF</br>
			<a href="https://drive.google.com/file/d/0B_T3PThCY39DMWtyb29QdXpkdEk/view?usp=sharing" class="btn btn-default img-float-left"
						data-toggle="modal"> <i class="glyphicon glyphicon-cloud-download"></i> Посмотреть и скачать</a>
			</p>
			</p>
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_download.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>