
<!doctype html>
<html lang="en">
	<head>
	    <title>QMSMS | Call View</title>
	    <meta charset="utf-8" />
	    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
	    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="usercall.js" type="text/javascript"></script>
		<style type="text/css">
			.wrapper{
				padding-bottom: 50px;
				width: 429px;
				border-style: solid;
			}
			#nowserving{
				font-weight: bold;
				color: red;
				clear: both;

			}
			#buttons{
				padding-left: 30px;
			}
			#onqueue{
				color: blue;
				padding-left: 10px;
				float: left;
				clear: none;
			}	
			#onqueueval{
				margin-top: -5px;
				margin-left: -10px;
			}
			#served{
				color: green;
				padding-right: 30px;
				float: right;
				clear: none;
			}	
			#servedval{
				margin-top: -5px;
				margin-left: -2px;
			}
			#content{
				padding-top: 10px;
				padding-bottom: 20px;
				clear: both;
			}
		</style>
	</head>
	<body>
	 	<div class="wrapper">	
	 		<h1 class="text-center">QMSMS</h1>
	 		<h2 id="name" class="text-center">COUNTER</h2>
		    <form class="form-signin" method="POST"> 
		    	<div class="items">
			    	<div id="onqueue">
			    		<h4>ON QUEUE</h4>
			     		<h3 id="onqueueval" class="text-center">0</h3>     
			    	</div>
			    	<div id="served">
			    		<h4>SERVED</h4>
			     	<h3 id="servedval" class="text-center">0</h3>  
			    	</div>
		    	</div>
		     	<div id="content">
			     	<h1  class="text-center">NOW SERVING</h1>
			    	<h1 id="nowserving" class="text-center blinker">0</h1>
			    	<h3 id="times" class="text-center">3 TIME(S)</h3>
		     	</div>
		    	<div id="buttons">
		    		<a style="width: 180px;" id="callagain" class="btn btn-primary btn-lg">
		    		 <i class="fa fa-phone fa-2x pull-left"></i>CALL <br> AGAIN </a>
			    	<a style="width: 180px;" id="callnext" class="btn btn-primary btn-lg">
			    	  <i class="fa fa-forward fa-2x pull-left"></i> CALL <br> NEXT</a>

		    	</div>

		    </form>
		</div>
	</body>
</html>

