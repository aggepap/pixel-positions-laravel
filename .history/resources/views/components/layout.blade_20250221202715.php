<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pixel Positions</title>
  @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
  <div class="px-10">
    <nav class="flex justify-between items-center py-4">
      <div class="">
        <a href="/"> <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Logo"></a>
       
      </div>
      <div class=""><a href="#">Jobs</a>
      <a href="#">Careers</a>
      <a href="#">Salaries</a>
       <a href="#">Companies</a>
      </div>
      <div class=""><a href="#">Post a job</a></div>
    </nav>
    <main>{{$slot}}</main>
  </div> 
</body>
</html>   