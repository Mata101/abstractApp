<?php
   session_start();
   
    if( $_SESSION['name']!="checker" ){
   if(!empty($_SESSION)){
    if($_COOKIE['name']!="logout"){
      if (isset($_COOKIE['name'])) {
         if($_COOKIE['name']=="admin"){
          $_SESSION=array('name' => "admin"  );
          header("Location: welcome.php");
          }
      
        elseif($_COOKIE['name']=="checker"){
          $id=$_COOKIE['id'];
          $_SESSION=array('name' => "checker"  );
          header("Location: welcome2.php?id=$id");
        }
        
        elseif($_COOKIE['name']=="instructor"){
          $id=$_COOKIE['id'];
          $_SESSION=array('name' => "instructor"  );
          header("Location: welcome3.php?id=$id");
        }
      }
  }elseif($_COOKIE['name']=="logout"){
    header("Location: logout.php");
  }
  else{
     header("Location: login.php");
  }
  }elseif(!empty($_COOKIE['name'])){
    if($_COOKIE['name']!="logout"){
      if (isset($_COOKIE['name'])) {
         if($_COOKIE['name']=="admin"){
          $_SESSION=array('name' => "admin"  );
          header("Location: welcome.php");
          }
        
          elseif($_COOKIE['name']=="checker"){
            $id=$_COOKIE['id'];
            $_SESSION=array('name' => "checker");
            header("Location: welcome2.php?id=$id");
          }
          elseif($_COOKIE['name']=="instructor"){
            $id=$_COOKIE['id'];
            $_SESSION=array('name' => "instructor");
            header("Location: welcome3.php?id=$id");
          }
      }
    }elseif($_COOKIE['name']=="logout"){
    header("Location: logout.php");
  }
  }else
  {

    unset($_COOKIE['name']);
    unset($_COOKIE['id']);
    unset($_COOKIE['time']);
    setcookie('name', null, -1, '/');
    setcookie('id', null, -1, '/');
   
    header("Location: logout.php");
  
  
  }
}
   $expiry=time()+600;
        setcookie('name','checker',$expiry,'','','',TRUE);
        $id=$_GET['id'];
        setcookie('id',$id,$expiry,'','','',TRUE);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>HR System</title>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HR System</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <meta name="description" content="Place your description here">
        <meta name="keywords" content="put, your, keyword, here">
        <meta name="author" content="Templates.com - website templates provider">

        <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>
        <script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
        <script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <link rel="shortcut icon" href="assets/ico/logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


        <style>
          .table-curved {
            border-collapse: separate;
          }
          .table-curved {
             
              border-radius: 4px;
          }

          .table-curved th {
              border-top: none;
          }
          .table-curved th:first-child {
              border-radius: 4px 0 0 0;
          }
          .table-curved th:last-child {
              border-radius: 0 4px 0 0;
          }
          .table-curved th:only-child{
              border-radius: 4px 4px 0 0;
          }
          .table-curved tr:last-child td:first-child {
              border-radius: 0 0 0 4px;
          }
          .table-curved tr:last-child td:last-child {
              border-radius: 0 0 4px 0;
          }

          .table-curved td{
            color: #000;
            font-weight: normal;
          }

          .table-curved th{
            color:#fff;
            font-weight: normal;

          }
     </style>
    </head>
  
  
