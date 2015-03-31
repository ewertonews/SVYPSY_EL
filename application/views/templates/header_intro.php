<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Survey</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=  base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=  base_url(); ?>css/custom.css" rel="stylesheet">
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
	<script type="text/javascript" src="<?=  base_url(); ?>js/html2csv.js" ></script>
    <script>

		
		
		$(function(){  				
			$("#proceed").click(function(event){
				//alert("clicou proceed");
				//event.preventDefault();
			});
					
		 });		


		  function test(){
			  alert("chamou test");
			  url = "<?= base_url() ?>index.php/home/getLastSubjectId";
			  $.ajax({
					type: 'get',
					url: url,
					success : function(data){
						obj = JSON.parse(data);
						console.log(obj.subject_id);
					}
				});
		  }
		
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
               <strong class="navbar-brand">Survey</strong>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a id="ttt" href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                       
                    </li>
                    
                </ul>
                <ul class="signinup">
                     <li id="loginlogout">
                     	
                         
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        <input type="hidden" value="" id="reqresult">
    </nav>
