<br></br>
<br></br>
<br></br>
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
$GID = $_POST['txt']; // GET THE VALUE TRANSFERRED FROM list.php page to this page.
$mydb->setQuery("SELECT * FROM tblguest WHERE GUESTID ='$GID'");
$cur = $mydb->loadSingleResult();
$mydb->setQuery("SELECT * FROM tblreservation WHERE GUESTID ='$GID'");
$cur2 = $mydb->loadSingleResult();
?>


<br></br>
<br></br>
<br></br>
<form method="post">
<div class="panel panel-primary">
  <div class="panel-body">
        <caption><h3 align="center">BOOKING AND GUEST INFORMATION</h3></caption>
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
                 <input name="GSID" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->GUESTID;} ?>">
                 <input disabled class="form-control input-sm" id="GUESSID" name="GUESSID" placeholder=
                    "Guess Id" type="text" value="<?php if (isset($cur2)) {echo ''.$cur2->GUESTID;} ?>">
              </div>
            </div>
          </div>

             <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "BOOKID">Booking ID:</label>
              <div class="col-md-8">
                 <input name="BID" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->RESERVEID;} ?>">
                 <input disabled class="form-control input-sm" id="BOOKID" name="BOOKID" placeholder=
                    "Booking Id" type="text" value="<?php if (isset($cur2)) {echo ''.$cur2->RESERVEID;} ?>">
              </div>
            </div>
          </div>

              <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "CONCODE">CONFIRMATION CODE:</label>
              <div class="col-md-8">
                 <input name="CCODE" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->CONFIRMATIONCODE;} ?>">
                 <input disabled class="form-control input-sm" id="CONCODE" name="CONCODE" placeholder=
                    "Confirmation Code" type="text" value="<?php if (isset($cur2)) {echo ''.$cur2->CONFIRMATIONCODE;} ?>">
              </div>
            </div>
          </div>
        <br></br>
            <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ROOMID">ROOM ID:</label>
              <div class="col-md-8">
                 <input name="RMID" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->ROOMID;} ?>">
                 <input class="form-control input-sm" id="ROOMID" name="ROOMID" placeholder=
                    "Room Id" type="text" value="<?php if (isset($cur2)) {echo ''.$cur2->ROOMID;} ?>">
              </div>
            </div>
          </div>

            <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ARRDT">ARRIVAL DATE:</label>
              <div class="col-md-8">
                 <input name="RMID" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->ARRIVAL;} ?>">
                    
                    <?php
                    if (isset($cur2)){
                        $date = $cur2->ARRIVAL;
                        $newDate = date("Y-m-d", strtotime($date));   
                        }            
                    ?>
                    <div class="datetimepicker"> <input type="date" id="ARRDT" name="ARRDT" placeholder="Arrival Date" value="<?php if (isset($cur2)) {echo $newDate;} ?>"> </div>
                    <script type="text/javascript">
                      var dateEl = document.getElementById('date');
                      document.getElementById('date-output').innerHTML = dateEl.type === 'date';
                    </script>
               </div>
            </div>
          </div>

             <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "DEDT">DEPARTURE DATE:</label>
              <div class="col-md-8">
                 <input name="RMID" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->DEPARTURE;} ?>">
                   <?php
                    if (isset($cur2)){
                        $date = $cur2->DEPARTURE;
                        $newDate = date("Y-m-d", strtotime($date));   
                        }            
                    ?>
                    <div class="datetimepicker"> <input type="date" id="DEDT" name="DEDT" placeholder="Departure Date" value="<?php if (isset($cur2)) {echo $newDate;} ?>"> </div>
                    <script type="text/javascript">
                      var dateEl = document.getElementById('date');
                      document.getElementById('date-output').innerHTML = dateEl.type === 'date';
                    </script>
              </div>
            </div>
          </div>

              <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "STS">BOOK STATUS:</label>
              <div class="col-md-8">
                 <input name="BSTS" type="hidden" value="<?php if (isset($cur2)) {echo ''.$cur2->STATUS;} ?>">
                    <div class="datetimepicker"><select name="STS" id="STS">
                      <option value="<?php if (isset($cur2)) {echo ''.$cur2->STATUS;} ?>"><?php if (isset($cur2)) {echo ''.$cur2->STATUS;} ?></option>
                      <option value="Checkin">Checkin</option>
                      <option value="Pending">Pending</option>
                      <option value="Cancelled">Cancelled</option>
                    </select></div>
              </div>
            </div>
          </div>     

    </tr>
    <br></br>
    </table>


    <div class="btn-group">
          <button name="submit" type="submit" class="btn btn-default" name="UPDATE">UPDATE</button>
          <button name="submit2" type="submit2" class="btn btn-default" name="DELETE">DELETE</button>
          <input type="button" value="&laquo Back" class="btn btn-primary" onclick="window.location.href='index.php'" >
    </div>


            <?php 

              if (isset($_POST['submit'])) 
                {
                    //$sql = "UPDATE `tblreservation` SET `ARRIVAL`= '".date_format(date_create($_POST['ARRDT']),'Y-m-d')."', `DEPARTURE`='".date_format(date_create($_POST['DEDT']),'Y-m-d h:i')."', `ROOMID`='".$_POST['ROOMID']."', `STATUS`='".$_POST['STS']."' WHERE `GUESTID` ='$GID'";
                    $sql = "UPDATE `tblreservation` SET `ARRIVAL`= '".date_format(date_create($_POST['ARRDT']),'Y-m-d')."', `DEPARTURE`='".date_format(date_create($_POST['DEDT']),'Y-m-d')."', `ROOMID`='".$_POST['ROOMID']."', `STATUS`='".$_POST['STS']."' WHERE `GUESTID` = '".$_POST['GSID']."'";
                   
                    $mydb->setQuery($sql);
                    $mydb->executeQuery(); 
                   redirect("index.php");
                }

                 if (isset($_POST['submit2'])) 
                {
                    $sql = "DELETE FROM `tblreservation` WHERE `GUESTID` = '".$_POST['GSID']."'";
                   
                    $mydb->setQuery($sql);
                    $mydb->executeQuery(); 
                   redirect("index.php");
                }
          ?>
   </div><!--End of Panel Body-->
 </div><!--End of Main Panel-->  
</form>