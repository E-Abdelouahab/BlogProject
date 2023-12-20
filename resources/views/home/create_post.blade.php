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
      <style>
        .div_deg
         {
            text-align: center;
         }
         .title_deg
         {
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
         }
         label
         {
            display: inline-block;
            width: 200px;
            color: white;
            font-size: 18px;
            font-weight: bold;
             
         }
         .field_deg
         {
            padding: 25px;
         }
      </style>
      @include('home.homecss')
   </head>
   <body>

    @include('sweetalert::alert')
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')

         

         <div class="div_deg">
            <h3 class="title_deg">Add Post</h3>
        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field_deg">
                <label>Title</label>
                <input type="text" name="title">
            </div>

            <div class="field_deg">
                <label >Description</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="field_deg">
                <label >Add Image</label>
                <input type="file" name="image">
            </div>

            <div class="field_deg">
                
                <input type="submit" value="Add Post" class="btn btn-outline-secondary">
            </div>


        </form>
         </div>
 

      @include('home.footer')
   </body>
</html>