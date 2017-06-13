var weightMatrix = [[1,3],[1,2],[5,1]];
var inputs = [[2,2],[2.5,2.5],[3,2],[0.5,1],[1,0.5],[1,4],[2,4.5]];
var clusterCenterDenotions=[['x','#004c64'],['+','#a10900'],['<>','#0d6032']];
var learningRate=0.2;
var sel = 1;
var timers=[];
var simulationStart=false;
var points = [];
var clusterCenters = [];
var board;

function displayWeightsInNeuralNet(lrString){
    for (var i = 0; i < weightMatrix.length; i++) {
        for (var j = 0; j < weightMatrix[i].length; j++) {
            $("#"+lrString+"MainOuterDiv tspan.w" + (i + 1) + "" + (j + 1) + "text").text(weightMatrix[i][j]);
        }
    }
}

function resetSimulation(lrString){
    for (var i = 0; i < timers.length;i++ ){
        clearTimeout(timers[i]);
    }
    document.getElementById("x").innerHTML="";
    document.getElementById("y").innerHTML="";
    document.getElementById("op1").style.fill="#ff0000";
    document.getElementById("op2").style.fill="#ff0000";
    document.getElementById("op3").style.fill="#ff0000";

    $(".lines").css("cursor", "pointer");
    $(".lines").css("pointer-events","auto");
    $(".sliders").slider("enable");
    $("#"+lrString+"_FirstPartOfExpln").slideUp(500);
    $("#"+lrString+"_SecondPartOfExpln").slideUp(500);



    $("#"+lrString+"StartSimButton").removeAttr("disabled", "disabled");
    $("#"+lrString+"StartSimButton").removeClass("disabled");
    $("#"+lrString+"StopSimButton").attr("disabled");
    $("#"+lrString+"StopSimButton").addClass("disabled");
    $("#"+lrString+"NextButton").attr("disabled");
    $("#"+lrString+"NextButton").addClass("disabled");
    $("#"+lrString+"NextButton").removeClass("displayActivatedButton");
    $("#"+lrString+"NextButton").unbind("click");

    $("line."+lrString+"Neur_1_lines").removeClass("animatedLineRegionBlue");
    $("line."+lrString+"Neur_2_lines").removeClass("animatedLineRegionRed");
    $("line."+lrString+"Neur_3_lines").removeClass("animatedLineRegionGreen");

    $("#"+lrString+"LearningRate_slider").slider("value", learningRate);
    $("#"+lrString+"MainOuterDiv span.learningRate").text($("#percLRLearningRate_slider").slider("value"));

    $(".changingTextStyle").text("");

    plotGraph(lrString);
    displayWeightsInNeuralNet(lrString);
    simulationStart=false;
}


function startSimulation(lrString){
    inputs = [[2,2],[2.5,2.5],[3,2],[0.5,1],[1,0.5],[1,4],[2,4.5]];
    var clusterCenterDenotions=[['x','#3366ff'],['+','#1231da'],['<>','#009933']];
    //displayWeightsInNeuralNet(lrString);
    simulationStart=true;
    $(".sliders").slider("disable");
    $(".lines").css("cursor","none");
    $(".lines").css("pointer-events","none");

    $("#"+lrString+"StartSimButton").attr("disabled", "disabled");
    $("#"+lrString+"StartSimButton").addClass("disabled");
    $("#"+lrString+"StopSimButton").removeAttr("disabled");
    $("#"+lrString+"StopSimButton").removeClass("disabled");
    $(".changingTextStyle").text("");

    // $("#"+lrString+"_SecondPartOfExpln").slideUp(500);
    // $("#"+lrString+"_FirstPartOfExpln").slideDown(1000);

    // timers.push(window.setTimeout(function(){
    //     $("line."+lrString+"Neur_1_lines").addClass("animatedLineRegionBlue");
    //     $("line."+lrString+"Neur_2_lines").addClass("animatedLineRegionRed");
    // },2000));

    for(var i=0;i<inputs.length;i++){
        document.getElementById("cluster"+(i+1)).innerHTML = "-";
        document.getElementById("cluster"+(i+1)).style.background = "inherit";
    }

    learnProc(lrString,0);
    //resetSimulation(lrString);
    //learnInput(lrString,0);

}

