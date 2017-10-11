<?php session_start();?>
<?php include '../../php/populate_dashboard_service.php'; ?>
<div class="row" ng-controller="servicesController">
    <div style="margin: -10px 20px 20px 20px;">
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <a href="modules/services/addservices.php" target="_blank" type="button" class="btn btn-info">
                                  <span class="fa fa-plus" aria-hidden="true"></span>
                                  Add Service
                                </a>
                               <h2>Services</h2>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Service Id</th>
                                        <th>Department</th>
                                        <th>Service Name</th>
                                        <th>Default Number</th>
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