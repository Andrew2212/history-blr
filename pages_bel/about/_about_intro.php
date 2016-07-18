<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>

<!-- ***Include Header*** -->
<? include ("../_include/header_about.php"); ?>
  
  <!-- ***Content & Sidebars*** -->
  <div class="container-fluid">
  

      <!-- ***Sidebar Left - include CurrentDir*** -->
<? include ("../_include/dir_about.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
		<h1>О проекте</h1>
		<p>
		<a target="_blank" href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B8%D1%81%D1%81%D0%B8%D0%BE%D0%BD%D0%B5%D1%80%D1%81%D0%BA%D0%B0%D1%8F_%D1%86%D0%B5%D1%80%D0%BA%D0%BE%D0%B2%D1%8C_%D0%BA%D0%BE%D0%BF%D0%B8%D0%BC%D0%B8%D0%B7%D0%BC%D0%B0">
		<i>Si Deus Nobiscum quis contra nos</i>
		</a>
		</p>
		
		<p>Поводом к созданию этого сайта стало <a href="../articles/essay.php"> эссе</a>, написанное для конкуса, 
		объявленного Европейским колледжем Liberal Arts. 
		</br>Тема — "Как вы себе представляете «идеальный» школьный учебник по истории Беларуси?". 
		</p>
		
		<p>
		— Для чего был затеян этот проект? 
		</br>— Для <a href="../whatfor/_whatfor_intro.php">того</a>.  
		</p>
		
<!--Spoiler-->
<!--http://forwebmaster.net/prostoy-spoyler-dlya-sayta-v-html/-->
<div class="spoil">
	
	<p>
	<div class="smallfont">
	<h3>Аб выкладзеным у артыкулах</h3>
	
	<input type="button" class="btn btn-info btn-sm" value="Показать / Скрыть" class="input-button" 
	onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = ''; this.innerText = ''; this.value = '????????'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = ''; this.value = '????? ????????'; }">
	</p>

</div>

<div class="alt2">
<div style="display: none;">

		<div class="col-md-12">
   		 <ul class="nav nav-list">
        <!--It's just line-->
        <li class="nav-divider"></li>
    	</ul>
   		 </div>
<p>
			<h4>На сайте:</h4>
			<ui>
				<li>
				собраны общедоступные, общепризнанные (подтвержденные архивными материалами и академическими изданиями),
				 но не <i>общеизвестные</i> факты. 
				</li>
				</br>
				<li>
				нет сенсаций
				</li>
				</br>
				<li>
				нет авторских интерпретаций истории
				</li>
				</br>
				<li>
				нет политики и политических комменариев
				</li>
				</br>
				<li>
				цитаты подтверждаются <a target="_blank" href="../../images/img-about/peter_text.jpg">ссылками</a> на доступные первоисточники
				</li>
				</br>
				<li>
				для иллюстраций используются аутентичные карты и сканы из документов
				</li>
				</br>
				<li>
				представлена <a href="../download/_download_intro.php">подборка карт</a> высокого разрешения и архивных материалов
				</li>
				</br>
				<li>
				в текстах используются <a href="../terms/_terms_intro.php">термины</a>, современные описываемому периоду
				</br><small>Это важно — за каждым термином стоят 
				<a target="_blank" href="../../images/img-about/legioner.jpg">ассоциации</a>, влияющие на смысл и восприятие.</small>
				</li>				
		</p>		
		<p>
		Материал на сайте подан с позиции <a href="../articles/blr_nationalist.php">белорусского националиста</a> 
		(несколько отличающейся от позиции <a href="../articles/step_away.html">националиста русского</a>). 
		</br><small>И, да — не надо сразу кричать: "Фошизды!", "Дедывоевали!" — <a href="../articles/blr_nationalist.php">эту статью</a> стоит прочесть 
		— кстати, она в "Лучшем-2014" у вполне респектабельного издательства</small>
		</p>		
		<p>
		Сайт не претендует на статус энциклопедии — он дает связную картину времен, событий, имен и дат. И знакомит с источникам более полной информации.
		</p>		
		<p>
		Знание истории своего края — во многих странах это культурная норма. Это должно (может) стать трендом и в Беларуси. Ресурсом №1 для знакомства с историей страны должен (может) стать этот сайт
		</p>		
		<p>
		Страница разработки и продвижения проекта на портале <a href="http://www.talaka.by/projects/565">Talaka.by</a>
		</p>
		<p>
		Если вы располагаете временем и/или знаниями, чтобы помочь проекту 
		</br>— прочтите <a href="readme.php">README</a>. 
		</p>



		<div class="col-md-12">
   		 <ul class="nav nav-list">
        <!--It's just line-->
        <li class="nav-divider"></li>
    	</ul>
   		 </div>     
      
