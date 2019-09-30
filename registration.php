<div class="container">
    <h2 style="text-align: center;">Create a New Account</h2>
    
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
    
    <!-- Registration form -->
    <div class="regisFrm">
        <form action="" method="post">
            <label class="col-md-4 control-label" ></label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" name="first_name" placeholder="Enter Name" required ="" class="form-control">
            </div>
            </div>
            </div><br><br>
             <div class="form-group">
            <label class="col-md-4 control-label"></label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>  
            <input type="email"  name="email" placeholder="Enter Email" required="" class="form-control" >
            </div>
            </div>
            </div><br><br>
             <div class="form-group">
            <label class="col-md-4 control-label"></label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>   <input type="text"  name="department" placeholder="Enter Department" required="" class="form-control" >
            </div>
            </div>
            </div><br><br>
            <div class="form-group">
            <label class="col-md-4 control-label"></label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>    
           <input type="password"  name="password" placeholder="Enter Password" required="" class="form-control" >
            </div>
            </div>
            </div><br><br>
             <div class="form-group">
            <label class="col-md-4 control-label"></label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>    
           <input type="password"  name="conf_password" placeholder="Enter Confirm Password" required="" class="form-control" >
           <div class="send-button">
           </div>
           </div>
           <br>
            <input type="submit" name="signupSubmit" value="Create">
                <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p>
            </div>
            </form>
    </div>
</div>