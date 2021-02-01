   <?php
       session_start();

          $username="root";
          $hostname="localhost";
          $password="";
          $dbname="facebook";
            
          $conn=mysqli_connect($hostname,$username,$password,$dbname);
          $get_info="SELECT * FROM `fbreg` WHERE Email='".$_SESSION["Email"]."'";   
          $result=mysqli_query($conn,$get_info);
        
          if($result)
                     {
        
                        while($row=mysqli_fetch_row($result))
                                   {   
                                 
                                    $First_Name=$row[0];
                                    $Last_Name=$row[1];
                                    $Email=$row[2];
                                    $password=$row[3];
                                    $Gender=$row[4];
                                    $DateofBirth=$row[5];
                                    $IMG=$row[6];
     
                                   }
   
                     }
            
   ?>
<html>
 
    <head>
 
      <link rel = "stylesheet" href ="pr.css">          

    </head>
    
    <body>
          <?php
            include "homepage.php";
           ?>

          <?php
            print "<img src = 'uploadpic/$IMG' style = 'border-radius: 50%; width: 160px; height: 160px; margin-top: -3000px; margin-left: 800px; padding-top: 0px; margin-buttom:200px;'>"
           ?>
        
        
          <?php   
            
                echo "First name: ".$First_Name."<br>";
                echo "Last name: ".$Last_Name."<br>";
                echo "Email: ".$Email."<br>";
                echo "Password: ".$password."<br>";
                echo "Gender: ".$Gender."<br>";
                echo "Date of birth: ".$DateofBirth."<br>";
		?>

    </body>
</html>
      
    
