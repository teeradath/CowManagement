<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> <![endif]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">ระบบการจัดการโคนม</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<? echo $menuActive==0?"active":""; ?>">
                        <a href="<?php echo base_url();?>">หน้าหลัก</a>
                    </li>
                    <li class="<? echo $menuActive==1?"active":""; ?>">
                        <a href="<?php echo base_url();?>cow">ข้อมูลโคนม</a>
                    </li>
                    <li class="<? echo $menuActive==2?"active":""; ?>">
                        <a href="<?php echo base_url();?>welcome/users/1/5">ประวัตการผสมเทียม</a>
                    </li>
                    <li class="<? echo $menuActive==3?"active":""; ?>">
                        <a href="<?php echo base_url();?>welcome/users/1/5">ประวัตการฉีดยา</a>
                    </li>
                    <li class="<? echo $menuActive==4?"active":""; ?>">
                        <a href="<?php echo base_url();?>welcome/users/1/5">ประวัตการให้นม</a>
                    </li>
                    <li class="<? echo $menuActive==5?"active":""; ?>">
                        <a href="<?php echo base_url();?>welcome/users/1/5">ประวัตการให้อาหาร</a>
                    </li>
                    <li class="<? echo $menuActive==6?"active":""; ?>">
                        <a href="<?php echo base_url();?>welcome/users/1/5">คุณภาพน้ำนม</a>
                    </li>
                    <!--<li>
                        <a href="<?php echo base_url();?>welcome/users/1/5">Services</a>
                    </li>
                     <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <?php if($this->router->fetch_class()=="welcome" && $this->router->fetch_method() == "index"):?>
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php echo base_url();?>images/brand/pic1.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url();?>images/brand/pic2.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url();?>images/brand/pic3.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
	<?php endif;?>
    <!-- Page Content -->
    <div class="container">
    <?php if($this->router->fetch_class()=="welcome" && $this->router->fetch_method() == "index"):?>
<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">ยินดีต้อนรับ
                    <small>ระบบการจัดการโคนม</small>
                </h1>
                
            </div>
        </div>
        <!-- /.row -->
	<?php endif;?>
        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-md-12">
                <?php 
					if(isset($content_text)){echo $content_text;} if(isset($content_view) && !isset($content_data)){ $this->load->view($content_view); } 
					if(isset($content_view) && isset($content_data)){ foreach($content_data as $key => $value){ $data[$key] = $value; } $this->load->view($content_view,$data); }
				?>
            </div>
        </div>
        <!-- /.row -->
		
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
