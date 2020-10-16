<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Added-New users</title>
    
</head>
<body style="background-color: gray; padding: 0;">
     <?php

        include("connection.php"); ?>
        if(isset($_POST['useradd'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $credit=$_POST['credit'];
        $query="INSERT into users(name,email,credit) values
        ('$name','$email','$credit')";
        $result=mysqli_query($conn,$query);
        echo"<script type='text/javascript'>alert('User added');window.location.href='display.php'</script>";
        }
    
    ?>

</body>
</html>
