<?php 
    // including database to fetch data from the phpMyAdmin database rems-2.O
    include '../db-connection.php';
   

    if($_SERVER['REQUEST_METHOD']=='POST'){

        // getting user inputted info from the sign in form using post method
        $userType =$_POST['submit'];
        $ID=$_POST['id']; 
        $password=$_POST['password'];
    
        
        // startup log in credential matching and if match letting them sign in or showing alert 
        if ($userType=='startup'){
            $sql="SELECT * from STAKEHOLDER where userID='$ID' and password='$password'";
            $result=mysqli_query($con,$sql);
            if($result){
                $num=mysqli_num_rows($result);
                
                $notMember =true;
                if($num>0){
                    $name_query = "SELECT startupName 
                    FROM STARTUP SU , STAKEHOLDER SH
                    WHERE SU.s_userID = SH.userID AND
                    SH.password = '$password'";
                    $res = mysqli_query($con,$name_query);
                    if ($res){
                    
                    $name = mysqli_fetch_assoc($res)['startupName'];
                    session_start();
                    $_SESSION['Name']=$name;
                    $_SESSION['userID'] = $ID;
                    $notMember =false;
                    header('location:../home.php');
                    
                    }
                    
                }
                // when user input wrong credential it will go back to sing in page showing an alert
                if ($notMember){
                    echo '<script>';
                    echo 'alert("Your credentials are wrong!");';
                    echo 'setTimeout(function() {';
                    echo '  window.location.href = "../index.php";'; // Redirect after a delay
                    echo '}, 200);'; 
                    echo '</script>';
                  
                }
                
               
            }    

        }
        // investor log in credential matching and if match letting them sign in or showing alert 
        else if ($userType=='investor'){
            $sql="SELECT * from STAKEHOLDER where userID='$ID' and password='$password'";
            $result=mysqli_query($con,$sql);
            if($result){
                $num=mysqli_num_rows($result);
                
                $notMember =true;
                if($num>0){
                    $name_query = "SELECT CONCAT(firstName,' ',lastName) As investorName
                    FROM PRIVATEINVESTOR PI , STAKEHOLDER SH
                    WHERE PI.p_userID = SH.userID AND
                    SH.password = '$password'";
                    $res = mysqli_query($con,$name_query);
                    if ($res){
                    
                    $name = mysqli_fetch_assoc($res)['investorName'];
                    session_start();
                    $_SESSION['Name']=$name;
                    $_SESSION['userID'] = $ID;
                    $notMember =false;
                    header('location:../home.php');
                    
                    }
                    
                }
                // when user input wrong credential it will go back to sing in page showing an alert
                if ($notMember){
                    echo '<script>';
                    echo 'alert("Your credentials are wrong!");';
                    echo 'setTimeout(function() {';
                    echo '  window.location.href = "../index.php";'; // Redirect after a delay
                    echo '}, 200);'; 
                    echo '</script>';
                  
                }
                
               
            }    

        }
        else{
            $invalid=1;
        }
    }
?>