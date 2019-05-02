@extends('layouts.app') @section('content')

 <!-- Start Header -->
    <div class="header">
      
       <div class="golf-slider">
        <img id="imging-golf" src="{{ asset('services-images/golf/golf.jpg') }}"/>
      </div>
    </div>
    <!-- End Header-->





<!--Start GOLF Section-->
  <div class="commun">
    <div class="container">
        <div class="golfimg">
          <img src="{{ asset('services-images/golf/golf6.jpg') }}"/>
        </div>
        <div class="shape">
          <p>Our Golf Club prides itself on our classic and well manicured par 72 layout. Acclaimed architect Desmond Muirhead designed the facility in 1972, giving golfers a dramatic experience of natural rolling terrain where expansive views of the Green Mountains are revealed on nearly every hole. The course is completely natural and is routed through many indigenous areas spanning the property.
              Apart from the breathtaking scenery lies target landing areas, strategic bunkering and small undulating greens that characterize the challenges of this hidden gem. New England weather conditions are always present, and the varying elements of the course create a new experience every time you play.</p>
        </div>
        <div class="secpart">
              <h2>Tee Times</h2>
              <p>Pro Shop:
                7:30am to 6pm – Monday through Friday
                Tee times from 8am
                7am to 6pm – Saturday, Sunday & Holidays
                Tee times from 7:30am
                To contact our pro-shop for advanced party planning and golf membership inquiries call 802-464-4300.</p>
        </div>
        <div class="secimg">
          <img src="{{ asset('services-images/golf/golf1.jpg') }}"/>
        </div>
        <div class="thirdimg">
          <img src="{{ asset('services-images/golf/Drew-Lesson.jpg') }}"/>
        </div>
        <div class="thirdpart">
          <h2>Golf Instruction by PGA Professionals</h2>
          <p>
          We are dedicated to delivering the best experience and creating a supportive learning environment. The use of cutting edge technologies, effective training aids and individualized practice plans will efficiently turn weaknesses to strengths. These factors coupled with our passion for the game of golf drives us every day to have each student succeed in hitting consistent quality golf shots and find renewed joy on the golf course. Contact the Professional Shop at 802-464-8301 to book your lesson today!!</p>
        </div>
		
    </div>
  </div>


     <!--End History Section-->
@stop