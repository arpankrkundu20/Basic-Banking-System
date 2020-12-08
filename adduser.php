<?php
 include("connection.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
*{
	height:auto;
	overflow: hidden;
  padding:0px;
}
<script type="text/javascript">
    
  </script>
	.btndanger1{
  display: inline-block;
  border-radius: 4px;
  width: 120px;
  height: 30px;
  background-color: darkblue;
  font-size: 20px;
  background-color: lightgreen;
  padding: 0px;
}

.btndanger1:hover{
  background-color: skyblue;
  cursor: pointer;
}

</style>

</head>
<body ><br><br><br><br><br><br>
	<h1 align="center" style="font-family:'Varela Round';">Add details</h1><br><br>
  <div align="center" style="background-color:yellow">
	<form  action="#" method ="POST"  align="center" autocomplete="off">
  		<div class="useradd">
        <br>
    <form action="#" method = "POST" align="center"  autocomplete="off">
    <div class="useradd">
        <tr><td for="name"align="center"> Name:&nbsp&nbsp<input class="myform" type="text" id="name" name="name1" placeholder="User Name" required=""></td><br><br></tr>
        <tr><td for="email" align="center">Email:&nbsp &nbsp<input class="myform" type="text" id="email" name="email1" placeholder="Email" required=""></td><br><br></tr>
        <tr><td for="credit" align="center">Credits:<input class="myform" type="text" id="credit" name="credit1" placeholder="Credits" required=""></td><br><br></tr>
        <button class="btn" type="submit" name="useradd">Add details</button>
      </div>
    </form>

</div>
      <footer class="footer1" align="center"> <br>
    <div  style="height: 60%"><b>
      Designed by Arpan Kumar Kundu</b>
 
    </div>
  </footer>
</body>
</html>
  <?php
        if(isset($_POST['useradd'])){
        $n=$_POST['name1'];
        $e=$_POST['email1'];
        $c=$_POST['credit1'];
        $query="INSERT INTO users(name,email,credit) VALUES('$n','$e','$c')";
        $result=mysqli_query($conn,$query);
                ?>
					<script>
						alert ("User added");
						//window.location.href='index.html';
						location.replace("display.php");
					</script>
					<?php
					//echo $n;echo $e;echo $c;
					
        }
    
    ?>


