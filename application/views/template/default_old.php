<!DOCTYPE HTML>
<html>
        
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/styles.css" />
	
	<script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.4-ui.js"></script>
	<title><?php echo $title;?></title>
</head>
<body>
    <div id="container" class="container-fluid" style="padding: 0;background-color: silver;margin-top: -20px;">
	<header class="row" style="margin: 0">
		<div class="col-md-12">
			<h1><a href="#"> Welcome <span>Company</span></a></h1>
			<h2> your website slogan here</h2>
		</div>
	</header>
	<nav style="height: 50px">
		<div class="width">
			<ul>
				<li class="start selected"><a href="<?php echo base_url();?>welcome">welcome<?php //echo $this->db->get("Users")->num_rows();?></a></li>
				<li class="start" ><a href="<?php echo base_url()."welcome/users/1/5";?>">Users</a></li>
				<li><a href="<?php echo base_url()."welcome/product";?>">Product</a></li>
				<li><a href="<?php echo base_url();?>tree_id_1_lv_5.html">Solutions</a></li>
				<li class="end"><a href="#">Contact</a></li>
			</ul>
		</div>
	</nav>
	
    <div id="body" class="width" style="background-color: #FFF;">
		<div class="row">
			<div class="col-md-8">
		        <div id="content">
				    <?php 
				    	if(isset($content_text)){echo $content_text;} if(isset($content_view) && !isset($content_data)){ $this->load->view($content_view); } 
				    	if(isset($content_view) && isset($content_data)){ foreach($content_data as $key => $value){ $data[$key] = $value; } $this->load->view($content_view,$data); }
				    ?>
		        </div>
	        </div>
	        <div class="col-md-4">
		        <aside class="sidebar">
		
		           <ul>	
		               <li>
		                    <h4>Categories</h4>
		                    <ul>
		                        <li><a href="index.html">Home Page</a></li>
		                        <li><a href="examples.html">Style Examples</a></li>
		                        <li><a href="#">Commodo vestibulum sem mattis</a></li>
		                        <li><a href="#">Sed aliquam libero ut velit bibendum</a></li>
		                        <li><a href="#">Maecenas condimentum velit vitae</a></li>
		                    </ul>
		                </li>
		                
		                <li>
		                    <h4>About us</h4>
		                    <ul>
		                        <li class="text">
		                        	<p style="margin: 0;">Aenean nec massa a tortor auctor sodales sed a dolor. Duis vitae lorem sem. Proin at velit vel arcu pretium luctus. <a href="#" class="readmore">Read More &raquo;</a></p>
		                        </li>
		                    </ul>
		                </li>
		                
		                <li>
		                	<h4>Search site</h4>
		                    <ul>
		                    	<li class="text">
		                            <form method="get" class="searchform" action="#" >
		                                <p>
		                                    <input type="text" size="32" value="" name="s" class="s" />
		                                    
		                                </p>
		                            </form>	
								</li>
							</ul>
		                </li>
		                
		                <li>
		                    <h4>Helpful Links</h4>
		                    <ul>
		                        <li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates">Premium HTML web templates from $10</a></li>
		                        <li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting">Cheap web hosting from Dreamhost</a></li>
		                        <li><a href="http://tuxthemes.com" title="Tux Themes">Premium WordPress themes</a></li>
		                    </ul>
		                </li>
		                
		            </ul>
				
		        </aside>
	        </div>
        </div>
    	<div class="clear"></div>
    </div>
    <footer>
			<!-- <div class="footer-content width">
				<ul>
					<li><h4>Proin accumsan</h4></li>
					<li><a href="#">Rutrum nulla a ultrices</a></li>
					<li><a href="#">Blandit elementum</a></li>
					<li><a href="#">Proin placerat accumsan</a></li>
					<li><a href="#">Morbi hendrerit libero </a></li>
					<li><a href="#">Curabitur sit amet tellus</a></li>
				</ul>
		            
				<ul>
					<li><h4>Condimentum</h4></li>
					<li><a href="#">Curabitur sit amet tellus</a></li>
					<li><a href="#">Morbi hendrerit libero </a></li>
					<li><a href="#">Proin placerat accumsan</a></li>
					<li><a href="#">Rutrum nulla a ultrices</a></li>
					<li><a href="#">Cras dictum</a></li>
				</ul>
		            
				<ul class="endfooter">
					<li><h4>Suspendisse</h4></li>
					<li><a href="#">Morbi hendrerit libero </a></li>
					<li><a href="#">Proin placerat accumsan</a></li>
					<li><a href="#">Rutrum nulla a ultrices</a></li>
					<li><a href="#">Curabitur sit amet tellus</a></li>
					<li><a href="#">Donec in ligula nisl.</a></li>
				</ul>
		            
				<div class="clear"></div>
			</div>-->
			<div class="footer-bottom">
				<p>&copy; YourSite 2013. <a href="http://zypopwebtemplates.com/">Free CSS Web Templates</a> by ZyPOP</p>
			</div>
		</footer>
    <!-- Footer -->
</div>
<script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>
