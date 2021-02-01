  <?php
    session_start();
  ?>
<html>

    <head>
    
        <link rel="stylesheet" href="fb.css">
    
    </head>
    
    
    <body>
    
          <div class= "fb-header">
            <div class="log-form">
              <form class="login" action="fbreg.php" method="post">
              
                  <p style="white-space:pre"> Email or phone              Password</p>            
                                  <br>
                  <input type="text" name="Email" placeholder="Email">                  
                  <input type="text" name="password" placeholder="Pass">
                 <input type="submit" name="submit_Login" placeholder="Login">
              
              </form>
            </div>
         </div>

        
        
          <div class="mydiv">
        
                   <h1> Create a new account</h1>
                   <p>its quick a easy.</p>
            
              <form action="fbreg.php" method="post" enctype="multipart/form-data">
        
                   <input type="file" name =image placeholder="profile picture">
                                             <br>
                   <input type="text" name=Fname placeholder="First name">
                   <input type="text" name=Lname placeholder="Surname">
                                             <br>
                   <input type="email" name=Email placeholder="Email">
                                             <br>
                   <input type="password" name=password placeholder="New password">
                    <p >Date of birth</p>
                   <input type="date" name="Date-of-birth">
                                             <br>
                   <input type="radio" name=Gender value="Male">Male<br>            
                   <input type="radio" name=Gender value="Female">Female<br>            
                                          <br><br>
                   <input type="submit" name=submit_reg value="Sign Up">
        
              </form>
        </div>
        
  
    <?php
        $username="root";
        $hostname="localhost";
        $password="";
        $dbname="facebook";
    
         $conn=mysqli_connect($hostname,$username,$password,$dbname);
       
         if(!$conn)
             {
            
            die("filed to connect to database ".mysqli_connect_error());
                   
             }
        else
             {
            
            echo "Connected sucessfully to database";
             
             }

        
        if(isset($_POST['submit_Login']))
                     {
          
                       $_SESSION["Email"]=$_POST['Email'];
                       $_SESSION["pass"]=$_POST['password'];
        
                       $getdata="SELECT * FROM `fbreg` WHERE Email='".$_POST['Email']."' and password='".$_POST['password']."'";
                       $result=$conn->query($getdata);
        
      
                        if(empty($_SESSION["Email"])||empty($_SESSION["pass"]))
                                         {
       
                                        die("please fill the data").mysqli_connect_error();
                                  
                                          }
                        else
                             {
                      
                                   if($result->num_rows>0)
                                                      {
    
                                                    header('location:homepage.php');
              
                                                       }
                                    else
                                         { 
       
                                    echo '<script type="text/javascript">';
                                    echo ' alert("invalid email or password")';  
                                    echo '</script>';           
                                          }
                             
                           }
                
                     }

                                
      
        
        
        if(isset($_POST['submit_reg']))
                     {
       
                       $FName=$_POST['Fname'];
                       $LName=$_POST['Lname'];
                       $Email=$_POST['Email'];
                       $password=$_POST['password'];
                       $Date=$_POST['Date-of-birth'];
                       $Gender=$_POST['Gender'];

        
                           if(empty($FName)||empty($LName)||empty($Email)||empty($password)||empty($Date)||empty($Gender))       
                             
                            {
                                 echo '<script type="text/javascript">';
                                 echo ' alert("please fill all data")'; 
                                 echo '</script>';
       
                               die("please fill all data").mysqli_connect_error();   
          
                            }
        
                           else
                           
                            {
        
            
                               echo "First name: ".$FName."<br>"; 
                               echo "Last name: ".$LName."<br>";
                               echo "Email: ".$Email."<br>";
                               echo "Password: ".$password."<br>";
                               echo "Date: ".$Date."<br>";
                               echo "Gender: ".$Gender."<br>";    
       
        
    
                                 $filename=$_FILES['image']['name'];
                                 $tmp=$_FILES['image']['tmp_name'];
                                 move_uploaded_file($tmp,"uploadpic/".$filename);
                                 
                               echo "file name: ".$filename."<br>";
                               echo"File location before move".$tmp."<br>";
                          
                               $insertdata="INSERT INTO `fbreg`(`Fname`, `Lname`, `Email`, `password`, `Gender`, `Dateofbirth`,`Image`) VALUES ('$FName','$LName','$Email','$password','$Gender','$Date','$filename')";

                            
                                 if(mysqli_query($conn,$insertdata))
       
                                       {
    
                                         echo '<script type="text/javascript">';
                                         echo ' alert("Process successfully")'; 
                                         echo '</script>';
       
                                       }
        
                                 else
                                  
                                      {
                                            echo '<script type="text/javascript">';
                                         echo ' alert("Error please try again later")'; 
                                         echo '</script>';
       
                                        echo"Table inserted failed".mysqli_connect_error(); 
        
                                      }
    
                  
                            }
                
    
                     }       
    
    
    ?>
             
    </body>
</html>