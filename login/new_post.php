<?php session_start();
include ('./db_connect.php');
if($_SESSION["login_flag"]==1){  } else {
	?>
	<script>	
	location.href = "../login";
</script>
<?php }


 //print_r(mysql_fetch_assoc($result));
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Clough Enercore Limited </title>
    <meta name="description" content="Clough Enercore Limited">
    <meta name="keywords" content="Clough Enercore Limited">
    <meta name="author" content="Clough Enercore Limited">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../fonts/icons/flaticon.css">

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="../css/nivo-lightbox.css" >
    <link rel="stylesheet" href="../css/nivo_lightbox_themes/default/default.css">

    <!-- Slider
    ================================================== -->
    <link href="../css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    <!-- Google Font
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="../js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>

    <!-- Top Navigation
    ========================-->
    <nav id="top-menu">
        <div class="container">
            <div class="row">

                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="col-sm-4 col-md-4">
                    <div class="navbar-header">
                        <a class="logo navbar-brand" href="#">
                        	<img src="../img/logo.jpg" style="height: 60px;width: auto;">
                        </a>
                    </div>
                </div>  

                <div class="col-sm-8 col-md-8">
                    <ul class="top-links list-unstyled text-right">
                        <li class="top-contact">
                            <ol class="list-inline">
                                <li><i class="fa fa-phone"></i> : 1 403 523 2000</li>
                                <li>
                                <a href="mailto:info@cloughenercore.com">	
                                	<i class="fa fa-envelope-o"></i> : info@cloughenercore.com</a></li>
                                <li>
                                <a href="//www.linkedin.com/company/enercore-projects-ltd-" target="_blank"> 
                                			<i class="fa fa-linkedin"></i> </a></li>
                            </ol>
                        </li>
                        <!-- <li>
                            <ol class="social-icons list-inline">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ol>
                        </li> -->
                    </ul>
                </div>  
                            
            </div>
        </div>
    </nav>

    <!-- Main Navigation
    ========================-->
    <div id="sticky-anchor"></div>
    <nav id="main-menu" class="navbar navbar-default">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myMenu">
                    <i class="fa fa-list-ul"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myMenu">
                <ul class="nav navbar-nav navbar-left">
                    <li> <a href="../index.html">Home</a></li>
                    <li><a href="../services.html">Services</a></li>
                    <li><a href="../markets.html">Markets</a></li>
                    <li><a href="../services.html">Global Business Network</a></li>
                    <li><a href="../about.html">About Us</a></li>
                     <li><a href="">Careers</a></li>
                    <li><a href="../contact.html">Contact Us</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                   
                   
                    </li>
                </ul>          
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container -->
    </nav>

   

    <!-- Page Header
    ========================-->
    <div id="en-header">
        <div class="container">
            <h2 class="pull-left">News Post</h2>
            <ol class="breadcrumb pull-right">
             
              <li class="active">News Post</li>
            </ol>
        </div>
    </div>

    <!-- Intro 
    ========================-->
    <div id="en-content">
        <div class="container">
            <div class="row">

                <!-- Left Content 4 Cols -->
                <div class="col-sm-4 col-md-4">
                    <div class="section-title text-left"> <!-- Left Section Title -->
                        <h2>News Post </h2>
                        <hr>
                        
                    
                    </div>
                </div>

                <!-- Right Content 8 Cols -->
                <div class="col-sm-10 col-md-10">
          				
                  
                  <form id="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" novalidate="novalidate" enctype="multipart/form-data">
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="row">
							<div class="col-md-10 form-group">
										<br><br>
									 <div class="row">
									 	<div class="col-md-2"></div>
										<div class="col-md-10">
											<label>Title</label>
											<input type="text" value="" maxlength="1000" class="form-control" name="title" id="title" required="" aria-required="true">
										</div>
									</div>	
										
									 <div class="row">
									 	<div class="col-md-2"></div>
										<div class="col-md-10">
											<label>Body</label>
											<textarea name="content" style="width:100%"></textarea>

										</div>
									</div>
								
								
								 <div class="row">
									 	<div class="col-md-2"></div>
										<div class="col-md-10">
											<label>Image</label>
													 <img src="<?=$img?>" style="width:20%" alt="" id="thub"/>
            							 <input name="uploadedfile" type="file" id="upload"/><br /> 
										</div>
									</div>
								
								 <div class="row">
									 	<div class="col-md-2"></div>
										<div class="col-md-10">
											<label>Image - 1 </label>
													 <img src="<?=$img?>" style="width:20%" alt="" id="thub1"/>
            							 <input name="uploadedfile1" type="file" id="upload-1"/><br /> 
										</div>
									</div>
									
								
								
									<br>
									
									<div class="row">
									<div class="col-md-2">
										
									</div>
									<div class="col-md-6">
										<input type="submit" value="Submit" class="btn btn-primary btn-lg" name="submit" id="submit" data-loading-text="Loading..."> 
									 <a type="btn"  class="btn btn-primary btn-lg" href="./articles_landing.php" > Cancel </a>
									</div>
								
								</div>
								</div>
								
								
								
							</form>

                    <div class="clearfix"></div>
                    <div class="spacer"></div>

                    

                </div>

            </div>
        </div>

    </div>

   
    

    <!-- Footer Area -->
    <div id="en-footer">
        <div class="footer-content">
            <div class="container">

                <div class="row">

                    <div class="col-sm-5 col-md-5">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>About Us</h4>
                                <hr>
                            </div>
