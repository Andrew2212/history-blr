<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    
      <!-- ***Title*** -->
    <title>Апрель. Календарь Беларуси</title>

<!-- ***Meta*** -->  
    <meta name="description" content="Апрель. Национальные праздники и 
	даты знаменательных событий — битвы, унии, дни рождения выдающихся людей. История страны дает повод прикоснуться к национальной памяти" />
    <meta name="keywords" itemprop="keywords" content="история беларуси, основные даты в истории Беларуси, важные даты в истории Беларуси, даты истории Беларуси, 
	праздники Беларуси, краткая история беларуси в датах, важные даты истории Беларуси, история Беларуси кратко" />
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

		<h1>Апрель</h1>
		
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
					<td>1</td>
					<td>
						<ul>
							<li>День памяти <a href="../figures/zofia_sluck.php">св. княгини Софии Слуцкой</a> — католички, канонизированной православными
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
							<li>1839 Родился <a href="../figures/przewalskij.php">Николай Пржевальский</a> — путешественник, потомок шляхты белорусской</li>
						</ul>
					</td>
				</tr>
				
				<tr>
					<td>25</td>
					<td>
						<ul>
							<li>1859 Указ о запрете печатать книги <a href="../terms/blr_mova.php">беларускай лацінкай</a></li>
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