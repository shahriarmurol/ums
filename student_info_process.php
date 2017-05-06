<?php 
    require_once('admin/pages/config.php'); //db get from header.php
    //catch data
    if(isset($_POST)){
      $sub = $_POST['sub'];
      $std_name = $_POST['std_name'];
      $f_name = $_POST['f_name'];
      $m_name = $_POST['m_name'];
      $birthdate = $_POST['birthdate'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
   	  //picture
      $picture= $_FILES['picture'];
      $picture_name ='Stuent-'.time().'-'.rand(1000,100000).'.'.pathinfo($picture['name'],PATHINFO_EXTENSION);
      $exam = $_POST['exam'];
      $std_group = $_POST['std_group'];
      $board = $_POST['board'];
      $year = $_POST['year'];
      $roll = $_POST['roll'];
      $class = $_POST['class'];
      $gpa = $_POST['point'];
      $money = $_POST['money'];
      $slipNo = $_POST['slipNo'];
      $paymentDate = $_POST['paymentDate'];
      //mysql query
      if(!empty($sub AND $std_name AND $exam AND $std_group AND $board AND $year AND $roll AND $gpa AND $money AND $slipNo)){
        $insert ="INSERT INTO std_regi_info(sub,std_name,f_name,m_name,date_of_birth,address,phone,picture,exam,study_group,board,passing_year,roll,class_div_grade,gpa,ammount,slip_no,date_of_pay) VALUES('$sub','$std_name','$f_name','$m_name','$birthdate','$address','$phone','$picture_name',' $exam','$std_group','$board','$year','$roll','$class','$gpa','$money','$slipNo','$paymentDate')";
        $insert_query=mysqli_query($DBC, $insert); //insert query
        //innser if else or nested if else
        if($insert_query){
            move_uploaded_file($picture['tmp_name'],'students_picture/'.$picture_name);
            echo "Data has ben Inserted Successfullt";
            header("Location:index.php");
        }else{
          echo "Data Insert Error!";
        }//End of the inner if else 
      }else{
        echo "Every Input Field must not Empty!";  
    }

  }
?>