<html>
    <head>
        <title>Customer Login </title>

        <style>

            body{
                background-color:white;
            }
            .mainDiv{
                width:25%;
                height:60%;
                background-color: whitesmoke;
               border:0.5px solid lightgray;
                border-radius: 10px;
                box-sizing:border-box;
                margin:auto;
                position:relative;
                text-align: center;
                
            }

            .mainDiv:hover{
                box-shadow: 2px 2px 8px 4px gray;
               
            }

            .components{
                position:relative;
            }

            #user{
               margin-top:20%;
               margin-bottom: 5%;
               
            }
            #pass{
                margin-bottom:5%;
            }
            input{
                height:11%;
                width:65%;
                
                outline-style:none;
                box-sizing: border-box;
               
            }

            table{
                border-radius:10px;
                border:0.5px solid lightgray;
                margin:auto;
                background-color:whitesmoke;
                width:25%;
            }
            table:hover{
                box-shadow: 2px 2px 8px 4px gray;
               
            }
            th{
                font-variant:small-caps;
                font-size:23px;
               
            }

            tr{
                font-size:19px;
                text-align:center;
                line-height:29px;
               
                
            }

            tr:nth-child(odd){
                background-color:white;
            }
            
            
        </style>
    </head>

    <body>
        <form action="studentLogin.php" method="POST" >
        <div class="mainDiv" >

            <div class="component">
                <input type="text" placeholder="Username" name="username"id ="user" >
            

            
                <input type="text" placeholder="Password" name="password" id= "pass">
           

            
                <input type="submit" name="stdLoginBtn" value="Login" id ="submitbtn">
            </div>


        </div>

        </form>

        <?php
            $conn = mysqli_connect("localhost","root","","studentdatabase");
            
            if(!$conn){
               die("Connection failed");
            }
            /*else{
                echo"connected" ;
            }*/
        ?>

        <?php 
            if(isset($_POST['stdLoginBtn'])){
            $uname = $_POST['username'];
            $pwd = $_POST['password'];
            /*echo $uname; 
            echo "<br>" ;
            echo $pwd ;*/

            $query = "SELECT * FROM studentinfoTable WHERE RollNo ='$pwd' AND Name='$uname' ";

           $res= mysqli_query($conn,$query);

           if($res){
                
           $row =  mysqli_fetch_assoc($res);
           
            ?> 

            <table>
            <th>
            <?php echo $row['Name'];?>
            </th>

            <tr >
               <td> <?php echo 'Id: '.$row['RollNo']?></td></tr>
               <tr> <td><?php echo 'Qualifications: '.$row['Class']?></td></tr>
               <tr> <td><?php echo 'Dob: '.$row['Dob']?></td></tr>
               <tr> <td><?php echo 'Address: '.$row['Address']?></td>
            </tr>
            </table>

            <?php
           }
           

        }
        ?>

        
    </body>
</html>

