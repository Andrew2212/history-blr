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
		<h3>Сентябрь</h3>
		
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
					<td>2</td>
					<td>
						<ul>
							<li>1621 Начало <a href="../events/battle_hotin.php">битвы под Хотином</a> с Османской империей</li>
						</ul>
					</td>
				</tr>
				
				<tr>
					<td class="data-vip">8</td>
					<td>
						<ul>
							<li>День воинской славы. 
							</br>1514 <a href="../events/orsha_battle.php">Битва под Оршей</a> с Московским царством</li>
						</ul>
					</td>
				</tr>
				
				<tr>
					<td>11</td>
					<td>
						<ul>
							<li>1530 У себя на родине, в Турове (РБ), умер <a href="../figures/ostrogski.php">Константин Острожский</a> — великий гетман Литовский</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>20</td>
					<td>
						<ul>
							<li>1610 <a href="../events/war_moscow_1610.php">Взятие Москвы</a> во время 
							<a href="../events/war_moscow_1610.php">войны 1609-1618</a></li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>24</td>
					<td>
						<ul>
							<li>1362 <a href="../events/sinie_wody.php">Битва на Синих водах</a> с Золотой Ордой
							 [ <small>дата примерно между 24 сент. - 25 дек.</small> ]</li>
							 <li>1621 Умер <a href="../figures/hodkewich.php">Ян Кароль Ходкевич</a> — во время своей последней битвы 
							 (<a href="../events/battle_hotin.php">Битва под Хотином</a> с Османской Империей)</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>27</td>
					<td>
						<ul>
							<li>1605 <a href="../events/battle_kircholm.php">Битва под Кирхгольмом</a> со Швецией</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>29</td>
					<td>
						<ul>
							<li>1529 Утвержден 1-й <a href="../terms/statut.php">Статут ВКЛ</a></li>
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