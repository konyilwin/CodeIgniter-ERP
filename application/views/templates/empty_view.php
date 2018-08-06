<?php
$this->load->view('templates/_parts/master_header_view');
?>
    <section>
        <?php echo $the_view_content;?>
    </section>
<?php
//$this->load->view('templates/_parts/master_sidebar_view');
//$this->load->view('templates/_parts/master_footer_view');
?>
<!-- Mainly scripts -->
<script src="<?php echo base_url()."assets/"; ?>js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/popper.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.js"></script>

