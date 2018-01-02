<?php require_once('header.php'); 

if(!isset($_SESSION)) 
    { 
        session_start();
    }

?>
<?php
 require_once('dbconnect.php');?>

 



<!-- /top navigation -->

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>

                <?php if (isset($_SESSION["success"]))
                            { echo $_SESSION["success"]; } 
                      else
                      {
                        if (isset($_SESSION["error"])){ echo $_SESSION["error"]; }
                      }
                            ?>
             
                  
                </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Car For Sell  <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="inc/add_car_for_sell_inc.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                   
                      <div class="form-group">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Car Manufacturer short name *</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="select2_group form-control" data-dpmaxz-eid="33" name="menu_code" id="menu_code" >
                                          <option>Choose option</option>
                                            <?php
                                              $sql="SELECT * FROM `car_manufacture` ORDER BY `car_manu_sn` ASC"; 
                                                 $result = $con -> query($sql);
                                               if($result->num_rows>0){

                                            while ($row=$result->fetch_assoc()) {
                                              // echo "name".$row["name"]."email : ".$row["email"]."<br>";
                                                  ?>

                                                  <option value="<?php echo $row['car_man_id']; ?>"><?php echo $row['car_manu_sn']; ?></option>

                                                  <?php
                                               }
                                                }else{
                                                  echo "it did not";
                                                }
                                               ?>




                                        </select>
                            </div>
                          </div>
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Car model code *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control" data-dpmaxz-eid="33" name="menu_code" id="model_code">
                                      <option>Choose option</option>
                                         <?php
                                              $sql="SELECT * FROM `car_models` ORDER BY `car_model_code` ASC"; 
                                                 $result = $con -> query($sql);
                                               if($result->num_rows>0){

                                            while ($row=$result->fetch_assoc()) {
                                              // echo "name".$row["name"]."email : ".$row["email"]."<br>";
                                                  ?>

                                                  <option value="<?php echo $row['car_model_id']; ?>"><?php echo $row['car_model_code']; ?></option>

                                                  <?php
                                               }
                                                }else{
                                                  echo "it did not";
                                                }
                 ?>
                                    </select>                            
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">vahical cat code *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control" data-dpmaxz-eid="33" name="vehi_code" id="vehi_code" >
                                          <option>Choose option</option>
                                          <?php
                                              $sql="SELECT * FROM `vehicle_cat` ORDER BY `vehicle_cat_code` ASC"; 
                                                 $result = $con -> query($sql);
                                               if($result->num_rows>0){

                                            while ($row=$result->fetch_assoc()) {
                                              // echo "name".$row["name"]."email : ".$row["email"]."<br>";
                                                  ?>

                                                  <option value="<?php echo $row['vehicle_id']; ?>"><?php echo $row['vehicle_cat_code']; ?></option>

                                                  <?php
                                               }
                                                }else{
                                                  echo "it did not";
                                                }
                 ?>
                                    </select>                            
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">asking price<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ask_price" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">current millage<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="cur_mil" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">date acquired<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" placeholder="dd-mm-yyyy" required="required" name="date_acq" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">registration year * <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  placeholder="dd-mm-yyyy" required="required" name="reg_yr" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Other car details   <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="oth_det" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      </div>
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>

           
        <!-- /page content -->


<!-- footer content -->
<?php require_once('footer.php'); ?>
       
