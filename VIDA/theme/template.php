
<?php
if(isset($_POST['avail'])){
$_SESSION['from'] = $_POST['from'];
$_SESSION['to']  = $_POST['to'];
  redirect(WEB_ROOT. "index.php?page=5");
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
<title>VIDA HOTEL</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="VIDA HOTEL FEU STUDENTS PROJECT">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?php echo WEB_ROOT;?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/animate.css">
<link href="<?php echo WEB_ROOT;?>plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/custom-navbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/bootstrap.css">
 <link href="<?php echo WEB_ROOT; ?>styles/ekko-lightbox.css" rel="stylesheet">
 <link href="<?php echo WEB_ROOT; ?>styles/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo WEB_ROOT; ?>styles/datepicker.css" rel="stylesheet" media="screen">

<?php
if (isset($_SESSION['feuhotel_cart'])){
  if (count($_SESSION['feuhotel_cart'])>0) {
    $cart =  count($_SESSION['feuhotel_cart'])  ;
  } 
 
} 
if (isset($_SESSION['activity'])){
  if (is_array($_SESSION['activity']) && is_object($_SESSION['activity']) &&count($_SESSION['activity'])>0) {
    $activity = count($_SESSION['activity'])  ;
  } 
 
} 
 ?>
</head>
<body>

<style>
.header
{
  position: relative;
  top: -195px;
  left: 0;
  width: 100%;
  background: rgba(0,0,0,0.88);
  z-index: 101;
  border-bottom: solid 2px #ff9000;

}
.footer
{
  position: absolute;
  top: auto;
  bottom: auto;
  left: 0px;
  width: 100%;
  height: 150px;
  background: rgba(0,0,0,0.88);
  z-index: 101;
  border-bottom: solid 2px #ff9000;
}
.footer_content
{
  margin-top: 0px;
  padding-bottom: 0px;
}

.home
{
  height: 100px;
  background: transparent;
}
.home_container
{
  width: 100%;
  height: 100%;
  padding-top: 228px;
}
.home_title h1
{
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  color: #ffffff;
  font-style: italic;
  font-size: 72px;
}

.glass-container {
  width: auto;
  height: 50rem;
  box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
  border-radius: 5px;
  position: relative;
  z-index: 1;
  background: inherit;
  overflow: hidden;
  top: -170px;
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


}
</style>

 <?php include $small_nav; ?>  

<div class="super_container">
  <header class="header">
    <div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center">
      
      <!-- Main Nav -->
      <nav class="main_nav">
        <ul class="d-flex flex-row align-items-center justify-content-start">
           <li><a href="<?php echo WEB_ROOT;?>index.php">Home</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=rooms">Offers</a></li> 
           <li><a href="<?php echo WEB_ROOT;?>index.php?p=tour">360 Tour</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=about">About Vida</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=contact">Contact Us</a></li>
         </ul>
      </nav>

      <!-- Header Right -->
      <div class="header_right d-flex flex-row align-items-center justify-content-start"></div>
        <!-- Hamburger Button -->
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>


      <!-- Search Panel -->
      <div class="search_panel">
        <div class="search_panel_content d-flex flex-row align-items-center justify-content-start">
          <img src="<?php echo WEB_ROOT;?>images/search.png" alt="">
          <form action="#" class="search_form">
            <input type="text" class="search_input" placeholder="Type your search here" required="required">
          </form>
          <div class="search_close ml-auto d-flex flex-column align-items-center justify-content-center">
        </div>
      </div>
     </div>
     </div>
    </div>
  </header>

  <!-- Menu Overlay -->

  <div class="menu_overlay">
    <br></br>
    <div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">     
      <!-- Hamburger Button -->
      <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </div>
  </div>

  <!-- Menu -->

  <div class="menu">
    <div class="menu_container d-flex flex-column align-items-center justify-content-center">

      <!-- Menu Navigation -->
      <nav class="menu_nav text-center">
        <ul>
          <li><a href="<?php echo WEB_ROOT;?>index.php">Home</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=about">About us</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=rooms">Rooms</a></li> 
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=contact">Contact</a></li>
        </ul>
      </nav>
      

      <!-- Menu Social -->
      <div class="social menu_social">
        <ul class="d-flex flex-row align-items-center justify-content-start">
          <li><a href="https://www.gmail.com"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>

  



<div class="rooms">
  <div class="container">
    <?php 
     check_message();
     require_once $content;  
    ?> 
 
  </div>
</div>

  <footer class="footer">
   <div class="container">
          <div class="footer_content">
            <div class="row">
                          <!-- Social -->
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
                  <div class="text-center">
                    <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <div>Facebook</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-center justify-content-start">
                  <div class="text-center">
                    <a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <div>Twitter</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
                  <div class="text-center">
                    <a href="https://www.gmail.com/"><i class="fa fa-google" aria-hidden="true"></i></a>
                    <div>Gmail</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<script src="<?php echo WEB_ROOT;?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/easing/easing.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/progressbar/progressbar.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/jquery-datepicker/jquery-ui.js"></script>
 <script src="<?php echo WEB_ROOT; ?>js/ekko-lightbox.js"></script> 
<script src="<?php echo WEB_ROOT;?>js/custom.js"></script>



<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
</body>
</html>
<!-- Modal photo -->
          <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>

                  <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                </div>

                <form action="<?php echo WEB_ROOT; ?>guest/update.php" enctype="multipart/form-data" method=
                "post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                              <input name="MAX_FILE_SIZE" type=
                              "hidden" value="1000000"> <input id=
                              "image" name="image" type=
                              "file">
                            </div>

                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type=
                    "button">Close</button> <button class="btn btn-primary"
                    name="savephoto" type="submit">Upload Photo</button>
                  </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

         

 

  <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover() 
 





  //Validates Personal Info
        function personalInfo(){
        var a=document.forms["personal"]["name"].value;
        var b=document.forms["personal"]["last"].value;
        var c=document.forms["personal"]["city"].value;
        var d=document.forms["personal"]["address"].value;
        var e=document.forms["personal"]["dbirth"].value;  
        var f=document.forms["personal"]["zip"].value; 
        var g=document.forms["personal"]["phone"].value;
        var h=document.forms["personal"]["username"].value;
        var i=document.forms["personal"]["password"].value;


 
         if (document.personal.condition.checked == false)
        {
        alert ('pls. agree the term and condition of this hotel');
        return false;
        }
        if ((a=="Firstname" || a=="") || (b=="lastname" || b=="") || (c=="City" || c=="") || (d=="address" || d=="") || (e=="dateofbirth" || e=="") || (f=="Zip" || f=="") || (g=="Phone" || g=="")|| (h=="username" || h=="") || (j=="password" || j==""))
          {
          alert("all field are required!");
          return false;
          }

        }
</script>


<script type="text/javascript">
   
 $(document).ready(function(){

      $(".btnLoginModal").click(function(){

        var user_name = document.getElementById("U_USERNAME").value;
        var pass = document.getElementById("U_PASS").value;
      
      

       $.ajax({ 
          type:"POST",
          url: "checktoken.php",             
          dataType: "text",   //expect html to be returned  
          data:{username:user_name,password:pass},               
          success: function(data){ 
              $("#ErrorMessage").hide();
             $("#ErrorMessage").fadeIn("slow");                 
             $("#ErrorMessage").html(data);  
             // alert(data);
          } 

             
        });  
    });

    });

</script>
<!--/.container-->
<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 
    </script>
</body>
</html>