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
                                        echo '<a href="usercallview?userid='.$_SESSION['userID'].'" target="_blank" type="button" class="btn btn-info">
                                              <span class="fa fa-phone" aria-hidden="true"></span>
                                              </a>';
                                      } 
                                ?>
                               <h2>Todays Queue</h2>
                                <p class="Date">Last Updated: Date: <b>August 9 2017</b> -- Time: <b>7:30 AM</b></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Service</th>
                                        <th>Customer Number</th>
                                        <th>Ticket Number</th>
                                        <th>Called</th>
                                        <th>Queued Date</th>
                                    </thead>
                                        <?php populate_table();?>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!--   <table class="table table-striped table-hover" style="margin-top: 30px;">
      <thead>
        <tr>
          <th>#</th>
          <th>Column heading</th>
          <th>Column heading</th>
          <th>Column heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="info">
          <td>3</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="success">
          <td>4</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="danger">
          <td>5</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="warning">
          <td>6</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="active">
          <td>7</td>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
      </tbody>
    </table>  -->
    </div>
</div>

   
