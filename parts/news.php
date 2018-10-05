<?php include '../login/db_connect.php' ;

$result = mysql_query('SELECT * from `enercore_news`.`blog` ORDER BY `blog_id` DESC LIMIT 3 ');
?>

<div id="en-news">
        <div class="container">

            <div class="section-title text-center"><!-- Centered Section Title -->
                <h2>Latest News</h2>
                <hr>
                <p>Quisque porttitor sem libero auctor lorem fringilla sit amehasellus gravida nisi elitam egestda. Sedquis viverra enim. </p>
                <a class="read-more" href="blog.html">View All News <span class="fa fa-chevron-circle-right"></span></a>
            </div>

          
            <div class="row">
              <?php 	
              while ($row = mysql_fetch_assoc($result)) { 
              
              ?>
              <div class="col-sm-4 col-md-4">
                    <div class="news">  <!-- Blog Post/News #1 -->
                        <span class="meta-date"><i class="fa fa-calendar"></i>
                          <?php 
															$originalDate = $row['blog_date'];
															$newDate = date("F j, Y", strtotime($originalDate));
															echo $newDate; ?> </span>
                        <a href="single-blog.html"><h4> <?= $row['blog_title'];?></h4></a>
                        <hr>
                       
                        <p>
                             <?php echo (strip_tags(substr($row['blog_body'], 0, 300))); echo "....."; ?>
                        </p>
                        <a class="read-more" href="single-blog.html">Read More <span class="fa fa-chevron-circle-right"></span></a>
                    </div>
                </div>

            <?php  } ?>
                

                

            </div>

        </div>
    </div>