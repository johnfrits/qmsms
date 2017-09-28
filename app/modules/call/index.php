<?php session_start();?>
<?php include '../../php/populate_call_queue.php'; ?>
<div class="row" ng-controller = 'callController'>
    <div style="margin: -10px 20px 20px 20px;">
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <?php 
                                    if(isset($_SESSION['userID'])) {
                                        echo '<a href="usercallview?userid='.$_SESSION['userID']. '&counterid='.$_SESSION['AssignedCounterID'] .'" target="_blank"   type="button" class="btn btn-info">
                                              <span class="fa fa-phone" aria-hidden="true"></span>
                                              </a>';
                                      } 
                                ?>
                               <h2>Todays Queue</h2>
                               <p> Last Updated: {{date | date:'medium'}} </p>  
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Service</th>
                                        <th>Customer Number</th>
                                        <th>Ticket Number</th>
                                        <th>Status</th>
                                        <th>Queued Date</th>
                                    </thead>
                                        <?php
                                            if(isset($_SESSION['userID'])) {
                                                $userID = $_SESSION['userID'];

                                                if($userID != 0)
                                                    populate_table();
                                                else
                                                    populate_admin_table();
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

   
