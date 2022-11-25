<!DOCTYPE html>
<html lang="tr">
<head>
    <?php $this->load->view('includes/head')?>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<?php $this->load->view('includes/navbar')?>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<?php $this->load->view('includes/aside')?>
<!--========== END app aside -->

<!-- navbar search -->
<?php $this->load->view('includes/navbar_search')?>
<!-- .navbar-search -->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
        <p>Boş içerik</p>
        </section><!-- #dash-content -->
    </div><!-- .wrap -->

    <!-- APP FOOTER -->
    <?php $this->load->view('includes/footer')?>
    <!-- /#app-footer -->
</main>
<!--========== END app main -->


<!-- SIDE PANEL -->
<?php $this->load->view('includes/right_aside')?>
<!-- /#side-panel -->

<!-- build:js ../assets/js/core.min.js -->
<?php $this->load->view('includes/include_script')?>
</body>
</html>