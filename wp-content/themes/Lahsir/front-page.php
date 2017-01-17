<?php get_header();?> 
<div class="home" id="home">
   <div class="wrapper">
      <div class="direc" id="info"></div>
      <div class="title">
         <?php
            if (get_theme_mod('text1')){
            echo get_theme_mod('text1'); 
            }
            else { ?>
         Регистрация <span>медицинских изделий
         <br>Цены напрямую</span> от лаборатории
         <br>Под ключ <span>от 4 месяцев</span>
         <?php }; ?>
         <ul class="advans">
            <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/1_1.png" alt=""/></span>
               <label>Более 300 регистраций <br> за 12 лет работы</label>
            </li>
            <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/1_2.png" alt=""/></span>
               <label>Эксперты с опытом<br>работы в Росздравнадзоре</label>
            </li>
            <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/1_3.png" alt=""/></span>
               <label>Оплата после<br>выполнения работ</label>
            </li>
         </ul>
      </div>
      <div class="form hidemob"> 
         <label class="tit">Узнайте сроки и стоимость<br>
         регистрации для вашего<br> 
         медицинского изделия</label>
         <?php echo do_shortcode('[contact-form-7 id="94"]');?>
      </div>
      <a href="#call2" class="fancybox mobile buttonmob">Узнать сроки</a>
      <a href="#about" class="scroll scrollbind"></a>
   </div>
</div>
<div class="about" id="about">
   <div class="wrapper">
      <div class="direc" id="aboutus"></div>
      <div class="info">
         <div class="title">
            Мы специализируемся <i class="mobbr"></i>на регистрации<br>медицинских изделий и оборудования
         </div>
         <ul>
            <li>
               <span>Помогаем получить регистрацию <i class="mobbr"></i>на медицинские изделия<br><i class="mobbr"></i> для дальнейшей торговли на территории <i class="mobbr"></i>РФ<br>(Регистрационное Удостоверение Росздравнадзора) <i class="mobbr"></i><br>и Европы (Европейский CE сертификат).
               </span>
            </li>
			<li><span>Эффективно выполняем задачи<i class="mobbr"></i> по лицензированию производства <br> медицинских изделий</span></li>
            <li><span>Лаборатория аккредитованна<i class="mobbr"></i> в Росздравнадзоре, Росстандарте,<i class="mobbr"></i>
               <br>Росаккредитации, МЧС России <i class="mobbr"></i>и внесена в реестр.</span>
            </li>
			<li> <span>Работаем со всеми регионами РФ <i class="mobbr"></i>и зарубежными производителями.</span></li>
         </ul>
      </div>
      <a class="fancybox attestat" href="<?php echo get_theme_mod('1-upload'); ?>"><img src="<?php echo get_theme_mod('1-upload'); ?>" alt=""/><label>Аттестат аккредитации ИЛ<br><b>№RA.RU.21MЭ64.</b></label></a>
   </div>
