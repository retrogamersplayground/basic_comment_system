<aside>

	<h2>Do you have a question about one of our presidents? Do you want to share a fact? Leave a comment below!</h2>
	
	<form method="post" action="insert.php">
		<input type="text" id="name" name="name" placeholder="Name" required /> <br />
		<input type="text" id="comments" name="comment" placeholder="Comment" required /> <br />
		
		<input type= "submit" id= "submit" value ="Add Comment" />
		
	</form>

</aside>

<hr>

<hr>

<?php include_once("mysqli_connection.php");?>

<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM comments");
while($row=mysqli_fetch_array($res))

{
?>
 



  <div class="box">




Name: <?php echo $row["name"];?></br>
comment: <?php echo $row["comment"];?></br>

</br>
<hr>
</br>
  </div> <!--box-->       

<?php
}

?>

</div>