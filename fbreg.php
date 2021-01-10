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
                <input type="submit" name="Login" placeholder="Login">
              </form>
              </div>
              </div>

        
        
        <div class="mydiv">
        <h1> Create a new account</h1>
        <p >its quick a easy.</p>
            <form action="fbreg.php" method="post">
        
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
            <input type="submit" name=submit value="Sign Up">
        </form>
        </div>
        
  
 <?php
        $username="root";
        $hostname="localhost";
        $password="";
        $dbname="facebook";
        
        
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        $conn=mysqli_connect($hostname,$username,$password,$dbname);
        if(!$conn)
        {
            
            die("filed to connect to database ".mysqli_connect_error());
        }
        else
        {
            echo "Connected sucessfully to database";
         }
    
        
        
 $FName=$_POST['Fname'];
        $LName=$_POST['Lname'];
        $Email=$_POST['Email'];
        $password=$_POST['password'];
        $Date=$_POST['Date-of-birth'];
        $Gender=$_POST['Gender'];

        
        
    echo "First name: ".$FName."<br>";
    echo "Last name: ".$LName."<br>";
    echo "Email: ".$Email."<br>";
    echo "Password: ".$password."<br>";
    echo "Date: ".$Date."<br>";
    echo "Gender: ".$Gender."<br>";    
       
        
        
        
        
 $insertdata="INSERT INTO `fbreg`( `Fname`, `Lname`, `Email`, `password`, `Gender`, `Dateofbirth`) VALUES ('$FName','$LName','$Email','$password','$Gender','$Date')
    ";
    
    
    if(mysqli_query($conn,$insertdata))
    {
        echo "Table created successfully";
        
        
    }
        else
        {
            
            echo"Table inserted failed".mysqli_connect_error(); 
        }
    
    }
    
         ?>
             
        
    </body>
    
    
    
</html>