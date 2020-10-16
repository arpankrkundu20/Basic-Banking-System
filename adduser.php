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
	<form width="auto" action="add.php" method = "post"  align="center" autocomplete="off">
  		<div class="useradd">
        <br>
    <form width="auto" action="add.php" method = "post" align="center"  autocomplete="off">
    <div class="useradd">
        <label for="name"align="center"> Name: </label> <input class="myform" type="text" id="name" name="name" placeholder="User Name" required=""><br><br>
        <label for="email" align="center">Email: </label> <input class="myform" type="text" id="email" name="email" placeholder="Email" required=""><br><br>
        <label for="credit" align="center">Credits: </label> <input class="myform" type="text" id="credit" name="credit" placeholder="Credits" required=""><br><br>
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
