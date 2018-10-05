<?php
$url =  $_GET['url'];
$path = "";
if($_GET['parent']=="yes") { $path="../" ;}
if($url=="services"){$path="../"; }
?>
<script type="text/javascript" src="<?=$path?>/js/custom.js"></script>
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

                    <li class="dropdown about <?php if($url=="home"){ echo " active"; } ?>">
                      <a  href="./index.html#en-intro" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        About Us <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="">Company Profile</a></li>
                        <li><a href="">History</a></li>
                        <li><a href="index.html#en-portfolio">Difference Makers</a></li>
                        <li><a href="<?=$path?>">Core Values</a></li>
                        <li><a href="<?=$path?>">Leadership Team</a></li>
                        <li><a href="<?=$path?>global.html">Global Business Netowrk</a></li>
                        <li><a href="single-blog.html">Vision & Strategy</a></li>
                      </ul>

                    </li>
                    <li class="dropdown services <?php if($url=="services"){ echo " active"; } ?> ">
                      <a href="services.html">Services<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=$path?>service/multidiscipline.html">Multi-discipline Engineering</a></li>
                        <li><a href="<?=$path?>service/epcm.html">EPCM/ EPC</a></li>
                        <li><a href="<?=$path?>service/commissioning.html">Operational Readiness & Commissioning</a></li>
                      </ul>
                    </li>
                    <li class="dropdown market <?php if($url=="markets"){ echo " active"; } ?> ">
                      <a href="markets.html">Markets<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="./markets.html">Natural Gas</a></li>
                        <li><a href="./markets.html">LNG</a></li>
                        <li><a href="./markets.html">Pipeline, Gathering Systems & Flowlines</a></li>
                        <li><a href="./markets.html">Coventional Oil</a></li>
                        <li><a href="./markets.html">Heavy Oil/ Oil Sands</a></li>
                        <li><a href="./markets.html">Waste Treatment, Recovery & Disposal</a></li>
                      </ul>
                    </li>


                    <li class="dropdown market <?php if($url=="about"){ echo " active"; } ?> ">
                      <a href="<?=$path?>about.html">Our Pledge<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="./about.html">Zero Harm: HSSE</a></li>
                        <li><a href="./about.html">Major Accident Prevention</a></li>
                        <li><a href="./about.html">Quality</a></li>
                        <li><a href="./about.html">Corporate & Social Responsibility </a></li>
                      </ul>
                    </li>

                    <li class="dropdown carrers <?php if($url=="carrers"){ echo " active"; } ?> ">
                      <a href="<?=$path?>career.html">Careers<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=$path?>">Our People And Culture</a></li>
                        <li><a href="<?=$path?>">Career Opportunities </a></li>
                      </ul>
                    </li>

                    <li class="dropdown contact <?php if($url=="contact"){ echo " active"; } ?> ">
                      <a href="<?=$path?>contact.html">Contact<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=$path?>contact.html">Google Maps/contact Info</a></li>
                        <li><a href="<?=$path?>contact.html">Linkedin </a></li>
                      </ul>
                    </li>








                </ul>

                <!-- <form class="navbar-form navbar-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form> -->
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container -->
    </nav>
