  <footer class="scr-target">
    <div id="totop" class="scr-target">
      <a href="#" class="scr-target" aria-label="ページの先頭へ">
          <i class="fas fa-chevron-up"></i>
      </a>
    </div>
    <span class="scr-target">&copy; 2025 YUBUKI</span>
  </footer>

  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
  <script src="/wp-content/themes/yubukiworks/assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="/wp-content/themes/yubukiworks/assets/js/main.js"></script>
  <script>
    $(function() {
      var $grid = $('.masonry').masonry({
        itemSelector: '.item',
      });
      function updateMasonryLayout() {
        if ($(window).width() <= 768) {
          $('.item').removeClass('item-pc').addClass('item-sp');
        } else {
          $('.item').removeClass('item-sp').addClass('item-pc');
        }
        $grid.masonry('reloadItems').masonry('layout');
      }

      // 初回ロード時にレイアウトを調整
      updateMasonryLayout();
      // ウィンドウのリサイズ時にもレイアウトを調整
      $(window).on('resize', function() {
        updateMasonryLayout();
      });
    });
  </script>
</body>
  
</html>