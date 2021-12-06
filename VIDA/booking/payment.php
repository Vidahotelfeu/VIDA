<?php

if (!isset($_SESSION['feuhotel_cart'])) {
  # code...
  redirect(WEB_ROOT.'index.php');
}

function createRandomPassword() {

    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }

    return $pass;

}

 $confirmation = createRandomPassword();
$_SESSION['confirmation'] = $confirmation;
 
 $count_cart = count($_SESSION['feuhotel_cart']);

if(isset($_POST['btnsubmitbooking'])){
  // $message = $_POST['message'];
 

if(!isset($_SESSION['GUESTID'])){

$sql = "SELECT * FROM `tblauto` WHERE `autoid`=1";
$mydb->setQuery($sql);
$res = $mydb->loadSingleResult();


$guest = New Guest();
$guest->GUESTID          = $res->start;
$guest->G_FNAME          = $_SESSION['name'];    
$guest->G_LNAME          = $_SESSION['last'];  
$guest->G_CITY           = $_SESSION['city'];
$guest->G_ADDRESS        = $_SESSION['address'] ;        
$guest->DBIRTH           = date_format(date_create($_SESSION['dbirth']), 'Y-m-d');   
$guest->G_PHONE          = $_SESSION['phone'];    
$guest->G_NATIONALITY    = $_SESSION['nationality'];          
$guest->G_COMPANY        = $_SESSION['company'];      
$guest->G_CADDRESS       = $_SESSION['caddress'];        
$guest->G_TERMS          = 1;    
$guest->G_EMAIL          = $_SESSION['cemail'];  
$guest->G_UNAME          = $_SESSION['username'];    
$guest->G_PASS           = sha1($_SESSION['pass']);    
$guest->ZIP              = $_SESSION['zip'];
$guest->create(); 


  $lastguest= $res->start;
   
$_SESSION['GUESTID'] =   $lastguest;

}
 
    $count_cart = count($_SESSION['feuhotel_cart']);
  

    for ($i=0; $i < $count_cart  ; $i++) { 

 

            $reservation = new Reservation();
            $reservation->CONFIRMATIONCODE  = $_SESSION['confirmation'];
            $reservation->TRANSDATE         = date('Y-m-d h:i:s'); 
            $reservation->ROOMID            = $_SESSION['feuhotel_cart'][$i]['feuhotelroomid'];
            $reservation->ARRIVAL           = date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckin']), 'Y-m-d');  
            $reservation->DEPARTURE         = date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckout']), 'Y-m-d'); 
            $reservation->RPRICE            = $_SESSION['feuhotel_cart'][$i]['feuhotelroomprice'];  
            $reservation->GUESTID           = $_SESSION['GUESTID']; 
            $reservation->PRORPOSE          = 'RENT A ROOM';
            $reservation->STATUS            = 'Pending';
            $reservation->create(); 

            
            @$tot += $_SESSION['feuhotel_cart'][$i]['feuhotelroomprice'];
            @$CONFIRM = $_SESSION['confirmation'];
            @$ROOMN = $_SESSION['feuhotel_cart'][$i]['feuhotelroomid'];
            @$ROOMNAME = $_SESSION['ROOM'];
            @$GUESTN = $_SESSION['name'];
            @$STARTD = date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckin']), 'Y-m-d');
            @$ENDD = date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckout']), 'Y-m-d'); 
            @$GUESTNUM = $_SESSION['GUESTID'];


            @$A = date('Y-m-d h:i:s');
            @$B = $_SESSION['feuhotel_cart'][$i]['feuhotelroomid'];
            @$C = date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckin']), 'Y-m-d');  
            @$D = date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckout']), 'Y-m-d'); 
            @$E = $_SESSION['feuhotel_cart'][$i]['feuhotelroomprice'];  
            @$F = $_SESSION['GUESTID']; 
            @$G = 'Rental';
            @$H = 'Pending';
            }

           $item = count($_SESSION['feuhotel_cart']);

      $sql = "INSERT INTO `tblpayment` (`TRANSDATE`,`CONFIRMATIONCODE`,`PQTY`, `GUESTID`, `SPRICE`,`MSGVIEW`,`STATUS`)
       VALUES ('" .date('Y-m-d h:i:s')."','" . $_SESSION['confirmation'] ."',".$item."," . $_SESSION['GUESTID'] . ",".$tot.",0,'Pending')" ;
      $mydb->setQuery($sql);
      $mydb->executeQuery(); 

     $sql = "INSERT INTO tblbilling (bill_amount, bill_misc_charges, bill_room_charges, bill_mode_of_payment, bill_roomnum, bill_balance, Booking_id) VALUES ('$tot','0','0','Paypal Payment','$CONFIRM','$tot','$GUESTNUM')";  // Booking_id = GUEST NUMBER;
      $mydb->setQuery($sql);
      $mydb->executeQuery(); 

      $query="SELECT * FROM `tblroom` WHERE  `ROOMID` ='$ROOMN'";
      $mydb->setQuery($query);
      $res = $mydb->loadResultList();

      foreach ($res as $cur) {
      $ROOMNAME=$cur->ROOM;
      $ROOMDES =$cur->ROOMDESC;
     
      $sql = "INSERT INTO `tblinventory`(`inv_name`, `inv_desc`, `inv_guestname`, `inv_startdate`, `inv_guest_end_date`, `inv_rate`, `inv_guestpaid`, `inv_guest_to_pay`, `inv_bal`, `inv_guest_room`, `User_user_id`) VALUES ('$CONFIRM','$ROOMDES','$GUESTN','$STARTD','$ENDD','$tot','0','$tot','$tot','$ROOMNAME','$GUESTNUM')";
      $mydb->setQuery($sql);
      $mydb->executeQuery(); 

      @$REMARKSAM = $_POST['amenities'];

      $sql = "INSERT INTO tblreservation (CONFIRMATIONCODE, TRANSDATE, ROOMID, ARRIVAL, DEPARTURE, RPRICE, GUESTID, PRORPOSE, STATUS, BOOKDATE, REMARKS, USERID) VALUES ('$CONFIRM','$A','$B','$C','$D','$E','$F','$G','$H','$A','$REMARKSAM','$GUESTNUM')";
      $mydb->setQuery($sql);
      $mydb->executeQuery(); 

    }

            unset($_SESSION['feuhotel_cart']);
            // unset($_SESSION['confirmation']);
            unset($_SESSION['pay']);
            unset($_SESSION['from']);
            unset($_SESSION['to']);
            $_SESSION['activity'] = 1;

            ?> 

<script type="text/javascript"> alert("Booking is successfully submitted!");</script>

            <?php
            
    redirect( WEB_ROOT."index.php");


}
?>

 
 
 <div id="accom-title"  > 
    <div  class="pagetitle">   
            <h1 >Billing Details and Information
                 
            </h1> 
        </div> 
  </div>
 
