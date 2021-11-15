<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary"> Search Box</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<a href="public_school_search.php" class="btn btn-success">Back</a>
		<?php
			require 'db_conn.php';
			if(ISSET($_REQUEST['id'])){
				$query = mysqli_query($conn, "SELECT * FROM `master_dataset_1` WHERE `COL 8` = '$_REQUEST[id]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
		?>
				<h3><?php echo $fetch['COL 1']?></h3>
				<h3><?php echo $fetch['COL 2']?></h3>
				<h3><?php echo $fetch['COL 3']?></h3>
				<h3><?php echo $fetch['COL 4']?></h3>
				<h3><?php echo $fetch['COL 5']?></h3>
				<h3><?php echo $fetch['COL 6']?></h3>
				<h3><?php echo $fetch['COL 7']?></h3>
				<h3><?php echo $fetch['COL 8']?></h3>
				<h3><?php echo $fetch['COL 9']?></h3>
				
				
                
				<p><?php echo nl2br($fetch['COL 1'])?></p>
				<p><?php echo nl2br($fetch['COL 2'])?></p>
				<p><?php echo nl2br($fetch['COL 3'])?></p>
				<p><?php echo nl2br($fetch['COL 4'])?></p>
				<p><?php echo nl2br($fetch['COL 5'])?></p>
				<p><?php echo nl2br($fetch['COL 6'])?></p>
				<p><?php echo nl2br($fetch['COL 7'])?></p>
				<p><?php echo nl2br($fetch['COL 8'])?></p>
				<p><?php echo nl2br($fetch['COL 9'])?></p>


				
                

		<?php
			}
		?>
 
	</div>
</body>
</html>