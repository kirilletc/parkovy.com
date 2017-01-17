<div class="footer" id="footer">
 
   <!-- Yandex.Metrika counter MIXPLUS -->
   <script type="text/javascript">
      (function (d, w, c) {
          (w[c] = w[c] || []).push(function() {
              try {
                  w.yaCounter40825409 = new Ya.Metrika({
                      id:40825409,
                      clickmap:true,
                      trackLinks:true,
                      accurateTrackBounce:true,
                      webvisor:true
                  });
              } catch(e) { }
          });
      
          var n = d.getElementsByTagName("script")[0],
              s = d.createElement("script"),
              f = function () { n.parentNode.insertBefore(s, n); };
          s.type = "text/javascript";
          s.async = true;
          s.src = "https://mc.yandex.ru/metrika/watch.js";
      
          if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
          } else { f(); }
      })(document, window, "yandex_metrika_callbacks");
   </script>
   <noscript>
      <div><img src="https://mc.yandex.ru/watch/40825409" style="position:absolute; left:-9999px;" alt="" /></div>
   </noscript>
   <!-- /Yandex.Metrika counter MIXPLUS -->
   
   <!-- /Google Analytics KVOLKOV -->
   <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-86720817-1', 'auto');
	  ga('require', 'ringostat');
      ga('send', 'pageview');
      
   </script>
   <!-- /Google Analytics KVOLKOV -->
   
   <!-- /RINGOSTAT WIDGET -->
   <script type="text/javascript">
    (function (d,s,u,e,p) {
        p=d.getElementsByTagName(s)[0],e=d.createElement(s),e.async=1,e.src=u,p.parentNode.insertBefore(e, p);
    })(document, 'script', 'https://ringostat.com/numbers/v4/b5/b5582f069f5e9e158528affdfe9a930eb7074994.js');
   </script>
   <!-- /RINGOSTAT WIDGET -->
   
</div>
<div style="display:none">
   <div class="privacy" id="privacy">
      <div class="policie">
         <?php
            $query1 = new WP_Query('page_id=42'); 
            while($query1->have_posts()) $query1->the_post(); ;?>
         <div class="title"><?php the_title(); ?></div>
         <?php the_content(); ?>
         <?php wp_reset_query(); ?>
      </div>
   </div>
   <div id="call">
      <div class="form">
         <div class="tit">Узнайте все о регистрации<br>
            от специалиста
         </div>
         <?php echo do_shortcode('[contact-form-7 id="96"]');?>
      </div>
   </div>
   <div id="call2">
      <div class="form">
         <label class="tit">Расчитайте сроки,<br>
         класс риска и цену</label>
         <?php echo do_shortcode('[contact-form-7 id="95"]');?>
      </div>
   </div>
   <div id="thanks" class="thanks" >
      <div class="thanks" >
         Спасибо за ваше обращение,<br />
         наш эксперт свяжется с вами<br />
         в течении 30 минут
      </div>
   </div>
</div>
</div>
<?php wp_footer();?>
</body>
</html>