<div id="bread">
   <ol class="breadcrumb">
      <li><a href="<?php echo WEB_ROOT ;?>index.php"></a> </li> 
      <li><a href="<?php echo WEB_ROOT ;?>booking/">Booking Information</a></li>    
   </ol> 
</div> 


<form action="index.php?view=payment" method="post"  name="personal" >

 
<div class="col-md-12">

  <div class="row">
    <div class="col-md-8 col-sm-4">
       <div class="col-md-12">
          <label>Name:</label>
          <?php echo $_SESSION['name'] . ' '. $_SESSION['last']; 
   echo $count_cart;
           ?>
        </div>
        <div class="col-md-12">
          <label>Address:</label>
          <?php echo isset($_SESSION['address'])  ? $_SESSION['address'] : ' '; ?> 
        </div>
        <div class="col-md-12"> 
        <label>Phone #:</label>
         <?php echo $_SESSION['phone'] ; ?>
        </div>
    </div> 
    <div class="col-md-4 col-sm-2">
      <div class="col-md-12">
        <label>Transaction Date:</label>
       <?php echo date("m/d/Y") ; ?>
      </div>
       <div class="col-md-12">
        <label>Transaction ID:</label>
       <?php echo $_SESSION['confirmation']; ?>
      </div>
      
    </div>
  </div> 
  <br/>

