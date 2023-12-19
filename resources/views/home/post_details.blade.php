<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>A World</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <base href="/public">
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>

      <div style="text-align: center" class="col-md-12">
        <div><img style="padding: 40px" height="10px" width="30px" margin="auto" src="/postimage/{{$post->image}}" class="services_img"></div>
        <h3><b>{{$post->title}}</b></h3>
        <h4>{{$post->description}}</h4>
        <p>Post By <b>{{$post->name}}</b> </p>
        
     </div>
    
      @include('home.footer')
   </body>
</html>