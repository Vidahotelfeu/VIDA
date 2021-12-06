
<?php
  if (!isset($_SESSION['GUESTID'])){ // IF GUEST IS NOT LOGGED IN, GO HOME.
      redirect("index.php");
     } 
 ?>
    <table>
      <tr>
        <td width="90%" align="center">
        <h1>TERMS AND CONDITION</h1>
        <br></br>
        <h3>You can only refund a booked that has a confirmed status, else you can contact the hotel to void a reservation.</h3>
        <br></br>
        <h4>The guest will be charged 10% of their booked room total amount due to cancellation. You contact us for valid reasons to refund the whole amount of your paid booked room.</h4>
        <br></br>
        <h3>Booked Lists</h3>
        </td>
      </tr>
    </table>
    <center>
    <table id="table" class="fixnmix-table">
      <thead>
        <tr>
                  <th align="center" width="240">Room</th>
                  <th align="center" width="120">Code</th>
                  <th align="center" width="120">Check In</th>
                  <th align="center" width="120">Check Out</th> 
                  <th  width="120">Price</th> 
                  <th align="center" width="90">Amount</th>
                  <th align="center" width="120">Status</th>
        </tr>
        </thead>
        <tbody>
   </center>
        <?php
         
       $query="SELECT * 
        FROM  `tblreservation` r,   `tblroom` rm, tblaccomodation a
        WHERE r.`ROOMID` = rm.`ROOMID` 
        AND a.`ACCOMID` = rm.`ACCOMID`  
        AND  r.`GUESTID` = ".$_SESSION['GUESTID']." AND r.`STATUS` = 'Confirmed'";
        $mydb->setQuery($query);
        $res = $mydb->loadResultList();

    foreach ($res as $result) {
     $day = (dateDiff($result->ARRIVAL,$result->DEPARTURE)>0)?dateDiff($result->ARRIVAL,$result->DEPARTURE):'1';
       
            echo '<tr>';  
              echo '<td>'. $result->ROOM.' '. $result->ROOMDESC.' </td>';
              echo '<td>'. $result->CONFIRMATIONCODE.'</td>';
                        echo '<td>'.date_format(date_create($result->ARRIVAL),"m/d/Y").'</td>';
                        echo '<td>'.date_format(date_create($result->DEPARTURE),"m/d/Y").'</td>';
                        echo '<td > ₱ '. $result->PRICE.'</td>'; 
                        echo '<td > ₱ '. $result->RPRICE.'</td>';
                        echo '<td>'. $result->STATUS.'</td>';           
              echo '</tr>';
         
        }
        ?> 
      </tbody> 
       </table>  

           <form method="post">
            <div class="panel panel-primary">
              <div class="panel-body">
                <br></br> 
                <caption><h3 align="right">REFUND BOOKING 10% CHARGE</h3></caption>     
                      <div class="form-group">
                          <div class="col-md-8">
                            <label class="col-md-4 control-label" for="CC"><h2>ENTER CODE:</h2></label>
                            <div class="col-md-8">
                               <input class="form-control input-sm" id="CC" name="CC" type="text"> </input>
                            </div>
                            <div class="col-md-8">
                              <center><button name="submit" type="submit" class="btn btn-default">SUBMIT REQUEST</button></center>
                                      <center><a>Upon clicking the submit request button means that you agreed to the terms and condition of book cancellation.</a></center>
                            </div>
                          </div>
                        </div>  
                  </div>
             <div>
        </div>


               <?php 
                        if (isset($_POST['submit'])) 
                        {
                          $CODE = $_POST['CC'];
                            $sql = "UPDATE `tblreservation` SET `STATUS`='Refund' WHERE `CONFIRMATIONCODE` = '$CODE'";           
                            $mydb->setQuery($sql);
                            $mydb->executeQuery();
                            redirect("index.php");
                        }
                      ?>
          </div>
        </form>
  <br></br>
    <br></br>
      <br></br>
            