<div class="custom-select">
    <center><a>ADDITIONAL AMENITIES</a></center>
    <select type="text" name="amenities" id="amenities">
      <option value="FREE BREAKFAST">ADD FREE BREAKFAST</option>
      <option value="FREE LUNCH">ADD FREE LUNCH</option>
      <option value="FREE DINNER">ADD FREE DINNER</option>
      <option value="EXTRA 1 BED">ADD 1 EXTRA BED</option>
      <option value="GYM ACCESS">ADD GYM ACCESS</option>
      <option value="POOL ACCESS">ADD POOL ACCESS</option>
      <option value="GOLF ACCESS">ADD GOLF ACCESS</option>
      <option value="TOILETRIES">ADD TOILETRIES</option>
    </select>
</div>

<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<div class="row">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <td>Room</td>
          <td>Arrival</td>
          <td>Departure</td>
          <td>Price</td>
          <td>Night(s)</td>
          <td>Subtotal</td>
        </tr>
      </thead> 
      <tbody>
<?php
$payable = 0;
if (isset( $_SESSION['feuhotel_cart'])){ 
$count_cart = count($_SESSION['feuhotel_cart']);


for ($i=0; $i < $count_cart  ; $i++) {  

  $query = "SELECT * FROM `tblroom` r ,`tblaccomodation` a WHERE r.`ACCOMID`=a.`ACCOMID` AND ROOMID=" . $_SESSION['feuhotel_cart'][$i]['feuhotelroomid'];
   $mydb->setQuery($query);
   $cur = $mydb->loadResultList(); 
    foreach ($cur as $result) { 


?>

      
        <tr>
          <td><?php echo  $result->ROOM.' '. $result->ROOMDESC; ?></td>
          <td><?php echo  date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckin']),"m/d/Y"); ?></td>
          <td><?php echo  date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckout']),"m/d/Y"); ?></td>
          <td><?php echo  ' $ '. $result->PRICE; ?></td>
          <td><?php echo   $_SESSION['feuhotel_cart'][$i]['feuhotelday']; ?></td>
          <td><?php echo ' $ '.   $_SESSION['feuhotel_cart'][$i]['feuhotelroomprice']; ?></td>
        </tr>
<?php
       $payable += $_SESSION['feuhotel_cart'][$i]['feuhotelroomprice'] ;  
      }
    } 
     $_SESSION['pay'] = $payable;   
 } 
 ?> 
      </tbody>
    </table>
  </div> 
</div>

 

    <div class="right"> 
      <h3 style="text-align: right;">Total: $  <?php echo $payable ;?></h3>
    </div>
    

  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal', 
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"VIDA INTERNATIONAL HOTEL AND RESORT, ROOM RENTAL. TRANSACTION ID: <?php echo $_SESSION['confirmation']; ?>.","amount":{"currency_code":"USD","value":<?php echo $payable ;?>}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Please Click Submit Booking Button.</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
      <div class="">
      <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
       <CENTER><button type="submit" class="button"  name="btnsubmitbooking">Submit Booking</button></CENTER>
        <CENTER><a>By Clicking this button, It means that you agreed and understand the Terms and Condition.</a></CENTER>
    </div>
  </div>   
</form>

<center><button class="btn btn-default" onclick="myFunction()">TERMS AND CONDITION</button></center>

<style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: White;
  margin-top: 20px;
}
</style>


<div id="myDIV" style="display: none;">
 <p>
<h2>TERMS & CONDITIONS</h2>
<ul>
<h3>Reservations</h3>
Through our online booking system, you will be able to check room availability (for most hotels) and make your booking. For peace of mind, you will receive by email a reservation confirmation, including the details of your reservation. It is recommended that you keep a copy of this reservation confirmation, preferably by printing the page.
 