</div>
<div class="personnel" id="personnel">
   <div class="wrapper">
      <div class="title">О персонале лаборатории</div>
      <ul>
         <li>
            <span>
            <img src="<?php echo get_template_directory_uri()?>/images/icons/2_1.png" alt=""/>
            </span>
            Инженеры-испытатели с 10-летним стажем<br>
            по аккредитованным направлениям<br>
            деятельности и знаниями, необходимыми<br>
            для успешных испытаний.
         </li>
         <li>
            <span>
            <img src="<?php echo get_template_directory_uri()?>/images/icons/2_2.png" alt=""/>
            </span>
            В числе наших специалистов - эксперты<br>
            с опытом работы в Росздравнадзоре.<br>
            Они изучили систему изнутри и знают,<br>
            что необходимо для регистрации.
         </li>
         <li>
            <span>
            <img src="<?php echo get_template_directory_uri()?>/images/icons/2_3.png" alt=""/>
            </span>
            Среди сотрудников - научные деятели,<br>
            кандидаты физико-математических наук.<br>
            Их опыт помогает быстрее оценивать<br>
            возможность получения регистрации.
         </li>
         <li>
            <span>
            <img src="<?php echo get_template_directory_uri()?>/images/icons/2_4.png" alt=""/>
            </span>
            Персонал ежегодно проходит курсы<br>
            Росстандарта, Академии сертификации<br>
            и ВНИИСа по повышению квалификации<br>
            для овладения актуальными знаниями.
         </li>
      </ul>
      <div class="diplomas">
         <div class="title">
            Посмотрите дипломы о повышении квалификации<br>наших научных сотрудников
         </div>
         <a rel="group1" href="<?php echo get_theme_mod('2_1-upload'); ?>" class="fancybox"><img src="<?php echo get_theme_mod('2_1-upload'); ?>" alt=""/></a>
         <a rel="group1"  href="<?php echo get_theme_mod('2_2-upload'); ?>" class="fancybox"><img src="<?php echo get_theme_mod('2_2-upload'); ?>" alt=""/></a>
         <a rel="group1"  href="<?php echo get_theme_mod('2_3-upload'); ?>" class="fancybox"><img src="<?php echo get_theme_mod('2_3-upload'); ?>" alt=""/></a>
         <a  rel="group1" href="<?php echo get_theme_mod('2_4-upload'); ?>" class="fancybox"><img src="<?php echo get_theme_mod('2_4-upload'); ?>" alt=""/></a>
      </div>
   </div>
</div>
<div class="experience" id="experience">
   <div class="wrapper">
      <div class="info">
         <div class="title">Лаборатория работает с 2004 года</div>
         <ul>
            <li><span>Сроки и стоимость проведения процедуры на порядок ниже за <i class="mobbr"></i>счёт наличия своей лаборатории площадью 700 м<sup>2</sup></span></li>
            <li><span>За 12 лет проведено более 30 000 испытаний<br>для 20 стран мира, поэтому мы знакомы со всеми <br>тонкостями и справимся с любой регистрацией.</span></li>
            <li><span>Имеется свыше 400 единиц испытательного <br>и измерительного оборудования, регулярно <br>список пополняется новыми приборами.</span></li>
            <li><span>Оборудование проходит калибровку в центрах<br> стандартизации, метрологии и испытаний, что <br>сводит к минимуму вероятность ошибки.</span></li>
         </ul>
      </div>
      <div class="experience-slider">
         <a rel="group2"  href="<?php echo get_template_directory_uri()?>/images/experience/6.jpg" class="fancybox"><img src="<?php echo get_template_directory_uri()?>/images/experience/mini/5.png" alt=""/></a>
         <a rel="group2"  href="<?php echo get_template_directory_uri()?>/images/experience/5.jpg" class="fancybox"><img src="<?php echo get_template_directory_uri()?>/images/experience/mini/4.png" alt=""/></a>
         <a rel="group2"  href="<?php echo get_template_directory_uri()?>/images/experience/4.jpg" class="fancybox"><img src="<?php echo get_template_directory_uri()?>/images/experience/mini/6.png" alt=""/></a>
         <a rel="group2"  href="<?php echo get_template_directory_uri()?>/images/experience/1.jpg" class="fancybox"><img src="<?php echo get_template_directory_uri()?>/images/experience/mini/1.jpg" alt=""/></a>
         <a rel="group2"  href="<?php echo get_template_directory_uri()?>/images/experience/2.jpg" class="fancybox"><img src="<?php echo get_template_directory_uri()?>/images/experience/mini/2.jpg" alt=""/></a>
         <a rel="group2"  href="<?php echo get_template_directory_uri()?>/images/experience/3.jpg" class="fancybox"><img src="<?php echo get_template_directory_uri()?>/images/experience/mini/3.jpg" alt=""/></a>
      </div>
   </div>
