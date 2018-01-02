<?php require_once('header.php'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> <small></small></h3>
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
                    <h2>Default Example <small>Users</small></h2>
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
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>payment status code  </th>
                          <th>payment status details</th>
                          <th>Modify</th>
                          <th>Delate</th>
                        </tr>
                      </thead>


                      <tbody>

        <?php
      
         require_once('dbconnect.php');

              // $sql = "INSERT INTO User (name , email , Photo_url) VALUES('shafin','shafinr23#gmail.com', 'facebook.com/shafinr23')";
              $sql = "SELECT * FROM  payment_st WHERE status = 0 ";
              

              $result = $con -> query($sql);


              // var_dump($result);



              if($result->num_rows>0){

                while ($row=$result->fetch_assoc()) {
                  // echo "name".$row["name"]."email : ".$row["email"]."<br>";

                  ?>


                        <tr>
                          <td><?php echo $row["payment_st"] ;?></td>
                          <td><?php echo $row["payment_det"] ;?></td>
                          <td>
                          <form action="edit_pay_st.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                          
                          <input type="hidden" id="last-name" value=" <?php echo $row["pay_st_id"] ;?> " name="name"  required="required" class="form-control col-md-7 col-xs-12">
                          <button type="submit" class="btn btn-success">Edit</button>

                          </form>

                          </td>
                          <td>



                          <form action="inc/pay_st_del.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                          
                          <input type="hidden" id="last-name" value=" <?php echo $row["pay_st_id"] ;?> " name="del"  required="required" class="form-control col-md-7 col-xs-12">
                          <button type="submit" class="btn btn-danger">Delete</button>

                          </form>

                          </td>
                          
                        </tr>
                       


                        <?php
                }
                }else{
                  echo "it did not";
                }
                 ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              
          
          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>

        </footer>
        <!-- /footer content -->
      </div>
    </div>
<?php require_once('footer.php'); ?>