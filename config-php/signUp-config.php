<?php
   include '../db-connection.php';
?>


<?php 

// sign up code for investor 
    if (empty($_POST['startUpName'])){
        // THEN IT IS INVESTOR
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            

            $firstName=$_POST['firstName'];
            $lastName = $_POST['lastName'];
            
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $startDate =  date('Y-m-d');
            $type = $_POST['type'];
            $password=$_POST['password'];
            
            if(isset($_POST["submit"])){
                  

                // Inserting the data of investor in the stakeholder table
                    $sql = "INSERT INTO STAKEHOLDER (email,phone,address,startDate,password) 
                    VALUES ('$email',$phone,'$address',$startDate,'$password')";
                    $result=mysqli_query($con,$sql);

                    // fetching the userID from Stakeholder table

                    $get_id = "SELECT userID FROM STAKEHOLDER
                                WHERE email='$email' AND
                                phone =$phone AND 
                                password = '$password' ";
                    $result2 = mysqli_query($con,$get_id);
                    if ($result2){
                        $num = mysqli_num_rows($result2);
                        if ($num>0){
                            $userID = mysqli_fetch_assoc($result2)['userID'];

                            // INSERTING INVESTOR DATA INTO THE PRIVATEINVESTOR TABLE

        
                            $query = "INSERT INTO PRIVATEINVESTOR (p_userID,firstName,lastName,type,gender,location) VALUES ($userID,'$firstName','$lastName','$type','$gender','$address')";
                            mysqli_query($con,$query);
                            // Create a JavaScript script tag to execute after the page has loaded
                            echo '<script>window.onload = function() {';
                                echo 'alert("You have registered successfully! Your ID is ' . $userID . '");';
                                echo 'setTimeout(function(){ location.reload(); }, 100);';
                                echo 'window.location.href = "../index.php";';
                                echo '}</script>';
                    
                        }
                    
                    }
                    
            }

                
                    
                    
                
            else{
                die(mysqli_error($con));
            }
    }


}

// sign up code for startUp

else if (empty($_POST['investor'])){
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $startUpName = $_POST['startUpName'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $startDate = date('Y-m-d');

        $in_query = "INSERT INTO STAKEHOLDER (email,phone,address,password,startDate)
        
                     VALUES ('$email',$phone,'$address','$password',$startDate)";

        $submitStartUpToStakeholder = mysqli_query($con,$in_query);
        if ($submitStartUpToStakeholder){
            

            $get_startUp_id = "SELECT userID FROM STAKEHOLDER
            WHERE email='$email' AND
            phone =$phone AND 
            password = '$password' ";
            $result5 = mysqli_query($con,$get_startUp_id);
            if ($result5){
                $num = mysqli_num_rows($result5);
                if ($num>0){
                    $userID = mysqli_fetch_assoc($result5)['userID'];

                    // INSERTING StartUp data INTO THE startUp  TABLE


                    $query = "INSERT INTO STARTUP (s_userID,startupName,location) VALUES ($userID,'$startUpName','$address')";
                    mysqli_query($con,$query);
                    // Create a JavaScript script tag to execute after the page has loaded
                    echo '<script>window.onload = function() {';
                        echo 'alert("You have registered successfully! Your ID is ' . $userID . '");';
                        
                        echo 'setTimeout(function(){ location.reload(); }, 1500);';
                        echo 'window.location.href = "../index.php";';
                        echo '}</script>';

                }

            }
        }
        else{
            echo '<script>
              alert("Something went wrong!");      
            </script>';
        }


    }
}

?>