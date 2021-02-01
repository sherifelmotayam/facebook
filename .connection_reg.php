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
        ?>