<?php
require('../../config/db.php');
if (isset($_GET['id'])) {
$deletedmovie=$_GET['id'];
$query="delete from movie where id=".$deletedmovie;
mysqli_query($con,$query);
}else
{
    echo "error";
}
?>