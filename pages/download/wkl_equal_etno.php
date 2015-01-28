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
		<h3>
		<a href="blr_people.php">Этнографическая карта</a> белорусов <small>(профессор Е. Ф. Карский, 1903 г.)
		</small> на 
		<a href="map_wkl_lotter.php">карте ВКЛ</a> <small>(Тобиас Лоттер, 1778 г.)</small>
		</h3>
			<p>
			<img src="../../images/img-download/map_Lotter_litwa_1778_etno_thumb.jpg" class="img-float-left"/>

			<p>
			Совмещение карт дает представление об этнической принадлежности земель, входивших в состав ВКЛ.
			</br>Карты совмещались по расположению городов. Есть расхождение между возможностями картографии XVIII и XX веков (точки городов совпадают не идеально). 			
			</p>

			<p>
			Атлас 1864 года А. Ф. Риттиха и составленная им «Этнографическая карта Европейской России» (1875) так очерчивали территорию расселения белорусов: 
			</br>"на запад и юг от Сувалок (на запад от Белостока), и дальше по реках Нарев, Ясельда, Припять до ее впадения в Днепр,
			</br> на север и восток севернее <a href="../places/wilno.php">Вильнюса</a>, далее на Свенцяны, Люцин, Великие Луки, на запад от Вязьмы и Мглина, затем по Днепру до устья Припяти."
			</br>При этнической дифференциации Эркерт и Риттих исходили из конфессиональной принадлежности.
			</p>
			
			<p>
			Е. Карский, М. Довнар-Запольский и члены Московской Диалектологической комиссии при составлении подобных карт (1903, 1915, 1919) 
			руководствовались лингвистическими приметами и расширяли этническую территорию белорусов на правобережье Припяти, а восток до Ржева и Брянска.
			</p>
			
			<p>
			Карта ВКЛ Лоттера составлена в 1778 году — сразу после Первого <a href="../events/razbor_rechi.php">раздела Речи Посполитой</a> (потерянные земли обозначены зеленым цветом)
			</p>

			<p>
			Размер 5192 х 4511</br>
			<a href="https://drive.google.com/file/d/0B_T3PThCY39DbWJVaVZOMDF1eU0/view?usp=sharing" class="btn btn-default img-float-left"
						data-toggle="modal"> <i class="glyphicon glyphicon-cloud-download"></i> Посмотреть и скачать</a>
			</p>
			</p>
		
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_download.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>