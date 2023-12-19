<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
    <style type="text/css">

      .post_title
      {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
      }

      .div_center
      {
        text-align: center;
        padding: 30px;
      }

      label 
      {
        display: inline-block;
        width: 200px;
      }

    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <form action="">

          <div class="div_center">
            <label for="">Post Title</label>
            <input type="text" name="title" id="">
        </div>

        <div class="div_center">
            <label for="">Post Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="div_center"> 
            <label for="">Post Image</label>
            <input type="file" name="image" id="">
        </div>

        <div class="div_center">
        
            <input type="submit" class="btn btn-primary">
        </div>



        </form>

      </div>
     
      @include('admin.footer')
  </body>
</html>