<STYLE>

* {
  box-sizing: border-box;
}
.datetimepicker {
  display: inline-flex;
  align-items: center;
  border-radius: 8px;
  &:focus-within {
    border-color: teal;
  }
  
  input {
    font: inherit;
    color: inherit;
    appearance: none;
    outline: none;
    border: 0;
    background-color: transparent;
    
    &[type=date] {
      width: 10rem;
      padding: .25rem 0 .25rem .5rem;
      border-right-width: 0;
    }
    
    &[type=time] {
      width: 5.5rem;
      padding: .25rem .5rem .25rem 0;
      border-left-width: 0;
    }
  }
  
  span {
    height: 1rem;
    margin-right: .25rem;
    margin-left: .25rem;
    border-right: 1px solid #ddd;
  }
}

.info {
  padding-top: .5rem;
  font-size: .8rem;
  color: rgba(255, 255, 255, .5);
}

</STYLE>

<?php
$GID = $_POST['guessid']; // GET THE VALUE TRANSFERRED FROM list.php page to this page.
$BID = $_POST['billid']; // GET THE VALUE TRANSFERRED FROM list.php page to this page.
$mydb->setQuery("SELECT * FROM tblguest WHERE GUESTID ='$GID'");
$cur = $mydb->loadSingleResult();
$mydb->setQuery("SELECT * FROM tblbilling WHERE Booking_id ='$GID' and bill_id ='$BID'");
$cur2 = $mydb->loadSingleResult();
?>


<br></br>
<br></br>
<br></br>
<form method="post">
<div class="panel panel-primary">
  <div class="panel-body">
        <caption><h3 align="center">GUEST BILLING INFORMATION</h3></caption>
    <table class="table table-hover" border="0">
    <tr>
        <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "FNAME">First Name:</label>
              <div class="col-md-8">
                 <input name="FN" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->G_FNAME;} ?>">
                 <input disabled class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                    "First Name" type="text" value="<?php if (isset($cur)) {echo ''.$cur->G_FNAME;} ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "LNAME">Last Name:</label>
              <div class="col-md-8">
                 <input name="LN" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->G_LNAME;} ?>">
                 <input disabled class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                    "Last Name" type="text" value="<?php if (isset($cur)) {echo ''.$cur->G_LNAME;} ?>">
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "CONTACT">Contact #:</label>
              <div class="col-md-8">
                 <input name="C" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->G_PHONE;} ?>">
                 <input disabled class="form-control input-sm" id="CONTACT" name="CONTACT" placeholder=
                    "Contact Info" type="text" value="<?php if (isset($cur)) {echo ''.$cur->G_PHONE;} ?>">
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "GUESSID">Guest ID:</label>
              <div class="col-md-8">
                 <input name="GSID" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->Booking_id;} ?>">
                 <input disabled class="form-control input-sm" id="GUESSID" name="GUESSID" placeholder=
                    "Guess Id" type="text" value="<?php if (isset($cur2)) {echo ''.$cur2->Booking_id;} ?>">
              </div>
            </div>
          </div>

             <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "BILLID">Billing ID:</label>
              <div class="col-md-8">
                 <input name="BID" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_id;} ?>">
                 <input disabled class="form-control input-sm" id="BILLID" name="BILLID" placeholder=
                    "Billing Id" type="text" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_id;} ?>">
              </div>
            </div>
          </div>

              <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "BAM">Bill Amount:</label>
              <div class="col-md-8">
                 <input name="BILAM" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_amount;} ?>">
                 <input class="form-control input-sm" id="BAM" name="BAM" placeholder=
                    "Bill Amount" type="number" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_amount;} ?>">
              </div>
            </div>
          </div>
        <br></br>
            <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "MISCC">Misc Charges:</label>
              <div class="col-md-8">
                 <input name="MISC" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_misc_charges;} ?>">
                 <input class="form-control input-sm" id="MISCC" name="MISCC" placeholder=
                    "Misc Charges" type="number" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_misc_charges;} ?>">
              </div>
            </div>
          </div>

              <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "RC">Room Charges:</label>
              <div class="col-md-8">
                 <input name="RMC" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_room_charges;} ?>">
                 <input class="form-control input-sm" id="RC" name="RC" placeholder=
                    "Room Charges" type="number" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_room_charges;} ?>">
              </div>
            </div>
          </div>

            <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "BAL">Balance Amount:</label>
              <div class="col-md-8">
                 <input name="BALE" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_balance;} ?>">
                 <input disabled class="form-control input-sm" id="BAL" name="BAL" placeholder=
                    "Balance Amount" type="number" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_balance;} ?>">
              </div>
            </div>
          </div>

           
        <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "PDA">Paid Amount:</label>
              <div class="col-md-8">
                 <input name="PDAA" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_paidamount;} ?>">
                 <input disabled class="form-control input-sm" id="PDA" name="PDA" placeholder=
                    "Paid Amount" type="number" value="<?php if (isset($cur2)) {echo ''.$cur2->bill_paidamount;} ?>">
              </div>
            </div>
          </div>
    </tr>
    <br></br>
    </table>

         <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "APA">Add Payment Amount:</label>
              <div class="col-md-8">
                 <input name="APAA" type="hidden" value="">
                 <input class="form-control input-sm" id="APA" name="APA" placeholder="0" type="number" value="">
              </div>
            </div>
          </div>
          <button  name="submit3" type="submit3" class="btn btn-default">ADD PAYMENT</button>

          <div class="btn-group">
          <button name="submit" type="submit" class="btn btn-default" name="UPDATE">UPDATE</button>
          <button name="submit2" type="submit2" class="btn btn-default" name="DELETE">DELETE</button>
          <input type="button" value="&laquo Back" class="btn btn-primary" onclick="window.location.href='index.php'" >
          </div>
   </div><!--End of Panel Body-->
 </div><!--End of Main Panel-->  
