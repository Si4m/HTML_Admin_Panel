<?php
include_once "function.php";
  headers();

   sidebar();


  ?>

                <div class="col-md-10 content">
                    <div class="row">
                        <div class="col-md-12 breadcumb_part">
                            <div class="bread">
                                <ul>
                                    <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                                    <li><a href=""><i class="fas fa-angle-double-right"></i>User</a></li>                             
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
                                        <i class="fab fa-gg-circle"></i>All User Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="add-user.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add User</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <table class="table table-bordered table-striped table-hover custom_table">
                                  <thead class="table-dark">
                                    <tr>
                                      <th>SL</th>
                                      <th>Name</th>
                                      <th>Phone</th>
                                      <th>Email</th>
                                      <th>Username</th>
                                      <th>Photo</th>
                                      <th>Roll</th>
                                      <th>Manage</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                       $sel= "SELECT * FROM user ORDER BY user_id DESC ";
                                       $QR = mysqli_query($conn,$sel);
                                        $i=1;
                                       while($data= mysqli_fetch_array($QR)){
                                  

                                    ?>
                                    
                                    <tr>
                                      <td> <?php echo $i++;  ?></td>
                                      <td> <?php echo $data['user_name'];  ?></td>
                                      <td> <?php echo $data['user_phone'];  ?></td>
                                      <td><?php echo $data['user_email'];  ?> </td>
                                      <td> <?php echo $data['user_username'];  ?></td>
                                      <td>
                                            <?php if($data['user_img'] !== ""){ ?>
                                                    <img height="50" src="upload/<?php echo $data['user_img']; ?>" alt=""> 
                                            <?php

                                              }else{?>
                                              <img height="50" src="upload/si.png" alt="">

                                           
                                         
                                            <?php } ?>
                                      
                                     
                                    
                                        </td>
                                      <td> ---</td>


                                      <td>
                                          <div class="btn-group btn_group_manage" role="group">
                                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#">View</a></li>
                                              <li><a class="dropdown-item" href="#">Edit</a></li>
                                              <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                          </div>
                                      </td>
                                    </tr>
                                    
                                    <?php
                                       }
                                       ?>

                                  </tbody>
                                </table>
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