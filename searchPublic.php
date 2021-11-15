<?PHP

/*$conn = mysqli_connect("localhost", "root", "", "login")or die(mysqli_error());
if (!$conn) {
    die("Error: Failed to connect to database");
}

$stmt ==$pdo->prepare("SELECT* FROM 'search' WHERE  'name' LIKE ?OR 'email' LIKE");
$stmt ->exexute([
    "%".$_POST['search']."%", "%".$_POST['search']."%"

]);

$results =$stmt->fetchAll();
*/

if(ISSET($_POST['search'])){
    $keyword = $_POST['keyword'];
?>
<div>
<h2>Result</h2>
<hr style="border-top:2px dotted #ccc;"/>
<?php
    require 'db_conn.php';
    $query = mysqli_query($conn, "SELECT * FROM `master_dataset_1` WHERE `COL 1` LIKE '%$keyword%' ORDER BY `COL 8`") or die(mysqli_error());
    while($fetch = mysqli_fetch_array($query)){
?>
<div style="word-wrap:break-word;">
    <a href="get_Public.php?id=<?php echo $fetch['COL 8']?>"><h4><?php echo $fetch['COL 1']?></h4></a>
    <a href="get_Public.php?id=<?php echo $fetch['COL 8']?>"><h4><?php echo $fetch['COL 2']?></h4></a>
    <a href="get_Public.php?id=<?php echo $fetch['COL 8']?>"><h4><?php echo $fetch['COL 3']?></h4></a>
    <a href="get_Public.php?id=<?php echo $fetch['COL 8']?>"><h4><?php echo $fetch['COL 4']?></h4></a>
    <a href="get_Public.php?id=<?php echo $fetch['COL 8']?>"><h4><?php echo $fetch['COL 5']?></h4></a>
    <a href="get_Public.php?id=<?php echo $fetch['COL 8']?>"><h4><?php echo $fetch['COL 6']?></h4></a>
    <a href="get_Public.php?id=<?php echo $fetch['COL 8']?>"><h4><?php echo $fetch['COL 7']?></h4></a>
    <a href="get_Public.php?id=<?php echo $fetch['COL 8']?>"><h4><?php echo $fetch['COL 9']?></h4></a>
    <p><?php echo substr($fetch['COL 1'], 0, 100)?>...</p>
    <p><?php echo substr($fetch['COL 2'], 0, 100)?>...</p>
    <p><?php echo substr($fetch['COL 3'], 0, 100)?>...</p>
    <p><?php echo substr($fetch['COL 4'], 0, 100)?>...</p>
    <p><?php echo substr($fetch['COL 5'], 0, 100)?>...</p>
    <p><?php echo substr($fetch['COL 6'], 0, 100)?>...</p>
    <p><?php echo substr($fetch['COL 7'], 0, 100)?>...</p>
 
    <p><?php echo substr($fetch['COL 9'], 0, 100)?>...</p>



    
</div>
<hr style="border-bottom:1px solid #ccc;"/>
<?php
    }
?>
</div>
<?php
}
?>