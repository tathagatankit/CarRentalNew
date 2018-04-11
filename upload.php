<?php
include 'includes/config.php';
if(isset($_POST['submit'])){
    $fullname= filter_input(INPUT_POST,'fullname');
    $email=filter_input(INPUT_POST,'email');
    $phone=filter_input(INPUT_POST,'phone');
    $curcompany=filter_input(INPUT_POST,'curcompany');
    $linkedin=filter_input(INPUT_POST,'linkedin');
    $github=filter_input(INPUT_POST,'github');
    $others=filter_input(INPUT_POST,'otherwebsite');
    $addition=filter_input(INPUT_POST,'addtional_info');
    $sql="INSERT INTO tblform (FullName,email,phone,curcompany,linkedin,github,others,addition) VALUES('$fullname','$email','$phone','$curcompany','$linkedin','$github','$others','$addition')";
    if($conn->query($sql)=== TRUE){
        echo 'APPLICATION SUBMITTED SUCCESSFULLY';
    }else{
        echo 'SOMETHING WENT WRONG TRY AGAIN';
    }
     
    
    $file= $_FILES['file'];
    $filename=$_FILES['file']['name'];
    $filetempname=$_FILES['file']['tmp_name'];
    $filesize=$_FILES['file']['size'];
    $fileerror=$_FILES['file']['error'];
    $filetype=$_FILES['file']['type'];
    
    $fileext=explode('.',$filename);
    $fileActualExt= strtolower(end($fileext));
    
    $allowed=array('pdf','docx');
    if(in_array($fileActualExt,$allowed)){
        if($fileerror === 0){
            if($filesize< 10000000){
                $fileNameenew= uniqid('',TRUE).".".$fileActualExt ;
                $filedest='uploads/'.$fileNameenew;
                move_uploaded_file($filetempname,$filedest);
                
                
            } else {
                echo 'file too big';
            }
            
        }else {
            echo 'error';
        }
    }
    else {
        echo 'File format should be pdf';
    }
   
    } 
    

    $conn->close();