In the event that you have to modify or cancel your booking, please contact our reservation office as specified in your reservation confirmation.
 
<h3> Guaranteed Reservations</h3>
By securing your onlinebooking with a visa card, your booking  is guaranteed. All reservations made through our website must be guaranteed by a major credit card (e.g. Visa,, or direct palawan pawnshop).

 

<h3>Cancellation </h3>
<li>If there is a cancellation of a room reservation within 24hours prior to the arrival date, The guest will be charged 10% equivalent to the total amount of their booked room once their reservation is confirmed and paid. To refund the total amount, the guest must give a valid and acceptable reason with proof prior to concern.
<li>Additional Requests
<li>All additional or special requests are subject to availability and we cannot guarantee the provision for special requests. Any additional requests made should be prior to your arrival at the hotel, giving reasonable advance notice.
<li>General Information
<li>Accommodation: As a minimum, all bedrooms feature a private ensuite bathroom with either a bath & shower or a shower and colour television.  
<li>Opening hours: Our reception is open 24hours. If you wish to check-in to the hotel out of these hours, please discuss with reception at the time of booking.
<li>Payment Methods: We accept most major credit and debit cards, cash.

<h3>Price Guarantee</h3>
<li>On receipt of written confirmation the prices quoted and confirmed in writing by the Hotel remain fixed except for any alterations in the Government rates of taxation and/or duty such as VAT, for which we reserve the right to alter pricing to take account of any variation.
<li>Making a booking
<li>By making a booking you are confirming that you are authorised to do so on behalf of all persons named in the booking and you are acknowledging that all members of your party agree to be bound by these Booking Terms & Conditions.
<li>When your booking has been made a confirmation can be sent to you by email using the email address that you have supplied, or by post. Booking confirmations are subject to the availability of accommodation at the hotel.
<li>You should carefully check the details of your confirmation as soon as you receive it. You must contact Magbanua’s beach resort immediately if any of the details are incorrect or incomplete.
<li>We will always endeavour to rectify any inaccuracies or accommodate any alterations you wish to make to your booking. We cannot accept liability for any inaccuracies that are not brought to our attention within seven days of issuing your confirmation, nor can we accept responsibility for inaccurate information that you have supplied.

<h3>Paying for your booking</h3>
Credit or debit card details will be required when you make your booking. No money will actually be taken although your card will be verified at the time of booking for 100% of your first nights stay. See our cancellation policy for charges that may be taken. In some instances, a non-refundable deposit or full payment may be required at the time of booking.
Unless stated as part of your booking, additional items such as (but not limited to) the cost of external telephone calls, are not included in the price of your stay. If you incur any such additional costs you must settle the sum involved on your departure from the hotel.

<h3>Circumstances beyond our control</h3>
<li>We cannot accept responsibility for unforeseen circumstances beyond our control. These include (but are not limited to) adverse weather conditions, fire, riot, war, terrorist activity (or threat of such activity), industrial dispute, natural disaster, or injuries and death of an individual(s) through accidental circumstances unconnected with the hotel.
<li>By making a booking you are accepting responsibility for any damage or loss caused by yourself or a member of your party. Full payment for any such damage or loss must be paid to the hotel owner or manager on demand. If you fail to do so, you will be responsible for meeting any claims subsequently made (together with our own and the other party's full legal costs) as a result of your actions.

<h3>Complaints</h3>
<li>If you are dissatisfied with any aspect of your stay you should bring the problem or issue to the attention of the duty manager or senior member of staff at the hotel as soon as possible so that all reasonable efforts can be made to rectify the situation. If, for any reason, the issue cannot be resolved to your satisfaction and you wish to make a complaint, you should put it in writing and send it to the owner  at: Dragon House , omiles cauayan negros occidental,.


 If you have any questions, please email at feuhotel.com or call (000) 000 – 000 

Thank you for choosing Vida International Hotel and Resort

Respectfully your,

Vida International Hotel and Resort
</ul> 
</p>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>


<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
 