<body>

  <div class="top-content">
          
    <div class="inner-bg">
      <div class="container">
          <div class="panel-body">
            <h2></h2>
            <div class="jumbotron">

                    <img vspace="20" class="jumbotronwidth" alt=" " src="./images/mustlogo-big.png">
                    <h1><font color="#fff">Automated HR System</font></h1>      
                    <h4><font color="#fff">Mindanao University of Science and Technology</font></h4>
                    <h6><font color="#fff">C.M. Recto Avenue, Lapasan, Cagayan de Oro City</font></h6>
            
            </div>
  

    <form action="checked.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
      <div class="panel panel-default">
        <div class="panel-heading" style="padding: 30px 25px 30px 25px;text-align: left;border-radius: 4px;background-color:#332C2F;color:#AA9A66;font-size: 20px;font-weight: normal">Checklist</div>
          <div class="panel-body" style="background-color:rgba(255,255,255,0.9)">
            <div class="table-responsive">
          
              <table class="table table-curved">
                <thead>
                  <tr>
                    <th >Day</th>
                    <th >Time</th>
                  
                 
                  
                   <th >Building(Room)</th>
                   <th >Room Type</th>
                   <th >Section Number</th>
                   <th >Subject</th>
                   
                   
                   
                    <th >Instructor Name</th>
                    <th >Checker ID</th>
                    <th >Checker Name</th>
                    
                    <th>Present</th>
                    <th>Absent</th>
                    <th>Remarks</th>
                    <th>Upload Image</th>
                    <th>Action</th>

                </thead>
              </tr>

            <tbody>

              <?php
                $con=mysqli_connect('mysql.hostinger.ph','u518739312_paul','incorrect','u518739312_hr');
               

                if(is_null($_POST['pora']))
                {
                  echo "<script>alert('error submission, please try again.')</script>"."error submission.";
                }else{
                  $pm=(int)$_POST['pora'];
                  $i=(int)$_POST['id'];
                  $in=0;
                  $n=0;
                  $re=$_POST['remark'];

                  $result=mysqli_query($con,"select instructor_id from schedule1 where schedule_no='$i'");
                  while($row=mysqli_fetch_array($result))
                  {
              
                    $in=(int)$row[0];

                  }
                  $resu=mysqli_query($con,"select checker_no from schedule1 where schedule_no='$i'");
                  while($row=mysqli_fetch_array($resu))
                  {
              
                    $n=(int)$row[0];
                  }

              function save_image()
              {
                $con=mysqli_connect('mysql.hostinger.ph','u518739312_paul','incorrect','u518739312_hr');

                if(!$_FILES['images']['tmp_name']){
                   
                  $image_s="";
                  echo "<script>alert('WARNING: no image is stored.')</script>"."WARNING: no image is stored.</br>";
                }else{
                   
                  $image_s=addslashes($_FILES['images']['tmp_name']);
                  $image_s=file_get_contents($image_s);
                  $image_s=base64_encode($image_s);
                }
                $pm=(int)$_POST['pora'];
                $i=(int)$_POST['id'];
                $in=0;
                $n=0;
                $re=$_POST['remark'];

                $result=mysqli_query($con,"select instructor_id from schedule1 where schedule_no='$i'");

                while($row=mysqli_fetch_array($result))
                {
              
                  $in=(int)$row[0];
                }
                $resu=mysqli_query($con,"select checker_no from schedule1 where schedule_no='$i'");
                while($row=mysqli_fetch_array($resu))
                {
              
                  $n=(int)$row[0];
                }

                if($re!=null){
                  $r1=mysqli_query($con,"insert into absent (schedule_no,instructor_id,remarks,date,image) values('$i','$in','$re',curdate(),'$image_s')");
                  echo" <script>alert('Recorded successfully!')</script>";

                }elseif($re==null)
                {
                  $r1=mysqli_query($con,"insert into absent (schedule_no,instructor_id,remarks,date,image) values('$i','$in','',curdate(),'$image_s')");
                  echo" <script>alert('Recorded successfully!')</script>";

                }else{
                  echo " <script>alert('Recorded unsuccessfully! please try again.')</script>"."recorded unsuccessfully!";
                }


                include "smsGateway.php";
                $smsGateway = new SmsGateway('matapaulchristian@gmail.com', 'Incorrectpassword123');
                $con=mysqli_connect('mysql.hostinger.ph','u518739312_paul','incorrect','u518739312_hr');
                $q=mysqli_query($con,"select count(device_id) from device");
                $deviceID ="";
                $z="";
                while($row=mysqli_fetch_array($q))
                {
                  $z=(int)$row[0];
             
                }

                $number ="";
                $u=mysqli_query($con,"select instructor_pn from instructor where instructor_id='$in'");
                while($row=mysqli_fetch_array($u))
                {
                  $number =$row[0];
                }

                $x=0;
                 $q1=mysqli_query($con,"select device_id from device");
                 while($row=mysqli_fetch_array($q1)){

                  for($x=0;$x<=$z;$x++)
                                  {
                                    if($x==$z){
                                      $deviceID =$row[0];
                                      break;
                                    }
                 }
                }
                  
                      $message = 'Good day Maam/Sir, This is the HR department. We would just like to inform you that you have marked as absent in your schedule today around this time. If you have any concerns, please see the HR department. Thank you.';

                      $resolt = $smsGateway->sendMessageToNumber($number, $message,$deviceID );
                      echo "Message send to: ".$number."<br>";
                      echo "Message: ".$message."<br>";
                      echo "Device ID: ".$deviceID."<br>";
                 
                
                  if($x!=$z){
                    echo "Message not sent.";
                  }
                
              }

                if($pm==1){
                  if($re!=null){
                    $r1=mysqli_query($con,"insert into present (schedule_no,instructor_id,remarks,date) values('$i','$in','$re',curdate())");
                    echo" <script>alert('Recorded successfully!')</script>";

                  }elseif($re==null)
                  {
                    $r1=mysqli_query($con,"insert into present (schedule_no,instructor_id,remarks,date) values('$i','$in','',curdate())");
                    echo" <script>alert('Recorded successfully!')</script>";

                  }else{
                    echo "  <script>alert('Recorded unsuccessfully! please try again')</script>"."recorded unsuccessfully";
                  }
                
                }else 
                {
                  echo save_image();
                }
                $resul=mysqli_query($con,"select * from schedule1 where not exists(select schedule_no from absent 
                                      where absent.schedule_no=schedule1.schedule_no and absent.date=curdate()) 
                                    and not exists(select schedule_no from present where present.schedule_no=schedule1.schedule_no
                                     and present.date=curdate())and checker_no='$n' ");
                $ll="";
                while($row = mysqli_fetch_array($resul)){
                      echo "<tr>"."<td>".$row[1]."</td>".
                      "<td>".$row[2]." ".$row[3]." to ".$row[4]." ".$row[5]."</td>".
                      "<td>".$row[12]."(".$row[11]."-".$row[6].")"."</td>".
                      "<td>".$row[7]."</center>"."</td>"."<td>".$row[8]."</td>".
                      "<td>".$row[10]."</center>"."</td>"."<td>".$row[14]."</td>".
                      "<td>".$row[15]."</center>"."</td>"."<td>".$row[16]."</td>".
                      "<td><input type='radio' name='pora' value='1' />"."</td>"."<td><input type='radio' name='pora' value='0' />"."</td>".
                      "<td><form action='checked.php' method='post'  enctype='multipart/form-data'><input type='text' class='form-control' name='remark'  />"."</td>".
                      "<td><input type='file'  name='images' /></td><td><button type='submit' class='btn btn-inverse btn-block' name='id' value=".$row[0]." >SUBMIT</button></td></form></tr>";
                      $ll=(int)$row[0];  
                }
                if($ll==null )
                {
                  echo "NO DATA AVAILABLE.";
                } 
              }

              ?>
          </tbody> 
        </table>
      </div>
    <table>
      <tr>
      </form>
      <?php $id2=$_GET['id']; ?>
        <form action="welcome2.php" method="get"> <button type="submit" class="btn btn-primary btn-block" name="id" value="<?php echo $id2; ?>"style="background-color:#577492;margin-top:5px" >Back</button></form>
               
      </tr>
    </table>

            
    </div>
  </div>
  <div class="panel-footer">All rights reserved. Copyright: © 2016 Mata's Group</div>
  </div>
</div>


  <script type='text/javascript'> Cufon.now(); </script>
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.backstretch.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  </body>
</html>



