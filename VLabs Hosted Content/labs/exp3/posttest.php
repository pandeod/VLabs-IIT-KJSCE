<?php
    session_start();
    $_SESSION["currPage"] = 7;
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Virtual Labs </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">     
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link href="../../src/Styles.css" rel="stylesheet" />
		
		<script>
            $(document).ready(function(){
                $("#view").click(function(){
                    var count=0;
                    ////alert("clicked");
                    $("#optradio1Ans").slideDown();
                    $('html, body').animate(
                    { scrollTop: $("#optradio1Ans").offset().top-300 }, 1000);
                    $('.optradio1').attr('disabled','disabled');
                    
                    var q1 = $('input[name=optradio1]:checked').val(); 
                    
                    if(q1==null)
                    {
                        q1="";
                    }

                    $('#ansQ1').append(q1);

                    if(q1=="A")
                    {
                       count=count+1;
                    }
                    
                
                    //alert("clicked");
                    $("#optradio2Ans").slideDown();
                    $('html, body').animate({
                        scrollTop: $("#optradio2Ans").offset().top-300
                    }, 1000);
                    $('.optradio2').attr('disabled','disabled');

                    var q2 = $('input[name=optradio2]:checked').val(); 

                    if(q2==null)
                    {
                        q2="";
                    }

                    $('#ansQ2').append(q2);

                    if(q2=="C")
                    {
                       count=count+1;
                    }
                
                    //alert("clicked");
                    $("#optradio3Ans").slideDown();
                    $('html, body').animate({
                        scrollTop: $("#optradio3Ans").offset().top-300
                    }, 1000);
                    $('.optradio3').attr('disabled','disabled');

                    var q3 = $('input[name=optradio3]:checked').val();

                    if(q3==null)
                    {
                        q3="";
                    } 

                    $('#ansQ3').append(q3);

                    if(q3=="A")
                    {
                       count=count+1;
                    }
					
					
					//alert("clicked");
                    $("#optradio4Ans").slideDown();
                    $('html, body').animate({
                        scrollTop: $("#optradio4Ans").offset().top-300
                    }, 1000);
                    $('.optradio4').attr('disabled','disabled');

                    var q4 = $('input[name=optradio4]:checked').val(); 

                    if(q4==null)
                    {
                        q4="";
                    }

                    $('#ansQ4').append(q4);

                    if(q4=="A")
                    {
                       count=count+1;
                    }
					
					//alert("clicked");
                    $("#optradio5Ans").slideDown();
                    $('html, body').animate({
                        scrollTop: $("#optradio5Ans").offset().top-300
                    }, 1000);
                    $('.optradio5').attr('disabled','disabled');

                    var q5 = $('input[name=optradio5]:checked').val(); 

                    if(q5==null)
                    {
                        q5="";
                    }

                    $('#ansQ5').append(q5);

                    if(q5=="C")
                    {
                       count=count+1;
                    }
					
					//alert("clicked");
                    $("#optradio6Ans").slideDown();
                    $('html, body').animate({
                        scrollTop: $("#optradio6Ans").offset().top-300
                    }, 1000);
                    $('.optradio6').attr('disabled','disabled');

                    var q6 = $('input[name=optradio6]:checked').val(); 

                    if(q6==null)
                    {
                        q6="";
                    }

                    $('#ansQ6').append(q6);

                    if(q6=="D")
                    {
                       count=count+1;
                    }
					
					//alert("clicked");
                    $("#optradio7Ans").slideDown();
                    $('html, body').animate({
                        scrollTop: $("#optradio7Ans").offset().top-300
                    }, 1000);
                    $('.optradio7').attr('disabled','disabled');

                    var q7 = $('input[name=optradio7]:checked').val(); 

                    if(q7==null)
                    {
                        q7="";
                    }

                    $('#ansQ7').append(q7);

                    if(q7=="D")
                    {
                       count=count+1;
                    }

					

                    $("#scoreDiv").slideDown();

                    $('#score').text(count);
                   // alert(count);
                    
                });
               
            });
        </script>
    <style type="text/css">
        .label-medium {
         vertical-align: super;
          font-size: large;
       }
    </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <?php
            include '../../common/header.html';
            include 'lab_name.php';
            $lab_name = $_SESSION['lab_name'];
            $exp_name = $_SESSION['exp_name'];
            ?>
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="../explist.php" class="logo">
                    <p align="center" style="font-size:1em;">
                        <b>
                            <?php echo $lab_name?><!-- Write your lab name -->
                        </b>
                    </p>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    </a>
                    <section class="content-header">
                        <ol class="breadcrumb">
                            <li>
                                <a href="../explist.php">
                                    <i class="fa fa-dashboard"></i><?php echo $lab_name?><!-- Write your lab name -->
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php echo $exp_name?><!-- Write your experiment name -->
                                </a>
                            </li>
                            <li class="active">Post Test</li>
                        </ol>
                    </section>
                </nav>
            </header>
            <?php include 'pane.php'; ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 align="center">
                        <?php echo $exp_name?>
                        <!-- Write your experiment name -->
                    </h1>
                </section>
                <!-- Main content -->
                <section class="content" style="padding-bottom:5%;>
                    <h3 style="margin-top:5%">Post Test</h3>
                    <p class="MsoNormal" style="text-align:justify">
                        <!-- Post Test content goes here -->
              <br>
              <h3>1. Why RBFN is better than Multi layer Perceptron (MLP)?</h3>
              <input class="optradio1" type="radio" name="optradio1" value="A">
              A. Because RBFN performs classification by measuring the input’s similarity to the examples from the training set
              <br>
              <input class="optradio1" type="radio" name="optradio1" value="B">
              B. Because it is easy to solve complex network problem by RBFN than MLP
              <br>
              <input class="optradio1" type="radio" name="optradio1" value="C">
              C. Because RBFN has one single hidden layer
              <br>
              <input class="optradio1" type="radio" name="optradio1" value="D">
              D. None of these
              <br>
			  <p id="optradio1Ans" class="testAns" style="display:none;">
     <span id="ansQ1">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
	 &nbsp; &nbsp; Correct ans: A <br>Explanation : RBFN stores training sample and compares it to i/p. </span></p>
			  <br>
              
              <h3>2. If  the  difference  between  the  input  and  the  prototype  increases ,what will be the effect  on the total response?</h3>
              <input class="optradio2" type="radio" name="optradio2" value="A">
              A. The response will increase exponentially
              <br>
              <input class="optradio2" type="radio" name="optradio2" value="B">
              B. The response will increase linearly
              <br>
              <input class="optradio2" type="radio" name="optradio2" value="C">
              C. The response will fall exponentially
              <br>
              <input class="optradio2" type="radio" name="optradio2" value="D">
              D. The response will not change
              <br>
			  <p id="optradio2Ans" class="testAns" style="display:none;">
     <span id="ansQ2">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
	 &nbsp; &nbsp; Correct ans: C <br>Explanation : As the distance between the input and prototype grows, the response falls off exponentially towards 0.</span></p>
			  
              <br>

              <h3>3.What are the two stages in radial basis function network ?</h3>
              <input class="optradio3" type="radio" name="optradio3" value="A">
              A. Stage 1: establish a centre and a radii for the RBF layer.<br>
			  &emsp;&emsp;Stage 2: Discover the weights for the output layer.
              <br>
              <input class="optradio3" type="radio" name="optradio3" value="B">
              B. Stage 1: Discover the weights for the output layer.<br>
			  &emsp;&emsp;Stage 2: establish a centre and a radii for the RBF layer.
              <br>
              <input class="optradio3" type="radio" name="optradio3" value="C">
              C. Stage 1: establish a centre for the RBF layer.<br>
			  &emsp;&emsp;Stage 2: establish a radii for the RBF layer.
              <br>
              <input class="optradio3" type="radio" name="optradio3" value="D">
              D. Stage 1: establish a centre and a radii for the RBF layer.<br>
			  &emsp;&emsp;Stage 2: Discover the weights for the hidden layer.
              <br>
			  <p id="optradio3Ans" class="testAns" style="display:none;">
     <span id="ansQ3">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
	 &nbsp; &nbsp; Correct ans: A <br>Explanation : Firstly determine centre & then find out radii and weights for o/p layer. </span></p>

                      <h3>4.Inverse quadratic radial function can be defined as </h3>
                      <input type="radio" class="optradio4" name="optradio4" value="A"> A. &phi;(z)=1/(z<sup>2</sup>+r<sup>2</sup>)<sup>1/2</sup>   <br> 
                      <input type="radio" class="optradio4" name="optradio4" value="B"> B. &phi;(z)=1/(z<sup>3</sup>+r<sup>2</sup>)<sup>1/2</sup>  <br>
                      <input type="radio" class="optradio4" name="optradio4" value="C"> C. &phi;(z)=1/(z<sup>2</sup>-r<sup>2</sup>)<sup>1/2</sup>  <br>
                      <input type="radio" class="optradio4" name="optradio4" value="D"> D. &phi;(z)=(z<sup>2</sup>+r<sup>2</sup>)<sup>1/2</sup>  <br>
                      <br>
                      <p id="optradio4Ans" class="testAns" style="display:none;">
                      <span id="ansQ4">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: A <br>Explanation : It is known, &phi;(z)=1/(z<sup>2</sup>+r<sup>2</sup>)<sup>1/2</sup>  </span></p>



                      <h3>5.Choose from the following :</h3>
					  <b>(i) In RBFN , hidden layer is nonlinear but the output layer is linear.</b><br>
					  <b>(ii)In MLP , all layers are non-linear. </b><br>
                      <input type="radio" class="optradio5" name="optradio5" value="A"> A.Only ii is correct   <br>
                      <input type="radio" class="optradio5" name="optradio5" value="B"> B.Only ii is incorrect  <br>
                      <input type="radio" class="optradio5" name="optradio5" value="C"> C.Both are correct   <br>
                      <input type="radio" class="optradio5" name="optradio5" value="D"> D.Both are incorrect   <br>
                      <br>
                      <p id="optradio5Ans" class="testAns" style="display:none;">
                      <span id="ansQ5">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation : both statements are true.</span></p>



                      <h3>6.RBFN establish __________ mapping</h3>
                      <input type="radio" class="optradio6" name="optradio6" value="A"> A.curvy  <br>
                      <input type="radio" class="optradio6" name="optradio6" value="B"> B.global <br>   
                      <input type="radio" class="optradio6" name="optradio6" value="C"> C.slow <br>  
                      <input type="radio" class="optradio6" name="optradio6" value="D"> D.local <br>   
                      <br>
                      <p id="optradio6Ans" class="testAns" style="display:none;">
                      <span id="ansQ6">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: D <br>Explanation : RBFN establish local mapping , hence faster. </span></p>



                      <h3>7.Which technique/s are used to update the weights and centers of a RBFN</h3>
                      <input type="radio" class="optradio7" name="optradio7" value="A"> A.Pseudo-Inverse Technique <br>   
                      <input type="radio" class="optradio7" name="optradio7" value="B"> B.Hybrid Learning <br>   
                      <input type="radio" class="optradio7" name="optradio7" value="C"> C.backtracking   <br> 
                      <input type="radio" class="optradio7" name="optradio7" value="D"> D.both A & B  <br>
                      <br>
                      <p id="optradio7Ans" class="testAns" style="display:none;">
                      <span id="ansQ7">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: D <br>Explanation :Pseudo-Inverse Technique ,Hybrid Learning & Gradient Descent Learning can be used .  </span></p>

	 
			  <br>
              <h3 id="a1"></h3>
              <h3 id="a2"></h3>
             <h3 id="a3"></h3>
                     
					 <div>
                        <button style="float:right;" type="button" name="submit" id="view" class="btn btn-primary"> view Answers </button>     
                        <div disabled id="scoreDiv" class="label label-success label-medium" style="padding:1%;display: none; float:left;" >
                          &nbsp; Your score is : <span id="score"> </span> out of 7
                        </div>  
                      </div>
            
                 </p>
              </section>
                <!-- /.content -->
          </div>
            <?php include 'footer.html'; ?>
            <!-- /.content-wrapper -->
        </div>
    </body>
</html>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>