</div>
</div>
</div>	
<!--/Spoiler-->
		
<!-- *** Friends *** -->
<h3>Сябры і дапамога</h3>
<div class="col-md-12">
	
	<div class="col-md-12">
	
		<div class="col-md-4 img-float-center">
        <a target="_blank" href="http://www.talaka.by/">
        	<img src="../../images/img-about/talaka.jpg" width="160"/></br>
		  <small> Кропка збору неабыякавых людзей Talaka.by</small>
		  </a>
        </div>

        <div class="col-md-4 img-float-center">
        <a target="_blank" href="http://inbelhist.org/">
        	<img src="../../images/img-about/inbelhist.jpg" class="img-right-100"/></br>
		   <small>Інстытут беларускай гісторыі і культуры</small>
		  </a>
        </div>
        
        <div class="col-md-4 img-float-center">
        <a target="_blank" href="http://vkl3d.com/">
        <img src="../../images/img-about/vkl3d_logo.jpg" class="img-right-100"/></br>
          <small>ВКЛ, архитектура 3D</small>
		  </a>
        </div>
        
    </div>
    
    <div class="col-md-12">
        
        <div class="col-md-4 img-float-center">
        <a target="_blank" href="http://mfront.net/">
        <img src="../../images/img-about/m_front.jpg" class="img-right-100"/></br>
          <small>Малады Фронт</small>
		  </a>
        </div>

        <div class="col-md-4 img-float-center">
        <a target="_blank" href="http://budzma.by/">
        <img src="../../images/img-about/by_budzma.jpg" class="img-right-100"/></br>
          <small>Будзьма беларусамi!</small>
		  </a>
        </div>

        <div class="col-md-4 img-float-center">
        <a target="_blank" href="http://belhistory.com/">
        <img src="http://belhistory.com/banners/88f.jpg" class="img-right-100" alt="Беларускі гістарычны партал"/></br>
        <small>Беларускі гістарычны партал</small>
		</a>
        </div>
        
    </div>
    
    <div class="col-md-12">
        
       <div class="col-md-4 img-float-center">
        <a target="_blank" href="http://merjamaa.ru/">
        <img src="../../images/img-about/meryan_ban_smol.jpg" class="img-right-100"/></br>
          <small>История народа Меря</small>
		  </a>
        </div>
        
        <div class="col-md-4 img-float-center">
        <a target="_blank" href="https://belarusianheroes.com/">
        <img src="../../images/img-about/bel_heroes.png" class="img-right-100"/></br>
          <small>Беларускія героі</small>
		  </a>
        </div>

        <div class="col-md-4 img-float-center">
        	<p>
        	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="88" height="31" id="belarus 88_31" align="middle">
			<param name="allowScriptAccess" value="sameDomain" />
			<param name="allowFullScreen" value="false" />
			<param name="movie" value="http://belarus.kz/banners/88_31.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	
			<embed src="http://belarus.kz/banners/88_31.swf" quality="high" bgcolor="#ffffff" width="88" height="31" name="belarus 88_31" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" /></object>
			</br>
      	
           <a target="_blank" href="http://www.belarus.kz/">
		   <small>Беларускі партал у Казахстане</small>
		  </a>
		  </p>
        </div>
        
    </div>
    
    <div class="col-md-12">
        
        <div class="col-md-4 img-float-center">
        <a target="_blank" href="http://www.smalensk.org/">
        <img src="../../images/img-about/blr_smalensk.jpg" class="img-right-100"/></br>
          <small>Беларуская Смаленшчына</small>
		  </a>
        </div>

        <div class="col-md-4 img-float-center">
        <a target="_blank" href="http://tatarnikov.com/">
        <img src="../../images/img-about/pavel.jpg" class="img-right-100"/></br>
          <small>Pavel Tatarnikov, художник</small>
		  </a>
        </div>

        <div class="col-md-4 img-float-center">
        <a target="_blank" href="https://www.facebook.com/hovsepme">
        <img src="../../images/img-about/logo_jesuit.jpg" class="img-right-100"/></br>
          <small>Hovsep Meliksetian, теолог</small>
		  </a>
        </div>
        
    </div>
    
    <div class="col-md-12">
        
        <div class="col-md-4 img-float-center">
           <a target="_blank" href="https://www.facebook.com/pages/%D0%9C%D0%B0%D0%B9%D1%81%D1%82%D1%8D%D1%80%D0%BD%D1%8F-%D1%81%D1%82%D0%B0%D1%80%D0%B0%D0%B4%D0%B0%D1%9E%D0%BD%D1%96%D1%85-%D0%B3%D0%B5%D0%B0%D0%B3%D1%80%D0%B0%D1%84%D1%96%D1%87%D0%BD%D1%8B%D1%85-%D0%BC%D0%B0%D0%BF/527727034041838">
		   <img src="../../images/img-about/maps.jpg" class="img-right-100" width="80"/></br>
		   <small>Майстэрня старадаўніх геаграфічных мап</small>
		  </a>
        </div>

		<div class="col-md-4 img-float-center">
		<!--
        	<a target="_blank" href="http://www.istoriia.ru">
			<img src="http://www.istoriia.ru/images/rus.jpg" alt="Всемирная История" width="88" height="31" border="1"></br>
			<small>История в деталях — проект, посвященный Всемирной Истории</small></a>
		-->
        </div>
        
    </div>
    
