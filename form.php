<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>Application Submission</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            .container{
                width: 50%;
            }
  
        </style>

    </head>
    
    <body>
        <?php
    include 'includes/header.php';
    ?>
 
        
        <div class="jumbotron"></div>
        <div class="container">
            <div class="page-header">
                <h4 style=>SUBMIT YOUR APPLICATION</h4>
            </div>
        
            
            <form class="form-horizontal" action="upload.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-sm-2" for="file">Resume/CV<span>*</span></label>        
                <input type="file" name="file" class="btn btn-primary glyphicon glyphicon-paperclip" /><br><br>
                </div>
                                          
            
               <div class="form-group">
                   
                    <label class="control-label col-sm-2">Full Name<span>*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="fullname" required><br><br>
                    </div>
                </div>
              
                 <div class="form-group">
                     <label class="control-label col-sm-2">Email<span>*</span></label>
                <div class="col-sm-10">
                    <input type="email" name="email" required><br><br>
                 </div>
                 </div>
                 <div class="form-group">
                     <label class="control-label col-sm-2">Phone<span>*</span></label>
                  <div class="col-sm-10">
                      <input type="text" name="phone" required><br><br>
                 </div>
                 </div>
                
                  <div class="form-group">
                 <label class="control-label col-sm-2">Current Company<span>*</span></label>
                 <div class="col-sm-10">
                     <input type="text" name="curcompany" required><br><br>
                  </div>
                  </div>
                 
               
                
                    <h4>LINKS</h4>
                     <div class="form-group">
                         <label class="control-label col-sm-2">LinkedIn</label>
                         <div class="col-sm-10">
                    <input type="text" name="linkedin"><br><br>
                     </div>
                     </div>
                     <div class="form-group">
                
                         <label class="control-label col-sm-2">Github URL</label>
                         <div class="col-sm-10">
                 <input type="text" name="github"><br><br>
                     </div>
                     </div>
                  <div class="form-group">
                
                      <label class="control-label col-sm-2">Other Website</label>
                 <div class="col-sm-10">
                 <input type="text" name="otherwebsite" ></br>
                  </div>
                  </div>
                  
              
                    <h4>
                        ADDITIONAL INFORMATION
                    </h4>
                     <div class="form-group">
                         <div class="col-sm-12">
                     
                         <textarea name="addtional_info" rows="4"></textarea><br><br>
                         </div>
                     </div>
                     <div>
                         <input  type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit Your Application">
                     </div>
                     
                    
            </form>
        </div>
        
        
        
                       
        
        
                
       
        
    </body>
</html>
