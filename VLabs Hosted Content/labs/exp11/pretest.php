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
                        
                        <h3>1. Techniques used in 'character recognition' includes</h3>

                      <input type="radio" class="optradio1" name="optradio1" value="A"> A. optical character recognition<br>   
		              <input type="radio" class="optradio1" name="optradio1" value="B"> B. magnetic ink character recognition<br>   
		              <input type="radio" class="optradio1" name="optradio1" value="C"> C. optical mark reading<br>   
		              <input type="radio" class="optradio1" name="optradio1" value="D"> D. both a and b<br>  
		              
		              <p id="optradio1Ans" class="testAns" style="display:none;">
		              <span id="ansQ1">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
		              &nbsp; &nbsp; Correct ans: D <br>Explanation : OCR for recognising content from image, MICR for banking purposes (like cheque recognition). </span></p>
						
                        
                        <h3>2. OCR (Optical Character Recognition) uses NLP ( Natural Language Processing ).</h3>
                    
                        <input type="radio" class="optradio2" name="optradio2" value="A"> A. True<br>
                        <input type="radio" class="optradio2" name="optradio2" value="B"> B. False<br>
                        
						<p id="optradio2Ans" class="testAns" style="display:none;">
                      <span id="ansQ2">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: A <br>Explanation : OCR uses NPL as it is concerned with the interactions between computers and human (natural) languages. </span></p>		  
                        
                    
                        <h3>3. What kind of perception is used in printing?</h3>

                      <input type="radio" class="optradio3" name="optradio3" value="A"> A. Optical character recognition<br>  
                      <input type="radio" class="optradio3" name="optradio3" value="B"> B. Speech recognition<br>  
                      <input type="radio" class="optradio3" name="optradio3" value="C"> C. Simple Perception<br>  
                      <input type="radio" class="optradio3" name="optradio3" value="D"> D. None of the mentioned<br>  
                      
                      <p id="optradio3Ans" class="testAns" style="display:none;">
                      <span id="ansQ3">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: A <br>Explanation :When perception is used in printing means, It is called as optical character recognition </span></p>
						
					  
                       <h3>4.Darker squares represent ______________?</h3>
                      <input type="radio" class="optradio4" name="optradio4" value="A"> A.High Altitude <br>
                      <input type="radio" class="optradio4" name="optradio4" value="B"> B.High illumination <br>  
                      <input type="radio" class="optradio4" name="optradio4" value="C"> C.High Density <br>
                      <input type="radio" class="optradio4" name="optradio4" value="D"> D.Low illumination <br>   
                     
                      <p id="optradio4Ans" class="testAns" style="display:none;">
                      <span id="ansQ4">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation : Darker squares indicate higher density of zone pixels.</span></p>



                      <h3>5.A diagram consisting of rectangles whose area is proportional to the frequency of a variable and whose width is equal to the class interval known as _______________</h3>
                      <input type="radio" class="optradio5" name="optradio5" value="A"> A.Frequency Chart   <br>
                      <input type="radio" class="optradio5" name="optradio5" value="B"> B.Smith Chart   <br>
                      <input type="radio" class="optradio5" name="optradio5" value="C"> C.Histogram   <br>
                      <input type="radio" class="optradio5" name="optradio5" value="D"> D.None.<br>
                      
                      <p id="optradio5Ans" class="testAns" style="display:none;">
                      <span id="ansQ5">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation :it is defination of histogram</span></p>



                      <h3>6. ___________ is a boundary of object, a population of points (pixels), separating object from a background.</h3>
                      <input type="radio" class="optradio6" name="optradio6" value="A"> A.pixel  <br>  
                      <input type="radio" class="optradio6" name="optradio6" value="B"> B.contour <br>   
                      <input type="radio" class="optradio6" name="optradio6" value="C"> C.dark square <br>   
                      <input type="radio" class="optradio6" name="optradio6" value="D"> D.None.   
                      
                      <p id="optradio6Ans" class="testAns" style="display:none;">
                      <span id="ansQ6">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: B <br>Explanation : It is defination of Contour. </span></p>



                      <h3>7.What is Binarization?</h3>
                      <input type="radio" class="optradio7" name="optradio7" value="A"> A.Convert an image from any color to greyscale <br>
                      <input type="radio" class="optradio7" name="optradio7" value="B"> B.Convert an image into binary numbers <br>  
                      <input type="radio" class="optradio7" name="optradio7" value="C"> C.Convert an image from color or greyscale to black-and-white <br>  
                      <input type="radio" class="optradio7" name="optradio7" value="D"> D.Identify pixels of image <br>   
                     
                      <p id="optradio7Ans" class="testAns" style="display:none;">
                      <span id="ansQ7">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation :Binarization means Convertimg an image from color or greyscale to black-and-white separating the text (or any other desired image component) from the background</span></p>
					  
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

