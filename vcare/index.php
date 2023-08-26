<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Document</title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script
     src="https://kit.fontawesome.com/a8162db7fd.js"
     crossorigin="anonymous">
   </script>
   </head>
<body>
  <script>
    function myfun()
        {
            var numb=document.getElementById("mobile").value;
            if (numb==""){
    document.getElementById("message").innerHTML="** please fill mobile";
  }
  if (isNaN(numb))
  {
    document.getElementById("message").innerHTML="** Enter only numeric value";
    return false;
  }
  if (numb.length<10){
    document.getElementById("message").innerHTML="** Mobile number should be 10 digit";
  }
  if (numb.length>10){
    document.getElementById("message").innerHTML="** Mobile number should be 10 digit";
  }
        }
</script>
  <div class="container">
    <?php
    include("header.html");
    ?>
    <div class="title">Customer Details </div>
    <div class="content">
      <form action="#" onsubmit="return fun()">
        <div class="user-details">
          <div class="input-box">
            <span class="details required">Customer Category </span>
            <select>
                <option>--Please Select--</option>
                <option>admin</option>
                <option>worker</option>
                <option>rentals</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details required">Pincode </span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details required">Customer Name </span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details required">Address </span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details required">Contact No. </span>
            <span id="message"></span>
            <input type="text" placeholder="Enter your email" id="mobile" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Alternate Contact No. </span>
            <input type="text" placeholder="Enter your number" id="mobile" value="" required>
          </div>
          <div class="input-box">
            <span class="details required">State </span>
            <select>
                <option>--Please Select--</option>
                <option>Uttar Pradesh</option>
                <option>Madhya Pradesh</option>
                <option>Uttrakhand</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Email </span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details required">City </span>
            <select>
                <option>--Please Select--</option>
                <option>Meerut</option>
                <option>Delhi</option>
                <option>Gurgaon</option>
                <option>Ghaziabad</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Residence No. </span>
            <input type="text" placeholder="Confirm your password" required>
          </div><div class="input-box">
            <span class="details required">Product </span>
            <select>
                <option>--Select Product--</option>
                <option>water purifier 1</option>
                <option>water purifier 2</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details required">Brand </span>
            <select>
                <option>--Select Brand--</option>
                <option>water purifier 1</option>
                <option>water purifier 2</option>
            </select>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>