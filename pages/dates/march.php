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
		<h3>Март</h3>
		
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
							<li>1566 Утвержден 2-й <a href="../terms/statut.php">Статут ВКЛ</a></li>							
						</ul>
					</td>
				</tr>

				<tr>
					<td class="data-vip">3</td>
					<td>
						<ul>
							<li>День памяти павших в бою
							</br>1067 <a href="../events/battle_nemiga.php">Битва на Немиге</a> Всеслава Чародея с Ярославовичами</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>12</td>
					<td>
						<ul>
							<li>1794 Начало <a href="../events/uprising_1794.php">Восстания</a> Тадеуша Костюшко</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>20</td>
					<td>
						<ul>
							<li>Образована <a href="../events/confederacyi_18vek.php">Слуцкая конфедерация</a> — союз диссидентской шляхты под патронажем России.</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>22</td>
					<td>
						<ul>
							<li>1864 Казнен <a href="../figures/kalinowski.php">Кастусь Калиновский</a> — предводитель восстания на Беларуси </li>
						</ul>
					</td>
				</tr>

				<tr>
					<td class="data-vip">25</td>
					<td>
						<ul>
							<li>День воли
							</br>1918 Провозглашение <a href="../terms/bnr.php">Белорусской Народной Республики</a></li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>27</td>
					<td>
						<ul>
							<li>1891 Родился <a href="../figures/duz_duszewski.php">Клавдий Дуж-Душевский</a> — белорусский националист, создатель эскиза национального флага</li>
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