function learnProc(lrString,inputIndex)
{
      var results = document.getElementsByClassName('noshow');
      $(".noshow").fadeOut(1);
      for(var i=0;i<results.length;i++){
          results[i].innerHTML = "";
      }
      document.getElementById("op1").style.fill="#ff0000";
      document.getElementById("op2").style.fill="#ff0000";
      document.getElementById("op3").style.fill="#ff0000";
      var res = document.getElementById("input");
      res.innerHTML="<p class='resContent'><b>Calculations:</b></p>";
      document.getElementById("x").innerHTML="x="+inputs[inputIndex][0];
      document.getElementById("y").innerHTML="y="+inputs[inputIndex][1];
      points[inputIndex].size(25);
      points[inputIndex].fillColor("#00ff00");
      points[inputIndex].strokeColor("#00ff00");
      if(inputIndex!=0) document.getElementById('cluster_row'+inputIndex).style.background = "inherit";
      $('html, body').animate({
          scrollTop: $("#KSOMGraphDiv").offset().top
      });

      // Show what is the input!
      var input_content="";
      var input_content="<p class='resContent'>"+"Input sample into consideration: ("+inputs[inputIndex]+")"+"</p>";
      res.innerHTML += input_content;
      setTimeout(function(){
          $("#input").fadeIn(500);
          $('html, body').animate({
              scrollTop: $("#input").offset().top
          });
      },2000);

      /* ------ This displays the initial weight matrix ------ */
      res = document.getElementById('weightMatrix');
      var init_weight_content = "<p class='resContent'>The initial weight matrix:</p>";
      // Division for weight matrix.
      init_weight_content += "<div style=\"display: inline-block\"> <table class=\"matrix changingBlocks weightMatrix\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Weight Matrix W\">";
      for(var i=0;i<3;i++){
        init_weight_content += "<tr>";
        for(var j=0;j<2;j++){
            init_weight_content += "<td>"+weightMatrix[i][j]+"</td>";
        }
        init_weight_content += "</tr>";
      }
      init_weight_content += "</table></div>";

      // Display the matrix
      setTimeout(function() {
          res.innerHTML += init_weight_content + "<br/><br/>";
          $("#weightMatrix").fadeIn(500);
          $('html, body').animate({
              scrollTop: $("#weightMatrix").offset().top
          });
      },4500);

      /* --------------------------------------------------- */

      setTimeout(function(){
        $("line."+lrString+"Neur_1_lines").addClass("animatedLineRegionBlue");
        $("line."+lrString+"Neur_2_lines").addClass("animatedLineRegionRed");
      },0);
      setTimeout(function(){
        var distancesFromClusterCenters=[];
        // var header3=document.createElement("h3");
        // theDiv.appendChild(header3);

        for(var k=0;k<weightMatrix.length;k++)
        {
            distancesFromClusterCenters[k]=Math.pow((inputs[inputIndex][0]-weightMatrix[k][0]),2)+Math.pow((inputs[inputIndex][1]-weightMatrix[k][1]),2);
            //content_to_be_shown+="<h3>"+"Distance from C"+(k+1)+":"+distancesFromClusterCenters[k]+"</h3>";
        }

        // Display the distances from cluster centroids
        var dist_content = "<p class='resContent'>Now we calculate the distances from each cluster centroid. ";
        dist_content += "The one with minimum distance (i.e. the closest to the cluster centroid, and is also the winning neuron) will have its weights updated.</p>";
        // Prepare a table to display the distances
        dist_content += "<table border='1'>";
        var max=10000;
        var J_min;
        for(var j=0;j<distancesFromClusterCenters.length;j++)
        {
            dist_content += "<tr id='clusterCentre"+(j+1)+"'><td style='padding:5px 8px;'>C"+(j+1)+"</td><td style='padding:3px;'>"+distancesFromClusterCenters[j]+"</td></tr>";
            if(distancesFromClusterCenters[j]<max)
            {
                max=distancesFromClusterCenters[j];
                J_min=j;
            }
        }
        dist_content += "</table>";
        setTimeout(function(){
            document.getElementById('distFromCentre').innerHTML = dist_content + "<br/>";
            $("#distFromCentre").fadeIn(500);
            $('html, body').animate({
              scrollTop: $("#distFromCentre").offset().top
            });
        },4500);

        // Show which neuron's output is to be changed, and change colour in the distances' table.

        var neuron_content="<p class='resContent'>Neuron closest to input sample: "+(J_min+1)+"</p>";
        neuron_content+="<p class='resContent'>We will change the weights of this neuron. (Shown in red colour)";
        setTimeout(function(){
            document.getElementById('neuronWeightChange').innerHTML = neuron_content + "<br/>";
            $("#neuronWeightChange").fadeIn(500);
            $("#clusterCentre"+(J_min+1)).css("background","#fa8686");
            $('html, body').animate({
              scrollTop: $("#neuronWeightChange").offset().top
            });
        },7000);

        for(var j=0;j<inputs[inputIndex].length;j++)
        {
            weightMatrix[J_min][j]=parseFloat(weightMatrix[J_min][j]+learningRate*(inputs[inputIndex][j]-weightMatrix[J_min][j])).toFixed(3);
        }

        // Show the new weight matrix.
        var new_weight_content = "<p class='resContent'>The updated weight matrix:</p>";
        new_weight_content += "<div style=\"display: inline-block\"> <table class=\"matrix changingBlocks weightMatrix\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Weight Matrix W\">";
        for(var i=0;i<3;i++){
            new_weight_content += "<tr>";
            for(var j=0;j<2;j++){
                if(i==J_min) new_weight_content += "<td style='color:red'>"+weightMatrix[i][j]+"</td>";
                else new_weight_content += "<td>"+weightMatrix[i][j]+"</td>";
            }
            new_weight_content += "</tr>";
        }
        // Display contents.
        new_weight_content += "</table></div>";
        setTimeout(function(){
            points[inputIndex].setAttribute({color:clusterCenterDenotions[J_min][1],face:clusterCenterDenotions[J_min][0]});
            document.getElementById('updatedWeight').innerHTML = new_weight_content + "<br/>";
            new_weight_content = "<p class='resContent'>The sample thus belongs to cluster "+(J_min+1)+". The value has been updated in the table (Highlighted row).";
            if(inputIndex+1<inputs.length) new_weight_content += " Click on 'Apply next I/P value' button to consider the next sample.</p>";
            else new_weight_content += "Try changing the weights (which will change cluster centroids) and then click on 'Stop Simulation' button to restart the simulation with new parameters.</p>";
            document.getElementById('updatedWeight').innerHTML += new_weight_content + "<br/>";
            $("#updatedWeight").fadeIn(500);
            $('html, body').animate({
              scrollTop: $("#updatedWeight").offset().top
            });
            document.getElementById('cluster'+(inputIndex+1)).innerHTML = (J_min+1);
            $("#cluster_row"+(inputIndex+1)).css("background","#fa8686")
        },10500);

        setTimeout(function(){
            $("#"+lrString+"NextButton").attr("disabled");
            $("#"+lrString+"NextButton").addClass("disabled");
            $("#"+lrString+"NextButton").removeClass("displayActivatedButton");
            $("#"+lrString+"NextButton").unbind("click");

            $('html, body').animate({
              scrollTop: $("#finalClusterOutput").offset().top
            });

            document.getElementById("op"+(J_min+1)).style.fill="#00ff00";
            board.removeObject(points[inputIndex]);
            board.removeObject(clusterCenters[J_min]);
            points[inputIndex]=board.create('point',[inputs[inputIndex][0],inputs[inputIndex][1]],{fixed:true,name:'',color:clusterCenterDenotions[J_min][1],face:clusterCenterDenotions[J_min][0]});
            clusterCenters[J_min]=board.create('point',[weightMatrix[J_min][0],weightMatrix[J_min][1]],{fixed:true,name:'C'+(J_min+1),color:clusterCenterDenotions[J_min][1],face:clusterCenterDenotions[J_min][0]});
            displayWeightsInNeuralNet(lrString);
            //plotGraph("KSOM");
            $("line."+lrString+"Neur_1_lines").removeClass("animatedLineRegionBlue");
            $("line."+lrString+"Neur_2_lines").removeClass("animatedLineRegionRed");
            if(inputIndex!=inputs.length-1)
            {
                $("#"+lrString+"NextButton").removeAttr("disabled");
                $("#"+lrString+"NextButton").removeClass("disabled");
                $("#"+lrString+"NextButton").addClass("displayActivatedButton");
                $("#"+lrString+"NextButton").click(function () {
                    learnProc(lrString, inputIndex + 1);
                });
            }
        },12500);
        setTimeout(function(){
            $('html, body').animate({
              scrollTop: $("#KSOMGraphDiv").offset().top
            });
        },14000)
      },1500);
      
}

function scrollToElement(elem,time){
    if (time == null) time = 0;
    timers.push(window.setTimeout(function(){
        $('html, body').animate({
            scrollTop: $(elem).offset().top
        }, 1500);
    },time));
}

function revealByFadeIn(elem,time){
    timers.push(window.setTimeout(function () {
        $(elem).fadeIn(500);
    }, time));
}

function revealBySlideDown(elem,time){
    timers.push(window.setTimeout(function () {
        $(elem).slideDown(500);
    }, time));
}

function plotGraph(lrString){
    points = [];
    lines = [];
    board = JXG.JSXGraph.initBoard(lrString+'GraphDiv',{axis:true, boundingbox:[-7, 7, 7, -7]});  //Creates the cartesian graph
	  var constPointSize=5;
    for(var i=0;i<inputs.length;i++){
        points[i] = board.create('point',[inputs[i][0],inputs[i][1]],{fixed:true,name:''});
    }

    for(var i=0;i<weightMatrix.length;i++)
    {
        clusterCenters[i]=board.create('point',[weightMatrix[i][0],weightMatrix[i][1]],{fixed:true,name:'C'+(i+1),color:clusterCenterDenotions[i][1],face:clusterCenterDenotions[i][0]});
    }
}