</div>
<div class="employees" id="employees">
   <div class="wrapper">
      <div class="title">Мы &ndash; команда профессионалов</div>
      <ul>
         <?php
            if(get_field('s1','45'))
            {
            	echo '<li><img src="' . get_field('s1', '45') . '"/>';
            	echo '<label><b>' . get_field('sf1', '45') . '</b>';
            	echo '' . get_field('sd1', '45') . '</label></li>';
            }
            if(get_field('s2','45'))
            {
            	echo '<li><img src="' . get_field('s2', '45') . '"/>';
            	echo '<label><b>' . get_field('sf2', '45') . '</b>';
            	echo '' . get_field('sd2', '45') . '</label></li>';
            }
            if(get_field('s3','45'))
            {
            	echo '<li><img src="' . get_field('s3', '45') . '"/>';
            	echo '<label><b>' . get_field('sf3', '45') . '</b>';
            	echo '' . get_field('sd3', '45') . '</label></li>';
            }
            if(get_field('s4','45'))
            {
            	echo '<li><img src="' . get_field('s4', '45') . '"/>';
            	echo '<label><b>' . get_field('sf4', '45') . '</b>';
            	echo '' . get_field('sd4', '45') . '</label></li>';
            }
            
            ?>
      </ul>
   </div>
</div>
<div class="conditions" id="conditions">
   <div class="info_bg">
   </div>
   <div class="info">
      <div class="title">
         Финансовые условия
      </div>
      <ul>
         <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/3_1.png" alt=""/></span>Работа по договору</li>
         <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/3_2.png" alt=""/></span>Фиксированная смета</li>
         <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/3_3.png" alt=""/></span>Оплата после выполнения</li>
      </ul>
   </div>
</div>
<div class="terms" id="terms">
   <div class="wrapper">
      <div class="title" id="klass">Сроки регистрации зависят<i class="mobbr"></i> от класса риска изделия</div>
      <img src="<?php echo get_template_directory_uri()?>/images/bg/terms.png" alt=""/>
      <table>
         <tr>
            <th colspan="3">Класс - сроки</th>
         </tr>
         <tr>
            <td>1</td>
            <td>-</td>
            <td><?php echo get_field('1', '91')?></td>
         </tr>
         <tr>
            <td>2А</td>
            <td>-</td>
            <td><?php echo get_field('2a', '91')?></td>
         </tr>
         <tr>
            <td>2В</td>
            <td>-</td>
            <td><?php echo get_field('2b', '91')?></td>
         </tr>
         <tr>
            <td>3</td>
            <td>-</td>
            <td><?php echo get_field('3', '91')?></td>
         </tr>
      </table>
      <label>Узнайте класс риска вашего изделия и экономьте до 10% при регистрации</label>
      <a href="#call2" class="button fancybox">Определить класс риска </a>
   </div>
