@extends('layouts.app') @section('content')
 <!-- start slider -->
<div class="header">
   <div class="slider">
        <div class="container">
          <div class="our-hotel">
            <div class="first">
              <img src="{{ asset('style/images/home_images/slider4.jpg') }}"/>
            </div>
            <div class="second">
              <div class="part1">
                <img src="{{ asset('style/images/home_images/slider6.jpg') }}"/>
              </div>
              <div class="part2">
                <div>
                  <img src="{{ asset('style/images/home_images/slider7.jpg') }}"/>
                </div>
                <div>
                  <img src="{{ asset('style/images/home_images/slider9.jpg') }}"/>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
 <!-- end slider -->





 <!-- Start Rooms Section -->
    <div class="rooms">
      <div class="container">
        <div class="room-intro">
          <h2>Rooms</h2>
          <hr style="margin:auto"/>
          <p>Our Hotel have three types of rooms, You can book one or more room<br> from the same or different type </p>
        </div>
        <div class="room-type">
          <div class="types">
            <img src="{{ asset('style/images/rooms-images/room2.jpg') }}"/>
            <h2>Single</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <button><a href="single_room">view Rooms</a></button>
          </div>
          <div class="types">
            <img src="{{ asset('style/images/rooms-images/room4.jpg') }}"/>
            <h2>Double</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <button><a href="double_room">view Rooms</a></button>
          </div>
          <div class="types">
            <img src="{{ asset('style/images/rooms-images/room8.jpg') }}"/>
            <h2>Triple</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <button><a href="triple_room">view Rooms</a></button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Rooms Section -->
    <!-- ******************************************************************* -->
    <!-- Start Resaurant Section -->
    <div class="restaurant">
      <div class="container">
        <div class="info">
          <h2>Restaurants & Halls</h2>
          <hr style="margin:auto"/>
          <p>Our hotel have many largest and famous<br/> Restaurants & Halls</p>
        </div>
        <div class="rest">
          <div>
            <h3>Restaurants</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut non cupidatat skateboard dolor brunch.</p>
            <button><a href="resturant">GO<i class="fas fa-angle-double-right"></i></a></button>
          </div>
          <div>
            <img src="{{ asset('style/images/restaurants-images/rest1.jpg') }}"/>
          </div>
          <div>
            <img src="{{ asset('style/images/restaurants-images/halls/hall.jpg') }}"/>
          </div>
          <div>
            <h3>Halls</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut non cupidatat skateboard dolor brunch.</p>
            <button><a href="halls">GO<i class="fas fa-angle-double-right"></i></a></button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Restaurant Section -->
    <!-- ******************************************************************* -->
    <!-- Start Services Section -->
    <div class="services">
      <div class="container">
        <div class="service-intro">
          <h2>Our Services</h2>
          <hr style="margin:auto"/>
          <p>Our Hotel have three types of rooms, You can book one or more room<br> from the same or different type </p>
        </div>
        <div class="buttons">
          <button class="my-button"><a href="gym">GYM</a></button>
          <button class="my-button"><a href="other_serv">SPA</a></button>
          <button class="my-button"><a href="other_serv">Library</a></button>
          <button class="my-button"><a href="golf">Golf</a></button>
        </div>
        <div class="ser-images">
          <img src="{{ asset('style/images/services-images/gym/gym1.jpeg') }}"/>
          <img src="{{ asset('style/images/services-images/gym/yoga1.jpg') }}"/>
          <img src="{{ asset('style/images/services-images/spa/spa1.jpg') }}"/>
          <img src="{{ asset('style/images/services-images/golf/Drew-Lesson.jpg') }}"/>
          <img src="{{ asset('style/images/services-images/library/library2.jpg') }}"/>
          <img src="{{ asset('style/images/services-images/golf/golf1.jpg') }}"/>
          <img src="{{ asset('style/images/services-images/library/library3.jpg') }}"/>
          <img src="{{ asset('style/images/services-images/spa/spa3.png') }}"/>
        </div>
      </div>
    </div>
    <!-- End Services Section -->
    <!-- ******************************************************************* -->
    <!-- Start Our Happy Client Section-->

          <div id="review">
        <div class="container">
            <h3> Our Clients' Feedbacks </h3>
            <div class="lines">
                <hr class="firstLine" />
                <hr class="secondLine" />
            </div>
            <br />
           @foreach ($comments as $oneComment)
            <div class="reviewBox">
                <img src="{{ asset('style/images/52c66f1f8b.png') }}" />
                <div class="feedbackName">
                    <h4 class="clientName"> {{ $oneComment->username }} </h4>
                    <h6 class="reviewSubject"> {{ $oneComment->subject }} </h6>
                </div>
                <div class="clear"> </div>
                <div class="reviewDesc">
                    <q> {{ $oneComment->comment }} </q>
                </div>
            </div>
			@endforeach
        </div>
    </div>
         <div class="our-client">
      <div class="container">
        <div class="comments">
		  <div class="click">
			  <a href="show_comments"><button> <i class="fas fa-angle-double-left"> </i>View all our Clients comments <i class="fas fa-angle-double-right"> </i></button> </a>
		 </div>
	   	</div>	  
      </div>
    </div>
    <!-- End Our Happy Client Section -->



<!-- Start Form to add comment -->
    <div class="footer">
      <div class="container">
         <form method="post" action="store_comment" enctype="multipart/form-data">
			{{ csrf_field() }}
          <div class="form">
            <div class="first col-6">
              <label>Name *</label>
              <input type="text" name="user-name"/ required>
              <label>Email *</label>
              <input type="email" name="mail"/ required>
              <label>Subject</label>
              <input type="text" name="subject"/ required>
            </div>
            <div class="first col-6">
            <div class="row">
              <label>Your Comment *</label>
              <textarea name="comment" required></textarea>
                </div>
                <div class="row ml-1">
              <input type="submit" value="send"/>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Form -->


@stop