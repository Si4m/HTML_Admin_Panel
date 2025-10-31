<?php
include_once "function.php";
  headers();

   sidebar();
  $id=$_GET['v'];

  $sel ="SELECT * FROM user NATURAL JOIN role WHERE user_id='$id' ";

  $Q=mysqli_query($conn,$sel);
  $data=mysqli_fetch_assoc($Q);


  ?>


                <div class="col-md-10 content">
                    <div class="row">
                        <div class="col-md-12 breadcumb_part">
                            <div class="bread">
                                <ul>
                                    <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                                    <li><a href=""><i class="fas fa-angle-double-right"></i>Dashboard</a></li>                             
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                              <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8 card_title_part">
                                        <i class="fab fa-gg-circle"></i>View User Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="all-user.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <table class="table table-bordered table-striped table-hover custom_view_table">
                                          <tr>
                                            <td>Name</td>  
                                            <td>:</td>  
                                            <td><?php echo $data['user_name'] ?></td>  
                                          </tr>
                                          <tr>
                                            <td>Phone</td>  
                                            <td>:</td>  
                                            <td><?php echo $data['user_phone'] ?></td>  
                                          </tr>
                                          <tr>
                                            <td>Email</td>  
                                            <td>:</td>  
                                            <td><?php echo $data['user_email'] ?></td>  
                                          </tr>
                                          <tr>
                                            <td>Username</td>  
                                            <td>:</td>  
                                            <td><?php echo $data['user_username'] ?></td>  
                                          </tr>
                                          <tr>
                                            <td>Role</td>  
                                            <td>:</td>  
                                            <td><?php echo $data['role_name'] ?></td>  
                                          </tr>
                                          <tr>
                                            <td>Photo</td>  
                                            <td>:</td>  
                                            <td>
                                                <?php if($data['user_img'] !== ""){ ?>
                                                    <img height="250" src="upload/<?php echo $data['user_img']; ?>" alt=""> 
                                            <?php

                                              }else{?>
                                              <img height="250" src="upload/si.png" alt="">

                                           
                                         
                                            <?php } ?>
                                            </td>  
                                          </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="btn-group" role="group" aria-label="Button group">
                                  <button type="button" class="btn btn-sm btn-dark">Print</button>
                                  <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                                  <button type="button" class="btn btn-sm btn-dark">Excel</button>
                                </div>
                              </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   <?php
     footer();
     ?>