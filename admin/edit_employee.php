<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Edit Employee</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Edit Employee
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter Name</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->emp_name;?>"name="emp_name" />
                                        </div>
                                 <div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="email"value="<?php echo $fetch->emp_email;?>" name="emp_email"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Mobile Number</label>
                                            <input class="form-control" type="number"value="<?php echo $fetch->emp_no;?>" name="emp_no"/>
                                        </div>
                                            <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3" value="<?php echo $fetch->emp_address;?>"name="emp_address"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>Enter Country</label>
                                        <select class="form-control" name="c_id" required>
                                            <option>----- Select Country -----</option>
                                            <?php
                                            foreach($arr_country as $c)
                                            {
                                            ?>
                                            <option value="<?php echo $c->c_id;?>"><?php echo $c->c_name;?></option>
                                            <?php		
                                            }
                                            ?>
                                        </select>
                                    
                                        <div class="form-group">
                                            <label>Employee Image</label>
                                            <input class="form-control" type="file"value="<?php echo $fetch->img;?>" name="img"/>
                                        </div>
                                        <button type="submit"name="submit" class="btn btn-info">Submit </button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
    </div>
    </div>
     <?php
        include_once('footer.php');
     ?>