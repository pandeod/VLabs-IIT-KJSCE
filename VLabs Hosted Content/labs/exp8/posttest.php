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
        
        
        <!-- jQuery 2.2.3 -->
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

                    if(q6=="C")
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

                    if(q7=="A")
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

  .optradio1{
                padding:20px;
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
                <section class="content" style="padding-bottom :5%;">
                    <h3 style="margin-top:5%">Post Test</h3>
                    <p class="MsoNormal" style="text-align:justify">
                        <!-- Post Test content goes here -->                        
                        <h3>1.What is the core region in a graph ?</h3><br>
                         <img src="images/fuzzy2.jpg"><br><br>

		                 <input type="radio" class="optradio1" name="optradio1" value="A"> A. (a,d)<br>
		                 <input type="radio" class="optradio1" name="optradio1" value="B"> B. [b,c]<br>
		                 <input type="radio" class="optradio1" name="optradio1" value="C"> C. [a,b)<br>
		                 <input type="radio" class="optradio1" name="optradio1" value="D"> D. [c,d]<br>
		                 <br>
		                 <p id="optradio1Ans" class="testAns" style="display:none;">
		                 <span id="ansQ1">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
		                 &nbsp; &nbsp; Correct ans: B <br>Explanation : because Degree of Membership is 1 for [b,c]. </span></p>


                        
                        <h3>2.Which of the following graphs yields the result of the operation A OR B.</h3>
                        <img src="images/ques21.PNG"><br><br>

		              <input type="radio" class="optradio2" name="optradio2" value="A"> A.<image src="images/que2a.PNG"></image><br><br>
                      <input type="radio" class="optradio2" name="optradio2" value="B"> B.<image src="images/ques2b.PNG"></image><br><br>
                      <input type="radio" class="optradio2" name="optradio2" value="C"> C.<image src="images/ques2c.PNG"></image><br><br>
                      <input type="radio" class="optradio2" name="optradio2" value="D"> D.None Of the above<br><br>
                      <br>
                      <p id="optradio2Ans" class="testAns" style="display:none;">
                      <span id="ansQ2">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: A <br>Explanation :Operation A OR B is similar to union. </span></p>



                        <h3>3.Considering a graphical representation of the `tallness' of people using its appropriate member function, which of the following combinations are true ?</h3>
                        <h4>i. TALL is usually the fuzzy subset.</h4>
                        <h4>ii. HEIGHT is usually the fuzzy set.</h4>
                        <h4>iii. PEOPLE is usually the universe of discourse.</h4><br>

                      <input type="radio" class="optradio3" name="optradio3" value="A"> A. i, ii & iii<br>
                      <input type="radio" class="optradio3" name="optradio3" value="B"> B. i & ii only <br>
                      <input type="radio" class="optradio3" name="optradio3" value="C"> C. i, iii only<br>
                      <input type="radio" class="optradio3" name="optradio3" value="D"> D. ii & iii.<br>
                      <br>
                      <p id="optradio3Ans" class="testAns" style="display:none;">
                      <span id="ansQ3">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: B <br>Explanation : HEIGHT will be the fuzzy set which will contain subsets like TALL,SHORT,etc & Universe of Discourse is range of i/p values not people.  </span></p>

                            
                        <h3>4.If A={ 0 &divide x1, 0.4 &divide x2, 1 &divide x3, 0.5 &divide x4 } and B={ 1 &divide x1,0.5 &divide x2,1 &divide x3,0.6 &divide x4 } then &#956 <sub>AuB</sub> </h3>

                        <input type="radio" class="optradio4" name="optradio4" value="A"> A. &#956 <sub>AuB</sub>={ 0.6 &divide X1, 0.8 &divide X2, 1 &divide X3, 0.2 &divide X4 } <br><br>
                        <input type="radio" class="optradio4" name="optradio4" value="B"> B. &#956 <sub>AuB</sub>={ 0.9 &divide X1, 0.7 &divide X2, 0.1 &divide X3, 1 &divide X4 }  <br><br>
                        <input type="radio" class="optradio4" name="optradio4" value="C"> C. &#956 <sub>AuB</sub>={ 1 &divide X1, 0.5 &divide X2, 1 &divide X3, 0.6 &divide X4 } <br><br>
                        <input type="radio" class="optradio4" name="optradio4" value="D"> D. &#956 <sub>AuB</sub>={ 1 &divide X1, 0.9 &divide X2, 0.6 &divide X3, 0.1 &divide X4 } <br><br>
                        <br />
					  <p id="optradio4Ans" class="testAns" style="display:none;">
                      <span id="ansQ4">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation : As it is Union,Consider max values. </span></p>


                      <h3>5.The function ________ is the asymmetrical polynomial curve open to the left, _______ is the mirror-image function that opens to the right,</h3>
                      <input type="radio" class="optradio5" name="optradio5" value="A"> A.smf,zmf  <br>
                      <input type="radio" class="optradio5" name="optradio5" value="B"> B.zmf,smf   <br>
                      <input type="radio" class="optradio5" name="optradio5" value="C"> C.pimf,smf  <br>
                      <input type="radio" class="optradio5" name="optradio5" value="D"> D.zmf,pimf  <br>
                      <br>
                      <p id="optradio5Ans" class="testAns" style="display:none;">
                      <span id="ansQ5">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: B<br>Explanation : zmf is open to left , smf is open to right. </span></p>



                      <h3>6.The ______ of two sigmoidal functions is _____ , and the ______ of two sigmoidal functions is ______ .</h3>
                      <input type="radio" class="optradio6" name="optradio6" value="A"> A.difference , sigmf , addition , psigmf <br>
                      <input type="radio" class="optradio6" name="optradio6" value="B"> B.product , psigmf , addition , sigmf   <br>
                      <input type="radio" class="optradio6" name="optradio6" value="C"> C.difference , sigmf , product , psigmf   <br>
                      <input type="radio" class="optradio6" name="optradio6" value="D"> D.addition , sigmf , difference , dsigmf  <br>
                      <br>
                      <p id="optradio6Ans" class="testAns" style="display:none;">
                      <span id="ansQ6">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: C <br>Explanation : difference --> dsigmf , product --> psigmf </span></p>



                      <h3>7.What are the following sequence of steps taken in designing a fuzzy logic machine ?</h3>
                      <input type="radio" class="optradio7" name="optradio7" value="A"> A.Fuzzification → Rule evaluation → Defuzzification <br>
                      <input type="radio" class="optradio7" name="optradio7" value="B"> B.Fuzzification → Defuzzification  <br>
                      <input type="radio" class="optradio7" name="optradio7" value="C"> C.Rule evaluation → Fuzzification → Defuzzification <br>
                      <input type="radio" class="optradio7" name="optradio7" value="D"> D.Rule evaluation → Defuzzification → Fuzzification <br>
                      <br>
                      <p id="optradio7Ans" class="testAns" style="display:none;">
                      <span id="ansQ7">Your ans: &nbsp;</span> <span style="color:#00b8e6;">
                      &nbsp; &nbsp; Correct ans: A <br>Explanation : Fuzzification → Rule evaluation → Defuzzification</span></p>


						<br>
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
            <div>
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

