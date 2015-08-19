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
		<h3>Апрель</h3>
		
		<div class="col-md-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Дата</th>
					<th>Событие</th>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<td class="data-vip">3</td>
					<td>
						<ul>
							<li>Дзень дзяржаўнасьці <a href="../terms/blr_mova.php">беларускае мовы</a></li>
						</ul>
					</td>
				</tr>
				
				<tr>
					<td>12</td>
					<td>
						<ul>
							<li>1839 Родился <a href="../figures/przewalskij.php">Николай Пржевальский</a> — путешественник, потомок шляхты белорусской</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>28</td>
					<td>
						<ul>
							<li>День памяти <a href="../figures/kirill_tur.php">Кирилла Туровского</a></li>
						</ul>
					</td>
				</tr>
				
			
			</tbody>
		</table>
	</div>
	
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_dates.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>