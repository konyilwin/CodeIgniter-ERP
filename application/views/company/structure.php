<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
<script type="text/javascript" 	src="<?php echo base_url()."assets/";?>diagram/codebase/diagram.js"></script>
<link rel="stylesheet" 			href="<?php echo base_url()."assets/";?>diagram/codebase/diagram.css">

<script type="text/javascript" 	src="<?php echo base_url()."assets/";?>diagram/common/data.js"></script>
<div class="fh-breadcrumb">
    <div class="fh-column">
        <div class="full-height-scroll">
            <ul class="list-group elements-list">
                <li class="list-group-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-1">
                        <small class="float-right text-muted"> 16.02.2015</small>
                        <strong>Ann Smith</strong>
                        <div class="small m-t-xs">
                            <p>
                                Survived not only five centuries, but also the leap scrambled it to make.
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> Riviera State 32/106
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2">
                        <small class="float-right text-muted"> 11.10.2015</small>
                        <strong>Paul Morgan</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                There are many variations of passages of Lorem Ipsum.
                                <br/>
                            </p>
                            <p class="m-b-none">

                                <span class="label float-right label-primary">SPECIAL</span>
                                <i class="fa fa-map-marker"></i> California 10F/32
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3">
                        <small class="float-right text-muted"> 08.04.2015</small>
                        <strong>Michael Jackson</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                Look even slightly believable. If you are going to use a passage of.
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> Berlin 120R/15
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-4">
                        <small class="float-right text-muted"> 16.02.2015</small>
                        <strong>Mark Smith</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                It was popularised in the 1960s with the release of Letraset sheets
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> San Francisko 12/100
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-1">
                        <small class="float-right text-muted"> 21.04.2015</small>
                        <strong>Monica Novak</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                Printer took a galley of type and scrambled.
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> New York 15/43
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2">
                        <small class="float-right text-muted"> 03.12.2015</small>
                        <strong>Jack Smith</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                Also the leap into electronic typesetting, remaining.
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> Sant Fe 10/106
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3">
                        <small class="float-right text-muted"> 08.04.2015</small>
                        <strong>Michael Jackson</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                Look even slightly believable. If you are going to use a passage of.
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> Berlin 120R/15
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-4">
                        <small class="float-right text-muted"> 16.02.2015</small>
                        <strong>Mark Smith</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                It was popularised in the 1960s with the release of Letraset sheets
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> San Francisko 12/100
                            </p>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-1">
                        <small class="float-right text-muted"> 21.04.2015</small>
                        <strong>Monica Novak</strong>
                        <div class="small m-t-xs">
                            <p class="m-b-xs">
                                Printer took a galley of type and scrambled.
                            </p>
                            <p class="m-b-none">
                                <i class="fa fa-map-marker"></i> New York 15/43
                            </p>
                        </div>
                    </a>
                </li>


            </ul>

        </div>
    </div>
    <div class="full-height animated fadeInUp">
        <div class="full-height-scroll border-left gray-bg">
<div id="diagram_container" style="width:800px;height:500px"></div>
        </div>
    </div>
</div>
<script>
    var diagram = new dhx.Diagram("diagram_container", { type: "org", defaultShapeType: "img-card" });
    diagram.data.parse(orgChartData);
</script>
