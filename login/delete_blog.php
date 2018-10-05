<?php session_start();
include ('./db_connect.php');
if($_SESSION["login_flag"]==1){ } else {
	?>
	<script>	
	location.href = "/login";
</script>
<?php }

$id= $_GET['id'];



$sql = "DELETE FROM `enercore_news`.`blog` WHERE `blog_id`='$id';";
mysql_query($sql);
?>
<script>	
	location.href = "news_landing.php";
</script>


