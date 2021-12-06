<style>
.buttonbooknow{
  position: absolute;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 30px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.buttonbooknow:hover {
  background-color: Gold;
}

.discover_slider_container
{
  position: relative;
  width: 150rem;
  height: 40rem;
  margin-top: 110px;
  left: -58%;
}

.discover_slider_container2
{
  position: relative;
  width: 150rem;
  height: 20rem;
  margin-top: 110px;
  left: -58%;
}

.glass-container {
  width: 100%;
  height: 20rem;
  box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
  border-radius: 5px;
  position: relative;
  z-index: 1;
  background: inherit;
  overflow: hidden;
  top: -250px;
}

.glass-container:before {
  content: "";
  position: absolute;
  background: inherit;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
  filter: blur(10px);
  margin: -20px;
}

.booking_form_button
{
  width: 280px;
  height: 90px;
  background: #ff9000;
  margin-left: 9px;
  border: none;
  outline: none;
  font-size: 14px;
  font-weight: 700;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 0.075em;
  cursor: pointer;

}
</style>

<div class="discover_slider_container2">
<div class="glass-container">
 <!-- Gallery -->
          <div class="gallery_slider_container">
            <div class="owl-carousel owl-theme gallery_slider">           
              <!-- Slide -->
              <div class="gallery_slide">
                <img src="images/golfroom_1.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>

              <!-- Slide -->
              <div class="gallery_slide">
                <img src="images/golfroom_2.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>

              <!-- Slide -->
              <div class="gallery_slide">
                <img src="images/golfroom_3.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>
<!-- Slide -->
              <div class="gallery_slide">
                <img src="images/golfroom1.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>
              <!-- Slide -->
              <div class="gallery_slide">
                <img src="images/golfroom3.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>
              <!-- Slide -->
              <div class="gallery_slide">
                <img src="images/golfroom2.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- Booking -->

  <div class="booking">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="booking_container d-flex flex-row align-items-end justify-content-start"> 
            <form action="<?php echo WEB_ROOT;?>index.php?p=booking" method="POST" class="booking_form" autocomplete="off">
              <div class="booking_form_container d-flex flex-lg-row flex-column align-items-start justify-content-start flex-wrap">
                <div class="booking_form_inputs d-flex flex-row align-items-start justify-content-between flex-wrap">
                   <div class="booking_dropdown">
                    <a>Arrival Date</a>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <input type="date" id="arrivalid" name="arrival" required="required" value="<?php echo isset($_POST['arrival']) ? $_POST['arrival'] :date('m/d/Y');?>">
                    <script>
                    $(function(){
                        var dtToday = new Date();      
                        var month = dtToday.getMonth() + 1;
                        var day = dtToday.getDate();
                        var year = dtToday.getFullYear();
                        if(month < 10)
                            month = '0' + month.toString();
                        if(day < 10)
                            day = '0' + day.toString();                      
                        var maxDate = year + '-' + month + '-' + day;
                        $('#arrivalid').attr('min', maxDate);
                    });
                   </script>
                  </div>
                  <div class="booking_dropdown">
                    <a>Departure Date</a>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <input type="date" id="departureid" name="departure" required="required" value="<?php echo isset($_POST['departure']) ? $_POST['departure'] : date('m/d/Y');?>">
                    <script>
                      $(function(){
                          var dtToday = new Date();                       
                          var month = dtToday.getMonth() + 1;
                          var day = dtToday.getDate();
                          var year = dtToday.getFullYear();
                          if(month < 10)
                              month = '0' + month.toString();
                          if(day < 10)
                              day = '0' + day.toString();            
                          var maxDate = year + '-' + month + '-' + day;
                          $('#departureid').attr('min', maxDate);
                      });
                   </script>
                  </div>

                  <div class="custom-select2">
                    <center><a>Adult (12+)</a></center>
                    <input  type="number" name="TextBox1" id="Text1" min="0" oninput="add_number();" onkeypress="this.value=!!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                    </input>
                     <center><a>Children (4 ~ 11)</a></center>
                    <input  type="number" name="TextBox2" id="Text2" min="0" oninput="add_number();" onkeypress="this.value=!!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                    </input>
                    <center><a>Total Persons</a></center>
                    <input  name="person" id="person" oninput="add_number();">
                    </input>
                    </div>
                    <div class="custom-select">
                    <center><a>Accomodation</a></center>
                          <?php
                         $accomodation = New Accomodation();
                         $cur = $accomodation->listOfaccomodation(); 
                          ?>
                    <select  name="accomodation" id="person">
                      <option value="0">Room Type</option>
                      <?php  foreach ($cur as $result) { ?>
                          <option value="<?php echo $result->ACCOMODATION; ?>"><?php echo $result->ACCOMODATION; ?></option>
                          <?php  } ?>
                    </select>
                  </div>
                </div>
                
                <button class="booking_form_button">FIND A ROOM</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
  <?php
$msg = "";

if(isset($_POST['booknow'])){

    $days =0;
    $day = dateDiff($_SESSION['arrival'],$_SESSION['departure']);  

   if($day <= 0){
      $totalprice = $_POST['ROOMPRICE'] *1;
      $days = 1;
    }else{
      $totalprice = $_POST['ROOMPRICE'] * $day;
      $days = $day;
    }
     
      
      addtocart($_POST['ROOMID'],$days, $totalprice,$_SESSION['arrival'],$_SESSION['departure'],0);

      // redirect(WEB_ROOT. 'booking/'); 

}
 

 if(!isset($_SESSION['arrival'])){
   $_SESSION['arrival'] = date_create('Y-m-d');
 }
if(!isset($_SESSION['departure'])) {
  $_SESSION['departure'] =  date_create('Y-m-d') ;
}


if(isset($_POST['booknowA'])){ 


 $days = dateDiff($_POST['arrival'],$_POST['departure']); 

if($days <= 0){
  $msg = 'Available room today';
}else{
   $msg =  'Available room From:'.$_POST['arrival']. ' To: ' .$_POST['departure'];

} 


$_SESSION['arrival'] = date_format(date_create( $_POST['arrival']),"Y-m-d");
$_SESSION['departure'] =date_format(date_create($_POST['departure']),"Y-m-d");


 
 $query = "SELECT * FROM `tblroom` r ,`tblaccomodation` a WHERE r.`ACCOMID`=a.`ACCOMID`   AND `NUMPERSON` = " . $_POST['person2'];
    

}elseif(isset($_GET['q'])){

    $query = "SELECT * FROM `tblroom` r ,`tblaccomodation` a WHERE r.`ACCOMID`=a.`ACCOMID` AND `ROOM`='" . $_GET['q'] . "'"; 
   
  
  }else{
     $query = "SELECT * FROM `tblroom` r ,`tblaccomodation` a WHERE r.`ACCOMID`=a.`ACCOMID`";
  }

   $accomodation = ' | ' . @$_GET['q'];
  ?>
  <div class="row">
        <div class="col">
          <div class="card-columns">

 
               
                <?php 
 
                  $arrival =  $_SESSION['arrival'];
                  $departure =  $_SESSION['departure'] ;

                   $mydb->setQuery($query);
                   $cur = $mydb->loadResultList(); 
                      foreach ($cur as $result) { 


// filtering the rooms
 // ======================================================================================================
                    $mydb->setQuery("SELECT * FROM `tblreservation`     WHERE STATUS<>'Pending' AND ((
                        '$arrival' >= DATE_FORMAT(`ARRIVAL`,'%Y-%m-%d')
                        AND  '$arrival' <= DATE_FORMAT(`DEPARTURE`,'%Y-%m-%d')
                        )
                        OR (
                        '$departure' >= DATE_FORMAT(`ARRIVAL`,'%Y-%m-%d')
                        AND  '$departure' <= DATE_FORMAT(`DEPARTURE`,'%Y-%m-%d')
                        )
                        OR (
                        DATE_FORMAT(`ARRIVAL`,'%Y-%m-%d') >=  '$arrival'
                        AND DATE_FORMAT(`ARRIVAL`,'%Y-%m-%d') <=  '$departure'
                        )
                        )
                        AND ROOMID =".$result->ROOMID);

                    

                     $curs = $mydb->loadResultList(); 
                     
                     $resNum = $result->OROOMNUM - count($curs) ;
                         


                    $stats = $mydb->executeQuery();
                    $rows = mysqli_fetch_assoc($stats);
                    $status=$rows['STATUS'];

                     
                    //$availRoom = $result->ROOMNUM;


              if($resNum==0){

             if($status=='Confirmed'){
                $btn =  '<div style="margin-top:10px; color: rgba(0,0,0,1); font-size:16px;"><strong>Fully Reserve!</strong></div>';
                 $img_title = ' 

                           <figcaption class="img-title-active">
                                <h5>Reserve!</h5>    
                            </figcaption>


                    ';
              }elseif($status=='Checkedin'){
                $btn =  '<div style="margin-top:10px; color: rgba(0,0,0,1); font-size:16px;"><strong>Fully Book!</strong></div>';
                 $img_title = ' 

                           <figcaption class="img-title-active">
                                <h5>Book!</h5>    
                            </figcaption>


                    ';
              }else{
                 $btn =  '
                 <div class="form-group">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <input type="submit" class="button rooms_button"  id="booknow" name="booknow" onclick="return validateBook();" value="Book Now!"/>
                                                   
                           </div>
                        </div>
                      </div>';
                    $img_title = ' 

                           <figcaption class="img-title">
                                <h5>'.$result->ROOM . ' <br/> '.$result->ROOMDESC.'  <br/>
                                ' . $result->ACCOMODATION .' <br/> 
                                '.$result->ACCOMDESC . '<br/>  
                                Number of Person:' . $result->NUMPERSON .' <br/> 
                                Price:'.$result->PRICE.'</h5>    
                            </figcaption>


                    ';
                   
              }
                   
              }else{
                $btn =  '
                 <div class="form-group">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12">
                            <input type="submit" class="button rooms_button" id="booknow" name="booknow" onclick="return validateBook();" value="Book Now!"/>
                                                   
                           </div>
                        </div>
                      </div>';
                    $img_title = ' 

                           <figcaption class="img-title">
                                <h5>'.$result->ROOM . ' <br/> '.$result->ROOMDESC.'  <br/>
                                ' . $result->ACCOMODATION .' <br/> 
                                '.$result->ACCOMDESC . '<br/>  
                                Number of Person:' . $result->NUMPERSON .' <br/> 
                                Price:'.$result->PRICE.'</h5>    
                            </figcaption>


                    ';
                   

              }      
// ============================================================================================================================

 
                ?>
                  <form method="POST" action="index.php?p=accomodation">
                 <input type="hidden" name="ROOMPRICE" value="<?php echo $result->PRICE ;?>">
                  <input type="hidden" name="ROOMID" value="<?php echo $result->ROOMID ;?>">

                      <div class="card">
                        <img class="card-img-top"  src="<?php echo WEB_ROOT .'admin/mod_room/'.$result->ROOMIMAGE; ?>" alt="Room image description">
                        <div class="card-body">
                          <div class="rooms_title"><h2><?php echo $result->ROOM ;?> <?php echo $result->ACCOMODATION ;?></h2></div>
                          <div class="rooms_text">
                            <p><?php echo $result->ROOMDESC ;?></p>
                          </div>
                          <div class="rooms_list">
                            <ul>
                              <li class="d-flex flex-row align-items-center justify-content-start">
                                <img src="images/check.png" alt="">
                                <span>Number of Person :<?php echo $result->NUMPERSON ;?></span>
                              </li> 
                              <li class="d-flex flex-row align-items-center justify-content-start">
                                <img src="images/check.png" alt="">
                                <span>Remaining Rooms :<?php echo  $resNum ;?></span>
                              </li>
                            </ul>
                          </div>
                          <div class="rooms_price">$ <?php echo   $result->PRICE ;?>/<span>Night</span></div>
                           <?php echo $btn ; ?> 
                        </div>
                      </div>
                  

                  </form>

        
                <?php  
 
                 }

                ?>

              </div> 
          </div>
 </div>

                   <script>
                     function add_number() {
                                   
                                    var first_number = parseInt(document.getElementById("Text1").value);
                                    var second_number = parseInt(document.getElementById("Text2").value);
                                    var result = first_number + second_number;
                         
                                    document.getElementById("person").value = result;
                                }
                    </script>