</form>

           <?php 

              if (isset($_POST['submit'])) 
                {

                  $previousamount = $_POST['BAM'];
                  $previousMCharges = $_POST['MISCC'];
                  $previousRCharges = $_POST['RC'];
                  $previousbalance = $_POST['BALE'];
                  $previouspaid = $_POST['PDAA'];

                  $totalbalance1 = $previousamount+$previousMCharges+$previousRCharges;
                  $totalbalance2 = $totalbalance1-$previouspaid;

                    //$sql = "UPDATE `tblreservation` SET `ARRIVAL`= '".date_format(date_create($_POST['ARRDT']),'Y-m-d')."', `DEPARTURE`='".date_format(date_create($_POST['DEDT']),'Y-m-d h:i')."', `ROOMID`='".$_POST['ROOMID']."', `STATUS`='".$_POST['STS']."' WHERE `GUESTID` ='$GID'";
                    $sql = "UPDATE `tblbilling` SET `bill_amount`='$previousamount', `bill_misc_charges`='$previousMCharges', `bill_room_charges`='$previousRCharges', `bill_balance`='$totalbalance2' WHERE `bill_id` = '".$_POST['BID']."'";
                   
                    $mydb->setQuery($sql);
                    $mydb->executeQuery(); 
                   redirect("index.php");
                }

                 if (isset($_POST['submit2'])) 
                {
                    $sql = "DELETE FROM `tblbilling` WHERE `bill_id` = '".$_POST['BID']."'";
                   
                    $mydb->setQuery($sql);
                    $mydb->executeQuery(); 
                   redirect("index.php");
                }

                 if (isset($_POST['submit3'])) 
                {
                     $previousbalance = $_POST['BALE'];
                     $addpayment = $_POST['APA'];  
                     $previouspaid = $_POST['PDAA'];  
                     $totalpaid =  $previouspaid+$addpayment;    
                     $totalbalance = $previousbalance-$addpayment; 

                    //$sql = "UPDATE `tblreservation` SET `ARRIVAL`= '".date_format(date_create($_POST['ARRDT']),'Y-m-d')."', `DEPARTURE`='".date_format(date_create($_POST['DEDT']),'Y-m-d h:i')."', `ROOMID`='".$_POST['ROOMID']."', `STATUS`='".$_POST['STS']."' WHERE `GUESTID` ='$GID'";
                    $sql = "UPDATE `tblbilling` SET `bill_paidamount`='$totalpaid', `bill_balance`='$totalbalance' WHERE `bill_id` = '".$_POST['BID']."'";
                   
                    $mydb->setQuery($sql);
                    $mydb->executeQuery(); 
                   redirect("index.php");
                }
          ?>