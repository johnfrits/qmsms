<?php session_start();?>
<?php include 'populate_dashboard.php'; ?>

<div class="row" ng-controller = 'dashboardController'>
    <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h4 class="title">Today Queue</h4>
                   <p class="category">  {{date | date:'MMMM d, y'}} </p>
                </div>
               <div class="content">
                    <div class="footer">
                        <?php today_queue(); ?>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Updated last 1 minutes ago.
                        </div>
                    </div>
                </div>
            </div>
        </div>  
         <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h4 class="title">Today Missed</h4>
                     <p class="category">  {{date | date:'MMMM d, y'}} </p>
                </div>
                <div class="content">
                    <div class="footer">
                        <?php today_missed(); ?>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Updated last 1 minutes ago.
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
<div class="row" ng-controller = 'dashboardController'>
        <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h4 class="title">Today Served</h4>
                    <p class="category">  {{date | date:'MMMM d, y'}} </p>
                </div>
                <div class="content">
                    <div class="footer">
                        <?php today_served(); ?>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Updated last 1 minutes ago.
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h4 class="title">Total Served</h4>
                    <p class="category"> As of {{date | date:'MMMM d, y'}} </p>
                </div>
               <div class="content">
                    <div class="footer">
                          <?php total_served(); ?>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Updated last 1 minutes ago.
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

   
