<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>
.d1{
    float:right;
}
.d2{
        width:10%;
    float:right;
}
</style>
</head>
<body>

<div class="container">
  <br>
  <div class="alert alert-success">
    <h4><strong>Success!</strong><p>The Question has been successfully added</p></h4>
  </div>
  <div class="d1">
<form action="{{ action('Test_TeacherController@question') }}" method="GET">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="hidden" name="test_id" value="{{$a}}"/>
    <input type="hidden" name="test_n" value="{{$b}}"/>
    <input type="hidden" name="section" value="{{$sect}}"/>
    
    <button type="submit" class="btn btn-primary">Back</button>
    
</form></div><span></span>

{{-- <div class="d2"><a href="home" class="btn btn-primary">Home Page</a></div> --}}


  
</div>

</body>
</html>
