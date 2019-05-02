<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title>Admin</title>
	<link rel="stylesheet" href="{{ asset('admin/css/admin_style.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/fontawesome-all.min.css') }}" />
  </head>
  <body>
    <div class="header">
      <div class="head-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Admin Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../../controll">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('list-of-booking') }}">List of Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin_rooms">Rooms  <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin_meals">Restaurant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin_halls">Halls</a>
              </li>

            </ul>
        
          </div>
        </nav>
      </div>
    </div>


<div class="container">

	
	 <span><b>Edit Room</b></span>
    <div class="row list-group-item">
    <form method="POST" action="update" enctype="multipart/form-data">
    {{ csrf_field() }}
	{{ method_field('PUT') }}	
        <div class="input-group">
          <input type="text" name="type" class="form-control" value="{{ $room_id->type }}" placeholder="Room Type" required>
		  <input type="text" name="price" class="form-control" value="{{ $room_id->price}}" placeholder="Price" required>

			
			<pre>   <label style="color:green; font-size:18px;">Room Image</label></pre>
			<input type="file" name= "image" value="admin/upload images/{{ $room_id->image }}">
			
		
		
		  <div class="add-room text-center" id="new-hall">
              <button class="btn btn-success"  type="submit" >Edit</button>
			  <a href="../../admin_rooms" class="btn btn-danger">Cancel</a>
          </div>
			
			
        </div>
    </form>
<div>
	

	
	<!-- Scripts -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
	<script src="{{ asset('admin/js/fontawesome-all.min.js') }}" defer></script>
	<script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}" defer></script>
  </body>
</html>