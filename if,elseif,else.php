
  <form action="" method="post">
    
        First Name: <input type="text" name="first_value"><br><br>
        Second_Name: <input type="text" name="second_value"><br><br>
        <input type="submit" name="sub">
        
        <?php
            if(isset($_POST["sub"]))
            {
                $a=$_POST["first_value"];
                $b=$_POST["second_value"];
            }
        ?>
  </form>

  <?php
    if(isset($_POST["sub"]))
    {
       if($a>$b){
          echo "$a greater than $b ";
       }
       elseif($a<$b){
         echo "$b greater than $a ";
       }
       else{
         echo"please enter the valid number!!!";
       }
    }
            
  ?>


  