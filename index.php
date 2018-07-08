<html>
<head>
<title>NO-IP DDNS IP CHANGER</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="container">
    <div class="jumbotron">
  <h1>NO-IP DDNS IP Changer</h1>
  <p>v1.0 Beta</p>
<hr>
<form action="index.php" method="GET">
  <div class="form-group row">
    <label for="address" class="col-4 col-form-label">Hostname:</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="address" name="address" placeholder="static.ddns.net" required="required" class="form-control here" type="text">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ip" class="col-4 col-form-label">New IP Address:</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="ip" name="ip" placeholder="123.123.456.789" class="form-control here" type="text">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="send" type="submit" class="btn btn-primary">Send Request</button>
      <button type="reset" class="btn">Reset Form</button>
    </div>
  </div>
</form>
<?php
if(isset($_GET['send'])){
    
    
    // Your NO-IP Credentials here
    $username = "yourmail@domain.com";
    $password = "no-ip-p@ssword";

    $result = file_get_contents("https://".$username.":".$password."@dynupdate.no-ip.com/nic/update?hostname=".$_GET['address']."&"."myip=".$_GET['ip']);
    echo "<div class='alert alert-success' role='alert'><strong>Request Sent!</strong><br>Result: ".$result."</div>";
    
}
?>
</div>
</div>
</html>
