<!-- FOOTER -->
<div class="footer pb-4">
  <footer class="container">
<!--    <p class="float-right mt-2"><a href="#" class="company">Наверх</a></p>-->

    <div class="row">
      <p class="col-sm-4 mt-2">&copy; 2017 - <?= strftime('%Y'); ?> <a href="/" class="company">Страховка online</a></p>

      <div class="col">
        <nav class="nav flex-column">
          <?php $menuDrop = menuDrop('menu', 'name_en', 'belrosstrah'); ?>
          <?php foreach ($menuDrop as $company): ?>
          <p class="lead my-2 pb-2"><?= $company['name']; ?></p>
          <?php endforeach; ?>

          <?php
          $drop = menuDrop('menu-dropdown','attachment','belrosstrah');
            foreach ($drop as $item) {
              echo '<a class="nav-link pl-0" href="' . $item['link'] . '">' . $item['name'] . '</a>';
            }
          ?>
        </nav>
      </div>

      <div class="col">
        <nav class="nav flex-column">
          <?php $menuDrop = menuDrop('menu', 'name_en', 'stravita'); ?>
          <?php foreach ($menuDrop as $company): ?>
            <p class="lead my-2 pb-2"><?= $company['name']; ?></p>
          <?php endforeach; ?>

          <?php
          $drop = menuDrop('menu-dropdown','attachment','stravita');
          foreach ($drop as $item) {
            echo '<a class="nav-link pl-0" href="' . $item['link'] . '">' . $item['name'] . '</a>';
          }
          ?>
        </nav>
      </div>

      <div class="col mt-3">
        <div class="float-right">
          <div class="counter mb-3">
            <!-- Yandex.Metrika informer -->
            <a href="https://metrika.yandex.by/stat/?id=49102222&amp;from=informer"
               target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/49102222/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                   style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="49102222" data-lang="ru" /></a>
            <!-- /Yandex.Metrika informer -->

            <!-- Yandex.Metrika counter -->
            <script>
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function() {
                        try {
                            w.yaCounter49102222 = new Ya.Metrika2({
                                id:49102222,
                                clickmap:true,
                                trackLinks:true,
                                accurateTrackBounce:true
                            });
                        } catch(e) { }
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://mc.yandex.ru/metrika/tag.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
                })(document, window, "yandex_metrika_callbacks2");
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/49102222" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
          </div>


          <div class="counter">
            <!-- HotLog -->
            <span id="hotlog_counter"></span>
            <span id="hotlog_dyn"></span>
            <script> var hot_s = document.createElement('script');
              hot_s.type = 'text/javascript'; hot_s.async = true;
              hot_s.src = 'http://js.hotlog.ru/dcounter/2569467.js';
              hot_d = document.getElementById('hotlog_dyn');
              hot_d.appendChild(hot_s);
            </script>
            <noscript>
              <a href="http://click.hotlog.ru/?2569467" target="_blank">
                <img src="http://hit20.hotlog.ru/cgi-bin/hotlog/count?s=2569467&im=404"
                     title="HotLog" alt="HotLog"></a>
            </noscript>
            <!-- /HotLog -->
          </div>
        </div>
      </div>
    </div>

  </footer>
</div>