<?php 

$connect = mysqli_connect('localhost','root','','studentdatabase');

if (!$connect)
{
    die("connection failed");
}
error_reporting(error_reporting()& ~E_NOTICE);
?>

<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <style>

    </style>

</head>

<body style="background-color:lightgray;">

    <div class="col1">
        <div id="logo" style="text-align:center;padding:30px;box-sizing:border-box;">
        <img src="s7.png" style="width:120px; height:120px; border-radius:50%;"></div>
        <div class="row" >Students 
            <form action="admin.php" method="post">
                <input type="number" name="classname" id="classname" placeholder="enter class in digit"
                        style="outline:none;"> 
                <input type="submit" name="submitbtn" value="Select" id="submitbtn">
        </div>
        <div class="row" >Distributors </div>
        <div class="row" >Technicians</div>
        <div class="row" >Workers </div>
        <div class="row" >Managements </div>
        <div class="row" >Viewers </div>
    </div>

    <div class="col2">

        <div class="row1" style="height:150px;  background-color:whitesmoke;text-align:center;width:100%; padding-top:10px;
        line-height:100px;">
    <h1>Welcome Admin</h1>
    </div>
        <div class="row2" style=" margin-top:20px;">
            <div style="background-color:white;margin-bottom:10px; padding:5px;font-size:17px;
                        font-weight:bold;">Insert Details 
                        <form action="admin.php" method="post">
                        <input type="text" class="input" id='name' name='name' style="outline:none;margin-left:20px;margin-right:40px;margin-bottom:5px;"placeholder="enter name">
                        <input type="number" class="input" name='rollno' style="outline:none;margin-left:10px;margin-right:40px"placeholder="enter id">
                        <input type="number"class="input" name='class'style="outline:none;margin-left:10px;" placeholder="enter qualifications"><br>
                        <input type="text" class="input" name= 'address'style="outline:none;margin-left:122px;margin-right:40px;"placeholder="enter address">
                        <input type="text" class="input" name='dob'style="outline:none;margin-left:10px;margin-right:40px;"placeholder="enter Dob">
                        <input type="submit" class="input" name="submitInsert"value="insert"style="outline:none; background-color:green;color:white;margin-left:10px;
                        width:80px;" >

                         <input type="submit" class="input" name="submitUpdate"value="Update"style="outline:none; background-color:green;color:white;margin-left:10px;
                        width:80px;" >
                        </form>

                        <?php 
                        $submitInsert = $_POST['submitInsert']; 
                        $name = $_POST['name'];
                        $rollno = $_POST['rollno'];
                        $class = $_POST['class'];
                        $address = $_POST['address'];
                        $dob = $_POST['dob'];
                        $sql="INSERT INTO studentinfoTable (Name,Rollno,Class,Address,Dob) VALUES ('$name','$rollno',
                        '$class','$address','$dob')";
                        if(isset($submitInsert)){
                            $res = mysqli_query($connect,$sql);
                            if ($res){
                                    echo"data inserted";
                            }     
                        }
                        ?>

                        </div>
            <?php 
            $submitbtn = $_POST['submitbtn'];
            $classname = $_POST['classname'];
            ?>

            <table style="background-color:whitesmoke; width:100%;" >
            <tr >
                <th style="border-bottom:1px solid black;">Name</th>
                <th style="border-bottom:1px solid black;">Id</th>
                <th style="border-bottom:1px solid black;">Qualifications</th>
                <th style="border-bottom:1px solid black;">Address</th>
                <th style="border-bottom:1px solid black;">Dob</th>
                <th style="border-bottom:1px solid black;">Delete</th>
                <th style="border-bottom:1px solid black;">Edit</th>
                </tr>
            <?php
            if(isset($submitbtn)){
             $query = "SELECT * FROM studentinfoTable WHERE Class= '$classname' ";
             $result = mysqli_query($connect,$query);

            
                ?>

                
           <!-- <table style="background-color:whitesmoke; width:100%;" >
            <tr >
                <th style="border-bottom:1px solid black;">Name</th>
                <th style="border-bottom:1px solid black;">RollNo</th>
                <th style="border-bottom:1px solid black;">Class</th>
                <th style="border-bottom:1px solid black;">Address</th>
                <th style="border-bottom:1px solid black;">Dob</th>
                </tr>-->

                <?php
             while( $row =  mysqli_fetch_assoc($result)){

                ?>
                 <tr style="text-align:center;">
                <td style="padding:5px;"><?php echo $row['Name']?></td>
                <td><?php echo $row['RollNo']?></td>
                <td><?php echo $row['Class']?></td>
                <td><?php echo $row['Address']?></td>
                <td><?php echo $row['Dob']?></td>
            
                
                <td><a href="deleteStd.php?rn=<?php echo $row['RollNo']; ?>" name="delete" style="outline:none;background-color:red;color:white;">Delete</a></td>
                
                <td><a href="updateStd.php?rn=<?php echo $row['RollNo']; ?>&class=<?php echo $row['Class'];?>&
                address=<?php echo $row['Address']; ?>&dob=<?php echo $row['Dob']; ?>&name=<?php echo $row['Name']; ?>" 
                name="edit" style="outline:none;background-color:turquoise;color:white;">Edit</a></td>
                
                
                
                

                
            </tr>
            
            <?php
             }
            }

            ?>

        </table>
        

        </div>

    </div>

</body>
</html>
