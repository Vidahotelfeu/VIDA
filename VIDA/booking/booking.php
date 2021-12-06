
<?php
if(isset($_GET['id'])){
    removetocart($_GET['id']);
}
 if (isset($_POST['clear'])){
   unset($_SESSION['pay']);
   unset($_SESSION['feuhotel_cart']);
   message("The cart is empty.","success");
  redirect(WEB_ROOT."booking/");
 }
 check_message();
?>
 <br></br>
 <br></br>

  <div id="accom-title"  > 
    <div  class="pagetitle">   
            <h1>Vida International Booking Cart</h1> 
     </div> 
  </div>
 
          <table class="table" id="table">
             <thead>
              <tr bgcolor="#123">
              <!-- <th width="10">#</th> -->
              <th align="center" width="120">ROOM NAME</th>
              <th align="center" width="120">CHECK IN</th>
              <th align="center" width="120">CHECK OUT</th> 
              <th width="120">ROOM PRICE</th> 
              <th align="center" width="120">NIGHTS</th> 
              <th align="center" >AMOUNT</th>
              <th align="center" width="90">ACTION</th> 
            </tr> 
          </thead>
          <tbody >
              <div id="showcart"></div>
              <div id="BookingCart">
            <?php 
            $mealprice = isset($_SESSION['MealPrice']) ? $_SESSION['MealPrice'] : '0';
             $payable = 0;
            if (isset( $_SESSION['feuhotel_cart'])){


             $count_cart = count($_SESSION['feuhotel_cart']);

                for ($i=0; $i < $count_cart  ; $i++) {  

                    $query = "SELECT * FROM `tblroom` r ,`tblaccomodation` a WHERE r.`ACCOMID`=a.`ACCOMID` AND ROOMID=" . $_SESSION['feuhotel_cart'][$i]['feuhotelroomid'];
                     $mydb->setQuery($query);
                     $cur = $mydb->loadResultList(); 
                      foreach ($cur as $result) { 

 
                         echo '<tr>'; 
                        // echo '<td></td>';
                        echo '<td>'. $result->ROOM.' '. $result->ROOMDESC.' </td>';
                        echo '<td>'.date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckin']),"m/d/Y").'</td>';
                        echo '<td>'.date_format(date_create( $_SESSION['feuhotel_cart'][$i]['feuhotelcheckout']),"m/d/Y").'</td>';
                        echo '<td > $ '. $result->PRICE.'
                          <input type="hidden" value="'.$result->PRICE.'"  name="roomprice'.$_SESSION['feuhotel_cart'][$i]['feuhotelroomid'].'" id="roomprice'.$_SESSION['feuhotel_cart'][$i]['feuhotelroomid'].'"/>

                        </td>'; 
                        echo '<td><input style="border:0px" readonly type="number" value="'.$_SESSION['feuhotel_cart'][$i]['feuhotelday'].'" id="day'.$_SESSION['feuhotel_cart'][$i]['feuhotelroomid'].'" name="day'.$_SESSION['feuhotel_cart'][$i]['feuhotelroomid'].'" /></td>';
                        
                        echo  '<input type="hidden"  name="MealPrice'.$_SESSION['feuhotel_cart'][$i]['feuhotelroomid'].'" id="MealPrice'.$_SESSION['feuhotel_cart'][$i]['feuhotelroomid'].'"/>';
                        echo '</td>';
                        echo '<td>$ <output id="TotAmount'.$_SESSION['feuhotel_cart'][$i]['feuhotelroomid'].'" >'.$_SESSION['feuhotel_cart'][$i]['feuhotelroomprice'].'</output></td>';
                        echo '<td ><a href="index.php?view=processcart&id='.$result->ROOMID.'">Remove</td>';
 
                      } 
                      $payable += $_SESSION['feuhotel_cart'][$i]['feuhotelroomprice'] ;
                }

                $_SESSION['pay'] = $payable;
              
              } 
            ?>

            
            </div>
          </tbody>

          <tfoot>
            <tr>
           <td colspan="6"><h4 align="right">TOTAL AMOUNT: </h4></td>
           <td colspan="4">
             <h4><b>$<span id="sum"><?php  echo isset($_SESSION['pay']) ?  $_SESSION['pay'] :'Your booking cart is empty.';?></span></b></h4>
                         
            </td>
            </tr>
          </tfoot>  
        </table> 
 
        <form method="post" action="">
             <div class="row" >
             <?php
             if (isset($_SESSION['feuhotel_cart'])){
              ?> 
                 <button type="submit" class="button "name="clear">CLEAR ALL</button> 
             <?php
             
              if (isset($_SESSION['GUESTID'])){
                ?>
                <div  class="button " ><a href="<?php echo WEB_ROOT; ?>booking/index.php?view=payment" name="continue">CONTINUE</a></div>
               <?php 
              }else{ ?>
                 <div  class="button " ><a href="<?php echo WEB_ROOT; ?>booking/index.php?view=logininfo"  name="continue">CONTINUE</a></div>
             <?php
              }
            }

             ?>      
          </div>             
        </form>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
       <?php
       unset($_SESSION['MealPrice']);
       ?>

       