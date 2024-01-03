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
      @include('home.homecss')
      <style type="text/css">
         .post_deg
         {
          padding: 30px;
          text-align: center;
          background-color: black;
         }

         .title_deg
         {
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
            color: white;
         }

         .des_deg
         {
            font-size: 15px;
            font-weight: bold;
            padding: 15px;
            color: whitesmoke;
         }
         .img_deg
         {
            height: 200px;
            width: 300px;
            padding: 30px;
           margin: auto;
         }
      </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')

         @if(session()->has('message'))

         <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>

            {{session()->get('message')}}

         </div>
         @endif

      @foreach ($data as $data)
          
         <div class="post_deg">
            <img class="img_deg" src="/postimage/{{$data->image}}">
            <h4 class="title_deg">{{$data->title}}</h4>
            <p class="des_deg">{{$data->description}}</p>

            <a  onclick="retrun confirm('are you sure to delete this ?')" href="{{url('my_post_del' ,$data->id)}}" class="btn btn-danger">Delete</a>
         </div>
         @endforeach
      </div>
      
      
      <!-- choose section end -->
      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>