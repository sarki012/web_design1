<!DOCTYPE html>
<html>
  <head>
  <?php
    echo shell_exec("python temp.py"); 
    ?>  
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->

  </head>
  <body>
    <h1><?php echo "Hello, World!"; ?></h1>
  </body>
 <!--  <body>
     <button type='button' id ='retrieve'>Submit</button>
     <img src="./images/gray_btn1.jpeg" id="myimg" />
   </body>
  <script>
    $(document).ready(function() {
       $('#retrieve').click(function(){
           $.ajax({
           url: "{{ url_for ('get_img') }}",
           type: "GET",
           success: function(response) {
               $("#myimg").attr('src', '/static/' + response);
          },
          error: function(xhr) {
            //Do Something to handle error
         }
         });
       });
    });
  </script> -->
</html>

<!--<!DOCTYPE html>
<html>
    <head>
        <title>ErikSarkinen.com</title>
        <link rel="stylesheet" href="./mystyle.css"> 
    </head>
    <body>
        <h1>I'm a lean, mean, machine</h1>
        <div id="bannerimage"></div>
    </body>
</html>
-->