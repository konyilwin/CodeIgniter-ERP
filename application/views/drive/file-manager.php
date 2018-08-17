<link href="<?php echo base_url() . "assets/"; ?>css/plugins/jsTree/style.min.css" rel="stylesheet">
<script src="<?php echo base_url() . "assets/"; ?>js/plugins/jsTree/jstree.min.js"></script>

<div class="fh-breadcrumb">
    <div class="fh-column">
        <div class="full-height-scroll">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="file-manager">
                        <h5><i class="fa fa-eye-slash"></i> <span class="font-bold text-navy">Show</span></h5>
                        <a href="#" class="file-control active">All</a>
                        <a href="#" class="file-control">Documents</a>
                        <a href="#" class="file-control">Audio</a>
                        <a href="#" class="file-control">Images</a>
                        <div class="hr-line-dashed"></div>
                        <button class="btn btn-primary btn-block">Upload Files</button>
                        <div class="hr-line-dashed"></div>
                        <h5><i class="fa fa-hdd-o"></i> <span class="font-bold text-navy">Folders</span></h5>
                        <div id="jstree1">
                            <ul>
                                <li class="jstree">Admin theme
                                    <ul>
                                        <li>css
                                            <ul>
                                                <li data-jstree='"type":"css"}'>animate.css</li>
                                                <li data-jstree='"type":"css"}'>bootstrap.css</li>
                                                <li data-jstree='"type":"css"}'>style.css</li>
                                            </ul>
                                        </li>
                                        <li>email-templates
                                            <ul>
                                                <li data-jstree='"type":"html"}'>action.html</li>
                                                <li data-jstree='"type":"html"}'>alert.html</li>
                                                <li data-jstree='"type":"html"}'>billing.html</li>
                                            </ul>
                                        </li>
                                        <li>fonts
                                            <ul>
                                                <li data-jstree='"type":"svg"}'>glyphicons-halflings-regular.eot</li>
                                                <li data-jstree='"type":"svg"}'>glyphicons-halflings-regular.svg</li>
                                                <li data-jstree='"type":"svg"}'>glyphicons-halflings-regular.ttf</li>
                                                <li data-jstree='"type":"svg"}'>glyphicons-halflings-regular.woff</li>
                                            </ul>
                                        </li>
                                        <li class="jstree-open">img
                                            <ul>
                                                <li data-jstree='"type":"img"}'>profile_small.jpg</li>
                                                <li data-jstree='"type":"img"}'>angular_logo.png</li>
                                                <li class="text-navy" data-jstree='"type":"img"}'>html_logo.png</li>
                                                <li class="text-navy" data-jstree='"type":"img"}'>mvc_logo.png</li>
                                            </ul>
                                        </li>
                                        <li class="jstree-open">js
                                            <ul>
                                                <li data-jstree='"type":"js"}'>inspinia.js</li>
                                                <li data-jstree='"type":"js"}'>bootstrap.js</li>
                                                <li data-jstree='"type":"js"}'>jquery-2.1.1.js</li>
                                            </ul>
                                        </li>
                                        <li data-jstree='"type":"html"}'> affix.html</li>
                                        <li data-jstree='"type":"html"}'> dashboard.html</li>
                                        <li data-jstree='"type":"html"}'> buttons.html</li>
                                        <li data-jstree='"type":"html"}'> calendar.html</li>
                                        <li data-jstree='"type":"html"}'> contacts.html</li>
                                        <li data-jstree='"type":"html"}'> css_animation.html</li>
                                        <li  class="text-navy" data-jstree='"type":"html"}'> flot_chart.html</li>
                                        <li  class="text-navy" data-jstree='"type":"html"}'> google_maps.html</li>
                                        <li data-jstree='"type":"html"}'> icons.html</li>
                                        <li data-jstree='"type":"html"}'> invoice.html</li>
                                        <li data-jstree='"type":"html"}'> login.html</li>
                                        <li data-jstree='"type":"html"}'> mailbox.html</li>
                                        <li data-jstree='"type":"html"}'> profile.html</li>
                                        <li  class="text-navy" data-jstree='"type":"html"}'> register.html</li>
                                        <li data-jstree='"type":"html"}'> timeline.html</li>
                                        <li data-jstree='"type":"html"}'> video.html</li>
                                        <li data-jstree='"type":"html"}'> widgets.html</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <h5><i class="fa fa-star"></i> <span class="font-bold text-navy">Favorites</span></h5>
                        <ul class="folder-list" style="padding: 0">
                            <li><a href=""><i class="fa fa-folder"></i> Files</a></li>
                            <li><a href=""><i class="fa fa-folder"></i> Pictures</a></li>
                            <li><a href=""><i class="fa fa-folder"></i> Web pages</a></li>
                            <li><a href=""><i class="fa fa-folder"></i> Illustrations</a></li>
                            <li><a href=""><i class="fa fa-folder"></i> Films</a></li>
                            <li><a href=""><i class="fa fa-folder"></i> Books</a></li>
                        </ul>
                        <h5 class="tag-title"><i class="fa fa-tags"></i> <span class="font-bold text-navy">Tags</span></h5>
                        <ul class="tag-list" style="padding: 0">
                            <li><a href="">Family</a></li>
                            <li><a href="">Work</a></li>
                            <li><a href="">Home</a></li>
                            <li><a href="">Children</a></li>
                            <li><a href="">Holidays</a></li>
                            <li><a href="">Music</a></li>
                            <li><a href="">Photography</a></li>
                            <li><a href="">Film</a></li>
                        </ul>

                        <div class="clearfix"></div>
                        <div class="hr-line-dashed"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="full-height white-bg ">
        <div class="full-height-scroll gray-bg border-left">
            <div class="wrapper wrapper-content">
                <div class="tab-content">
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="file-name">
                                    Document_2014.doc
                                    <br/>
                                    <small>Added: Jan 11, 2014</small>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-fluid"
                                         src="<?php echo base_url() . "assets/"; ?>img/p1.jpg">
                                </div>
                                <div class="file-name">
                                    Italy street.jpg
                                    <br/>
                                    <small>Added: Jan 6, 2014</small>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-fluid"
                                         src="<?php echo base_url() . "assets/"; ?>img/p2.jpg">
                                </div>
                                <div class="file-name">
                                    My feel.png
                                    <br/>
                                    <small>Added: Jan 7, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-music"></i>
                                </div>
                                <div class="file-name">
                                    Michal Jackson.mp3
                                    <br/>
                                    <small>Added: Jan 22, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-fluid"
                                         src="<?php echo base_url() . "assets/"; ?>img/p3.jpg">
                                </div>
                                <div class="file-name">
                                    Document_2014.doc
                                    <br/>
                                    <small>Added: Fab 11, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="img-fluid fa fa-film"></i>
                                </div>
                                <div class="file-name">
                                    Monica's birthday.mpg4
                                    <br/>
                                    <small>Added: Fab 18, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <a href="#">
                            <div class="file">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="file-name">
                                    Annual report 2014.xls
                                    <br/>
                                    <small>Added: Fab 22, 2014</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="file-name">
                                    Document_2014.doc
                                    <br/>
                                    <small>Added: Jan 11, 2014</small>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-fluid"
                                         src="<?php echo base_url() . "assets/"; ?>img/p1.jpg">
                                </div>
                                <div class="file-name">
                                    Italy street.jpg
                                    <br/>
                                    <small>Added: Jan 6, 2014</small>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-fluid"
                                         src="<?php echo base_url() . "assets/"; ?>img/p2.jpg">
                                </div>
                                <div class="file-name">
                                    My feel.png
                                    <br/>
                                    <small>Added: Jan 7, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-music"></i>
                                </div>
                                <div class="file-name">
                                    Michal Jackson.mp3
                                    <br/>
                                    <small>Added: Jan 22, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-fluid"
                                         src="<?php echo base_url() . "assets/"; ?>img/p3.jpg">
                                </div>
                                <div class="file-name">
                                    Document_2014.doc
                                    <br/>
                                    <small>Added: Fab 11, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="img-fluid fa fa-film"></i>
                                </div>
                                <div class="file-name">
                                    Monica's birthday.mpg4
                                    <br/>
                                    <small>Added: Fab 18, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <a href="#">
                            <div class="file">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="file-name">
                                    Annual report 2014.xls
                                    <br/>
                                    <small>Added: Fab 22, 2014</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="file-name">
                                    Document_2014.doc
                                    <br/>
                                    <small>Added: Jan 11, 2014</small>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-fluid"
                                         src="<?php echo base_url() . "assets/"; ?>img/p1.jpg">
                                </div>
                                <div class="file-name">
                                    Italy street.jpg
                                    <br/>
                                    <small>Added: Jan 6, 2014</small>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-fluid"
                                         src="<?php echo base_url() . "assets/"; ?>img/p2.jpg">
                                </div>
                                <div class="file-name">
                                    My feel.png
                                    <br/>
                                    <small>Added: Jan 7, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-music"></i>
                                </div>
                                <div class="file-name">
                                    Michal Jackson.mp3
                                    <br/>
                                    <small>Added: Jan 22, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-fluid"
                                         src="<?php echo base_url() . "assets/"; ?>img/p3.jpg">
                                </div>
                                <div class="file-name">
                                    Document_2014.doc
                                    <br/>
                                    <small>Added: Fab 11, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="img-fluid fa fa-film"></i>
                                </div>
                                <div class="file-name">
                                    Monica's birthday.mpg4
                                    <br/>
                                    <small>Added: Fab 18, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="file-box">
                        <a href="#">
                            <div class="file">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="file-name">
                                    Annual report 2014.xls
                                    <br/>
                                    <small>Added: Fab 22, 2014</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .jstree-open > .jstree-anchor > .fa-folder:before {
        content: "\f07c";
    }

    .jstree-default .jstree-icon.none {
        width: 0;
    }
</style>

<script>
    $(document).ready(function(){
        $('#jstree1').jstree({
            'core' : {
                'check_callback' : true
            },
            'plugins' : [ 'types', 'dnd' ],
            'types' : {
                'default' : {
                    'icon' : 'fa fa-folder'
                },
                'html' : {
                    'icon' : 'fa fa-file-code-o'
                },
                'svg' : {
                    'icon' : 'fa fa-file-picture-o'
                },
                'css' : {
                    'icon' : 'fa fa-file-code-o'
                },
                'img' : {
                    'icon' : 'fa fa-file-image-o'
                },
                'js' : {
                    'icon' : 'fa fa-file-text-o'
                }

            }
        });
    });
</script>