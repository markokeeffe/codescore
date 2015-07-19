<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Online PHP assessments helping you find better web developers, fast.">
    <meta name="author" content="Codescore">

    <title>Codescore</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="/css/agency.css" rel="stylesheet">
    <link href="/css/site.css" rel="stylesheet">
</head>
<body id="page-top" class="index">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="/">Codescore</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                {{--<li>--}}
                {{--<a class="page-scroll" href="#services">Services</a>--}}
                {{--</li>--}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <h1 class="intro-heading">Find the best web developers. Fast.</h1>
            <a href="#intro" class="page-scroll btn btn-xl">Find Out More</a>
        </div>
    </div>
</header>

<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                {{--<h2 class="section-heading">What is Codescore?</h2>--}}
                <p class="lead">Online assessments designed by web developers to test for industry-relevant skills and
                    knowledge.</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Send Unique Link to a Candidate</h4>

                <p class="text-muted">Automatically send invitations to your candidates with access to a specific online
                    assessment.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Candidate Completes Timed Assessment</h4>

                <p class="text-muted">Candidates are tested through a variety of questions and exercises, specifically
                    designed to assess skills used in industry.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-pie-chart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Get Results Instantly</h4>

                <p class="text-muted">Recieve a score and skills analysis for each candidate instantly upon test
                    completion.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <a href="#email-modal" class="btn btn-xl" data-toggle="modal">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!-- /#intro -->

<div class="portfolio-modal modal fade" id="email-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="signup-body" class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>You found us early!</h2>

                        <p class="item-intro text-muted">We are working hard to get the very best web developer
                            assessment tool in your hands.</p>

                        <p class="lead">
                            Submit your email address below and benefit from exclusive access to
                            <br>
                            <strong>free assessments</strong>.
                        </p>

                        <div class="col-sm-8 col-sm-offset-2">
                            {!! View::make('signup.form') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/site.js"></script>
</body>
</html>
