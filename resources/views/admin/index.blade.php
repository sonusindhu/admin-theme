@extends('layouts.admin')

@section('content')

<!-- Start page header -->
<div id="tour-11" class="header-content">
    <h2><i class="fa fa-home"></i>Dashboard <span>dashboard & statistics</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div><!-- /.header-content -->
<!--/ End page header -->

<div class="body-content animated fadeIn">

    <div id="tour-12" class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat clearfix bg-facebook rounded">
                <span class="mini-stat-icon"><i class="fa fa-facebook fg-facebook"></i></span>
                <div class="mini-stat-info">
                    <span class="counter">5,762</span>
                    Facebook Like
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat clearfix bg-twitter rounded">
                <span class="mini-stat-icon"><i class="fa fa-twitter fg-twitter"></i></span>
                <div class="mini-stat-info">
                    <span class="counter">7,153</span>
                    Twitter Followers
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat clearfix bg-googleplus rounded">
                <span class="mini-stat-icon"><i class="fa fa-google-plus fg-googleplus"></i></span>
                <div class="mini-stat-info">
                    <span class="counter">793</span>
                    Google+ Posts
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat clearfix bg-bitbucket rounded">
                <span class="mini-stat-icon"><i class="fa fa-bitbucket fg-bitbucket"></i></span>
                <div class="mini-stat-info">
                    <span class="counter">8,932</span>
                    Repository
                </div>
            </div>
        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-9">

            <!-- Start widget visitor chart -->
            <div id="tour-13" class="panel stat-stack widget-visitor rounded shadow">
                <div class="panel-body no-padding br-3">
                    <div class="row row-merge">
                        <div class="col-sm-8">
                            <div class="panel panel-theme stat-left no-margin no-box-shadow">
                                <div class="panel-heading no-border">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Daily Visitor</h3>
                                    </div><!-- /.pull-left -->
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-theme dropdown-toggle no-border" data-toggle="dropdown">
                                                Duration <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right no-border">
                                                <li class="dropdown-header">Select duration :</li>
                                                <li><a href="#">Year</a></li>
                                                <li><a href="#">Month</a></li>
                                                <li><a href="#">Week</a></li>
                                                <li><a href="#">Day</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- /.pull-right -->
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                
                                <div class="panel-footer no-border-top">
                                    <div class="row text-center">
                                        <div class="col-xs-4 col-xs-override border-right dotted">
                                            <p class="text-danger text-strong mb-0">- 5%</p>
                                            <p class="h3 text-strong mb-0 mt-10 counter-visit" data-counter="7341">7,341</p>
                                            <p class="text-muted">Visits Today</p>
                                        </div>
                                        <div class="col-xs-4 col-xs-override border-right dotted">
                                            <p class="text-success text-strong mb-0">+ 32%</p>
                                            <p class="h3 text-strong mb-0 mt-10 counter-unique" data-counter="23762">23,762</p>
                                            <p class="text-muted">Unique Visitors</p>
                                        </div>
                                        <div class="col-xs-4 col-xs-override">
                                            <p class="text-success text-strong mb-0">+ 76%</p>
                                            <p class="h3 text-strong mb-0 mt-10 counter-page" data-counter="70112">70,112</p>
                                            <p class="text-muted">Page Views</p>
                                        </div>
                                    </div>
                                </div><!-- /.panel-footer -->
                            </div><!-- /.panel -->
                        </div><!-- /.col-sm-8 -->
                        <div class="col-sm-4">
                            <div class="panel stat-right no-margin no-box-shadow">
                                <div class="panel-body">
                                    <h4 class="no-margin">Server Status</h4>
                                    <p class="text-muted">Summary of the server status.</p>

                                    <span>Domains</span><span class="pull-right">(7/10)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-lilac" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                    </div><!-- /.progress -->

                                    <span>Databases</span><span class="pull-right">(45/100)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-teal" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                    </div><!-- /.progress -->

                                    <span>Email Account</span><span class="pull-right">(30/50)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                    </div><!-- /.progress -->

                                    <span>Memory Usage</span><span class="pull-right">(45.2%)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                    </div><!-- /.progress -->

                                    <span>Disk Usage</span><span class="pull-right">(68.2%)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%"></div>
                                    </div><!-- /.progress -->

                                    <span>CPU Usage</span><span class="pull-right">(35.05 - 30 cpus)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                    </div><!-- /.progress -->
                                </div><!-- /.panel-body -->
                                <div class="panel-footer">
                                    <div id="realtime-status-chart" class="resize-chart"></div>
                                </div>
                            </div><!-- /.panel -->
                        </div><!-- /.col-sm-4 -->
                    </div><!-- /.row -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End widget visitor chart -->

        </div>
        <div class="col-md-3">

            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">

                    <!-- Start blog post widget -->
                    <div id="tour-15" class="blog-item blog-quote rounded shadow">
                        <div class="quote quote-lilac">
                            <a href="page-blog-single.html">
                                Stay Hungry, Stay Foolish
                                <small class="quote-author">- Steve Jobs -</small>
                            </a>
                        </div>
                        <div class="blog-details">
                            <ul class="blog-meta">
                                <li>By: <a href="">Djava UI</a></li>
                                <li>Jun 08, 2014</li>
                                <li><a href="">2 Comments</a></li>
                            </ul>
                        </div><!-- blog-details -->
                    </div><!-- blog-item -->
                    <!--/ End blog post widget -->

                </div>
            </div>

        </div>
    </div><!-- /.row -->
    

</div><!-- /.body-content -->

@stop