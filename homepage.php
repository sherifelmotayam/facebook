   <?php
      session_start();   
    ?>
<html>
    <head>
 
      <link rel="stylesheet" href="hmpge.css">
    </head>
   
    <body>
         <div>
             <ul>
      
                  <div class="topnav">

                      <?php
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
                                                           $FN=$row[0];
                                                           $LN=$row[1];
                                                           $GN=$row[4];
                                                           $DB=$row[5];
                                                           $IMG=$row[6];
                       
                                                       print "<img src = 'uploadpic/$IMG' style = 'border-radius: 50%; width: 40px; height: 40px; margin-left: 85px; padding-top: 0px; margin-buttom:-80px; margin-left:30px;'>";  
     
                                                        }
            
                 

   
                                    }
              
              
              
                     ?>
         
                      <a  href="fbreg.php">log out</a>
                      <a  href="prof.php">view profile</a>
                      <input type="text" placeholder="Search..">
                      <a href="#" style=" margin-right:530px;">Home page </a>
          
                  </div>             
             
             </ul>
         </div>
        
        
         <div class="bar">
        
             <ul>
                     <br>
                          <li><a  href="#home">Home</a></li>
                     <br>
                          <li><a href="#news">News</a></li>
                     <br>
                          <li><a href="#contact">Contact</a></li>
                     <br>
                          <li><a href="#about">About</a></li>
             </ul>
         
         </div>
        
    
    </body>
    
</html>