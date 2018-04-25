<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
 
          if($_SERVER["REQUEST_METHOD"]=="POST"){
            function generate_files($file_name)
              {
              $randomString = '';
           //to generate the random characters
              $length = rand(5,25);

               $characters = 'ABCDE';
               $charactersLength = strlen($characters);
               for ($i = 0; $i < $length; $i++) {
               $randomString.= $characters[rand(0, $charactersLength - 1)];
    }

                //making the file with the random characters
                file_put_contents($file_name, $randomString);

                                             }
   for($i=0; $i<3; $i++){
       generate_files($i);
   }
  
                          }
            ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
              <input class="btn btn-success" type="submit" id="generate" value="Generate Files"/><br>

            </form>

        <form action="getRank.php" method="POST">
              <label for="enterQuery"> Enter your query </label><br>
               <input type="text" NAME="query_string"><br>
               <input type="submit" id="enter" value="Search"/>

            </form>
          

    </body>
</html>