<!DOCTYPE html>
<html>

<head>

  <?php $this->load->view( 'themes/'. _theme() . '/header');  ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134511095-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134511095-1');
</script>

</head>

<body>

  <?php $this->load->view( 'themes/'. _theme() . '/sidenav'); ?>

  <!-- Main content -->
  <div class="main-content">

    <?php $this->load->view( 'themes/'. _theme() . '/navigation'); ?>

    <?php $this->load->view( 'themes/'. _theme() . '/top'); ?>

    <?php echo $content; ?>
            
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="/<?php echo _static() ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/<?php echo _static() ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="/<?php echo _static() ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/<?php echo _static() ?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Optional JS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>
  <!-- Argon JS -->
  <script src="/<?php echo _static() ?>assets/js/argon.js?v=1.0.0"></script>
</body>

</html>