<!--                             <a class="logo footer-logo" href="#">Enhenyero</a> -->
                            <br>
                            <small>Clough Enercore Limited deliver a full suite of engineering services from concept and feasibility studies through to design, delivery, and long term production operations and optimization.<br><br>  
						Clough Enercore brings together Australia’s leading engineering and project management contractor Clough, with Canada’s EPCM service provider Enercore Projects Limited. 
						Clough acquired Calgary based Enercore Projects in October 2015.  
						The the united group provides a fresh approach to oil & gas contracting in North America. </small>
                            
                          
                        </div>
                    </div>

                   
                    <div class="col-sm-3 col-md-3">
                        <div class="widget">
                            <div class="widget-title text-left">
                                <h4>Page Links</h4>
                                <hr>
                            </div>
                            <ul class="list-unstyled list-block">
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">About</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Our Team</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Works</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Services</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Latest News</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Contact</a></li>
                                <li><i class="fa fa-long-arrow-right"></i><a href="#">Career</a></li>
                            </ul>
                        </div>
                    </div>
									
									 <div class="col-sm-4 col-md-4">
                         <div class="widget">
                            <div class="widget-title text-left">
                                <h4>Contact Us</h4>
                                <hr>
                            </div>

                          
                            <address>
                                <strong> Clough Enercore Limited </strong><br>
                                Igbalangao, Bugasong, Antique<br>
                                Philippines 5704<br>
                                <abbr title="Phone">P:</abbr> 1 403 523 2000
                            </address>

                        </div>
                    </div>


                </div>

                <div class="clearfix"></div>
                <div class="smallspacer"></div>

                

            </div>
        </div>
        <div class="bottom-footer">
            <div class="container text-center">
                <p>All Rights Reserved © 
									<script>document.write(new Date().getFullYear())</script>
									|  Powered by <a style="color:#1aacff;" href="http://fidatotech.ca"> <strong >Fidato Technologies </strong> </a></p>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../js/bootstrap.js"></script>

    <script type="text/javascript" src="../js/owl.carousel.js"></script><!-- Owl Carousel Plugin -->
    <script type="text/javascript" src="../js/nivo-lightbox.min.js"></script><!-- LightBox Nivo -->

    <!-- Portfolio Filter -->
    <script type="text/javascript" src="../js/jquery.isotope.js"></script>
    <script type="text/javascript" src="../js/imagesloaded.js"></script>
    
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="../js/main.js"></script>


<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>


      </body>
</html> 

<?php 
	



$blog_title= mysql_real_escape_string($_POST['title']); 
	
$blog_body= mysql_real_escape_string($_POST['content']); 		
date_default_timezone_set("America/New_York");	
$today =  (new DateTime())->format('Y-m-d');

if($_POST['submit']){
	
echo basename( $_FILES['uploadedfile']['name']);
if( basename( $_FILES['uploadedfile']['name']))	{		
			
			$target_path =  basename( $_FILES['uploadedfile']['name']);
			$upload_path = "./images/".$target_path;
	   
			//echo $target_path;
			
			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $upload_path)) {
			echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
			" has been uploaded";
			} else{
			    echo "There was an error uploading the file, please try again!";
			}
	
 			$target_path1=  basename( $_FILES['uploadedfile1']['name']); 
			$upload_path1 = "./images/".$target_path1;
		if(move_uploaded_file($_FILES['uploadedfile1']['tmp_name'], $upload_path1)) {
			echo "The file ".  basename( $_FILES['uploadedfile1']['name']). 
			" has been uploaded";
			} else{
			    echo "There was an error uploading the file, please try again!";
			}


		$image_path = $target_path.";".$target_path1;
}
	$sql = "	INSERT INTO `enercore_news`.`blog` (`blog_id`, `blog_title`, `blog_body`, `blog_date`, `blog_img`) 
	VALUES (NULL, '$blog_title', '$blog_body', '$today', '$image_path');";
	

 mysql_query($sql);
//	echo "inserting querry";
	//echo $sql;
	?>
	<script>	
	//location.href = "./articles_landing.php";
	</script>
<?php 

}
	include ('../db_disconnect.php');
?>
	