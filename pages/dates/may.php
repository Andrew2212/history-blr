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
		<h3>Май</h3>
		
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
							<li>1576 Коронация <a href="../figures/batory.php">Стефана Батория</a> — освободителя Полоцка во время 
							<a href="../events/war_livonia.php">Ливонской войны</a></li>
							<li>1710 Взорван Полоцкий <a href="../places/sophia_sobor.php">Софийский собор</a> войсками Петра I во время 
							<a href="../events/war_great_north.php">Великой Северной войны</a> 1700-1721</li>							
						</ul>
					</td>
				</tr>

				<tr>
					<td>3</td>
					<td>
						<ul>
							<li>1791 Принятие Четырехлетним сеймом <a href="../events/constitution_3may.php">Конституции 3 мая</a> 
							— попытка спасти Речь Посполитую</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>6</td>
					<td>
						<ul>
							<li>1434 Подписан <a href="../events/unia_gorodlo.php">Трокский привилей</a> о равенстве в правах католиков и православных  — <i>"что бы не было никакого разлада и чтобы они пользовались равными милостями"</i></li>
							<li>1686 Подписан договор о "Вечном мире" — окончательный итог <a href="../events/blood_potop.php">Кровавого Потопа</a> 1654-67.</li>
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