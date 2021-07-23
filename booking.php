<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Booking</title>
  <link rel="stylesheet" href="bookstyles.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="test.js"></script>
</head>

<body>


  <div class="container">
    <div class="container-time">
      <h2 class="heading">Time Open</h2>
      <h3 class="heading-days">Monday-Friday</h3>
      <p>6pm - 9pm (Price: RM15 and above)</p>
      <p>9:30pm - 2am (Price: RM20 and above)</p>

      <h3 class="heading-days">Saturday and Sunday</h3>
      <p>5pm - 10pm (Price: RM15 and for Student RM10 Only)</p>
      <p>10.30pm - 2am (Price: RM20 and above)</p>

      <hr>

      <h4 class="heading-contact">Contact Us: 111-222-333</h4>
      <h4 class="heading-contact">Email Us: linkinshahed@gmail.com</h4>
      <h4 class="heading-contact">Whatsapp Us: +60 11-61305166</h4>
    </div>

    <div class="container-form">
      <form name="book_form" action="payment.php" method="post">
        <h2 class="heading">Make Your Booking</h2>
        <?php
          if(empty($_SESSION["username"])){
            print "<div class=form-field>
              <input type=text name=Name placeholder=Name required>
            </div>
            <div class=form-field>
              
              <input type=email name=Email placeholder=Email required>
            </div>
            <div class=form-field>
              
              <input type=tel name=Phone placeholder=Phone Number required>
            </div>";
          }else
            print "<div class=form-field><p>Hi, $_SESSION[username]</p></div>";
        ?>
        <div class="form-field">
          
          <select name="Movie" onchange="showDay()" id="movielist">
          <option value="1">Avengers: Endgame</option>
          <option value="2">Sonic the Hedgehog</option>
          <option value="3">Scoob!</option>
          <option value="4">No Time to Die</option>
          <option value="5">Joker</option>
          <option value="6">Dolitle</option>
          <option value="7">Star Wars: The Rise of Skywalker</option>
          <option value="8">Toy Story 4</option>
          <option value="9">Jumanji: The Next Level</option>
          <option value="10">Captain Marvel</option>
          <option value="11">Once Upon a Time in Hollywood</option>
          <option value="12">Frozen II</option>
          </select>
        </div>
        <div class="form-field" id="day">
        </div>
        
        <div class="form-field" id="time">        
        </div>
        <div class="form-field">
          <input type="number" name="numOfTickets" placeholder="Number of Tickets" id="ticket" value="" onkeyup="showAmount()"> 
        </div>
          <p>You Need To Pay: <span id="amount" name="money"></span> </p>
          <p>Payment Method</p>
          <div>
            <label class="radio-btn">ViSA
            <input type="radio" checked="checked" name="payment" value="Visa Card">
            <span class="checkmark"></span>
          </label>
          <label class="radio-btn">MASTER CARD
            <input type="radio" name="payment" value="Master Card">
            <span class="checkmark"></span>
          </label>
          <label class="radio-btn">PAYPAL
            <input type="radio" name="payment" value="Paypal">
            <span class="checkmark"></span>
          </label>
          </div>
        <button class="btn">Submit</button>
      </form>
    </div>
  </div>


</body>

</html>