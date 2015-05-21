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
		var language = "EN";
		var objImage;
		var img1;
		var img2;
		var title1;
		var title2;
		var curItem = 1;
		var curIndex = 0;
		var shown = [];
		
		$(function(){  				
			imgss = <?= $_SESSION['shufImages'] ?>;
			$("#survey").hide();
			$("#formIntro").hide();
			$("#survey_info").hide();
			$("#alertmsg").hide();
			$("#survey_end").hide();	
			$("#ad").hide();	

						
			img1 = imgss[curIndex];
			console.log(curIndex);
			//alert(img1);

			title1 = img1.substring(0, img1.length - 4).split("-")[0];
		
			$("#img1").attr("src", "<?=  base_url(); ?>images/"+img1);

			$("#item1").text(title1);	

			$("#current").text(curItem);

			curItem = curItem + 1;	
			curIndex = curIndex + 1;   	
	
		   	$("#it1").val(title1);
		   	
		   	bn1 = img1.substring(0, img1.length - 4).split("-")[1].split("_")[1];
			shown.push(parseInt(bn1));
			
		   	$("#blNum1").val(bn1);
			

			$("#answers").submit(function(event){
				
				data = $("#answers").serializeArray();
				var url = "<?= base_url() ?>index.php/home/createRecord";
				$.ajax({
					type: 'post',
					url: url,
					data: data,
					success : function (){
						console.log("well done my dear friend.");
					}
				}).done(function(){
	
					if(curIndex < imgss.length){
	
						img1 = imgss[curIndex];
						console.log(curIndex);

						bn1 = img1.substring(0, img1.length - 4).split("-")[1].split("_")[1];

						if (jQuery.inArray(parseInt(bn1), shown) == -1){

							shown.push(parseInt(bn1));
							
							title1 = img1.substring(0, img1.length - 4).split("-")[0];
							
							$("#img1").attr("src", "<?=  base_url(); ?>images/"+img1);
						   	
							$("#item1").text(title1);	
		
							$("#current").text(curItem);
		
							curItem = curItem + 1;
							curIndex = curIndex + 1;	   	
					
						   	$("#it1").val(title1);
						   	
						   
							
						   	$("#blNum1").val(bn1);
							
						   	$('input[name=q1_1]').attr('checked',false);
							console.log(imgss.length);
		
							$("#textinput").val("");
						}						
							
					}else{
						$("#survey").hide();
						$("#survey_end").show();
					}
										
					});
	
					event.preventDefault();

			});	

			$("#endconsent").click(function(){
				$("#consent").hide();
				$("#formIntro").show();	
			});


			$("#proceed").click(function() {
			    var empty = $("#subjectInfo").children().find("input").filter(function() {
			        return this.value === "";
			    });
			    if(empty.length) {
			    	$("#alertmsg").show();
			    }else{

			    	$("#schoolinfo").val($("#schoolInfo").val());
					$("#ageInfo").val($("#age").val());
					$("#livingInfo").val($("#livinginfo").val());

					
					var selected = $("input[type='radio'][name='gender']:checked");
				
					if (selected.length > 0) {
						$("#genderInfo").val(selected.val());
					}	

					var selected = $("input[type='radio'][name='groceryfreq']:checked");
					
					if (selected.length > 0) {
						$("#freqGroceryShopping").val(selected.val());
					}	

				
				    $("#lastShop").val($("#lastshop").val());
					
			    	
					$("#formIntro").hide();
					$("#survey_info").show();
				}
			});

			$("#start_survey").click(function(event){
				
				
				
				//alert(initData);
				event.preventDefault();
				$.ajax({
					type:'post',
					url: "<?= base_url() ?>index.php/home/getLastSubjectId",
					success: function(data){
						info = JSON.parse(data)
						
						$("#survey_info").hide();						
						
						$("#sid").val(info.sid);
						console.log(data);
						$("#survey").show();
						console.log("success!!!")
						
					}
				});	
			});
					
		  });		


		  function test(){
			  
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
                        <a href="#" data-toggle="modal" data-target="#t_and_c_m">About</a>
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
