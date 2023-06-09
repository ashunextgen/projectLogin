




<!DOCTYPE html>
<html>
<head>
	<title>Authentication</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{url('css/style.css')}}"/>
</head>
<body>



	 <h1> Welcome {{Auth::user()->name}}, you are signed in !</h1>
     <a href="{{route('logout')}}" class="btn btn-info" >Logout</a>



     <div class="container">
     	    <form action="{{route('store_image')}}" method="post" enctype="multipart/form-data">
     		@csrf
     	<h2>Save Image to storage</h2>

     	        <div class="mb-3">
                  <input class="form-control" type="file" name="image">
                 
               </div>

                <div class="form-row-last">
				  <input type="submit" name="register" class="register mt-3" value="Submit">
				   </div>

        </form>
        <a href="{{route('image')}}">Image</a>

     </div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>