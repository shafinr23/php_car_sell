<?php require_once('header.php'); ?>

<?php


if(!isset($_SESSION)) 
    { 
        session_start();
    }

             if($_POST['name_2'] ){
              $id = $_POST['name_2'];
             require_once('dbconnect.php');
              
               $sql = "SELECT * FROM `customer_preference` 
               JOIN 
              car_featuers
              ON customer_preference.car_features_id=car_featuers.car_feature_id

               JOIN
              customers 
              ON customer_preference.customer_id=customers.id 


              WHERE customer_preference.customer_preference_id=$id

              ";
                  
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Car model code *</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control" data-dpmaxz-eid="33" name="model_code" id="model_code">
                                       <option value="<?php echo $row['car_features_id']; ?>" ><?php echo $row['car_featuer_dis']; ?></option>    
                                       <?php
                                              $sql_2="SELECT * FROM `car_featuers`"; 
                                                 $result_2 = $con -> query($sql_2);
                                               if($result_2->num_rows>0){

                                            while ($row_2=$result_2->fetch_assoc()) {
                                              // echo "name".$row["name"]."email : ".$row["email"]."<br>";
                                                  ?>

                                                  <option value="<?php echo $row_2['car_feature_id']; ?>"><?php echo $row_2['car_featuer_dis']; ?></option>

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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Car Manufacturer short name *</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="select2_group form-control" data-dpmaxz-eid="33" name="menu_code" id="menu_code" >



                                          <option value="<?php echo $row['car_features_id']; ?>" ><?php echo $row['name']; ?></option>




                                            <?php
                                              $sql_1="SELECT * FROM `customers`"; 
                                                 $result_1 = $con -> query($sql_1);
                                               if($result_1->num_rows>0){

                                            while ($row_1=$result_1->fetch_assoc()) {
                                              // echo "name".$row["name"]."email : ".$row["email"]."<br>";
                                                  ?>

                                                  <option value="<?php echo $row_1['id']; ?>"><?php echo $row_1['name']; ?></option>

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">customer preference des <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ask_price" value="<?php  echo $row["customer_preference_des"] ; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      


                     

                      

                      <div class="form-group">
                       
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="hidden" id="last-name" value=" <?php echo $row["customer_preference_id"] ;?> " name="car_sell_id"  required="required" class="form-control col-md-7 col-xs-12">
                          
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