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

                    if(q1=="D")
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

                    if(q4=="C")
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

                    if(q5=="B")
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

                    if(q7=="C")
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
            <br>
            <h3>1.If A={ 0 &divide x1,0.4 &divide x2,1 &divide x3,0.5 &divide x4 } and B={ 1 &divide x1,0.5 &divide x2,1 &divide x3,0.6 &divide x4 } then &#956 <sub>A &#8745; B</sub> </h3>

		                 <input type="radio" class="optradio1" name="optradio1" value="A"> A.&#956 <sub>A&#8745;B</sub>={ 0.6 &divide X1, 0.8 &divide X2, 1 &divide X3, 0.2 &divide X4 } <br>   
		                 <input type="radio" class="optradio1" name="optradio1" value="B"> B.&#956 <sub>A&#8745;B</sub>={ 0 &divide X1, 0.5 &divide X2, 1 &divide X3, 0.6 &divide X4 }  <br>   
		                 <input type="radio" class="optradio1" name="optradio1" value="C"> C.&#956 <sub>A&#8745;B</sub>={ 1 &divide X1, 0.5 &divide X2, 1 &divide X3, 0.6 &divide X4 } <br>  
		                 <input type="radio" class="optradio1" name="optradio1" value="D"> D.&#956 <sub>A&#8745;B</sub>={ 0 &divide X1, 0.4 &divide X2, 1 &divide X3, 0.5 &divide X4 } <br>  
		                 <br>
		                 <p id="optradio1Ans" class="testAns" style="display:none;">
		                 <span id="ansQ1">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
		                 &nbsp; &nbsp; Correct ans: D <br>Explanation : As it is Intersection , Consider min values. </span></p>
			
            <h3>2. What is the main difference between probability and fuzzy logic ?</h3><br>
			
                      <input type="radio" class="optradio2" name="optradio2" value="A"> A.Fuzzy logic is probability in disguise.<br>   
                      <input type="radio" class="optradio2" name="optradio2" value="B"> B.Fuzzy logic is the likelihood of an event occuring and probablility is the extent of that event.<br>   
                      <input type="radio" class="optradio2" name="optradio2" value="C"> C.Probability is ADDITIVE, meaning all its values must add up to one.<br>   
                      <input type="radio" class="optradio2" name="optradio2" value="D"> D.Probability dissipates with decreasing information.<br>   
                      <br>
                      <p id="optradio2Ans" class="testAns" style="display:none;">
                      <span id="ansQ2">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation : Total of Probability of each case of event is 1. </span></p>
			
              
			<h3>3.The bounded sum (A &#8853; B) of two fuzzy set A<sub>&#816;</sub> and BA<sub>&#816;</sub> is defined as </h3>

                      <input type="radio" class="optradio3" name="optradio3" value="A"> A.&#956; <sub>A<sub>&#816;</sub> &#8853; B<sub>&#816;</sub></sub>(x)=min{1,&#956; <sub>A</sub>(x) + &#956; <sub>B</sub>(x)}<br>   
                      <input type="radio" class="optradio3" name="optradio3" value="B"> B.&#956; <sub>A<sub>&#816;</sub> &#8857; B<sub>&#816;</sub></sub>(x)=max{0,&#956; <sub>A</sub>(x) + &#956; <sub>B</sub>(x)} <br>   
                      <input type="radio" class="optradio3" name="optradio3" value="C"> C.&#956; <sub>A<sub>&#816;</sub> + B<sub>&#816;</sub></sub>(x)=&#956; <sub>A<sub>&#816;</sub></sub>(x)+&#956; <sub>B<sub>&#816;</sub></sub>(x)-&#956; <sub>A<sub>&#816;</sub></sub>(x).&#956; <sub>B<sub>&#816;</sub></sub>(x)<br>
                      <input type="radio" class="optradio3" name="optradio3" value="D"> D.None of these<br>   
                      <br>
                      <p id="optradio3Ans" class="testAns" style="display:none;">
                      <span id="ansQ3">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: A <br>Explanation :It is known, &#956; <sub>A<sub>&#816;</sub> &#8853; B<sub>&#816;</sub></sub>(x)=min{1,&#956; <sub>A</sub>(x) + &#956; <sub>B</sub>(x)} </span></p>
			
			<h3>4.commonly used defuzzifying methods are:</h3>
                    i> Centroid of area <br>
                    ii> Bisector of area <br>
                    iii> Mean of maximum?<br>
                      <input type="radio" class="optradio4" name="optradio4" value="A"> A.Only i <br>   
                      <input type="radio" class="optradio4" name="optradio4" value="B"> B.Only iii <br>   
                      <input type="radio" class="optradio4" name="optradio4" value="C"> C.all i,ii,iii <br>
                      <input type="radio" class="optradio4" name="optradio4" value="D"> D.None.<br>
                      <br>
                      <p id="optradio4Ans" class="testAns" style="display:none;">
                      <span id="ansQ4">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation : see methods given theory part </span></p>



                      <h3>5.Drawback of center of sums</h3>
                      <input type="radio" class="optradio5" name="optradio5" value="A"> A.It is complex<br>   
                      <input type="radio" class="optradio5" name="optradio5" value="B"> B.the intersecting areas are added twice<br>   
                      <input type="radio" class="optradio5" name="optradio5" value="C"> C.Not suitable for small intersecting area. <br>
                      <input type="radio" class="optradio5" name="optradio5" value="D"> D.All of these.<br>   
                
                      <br>
                      <p id="optradio5Ans" class="testAns" style="display:none;">
                      <span id="ansQ5">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: B<br>Explanation : Drawback of center of sums is that the intersecting areas are added twice </span></p>



                      <h3>6.When Center of largest area method can be used..</h3>
                      <input type="radio" class="optradio6" name="optradio6" value="A"> A.whent the output of at least two convex fuzzy subsets which are overlapping <br> 
                      <input type="radio" class="optradio6" name="optradio6" value="B"> B.whent the output of at least two Concave fuzzy subsets which are <b>NOT</b> overlapping <br>
                      <input type="radio" class="optradio6" name="optradio6" value="C"> C.whent the output of three convex fuzzy subsets which are <b>NOT</b> overlapping <br>
                      <input type="radio" class="optradio6" name="optradio6" value="D"> D.whent the output of at least two convex fuzzy subsets which are <b>NOT</b> overlapping <br>   
                      <br>
                      <p id="optradio6Ans" class="testAns" style="display:none;">
                      <span id="ansQ6">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: D <br>Explanation : graph should be convex and NOT overlapping</span></p>



                      <h3>7.Output of ___________ is precise quantity</h3>
                      <input type="radio" class="optradio7" name="optradio7" value="A"> A.Activation Function <br>
                      <input type="radio" class="optradio7" name="optradio7" value="B"> B.fuzzification <br>
                      <input type="radio" class="optradio7" name="optradio7" value="C"> C.Defuzzification  <br> 
                      <input type="radio" class="optradio7" name="optradio7" value="D"> D.None  <br>
                      <br>
                      <p id="optradio7Ans" class="testAns" style="display:none;">
                      <span id="ansQ7">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation : o/p of Defuzzification are crisp values.  </span></p>

					  
                      <br><br>
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

