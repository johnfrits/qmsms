<?php session_start();?>
<?php include '../../php/populate_dashboard_counter.php'; ?>
<div class="row" ng-controller = 'counterController'>
    <div style="margin: -10px 20px 20px 20px;">
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                 <a href="modules/counter/addcounter.php" target="_blank" type="button" class="btn btn-info">
                                  <span class="fa fa-plus" aria-hidden="true"></span>
                                </a>
                               <h2>Counters</h2>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Counter Id</th>
                                        <th>Name</th>
                                        <th>AssignedService</th>
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

   
