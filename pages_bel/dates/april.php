<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="be">
  <head>
    
      <!-- ***Title*** -->
    <title>Красавік. Каляндар Беларусі</title>

<!-- ***Meta*** -->  
    <meta name="description" content="Красавік. Нацыянальныя святы і 
	даты знамянальных падзей - бітвы, уніі, дні народзінаў выбітных людзей. Гісторыя краіны дае нагоду дакрануцца да нацыянальнай памяці" />
    <meta name="keywords" itemprop="keywords" content="гісторыя Беларусі, асноўныя даты ў гісторыі Беларусі, важныя даты ў гісторыі Беларусі, даты гісторыі Беларусі, 
	святы Беларусі, кароткая гісторыя Беларусі ў датах, важныя даты гісторыі Беларусі, гісторыя Беларусі коратка" />
	<meta property="og:image" content="http://history-belarus.by/images/img-dates/title.jpg" />

<!-- ***Include Header*** -->
<? include ("../_include/header_dates.php"); ?>
  
  <!-- ***Content & Sidebars*** -->
  <div class="container-fluid">
  

      <!-- ***Sidebar Left - include CurrentDir*** -->
<? include ("../_include/dir_dates.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
    
<!-- ***Top list 12_Months *** -->
<? include ("../_include/top_list_dates.php"); ?>

		<h1>Красавік</h1>
		
		<div class="col-md-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Дата</th>
					<th>Падзея</th>
				</tr>
			</thead>
			<tbody>
			
				<tr>
					<td>1</td>
					<td>
						<ul>
							<li>Дзень памяці <a href="../figures/zofia_sluck.php">святой княгіні Сафіі Слуцкай</a> — каталічкі, кананізаванай праваслаўнымі
							</li>
						</ul>
					</td>
				</tr>
				
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
							<li>1839 Нарадзіўся<a href="../figures/przewalskij.php">Мікалай Пржэвальскі</a> — вандроўнік, нашчадак шляхты беларускай</li>
						</ul>
					</td>
				</tr>
				
				<tr>
					<td>25</td>
					<td>
						<ul>
							<li>1859 Указ пра забарону друкаваць кнігі <a href="../terms/blr_mova.php">беларускай лацінкай</a></li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>28</td>
					<td>
						<ul>
							<li>Дзень памяці <a href="../figures/kirill_tur.php">Кірыла Тураўскага</a></li>
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