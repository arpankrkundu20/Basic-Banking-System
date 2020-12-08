<!Doctype html>
<html>

<head>
    <title>Users-page</title>
    <link rel="icon" type="image/png" href="transfer1.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
        include("connection.php");
        error_reporting(0);
        ?>
        
        <style type="text/css">
 .list-group{
  width:48%;
  height: auto;
 }

 .container{
  padding: auto;
  width: auto;
  height: 100%;
 }
</style>


</head>
<body>
    <?php
   $query="SELECT * FROM users";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);

    if($total !=0)
  { 
?>
    <div class="container">
        <div class="list-group">
            <?php
    while($result =mysqli_fetch_assoc($data))
    {
     ?>
            <a class="list-group-item list-group-item-action flex-column align-items-start"
                           href='display.php?id=<?php echo $result['id']; ?>'>
                <div class="chat_img"> <img src="profile.jpg" width="50%" height="50%" alt="chat_img"> </div>
                <?php echo $result['name'];}
    }
     else
    {
    echo"No Record Found";
    }
    ?>
            </a>
        </div>
        <?php
   if (isset($_GET["id"])) { $id  = $_GET["id"]; } else { $id=0; };
   $data=mysqli_query($conn,"SELECT * FROM users WHERE id=$id ");
   $total=mysqli_num_rows($data);
   $result =mysqli_fetch_array($data);
?>

        <div class="col-sm-6">
            <div class="panel-heading">
                <h3 class="panel-title">User Information :</h3>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-user-information">
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td>
                                   <?php $val = isset($result['name']) ? $result['name'] : 0;
                     echo $val;?>

                            </td>
                        </tr>
                        <tr>
                            <td>Account ID:</td>
                            <td>
                                <?php $val = isset($result['id']) ? $result['id'] : 0;
                     echo $val;?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <?php $val = isset($result['email']) ? $result['email'] : 0;
                     echo $val;?>
                            </td>
                        </tr>
                        <tr>
                            <td>Credits</td>
                            <td>
                <?php $val = isset($result['credit']) ? $result['credit'] : 0;
                     echo $val;?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="panel-heading myclass">
                <h3 class="panel-title">Transfer Credits :</h3>
            </div>
            <br>
            <form class="form-group" action="payment.php" method="post">
                <?php
   $query="SELECT name FROM users";
   $data=mysqli_query($conn,$query);
    ?>
                <div class="col-sm-6">
                    <label for="from">Select User From:</label>
                    <select class="form-control" name="from">
                        <option value="null">Not Selected</option>
                <?php 
          while($result= mysqli_fetch_array($data))
          {
           echo "<option value='" . $result['name']. "'>" . $result['name'] . "</option>";
            
          }
          ?>
                    </select>
                </div>

            <?php
   $query="SELECT name FROM users";
   $data=mysqli_query($conn,$query);
                                
    ?>
                <div class="col-sm-6 no-gutter">
                    <label for="to">Select User To:</label>
                    <select class="form-control" name="to">
                        <option value="null">Not Selected</option>
                        <?php 
          while($result= mysqli_fetch_array($data))
          {
           echo "<option value='" . $result['name'] . "'>" . $result['name'] . "</option>";
            
          }
          ?>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="amount">Credits:</label>
                    <input class="form-control" type="number" name="amount" min=1 autocomplete="off">
                </div>
                <br>
                <div class="col-sm-6 nopadding">
                    <br>
                    <div class="buttons" align="center">
                        <button type="submit" class="btn" name="submit" value="submit">Transfer credits</button>
                        <a href="index.html" class="btn" >Back</a>
                    </div>
                    </div>        
                </div>
               
            </form>
     
</body>

</html>
