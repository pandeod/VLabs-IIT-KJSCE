<?php
    session_start();
    $_SESSION["currPage"] = 3;
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Virtual Labs </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" class="viewport">
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
					
                    //alert("clicked");
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

                    if(q1=="B")
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

                    if(q2=="A")
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

                    if(q3=="B")
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

                    if(q4=="B")
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

                    if(q6=="B")
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
  .label-medium 
   {
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
                            <li class="active">Pre Test</li>
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
                <section class="content" style="padding-bottom :5%;">
                    <h3 style="margin-top:5%">Pre Test</h3>
                    <p class="MsoNormal" style="text-align:justify">
                        <!-- Pre Test content goes here -->
                        <h3>1. An associative network is </h3>
                         <input type="radio" class="optradio1" name="optradio1" value="A"> A.A neural network that contains no loop<br>   
		                 <input type="radio" class="optradio1" name="optradio1" value="B"> B.A neural network that contains feedback<br>   
		                 <input type="radio" class="optradio1" name="optradio1" value="C"> C.A neural network that has only one loop<br>   
		                 <input type="radio" class="optradio1" name="optradio1" value="D"> D.None<br>  
		                 <br>
		                 <p id="optradio1Ans" class="testAns" style="display:none;">
		                 <span id="ansQ1">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
		                 &nbsp; &nbsp; Correct ans: B <br>Explanation : associative network is equivalnet to a neural network that conatins feedback. The number of feedback paths(loops) does not have to be one. </span></p>

                       
                        
                        <h3>2. A four input neuron has weights 1,2,3 and 4. The transfer function is linear with the constant of proportionality being equal to 2. The inputs are 4,10,5 and 20 respectively. The output will be
                         </h3>
                      <input type="radio" class="optradio2" name="optradio2" value="A"> A.238<br>   
                      <input type="radio" class="optradio2" name="optradio2" value="B"> B.76<br>   
                      <input type="radio" class="optradio2" name="optradio2" value="C"> C.119 <br>   
                      <input type="radio" class="optradio2" name="optradio2" value="D"> D.None of the mentioned<br>   
                      <br>
                      <p id="optradio2Ans" class="testAns" style="display:none;">
                      <span id="ansQ2">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: A <br>Explanation : The output is found by multipling the weights with their respective inputs, summing the results and multipling with the trasfer function.<br> Therefore:
Output = 2 * (1*4 + 2*10 + 3*5 + 4*20) = 238</span></p>
                    
                        

                        <h3>3. Ability to learn how to do tasks based on the data given for training or initial experience</h3>
                       <input type="radio" class="optradio3" name="optradio3" value="A"> A.Self organization<br>   
                      <input type="radio" class="optradio3" name="optradio3" value="B"> B.Adaptive learning<br>   
                      <input type="radio" class="optradio3" name="optradio3" value="C"> C.Fault tolerance<br>   
                      <input type="radio" class="optradio3" name="optradio3" value="D"> D.Robustness<br>   
                      <br>
                      <p id="optradio3Ans" class="testAns" style="display:none;">
                      <span id="ansQ3">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: B</span></p>
                   
                    
                            
                      <h3>4. A neural network can answer</h3>
                      <input type="radio" class="optradio4" name="optradio4" value="A"> A.For loop questions<br>   
                      <input type="radio" class="optradio4" name="optradio4" value="B"> B.what-if questions<br>   
                      <input type="radio" class="optradio4" name="optradio4" value="C"> C.IF-then else questions<br>   
                      <input type="radio" class="optradio4" name="optradio4" value="D"> D.None of these<br>   
                      <br>
                      <p id="optradio4Ans" class="testAns" style="display:none;">
                      <span id="ansQ4">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: B <br>Explanation : Neural Network can answer to what will happen if this has happened. </span></p>

                      <h3>5.Correlation learning rule states that </h3>
                      <input type="radio" class="optradio5" name="optradio5" value="A"> A.if Di is the desired response due to X, the corresponding weight increase is exponential to their product. <br> 
                      <input type="radio" class="optradio5" name="optradio5" value="B"> B.if Di is the desired input due, the corresponding weight increase is proportional to their product.  <br> 
                      <input type="radio" class="optradio5" name="optradio5" value="C"> C.if Di is the desired response due to X, the corresponding weight increase is proportional to their product.   <br>
                      <input type="radio" class="optradio5" name="optradio5" value="D"> D.none of these. <br>  
                      <br>
                      <p id="optradio5Ans" class="testAns" style="display:none;">
                      <span id="ansQ5">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation : It is statement of correlation learning rule</span></p>



                      <h3>6.What is difference between Hebbian & Correlation learning rule ?</h3>
                      <input type="radio" class="optradio6" name="optradio6" value="A"> A.They are based on different principles <br>   
                      <input type="radio" class="optradio6" name="optradio6" value="B"> B.They falls under different learning category <br>  
                      <input type="radio" class="optradio6" name="optradio6" value="C"> C.There is huge difference in operational speed <br>   
                      <input type="radio" class="optradio6" name="optradio6" value="D"> D.None of these.   
                      <br>
                      <p id="optradio6Ans" class="testAns" style="display:none;">
                      <span id="ansQ6">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: B <br>Explanation : Hebbian learning rule --> Unsupervised  & Correlation learning rule --> Supervised  </span></p>
					  
                        <br>
                      <div>
                         <button style="float:right;" type="button" name="submit" id="view" class="btn btn-primary"> view Answers </button>     
                         <div disabled id="scoreDiv" class="label label-success label-medium" style="padding:1%;display: none; float:left;" >
                          &nbsp; Your score is : <span id="score"> </span> out of 6
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