</div>
<div class="past" id="past">
   <div class="wrapper">
      <div class="direc" id="review"></div>
      <div class="title">
         За 12 лет выдано более 300 регистраций
      </div>
      <div class="past-slider">
         <?php
            if(get_field('r1scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r1scan', '21') . '"><img src="' . get_field('r1scan', '21') . '"/>';
            	echo '<label>' . get_field('r1text', '21') . '</label></a>';
            }
            if(get_field('r2scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r2scan', '21') . '"><img src="' . get_field('r2scan', '21') . '"/>';
            	echo '<label>' . get_field('r2text', '21') . '</label></a>';
            }
            if(get_field('r3scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r3scan', '21') . '"><img src="' . get_field('r3scan', '21') . '"/>';
            	echo '<label>' . get_field('r3text', '21') . '</label></a>';
            }
            if(get_field('r4scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r4scan', '21') . '"><img src="' . get_field('r4scan', '21') . '"/>';
            	echo '<label>' . get_field('r4text', '21') . '</label></a>';
            }
            if(get_field('r5scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r5scan', '21') . '"><img src="' . get_field('r5scan', '21') . '"/>';
            	echo '<label>' . get_field('r5text', '21') . '</label></a>';
            }
            if(get_field('r6scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r6scan', '21') . '"><img src="' . get_field('r6scan', '21') . '"/>';
            	echo '<label>' . get_field('r6text', '21') . '</label></a>';
            }
            if(get_field('r7scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r7scan', '21') . '"><img src="' . get_field('r7scan', '21') . '"/>';
            	echo '<label>' . get_field('r7text', '21') . '</label></a>';
            }
            if(get_field('r8scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r8scan', '21') . '"><img src="' . get_field('r8scan', '21') . '"/>';
            	echo '<label>' . get_field('r8text', '21') . '</label></a>';
            }
            if(get_field('r9scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r9scan', '21') . '"><img src="' . get_field('r9scan', '21') . '"/>';
            	echo '<label>' . get_field('r9text', '21') . '</label></a>';
            }
            if(get_field('r10scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r10scan', '21') . '"><img src="' . get_field('r10scan', '21') . '"/>';
            	echo '<label>' . get_field('r10text', '21') . '</label></a>';
            }
            if(get_field('r11scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r11scan', '21') . '"><img src="' . get_field('r11scan', '21') . '"/>';
            	echo '<label>' . get_field('r11text', '21') . '</label></a>';
            }
            if(get_field('r12scan','21'))
            {
            	echo '<a rel="group3"  class="item fancybox" href="' . get_field('r12scan', '21') . '"><img src="' . get_field('r12scan', '21') .  '"/>';
            	echo '<label>' . get_field('r12text', '21') . '</label></a>';
            }
            
            ?>		
      </div>
   </div>
</div>
<div class="working" id="working">
   <div class="wrapper">
      <div class="title">
         Как мы работаем
      </div>
      <ul>
         <li>
            <span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_1.png" alt=""/></span> 
            <label>
			1. Предоставление технической<br>документации на мед. изделие<br>
            <strong>1-5 дней</strong>
            </label>
         </li>
         <li>
            <label>
			2. Первичный анализ документации.<br>
            Составление коммерческого<br>
            предложения и договора.<br>
            <strong>1-5 дней</strong>
            </label>
            <span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_2.png" alt=""/></span> 
         </li>
         <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_3.png" alt=""/></span> 
            <label>
            3. Оплата 50% от суммы договора.<br>
            Согласование с заказчиком<br>
            текста заявления на регистрацию.<br>
            <strong>1-5 дней</strong>
            </label>
         </li>
         <li>
            <label>
			4. Получение разрешения на ввоз<br>
            медицинского изделия с целью <br>
            испытаний (только для изделий<br>
            зарубежного производства)<br>
            <strong>5-15 дней</strong>
            </label>
            <span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_4.png" alt=""/></span> 
         </li>
         <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_5.png" alt=""/></span> 
            <label>
            5. Технические и токсикологические <br>
            испытания медицинского изделия<br>
            <strong>15-45 дней</strong>
            </label>
         </li>
         <li>
            <label>
			6. Первый этап экспертизы.<br>
			Проверка документов.<br>
            Определение возможности <br>
			проведения клинических испытаний<br>
			<strong>20-30 дней</strong>
            </label>
            <span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_7.png" alt=""/></span> 
         </li>
         <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_8.png" alt=""/></span> 
            <label>
			7. Получение разрешения на<br>
            проведение клинических испытаний<br>
            <strong>5-15 дней</strong>
            </label>
         </li>
         <li>
            <label>
			8. Оплата 30% от суммы договора.<br>
			<strong>1-5 дней</strong>
            </label>
            <span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_3.png" alt=""/></span> 
         </li>
         <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_9.png" alt=""/></span> 
            <label>
			9. Клинические испытания.<br>
			<strong>15-45 дней</strong>
            </label>
         </li>
         <li>
            <label>
			10. Второй этап экспертизы.<br>
			Подготовка экспертизы качества,<br>
			эффективности и безопасности<br>
			медицинского изделия<br>
			<strong>10-30 дней</strong>
            </label>
            <span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_7.png" alt=""/></span> 
         </li>
         <li><span><img src="<?php echo get_template_directory_uri()?>/images/icons/4_11.png" alt=""/></span> 
            <label>
			11. Получение регистрационного удостоверения.<br>
			Оплата 20% от стоимости договора. 
			<strong>10-20 дней</strong>
			</label>
         </li>
      </ul>
	  
	  <label style="display: block; margin: 16px 0 0; font-size: 18px; text-align: center; font-weight: bold; padding-left: 10px; padding-right: 10px;">Сроки регистрации составляют 84-195 дней (4-10 месяцев)
	  и <a href="#klass" style="color: #da1c5c">зависят от класса Вашего изделия</a>
	  </label>
   </div>
