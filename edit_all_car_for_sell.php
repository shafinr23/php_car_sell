<?php require_once('header.php'); ?>

<?php


if(!isset($_SESSION)) 
    { 
        session_start();
    }

             if($_POST['name'] ){
             require_once('dbconnect.php');
              $id = $_POST['name'];
               $sql = "SELECT * FROM car_for_sale

                JOIN 
              car_manufacture
              ON car_for_sale.car_man_id=car_manufacture.car_man_id

               JOIN
              vehicle_cat 
              ON car_for_sale.vehicle_id=vehicle_cat.vehicle_id 

               JOIN
              car_models 
              ON car_for_sale.car_model_code=car_models.car_model_id 

                WHERE car_for_sale.car_sell_id=$id";
                  
              $result = $con -> query($sql);

              if($result->num_rows>0){

                while ($row=$result->fetch_assoc()) {
                  // echo "name".$row["name"]."email : ".$row["email"]."<br>";
            
            ?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>

                
                  
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
                    <h2>Role Update <small>Role setting</small></h2>
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
                    <form action="inc/all_car_for_sell_update.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">







                    	<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Car Manufacturer short name *</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="select2_group form-control" data-dpmaxz-eid="33" name="menu_code" id="menu_code" >



                                          <option value="<?php echo $row['car_man_id']; ?>" ><?php echo $row['car_manu_sn']; ?></option>




                                            <?php
                                              $sql_1="SELECT * FROM `car_manufacture` ORDER BY `car_manu_sn` ASC"; 
                                                 $result_1 = $con -> query($sql_1);
                                               if($result_1->num_rows>0){

                                            while ($row_1=$result_1->fetch_assoc()) {
                                              // echo "name".$row["name"]."email : ".$row["email"]."<br>";
                                                  ?>

                                                  <option value="<?php echo $row_1['car_man_id']; ?>"><?php echo $row_1['car_manu_sn']; ?></option>

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
                                    <select class="select2_group form-control" data-dpmaxz-eid="33" name="model_code" id="model_code">
                                       <option value="<?php echo $row['car_model_code']; ?>" ><?php echo $row['car_model_code']; ?></option>    
                                       <?php
                                              $sql_2="SELECT * FROM `car_models` ORDER BY `car_model_code` ASC"; 
                                                 $result_2 = $con -> query($sql_2);
                                               if($result_2->num_rows>0){

                                            while ($row_2=$result_2->fetch_assoc()) {
                                              // echo "name".$row["name"]."email : ".$row["email"]."<br>";
                                                  ?>

                                                  <option value="<?php echo $row_2['car_model_id']; ?>"><?php echo $row_2['car_model_code']; ?></option>

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
                                         <option value="<?php echo $row['vehicle_id']; ?>" ><?php echo $row['vehicle_cat_code']; ?></option>   
                                          <?php
                                              $sql_3="SELECT * FROM `vehicle_cat` ORDER BY `vehicle_cat_code` ASC"; 
                                                 $result_3 = $con -> query($sql_3);
                                               if($result_3->num_rows>0){

                                            while ($row_3=$result_3->fetch_assoc()) {
                                       
                                                  ?>

                                                  <option value="<?php echo $row_3['vehicle_id']; ?>"><?php echo $row_3['vehicle_cat_code']; ?></option>

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Add Insurance Company ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ask_price" value="<?php  echo $row["asking_prize"] ; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Insurance Company name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="cur_mil" value="<?php  echo $row["current_mile"] ; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Insurance Company name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="date_acq" value="<?php  echo $row["date_acquire"] ; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Insurance Company details <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="reg_yr" value="<?php  echo $row["reg_year"] ; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Insurance Company details <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="oth_det" value="<?php  echo $row["oth_det"] ; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                       
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="hidden" id="last-name" value=" <?php echo $row["car_sell_id"] ;?> " name="car_sell_id"  required="required" class="form-control col-md-7 col-xs-12">
                          
                        </div>
                      </div>

                     
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit"  class="btn btn-success">Update</button>
                          
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
               



              
                    <?php  }           
                      }else{
                          echo "it did not";
                      }
                  }
     ?>
     <?php require_once('footer.php'); ?>