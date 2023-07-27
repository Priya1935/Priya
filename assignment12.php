<html>
<head><tittle>assignment 12</tittle>
<body>
<div style="background-color:lightblue">
<h1>storing page views in session variables</h1>


<?php

session_start();
if (isset($_SESSION['views']))
{
$_SESSION['views']=$_SESSION['views']+1;
echo"total pages views=".$_SESSION['views'];
}
else
{
$_SESSION['views']=1;
echo"total pages views=".$_SESSION['views']."<br/>";
echo"session now started and session variable initialized <br/>";
echo"now refresh the page to increment page views <br/>";
}
?>
</div>
</body>
</head>
</html>


https://wormhole.app/NKYqr#2VC6W_XlVEes9U0LrWr5sw