<?= $view->inc('elements/header.php'); ?>

<div class="header-section">
  <div class="container">
    <div class="row">
      <div class="col-md-11 col-md-offset-1">
        <?php
            $a = new Area('Title section');
            $a->display($c);
        ?>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-3" id="sidenav">
      <div class="bs-sidebar hidden-print" data-spy="affix" data-offset-top="211" data-offset-bottom="291">
        <ul class="nav bs-sidenav">
        </ul>
      </div>
    </div>

    <div class="col-xs-9 main-content">
      <?php
          $a = new Area('Content section');
          $a->display($c);
      ?>
    </div>
  </div>
</div>

<script src="<?=$view->getThemePath()?>/js/toc.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#sidenav ul').toc({
      headersScope: '.main-content',
      title: "",
      skipTopList: true,
      listType: 'ul',
      listClass: 'nav',
      noBackToTopLinks: true,
      minimumHeaders: 2,
      showSpeed: 0,
    });
  });
</script>

<?= $view->inc('elements/footer.php'); ?>