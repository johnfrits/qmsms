<?php session_start();?>
<?php include '../../php/populate_dashboard_department.php'; ?>
<div class="row" ng-controller="departmentController">
    <div style="margin: -10px 20px 20px 20px;">
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">    
                                <a href="modules/department/add_department.php" target="_blank" type="button" class="btn btn-info">
                                  <span class="fa fa-plus" aria-hidden="true"></span>
                                   Add
                                </a>
                               <h2>Departments</h2>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Date Created</th>
                                        <th>Edit</th>
                                    </thead>
                                    <?php populate_table();?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>