<?php
if(isset($_SESSION['aid']))
{
}
else
{
	echo "<script>
		window.location='index';
	</script>";
}
    include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Edit Product</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          Edit Product
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <label>Enter Category</label>
                                        <select class="form-control" name="cate_id"value="<?php echo $fetch->cate_id;?>" required>
                                            <option>----- Select Category -----</option>
                                            <?php
                                            foreach($arr_categories as $c)
                                            {
                                            ?>
                                            <option value="<?php echo $c->cate_id?>"><?php echo $c->cate_name;?></option>
                                            <?php		
                                            }
                                            ?>
                                        </select>
                                        </div>
                                 <div class="form-group">
                                            <label>Enter Product Name</label>
                                            <input class="form-control" type="text"value="<?php echo $fetch->prod_name;?>" name="prod_name"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Product Description</label>
                                            <input class="form-control" type="text"value="<?php echo $fetch->sort_desc;?>"name="sort_desc" />
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Product Image</label><img src="">
                                            <input class="form-control" type="file" value="<?php echo $fetch->img;?>"name="img" />
                                        </div>
                                        <div class="form-group">
                                            <label>Main Price</label>
                                            <input class="form-control" type="number"value="<?php echo $fetch->main_price;?>" name="main_price" />
                                        </div>
                                        <div class="form-group">
                                            <label>Discount Price</label>
                                            <input class="form-control" type="number"value="<?php echo $fetch->disc_price;?>" name="disc_price" />
                                        </div>
                                 
                                        <button type="submit"name="submit" class="btn btn-dark" >Submit </button>

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