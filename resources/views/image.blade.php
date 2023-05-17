




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



	 


     <div class="container">
     	    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Image</th>
     
    </tr>
  </thead>
  <tbody>

    @foreach($images as $image)
    <tr>
      <td> {{$image->id}} </td>
      <td> <img src="{{asset('/storage/image/'.$image->image)}}">  </td>
    
    </tr>
    @endforeach
  </tbody>
</table>
     </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>