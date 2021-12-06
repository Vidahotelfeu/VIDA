
<br></br>
<br></br>
<br></br>
<div class="panel panel-primary">
  <div class="panel-body">
    <table class="table table-hover" border="0">
    <caption><h3 align="left">BOOKING AND GUEST INFORMATION</h3></caption>
    <tr>
      <th>
    <strong>First Name </strong>
    
    <?php if (isset($cur)) {echo ': '.$cur->G_FNAME;} ?><br/>
    <strong>Last Name </strong>
    <?php if (isset($cur)) {echo ': '.$cur->G_LNAME;} ?><br/>
    <strong>Contact Info </strong>
    <?php if (isset($cur)) {echo ': '.$cur->G_PHONE;} ?><br/>
    <br></br>
     <strong>GUEST ID </strong>
    <?php if (isset($cur2)) {echo ': '.$cur2->GUESTID;} ?><br/>
    <strong>BOOKING ID </strong>
    <?php if (isset($cur2)) {echo ': '.$cur2->RESERVEID;} ?><br/>
      
      </th>
      <th>


    <strong>CONFIRMATION CODE </strong>
        <?php if (isset($cur2)) {echo ': '.$cur2->CONFIRMATIONCODE;} ?><br/>
    <br></br>
    <strong>ROOM ID </strong>
        <?php if (isset($cur2)) {echo ': '.$cur2->ROOMID;} ?><br/>
    <strong>ARRIVAL DATE </strong>
        <?php if (isset($cur2)) {echo ': '.$cur2->ARRIVAL;} ?><br/>
    <strong>END DATE </strong>
        <?php if (isset($cur2)) {echo ': '.$cur2->DEPARTURE;} ?><br/>
    <strong>STATUS </strong>
        <?php if (isset($cur2)) {echo ': '.$cur2->STATUS;} ?><br/>
      </th>
    </tr>
    <br></br>
    <input type="button" value="&laquo Back" class="btn btn-primary" onclick="window.location.href='index.php'" >
    </table>


    <div class="btn-group">
          <button type="submit" class="btn btn-default" name="EDITINFO">EDIT INFO</button>
          <button type="submit" class="btn btn-default" name="UPDATE">UPDATE</button>
          <button type="submit" class="btn btn-default" name="DELETE">DELETE</button>
    </div>

   </div><!--End of Panel Body-->
 </div><!--End of Main Panel-->  
