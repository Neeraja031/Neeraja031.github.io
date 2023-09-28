<?php 
$name=$_POST["name"];
$email=$_POST["email"];
$Phno=$_POST["contact"];
$sugg=$_POST["suggestions"];
$gender=$_POST["gender"]
$host="localhost";
$dbname="portfolio";
$username="root";
$password="Neeraja@031"
$conn=mysqli_connect($host,$username,$password,$dbname,3306);
if(mysqli_connect_errno())
    {die("Connection Failed".mysqli_connect_errno());
     echo "Connection failed";}
if(isset($name) && isset($email) && isset($phno) && isset($sugg))
    {
        if(strlen($name)>3)
            {
                if(filter_var($email,FILTER_VALIDATE_EMAIL))
                    {
                        if((strlen($phno)== 10) && (filter_var($phno,FILTER_VALIDATE_NUMBER)))
                            {
                                $sql="INSERT INTO portfolio(sno.,name,mail,Phno,suggestions,gender) Values('','$name','$email','$phno','$sugg','$gender')";
                                $query=mysqli_query($conn,$sql);
                                if($query)
                                    {document.alert("Connection Succefful");}
                                else
                                    {document.alert(echo "Connection Failed");}
                                
                            }
                        else
                            {echo "Invalid phone number";}
                    }
                else
                    {echo "Invalid email"; }
            }
        else
            { echo "Name should contains atleast 3 characters";}
    }
else
    {echo "these should have entries";}

?>