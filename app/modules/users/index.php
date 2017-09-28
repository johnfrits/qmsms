<?php session_start();?>
<?php include '../../php/populate_dashboard_user.php'; ?>
<div class="row" ng-controller = 'usersController'>
    <div style="margin: -10px 20px 20px 20px;">
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                  <a href="modules/users/adduser.php" target="_blank" type="button" class="btn btn-info">
                                  <span class="fa fa-plus" aria-hidden="true"></span>
                                </a>
                               <h2>Users</h2>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>User Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>AssignedCounterId</th>
                                    </thead>
                                        <?php 
                                        if(isset($_SESSION['userID'])) {
                                            $counterId = $_SESSION['userID'];
                                            if($counterId != 0){
                                                populate_table();
                                            }else{
                                                populate_admin_table();
                                            }
                                        } 
                                        ?>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   