</div>
<div class="question" id="question">
   <div class="wrapper">
      <div class="form">
         <label class="tit">Сможет ли ваше изделие<br>
         пройти регистрацию ?<br><br>
          Узнайте как избежать <br>отказа в Росздравнадзоре?</label>
         <?php echo do_shortcode('[contact-form-7 id="97"]');?>
      </div>
   </div>
</div>
<div class="contacts" id="contacts">
   <div class="map hidemob">
      <?php 
         $location = get_field('location');
         if( !empty($location) ):
         ?>
      <div class="acf-map">
         <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
      </div>
      <?php endif; ?>
   </div>
   <div class="info">
      <div class="direc" id="contact"></div>
      <div class="title">
         Контактная информация
      </div>
      <ul>
         <li class="icon-phone"><b class="ringo-tel"><a href="tel:+7 (495) 689-97-38"><span><img src="<?php echo get_template_directory_uri()?>/images/phone.png" alt=""/></a></span> <label style="padding-top: 1%; margin-left: -27px !important;"><?php echo get_theme_mod('textbox_1', '+7 (495) 689-97-38'); ?></label></b>
            <a href="#call" class="fancybox ">Перезвоните мне</a>
            </label>
         </li>
         <li class="icon-email"><span><a href="mailto: info@parkovy.com"><img src="<?php echo get_template_directory_uri()?>/images/email.png" alt=""/></a></span> <label>
            <?php echo get_theme_mod('textbox_3', 'info@parkovy.com'); ?>
            </label>
         </li>
         <li class="icon-geo"><span><img src="<?php echo get_template_directory_uri()?>/images/geo.png" alt=""/></span> <label>
            <?php echo get_theme_mod('textbox_4', '127018 г. Москва,<br>3й проезд Марьиной Рощи,<br>д.40, стр.1, корп.11, офис 501'); ?>
            </label>
         </li>
         <li class="icon-info">
            <span><img src="<?php echo get_template_directory_uri()?>/images/info.png" alt=""/></span> 
            <div class="titl">ООО "Коммерческий Центр Парковый"</div>
            <label>
            <?php echo get_theme_mod('textbox_5', 	'ИНН 7718302057 <br>
               КПП 771801001<br>
               ОГРН 5147746205976<br>
               ОКПО 47359004<br>
               ОКАТО 45263591000<br>
               ОКФС 16<br>
               ОКОПФ 12165<br><br>
               	 
               р/с 40702810900000075261<br>
               в Банке ВТБ 24 (ПАО),  г. Москва<br>
               к/с 30101810100000000716<br>
               БИК 044525716'); ?>
            </label>
         </li>
      </ul>
      <div class="footer">
         <a href="#privacy" class="fancybox privacy">Политика конфиденциальности</a> 
		 <!--<a href="#home" class="privacy" style="color: #da1c5c;">НАВЕРХ</a>-->
		 
         <a href="#home" class="dev" style="color: #da1c5c;">&#x21E1; НАВЕРХ &#x21E1;</a>
      </div>
   </div>
</div>
<?php get_footer(); ?>