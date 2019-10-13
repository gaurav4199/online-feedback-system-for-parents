<h1 align="center" style="text-decoration:underline"><a href="">Admin Dashboard</a></h1>
<?php 


//all users
$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:black'>Total Number feedback given by users  : $r2</h2>";	


					

?>