</div>
<!-- /*** Friends *** -->		
		
		<p>
		Белорусскоязычная и мобильная версии сайта — в разрабтке.
		</br>Любая информационная помощь принимается. 
		</br>Любая информационная помощь оказывается.
		</p>		
		
		<p>
		Enjoy
		</br>Кристобаль Хозевич
		</p>
		
		<p>
		<small>Эл. почта для писем </small>
		</br><font style="color:#F00;"> history.msg<img src="../../images/img-about/dog.jpg"/>gmail.com</font>
		</p>
		
		
	<div class="col-md-12">
	
		<div class="col-md-6">
		<h4>В проекте участвуют</h4>
		<ul>
        <li>
          <a href="#" class="item-unable">Кристобаль Хозевич</a>
        </li>
        <li>
          <a target="_blank" href="http://ok.ru/profile/343280015857">Александр Грохотов</a>,
		  администратор <a target="_blank" href="http://ok.ru/group/53595131412721">ОК-группы</a></a>
        </li>
        <li>
          <a target="_blank" href="https://vk.com/id134079550" >Віктар Старасценка	</a>, пераклад артыкулаў на мову
        </li>
        <li>
          <a target="_blank" href="https://www.facebook.com/sergey.rogachevsky" >Sergey Rogachevsky</a>, программист-консультант
        </li>
        <li>
          <a target="_blank" href="http://www.talaka.by/user/555" >Ратмир Новиков</a>, программист-консультант
        </li>
        <li>
          <a target="_blank" href="https://www.facebook.com/aliaksei.kairys">Aliaksei Kairys</a>, историк, автор и эксперт текстов по темам
        </li>
        </ul>
        </div>
        
        <div class="col-md-6">
        <h4>
			Цветовые обозначения оглавлений разделов:
		</h4>
		<p>
			<a href="#" class="item-unable">Some link</a> — страница отсутствует
		</p>
		<p>
			<a href="#" class="item-edit">Some link</a> — страница с неотредактированным текстом
		</p>
		<p>
			<a href="#">Some link</a> — страница готова
		</p>
        </div>
	   
	</div>
	
	<div class="col-md-12 img-float-center">
      		 <h4>Наши банеры</h4>
       		 
       		 <div class="col-md-3 img-float-center">
       		 <p>
       		 <img src="../../banners/banner_120x60.jpg">
        	 </br><small>120x60</small>
        	 </p>
        	 <p>
       		 <img src="../../banners/banner_88x31.jpg">
        	 </br><small>88x31</small>
        	 </p>
       		 </div>
       		 
       		 <div class="col-md-3 img-float-center">
       		 <img src="../../banners/banner_150x60.jpg">
        	 </br><small>150х60</small>
       		 </div>
       		 
       		 <div class="col-md-3 img-float-center">
       		 <img src="../../banners/banner_100x100.jpg">
        	 </br><small>100х100</small>
       		 </div>
        
       		 <div class="col-md-3 img-float-center">
       		 <img src="../../banners/banner_175x175.jpg">
      		 </br><small>175x175</small>
      		 </div>
   	</div>

				
		
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_about.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>