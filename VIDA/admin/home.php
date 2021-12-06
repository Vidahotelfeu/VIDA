<br></br>
<br></br>
<div class="container">
<h3>Administrator Panel: Welcome <?php echo $_SESSION['ADMIN_UNAME'];?></h3>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Rooms Management
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
      The guest house has got various rooms that are categorised accordion to types. 
      Each room is of particular category and have a maximum number of Adults and Children that can be accomodated. Click<a href="mod_room/index.php"> HERE.</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Accomodation Management
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        This consists of the categories of rooms that in this Hotel. Each Category of rooms Has got unique features different form the other. For view all of the categories of all types of rooms Click <a href="mod_accomodation/index.php">HERE.</a>  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Reservation Management
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
       In this area, you can view all the reservation transaction of all guest. And this area allow the the receptionist confirm the request of guest or either to cancel the reservation. Click <a href="mod_reservation/index.php">HERE.</a>
       </div>
    </div>
  </div>
 
   <?php if($_SESSION['ADMIN_UROLE']=="Administrator"){ ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
          Admin Management
        </a>
      </h4>
    </div>
    <div id="collapsesix" class="panel-collapse collapse">
      <div class="panel-body">
		    The system displays the list of all people that have been registered in to the system.If a particular user is logged in the system the, such as users record is does not appear in the list of records. To view all the registered other than the logged in user Click <a href="mod_users/index.php">HERE.</a>
      </div>
    </div>
  </div>

   <!-- NOV 29 NEW UPDATE ADDED -->
 <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseseven">
          Booking Management
        </a>
      </h4>
    </div>
    <div id="collapseseven" class="panel-collapse collapse">
      <div class="panel-body">
        The system displays the list of all bookings that have been carried in to the system. Click <a href="mod_booking/index.php">HERE.</a>
      </div>
    </div>
  </div>

   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseeight">
          House Keeping Management
        </a>
      </h4>
    </div>
    <div id="collapseeight" class="panel-collapse collapse">
      <div class="panel-body">
        All rooms that has been subjected to house keeping will be listed here. Click <a href="mod_hk/index.php">HERE.</a>
      </div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsenine">
          Rate Management
        </a>
      </h4>
    </div>
    <div id="collapsenine" class="panel-collapse collapse">
      <div class="panel-body">
        All room rates is listed here. Click <a href="mod_rates/index.php">HERE.</a>
      </div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseten">
          Billing Management
        </a>
      </h4>
    </div>
    <div id="collapseten" class="panel-collapse collapse">
      <div class="panel-body">
        All guest bill informations are listed here. Click <a href="mod_billing/index.php">HERE.</a>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseeleven">
          Inventory Management
        </a>
      </h4>
    </div>
    <div id="collapseeleven" class="panel-collapse collapse">
      <div class="panel-body">
        Overall hotel inventory is listed here. Click <a href="mod_inventory/index.php">HERE.</a>
      </div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseeleven">
          Refund Book Management
        </a>
      </h4>
    </div>
    <div id="collapseeleven" class="panel-collapse collapse">
      <div class="panel-body">
        Refunded Room Book is listed here. Click <a href="mod_Refund/index.php">HERE.</a>
      </div>
    </div>
  </div>
 
 
 <?php } ?>
</div>
</div>