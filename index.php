<?php
$insert = false;

// $key = "rzp_test_fnDeYG6FIEfNcU"
if (isset($_POST['Name'])) {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die('connection to this database failed due to '.
    mysqli_connect_error());
    }
    //echo "Haribol, we are connected to database";
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $sql = "INSERT INTO `hare_krishna`.`umang` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Address`, `Dt`) VALUES ( '$Name',
'$Age', '$Gender', '$Email', '$Phone', '$Address', current_timestamp());";
    // echo $sql;

    if ($con->query($sql) == true) {
        // echo "Haribol, Inserted Successfully";
        $insert = true;
    } else {
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iskcon Ghaziabad</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Style+Script&display=swap" rel="stylesheet">
</head>
<body>
     <img class="bg" src="bg1.jpg" alt="Hare Krishna"> 
    <div class="container"><h1>Umang Festival</h1>
        <p style="color:green";>Welcome To Iskcon Ghaziabad Please fill this form to get register for this program</p>

        <?php
          if ($insert == true) {
              echo "<p class='submitMsg'> Haribol , You have filled  your form successfully. KIndly give 101 Rupees  to confirm your registration</p>";
              echo "<a href='https://rzp.io/i/IxYa6c9w2'>
      <h3>Click Here to Pay</h3>
      </a>";
          }
        ?>
        <form action="index.php" method="POST">
        <input type="text" name="Name" id="Name" placeholder="Enter Your Name">
        <input type="text" name="Age" id="Age" placeholder="Enter Your Age">
        <input type="text" name="Gender" id="Gender" placeholder="Enter Your Gender">
        <input type="email" name="Email" id="Email" placeholder="Enter Your Email">
        <input type="phone" name="Phone" id="Phone" placeholder="Enter Your Phone">
        <textarea name="Address" id="Address" cols="30" rows="10" placeholder="Enter Your Complete Addrress"></textarea>
        <!-- <button class="btn">SUBMIT</button> -->
      
        <input type="submit"/>
         
         <!-- <div id="button"><a redirect to href="https://rzp.io/i/IxYa6c9w2" target="_blank"><button>SUMBIT</button> </a></div>  -->
    
        </form>
   

        
 
        
    <!-- </div>
    <div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_HhZQd3tX8u7Q9r/view" data-text="Pay Now" data-color="#528FF0" data-size="large">
  <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
  </script>
  
</div> -->


  
    

</body>
</html>