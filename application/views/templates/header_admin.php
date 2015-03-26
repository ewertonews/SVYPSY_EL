<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=  base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=  base_url(); ?>css/shop-homepage.css" rel="stylesheet">
     
     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->  
    <!-- jQuery -->
    
   
    
    <script src="<?=  base_url(); ?>js/jquery.js"></script>
    <script>
    	$(function(){  	 
    		$("#logout").hide();	
   			<?php 
    	
    		session_start();
    		if (isset($_SESSION["clientname"])){
        	//
        		$clientname = $_SESSION["clientname"];
        	?>

        		var clientname = <?= json_encode($clientname); ?>;
        		$('.signinup').append("<li><div class='a cliname'>Welcome, " + clientname + "</div></li>");

        		$("#register").hide();
        		$('#login').hide();
        		$("#logout").show();
        	<?php 	
  			 } else {
  			 ?>	
        	
                $("#register").show();
				$('#login').show();
				$('#logout').hide();
			 <?php 
			 }
			 ?>       	
        	
        });   	
    </script>   

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <input type="hidden" value="" id="cliname">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <?php echo anchor('c_pages/view_admin', 'BBCardShop', array('class' => 'navbar-brand'));?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <?php echo anchor('store/index', 'Products');?>
                    </li>
                    <li>
                        <?php echo anchor('store/allcustomers', 'Customers');?>
                    </li>
                    <li>
                    	<?php echo anchor('store/allorders', 'Orders');?>
                    </li>
                </ul>
                <ul class="signinup">
                     <li id="loginlogout">
                     	<?php 
                     		
                     	?>	
                         <?php echo anchor('login/index', 'Log in', array('class' => 'a', 'id' => 'login'));?>
                         <?php echo anchor('login/logout', 'Logout', array('class' => 'a', 'id' => 'logout'));?>  
                    </li>
                    <li>
                       <!-- <a href="#">Register</a>  -->
                        <?php echo anchor('register/newclient', 'Register', array('class' => 'a', 'id' => 'register'));?> 
                                               
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>