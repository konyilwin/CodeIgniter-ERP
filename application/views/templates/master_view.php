<!DOCTYPE html>
<html>
<?php $this->load->view('templates/_parts/master_header_view'); ?>
<body class="fixed-sidebar no-skin-config full-height-layout">
    <div id="wrapper">
        <!-- 1 siderbar -->
        <?php $this->load->view('templates/_parts/master_sidebar_view'); ?>
        <div id="page-wrapper" class="gray-bg">
        <?php $this->load->view('templates/_parts/master_topbar_view'); ?>
        <?php $this->load->view('templates/_parts/master_breadcrumb_view'); ?>
        <?php echo $the_view_content;?>
        <?php $this->load->view('templates/_parts/master_footer_view'); ?>
        </div>
    </div>
</body>

<!-- Mainly scripts -->

<script src="<?php echo base_url()."assets/"; ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url()."assets/"; ?>js/inspinia.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/plugins/pace/pace.min.js"></script>
<!-- Flot -->
<script src="<?php echo base_url()."assets/";?>js/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo base_url()."assets/";?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url()."assets/";?>js/plugins/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url()."assets/";?>js/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url()."assets/";?>js/plugins/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url()."assets/";?>js/plugins/chartJs/Chart.min.js"></script>
<script src="<?php echo base_url()."assets/";?>js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="<?php echo base_url()."assets/";?>js/plugins/flot/jquery.flot.time.js"></script>
<!-- Steps -->
<script src="<?php echo base_url()."assets/";?>js/plugins/steps/jquery.steps.min.js"></script>
<!-- Jquery Validate -->
<script src="<?php echo base_url()."assets/";?>js/plugins/validate/jquery.validate.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/";?>js/plugins/sparkline/jquery.sparkline.min.js"></script>


<script>
    $(document).ready(function() {

        var sparklineCharts = function(){
            $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#1ab394',
                fillColor: "transparent"
            });

            $("#sparkline2").sparkline([32, 11, 25, 37, 41, 32, 34, 42], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#1ab394',
                fillColor: "transparent"
            });

            $("#sparkline3").sparkline([34, 22, 24, 41, 10, 18, 16,8], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#1C84C6',
                fillColor: "transparent"
            });
        };

        var sparkResize;

        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 500);
        });

        sparklineCharts();




        var data1 = [
            [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,20],[11,10],[12,13],[13,4],[14,7],[15,8],[16,12]
        ];
        var data2 = [
            [0,0],[1,2],[2,7],[3,4],[4,11],[5,4],[6,2],[7,5],[8,11],[9,5],[10,4],[11,1],[12,5],[13,2],[14,5],[15,2],[16,0]
        ];
        $("#flot-dashboard5-chart").length && $.plot($("#flot-dashboard5-chart"), [
                data1,  data2
            ],
            {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,

                    borderWidth: 2,
                    color: 'transparent'
                },
                colors: ["#1ab394", "#1C84C6"],
                xaxis:{
                },
                yaxis: {
                },
                tooltip: false
            }
        );

    });
</script>
</html>