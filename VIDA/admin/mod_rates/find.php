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
$RID = $_POST['txt']; // GET THE VALUE TRANSFERRED FROM list.php page to this page.
$mydb->setQuery("SELECT * FROM tblroom WHERE ROOMID ='$RID'");
$cur = $mydb->loadSingleResult();
?>


<br></br>
<br></br>
<br></br>
<form method="post">
<div class="panel panel-primary">
  <div class="panel-body">
        <caption><h3 align="center">ROOM RATE INFORMATION</h3></caption>
    <table class="table table-hover" border="0">
    <tr>
        <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "RMID">ROOM ID:</label>
              <div class="col-md-8">
                 <input name="RID" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->ROOMID;} ?>">
                 <input disabled class="form-control input-sm" id="RMID" name="RMID" placeholder=
                    "Room ID" type="text" value="<?php if (isset($cur)) {echo ''.$cur->ROOMID;} ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "RNAME">Room Name:</label>
              <div class="col-md-8">
                 <input name="RN" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->ROOM;} ?>">
                 <input class="form-control input-sm" id="RNAME" name="RNAME" placeholder=
                    "Room Name" type="text" value="<?php if (isset($cur)) {echo ''.$cur->ROOM;} ?>">
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "AVR">Available Room/s:</label>
              <div class="col-md-8">
                 <input name="AR" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->ROOMNUM;} ?>">
                 <input class="form-control input-sm" id="AVR" name="AVR" placeholder=
                    "Available Room" type="number" value="<?php if (isset($cur)) {echo ''.$cur->ROOMNUM;} ?>">
              </div>
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "RT">Rate Type:</label>
              <div class="col-md-8">
                 <input name="RAT" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->RateType;} ?>">
                 <input class="form-control input-sm" id="RT" name="RT" placeholder=
                    "Rate Type" type="text" value="<?php if (isset($cur)) {echo ''.$cur->RateType;} ?>">
              </div>
            </div>
          </div>

             <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "SN">Season Name:</label>
              <div class="col-md-8">
                 <input name="SEN" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->SeasonName;} ?>">
                 <input class="form-control input-sm" id="SN" name="SN" placeholder=
                    "Season Name" type="text" value="<?php if (isset($cur)) {echo ''.$cur->SeasonName;} ?>">
              </div>
            </div>
          </div>

              <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "AMT">Amenities:</label>
              <div class="col-md-8">
                 <input name="AMTS" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->Amenities;} ?>">
                 <input class="form-control input-sm" id="AMT" name="AMT" placeholder=
                    "Amenities" type="text" value="<?php if (isset($cur)) {echo ''.$cur->Amenities;} ?>">
              </div>
            </div>
          </div>
        <br></br>
            <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "RP">Room Price:</label>
              <div class="col-md-8">
                 <input name="RPC" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->PRICE;} ?>">
                 <input class="form-control input-sm" id="RP" name="RP" placeholder=
                    "Room Price" type="number" value="<?php if (isset($cur)) {echo ''.$cur->PRICE;} ?>">
              </div>
            </div>
          </div>

              <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "REA">Rate/Extra Adult:</label>
              <div class="col-md-8">
                 <input name="RAEA" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->RateXtraAdult;} ?>">
                 <input class="form-control input-sm" id="REA" name="REA" placeholder=
                    "Rate/ Extra Adult" type="number" value="<?php if (isset($cur)) {echo ''.$cur->RateXtraAdult;} ?>">
              </div>
            </div>
          </div>

               <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "REK">Rate/Extra Kid:</label>
              <div class="col-md-8">
                 <input name="RAEK" type="hidden" value="<?php if (isset($cur)) {echo ''.$cur->RateXtraKid;} ?>">
                 <input class="form-control input-sm" id="REK" name="REK" placeholder=
                    "Rate/ Extra Kid" type="number" value="<?php if (isset($cur)) {echo ''.$cur->RateXtraKid;} ?>">
              </div>
            </div>
          </div>
       </tr>
    <br></br>
    </table>


    <div class="btn-group">
          <button name="submit" type="submit" class="btn btn-default" name="UPDATE">UPDATE</button>
          <input type="button" value="&laquo Back" class="btn btn-primary" onclick="window.location.href='index.php'" >
    </div>


            <?php 

              if (isset($_POST['submit'])) 
                {
                    //$sql = "UPDATE `tblreservation` SET `ARRIVAL`= '".date_format(date_create($_POST['ARRDT']),'Y-m-d')."', `DEPARTURE`='".date_format(date_create($_POST['DEDT']),'Y-m-d h:i')."', `ROOMID`='".$_POST['ROOMID']."', `STATUS`='".$_POST['STS']."' WHERE `GUESTID` ='$GID'";
                    $sql = "UPDATE `tblroom` SET `ROOM`='".$_POST['RNAME']."', `ROOMNUM`='".$_POST['AVR']."' , `RateType`='".$_POST['RT']."' , `SeasonName`='".$_POST['SN']."' , `Amenities`='".$_POST['AMT']."', `PRICE`='".$_POST['RP']."', `RateXtraAdult`='".$_POST['REA']."', `RateXtraKid`='".$_POST['REK']."' WHERE `ROOMID` = '".$_POST['RID']."'";
                   
                    $mydb->setQuery($sql);
                    $mydb->executeQuery(); 
                   redirect("index.php");
                }
          ?>
   </div><!--End of Panel Body-->
 </div><!--End of Main Panel-->  
</form>