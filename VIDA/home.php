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
  height: 55rem;
  box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
  border-radius: 5px;
  position: relative;
  z-index: 1;
  background: inherit;
  overflow: hidden;
  top: -260px;
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
</style>

<div class="discover_slider_container2">
<div class="glass-container">
 <!-- Gallery -->
          <div class="gallery_slider_container">
            <div class="owl-carousel owl-theme gallery_slider">           
              <!-- Slide -->
              <div class="gallery_slide">
                <img src="images/offer_1.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>

              <!-- Slide -->
              <div class="gallery_slide">
                <img src="images/offer_2.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>

              <!-- Slide -->
              <div class="gallery_slide">
                <img src="images/offer_3.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>
              <div class="gallery_slide">
                <img src="images/offer_5.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>
              <div class="gallery_slide">
                <img src="images/offer_6.jpg" alt="">
                <div class="gallery_overlay">
                  <div class="text-center d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                    </a>
                  </div>
                </div>
              </div>
              <!-- Slide -->
              <div class="gallery_slide">
                <img src="images/offer_4.jpg" alt="">
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
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <div>VIDA INTERNATIONAL</div>
            <h1>VIDA INTERNATIONAL HOTEL AND RESORT</h1>
          </div>
        </div>
      </div>
      <div class="row intro_row">
        <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1">
          <div class="intro_text text-center">
            <p>Experience the world’s greatest show – Expo 2020 – for free with Vida Hotels and Resorts with 2 complimentary Expo tickets (1-Day Passes) when you book and stay with us for at least 3 nights between October 2021 and March 2022.</p>
          </div>
        </div>
      </div>

</div>
<div class="intro">
    <div class="container">
  


  <!-- Rooms -->
  <div class="rooms_right container_wrapper">
    <div class="container">
      <div class="row row-eq-height">
        <!-- Rooms Image -->
        <div class="col-xl-6 order-xl-1 order-2">
          <div class="rooms_slider_container">
            <div class="owl-carousel owl-theme rooms_slider">   
              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/golfroom1.jpg)"></div>
              </div>
              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/rooms_1.jpg)"></div>
              </div>
              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/golfroom_3.jpg)"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Rooms Content -->
        <div class="col-xl-6 order-xl-2 order-1">
          <div class="rooms_right_content">
            <div class="section_title">
              <div>Rooms</div>
              <h1>Deluxe Rooms</h1>
            </div>
            <div class="rooms_text">
              <p>Offers you a comfortable, creative space to relax in. Each one features Jumeirah Lake Towers views.</p>
            </div>
            <div class="rooms_list">
              <ul>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span>Maximum occupancy: 2 Adult(s) + 1 Child(ren).</span>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span>Room Type: Deluxe Room.</span>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span>Amenities: King Sized Bed.</span>
                </li>
              </ul>
            </div>
            <div class="rooms_price"><span></span></div>  
            <br>
            <button class="buttonbooknow"><a href="<?php echo WEB_ROOT;?>index.php?p=rooms">BOOK NOW</a></button>

            </br> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Rooms -->
  <div class="rooms_left container_wrapper">
    <div class="container">
      <div class="row row-eq-height">
        <!-- Rooms Content -->
        <div class="col-xl-6">
          <div class="rooms_left_content">
            <div class="section_title">
              <div>Rooms</div>
              <h1>Golf View Deluxe Rooms</h1>
            </div>
            <div class="rooms_text">
              <p>The Deluxe Golf View Rooms offer you a comfortable, creative space to relax in. Each one features spectacular golf course views.</p>
            </div>
            <div class="rooms_list">
              <ul>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span>Maximum occupancy: 2 Adult(s) + 1 Child(ren).</span>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span>Room Type: Deluxe Golf View Room.</span>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="">
                  <span>Amenities: King Sized Bed.</span>
                </li>
              </ul>
            </div>
            <div class="rooms_price"><span></span></div> 
            <br>
            <button class="buttonbooknow"><a href="<?php echo WEB_ROOT;?>index.php?p=gallery">EXPLORE HOTEL</a></button> 
            </br> 
          </div>
        </div>
        <!-- Rooms Image -->
        <div class="col-xl-6">
          <div class="rooms_slider_container">
            <div class="owl-carousel owl-theme rooms_slider">          
              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/golfroom_1.jpg)"></div>
              </div>
              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/golfroom_2.jpg)"></div>
              </div>
              <!-- Slide -->
              <div class="slide">
                <div class="background_image" style="background-image:url(images/golfroom3.jpg)"></div>
              </div>       
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Discover -->

  <div class="discover">

    <!-- Discover Content -->
    <div class="discover_content">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="section_title">
              <div>Hotel</div>
              <h1>VIDA INTERNATIONAL HOTEL AND RESORT</h1>
            </div>
          </div>
        </div>
        <div class="row discover_row">
          <div class="col-lg-5">
            <div class="discover_highlight">
              <p>Vida Emirate Hotel and Resort </p>
            </div>
            <!-- <div class="button discover_button"><a href="#">discover</a></div> -->
          </div>
          <div class="col-lg-7">
            <div class="discover_text">
              <p>A prestigious Hotel that aims to give the full experience to its visitors and guest.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Discover Slider -->
    <div class="discover_slider_container">
      <div class="owl-carousel owl-theme discover_slider">       
        <!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(images/discover_1.jpg)"></div>
          <div class="discover_overlay d-flex flex-column align-items-center justify-content-center">
            <h1><a href="#">Exciting Events</a></h1>
          </div>
        </div>
        <!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(images/discover_2.jpg)"></div>
          <div class="discover_overlay d-flex flex-column align-items-center justify-content-center">
            <h1><a href="#">Luxurious Pools</a></h1>
          </div>
        </div>
        <!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(images/discover_3.jpg)"></div>
          <div class="discover_overlay d-flex flex-column align-items-center justify-content-center">
            <h1><a href="#">Unlimited Ammenities</a></h1>
          </div>
        </div>
      </div>
    </div>
    <br></br><br></br><br></br><br></br>

  </div>




  <!-- Testimonials -->

  <div class="testimonials">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <div>VIDA INTERNATIONAL</div>
            <h1>VIDA INTERNATIONAL HOTEL AND RESORT</h1>
             <!-- DEC 1 UPDATE -->
            <br></br>
            <br></br>
            <button class="buttonbooknow"><a href="<?php echo WEB_ROOT;?>index.php?p=tour">ENTER VIRTUAL TOUR</a></button>
            <!-- DEC 1 UPDATE -->
          </div>
        </div>
      </div>
      <div class="row testimonials_row">
        <div class="col">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>