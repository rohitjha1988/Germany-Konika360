window.onload = function() {

var w = window.innerWidth;
var h = window.innerHeight;
var moblityfontsize=17;
var fl_width_size=120;



// width device
if(w<=1024 & w>=767){
    moblityfontsize = 13;
    //fl_width_size = 80;
}

if(w<=768 & w>=424){
    moblityfontsize = 18;
    //fl_width_size = 50;
}

if(w<=425 & w>=374){
    moblityfontsize = 11;
}

if(w<=375 & w>=319){
    moblityfontsize = 10;

}

if(w<=320){
    moblityfontsize = 8;
}


//var options = {
var chart = new CanvasJS.Chart("chartContainer",    
{
    exportEnabled: true,
    animationEnabled: true,
    zoomEnabled: true, 
    zoomType: "xy",
    title:{
    text: ""
    },
    legend: {
       horizontalAlign: "left", // "center" , "right"
       verticalAlign: "center",  // "top" , "bottom"
       fontSize: 10,
       fontfamily: "Open Sans"
     },
    data: [{
        click: function(e){
            //console.log("evenbts",e);
            //alert(  e.dataSeries.type+ ", dataPoint { x:" + e.dataPoint.x + ", y: "+ e.dataPoint.y + " }" );
            /*
                dataseries  index 
                0 security
                1 productivity
                2 mobility
                3 flexibility
                4 analytics
            **/

            if(e.dataPoint.typename=='productivity'){
                if(e.dataSeries.dataPoints[1].exploded){
                    document.getElementById('productivity').style.display = 'block';
                    document.getElementById('security').style.display = 'none';
                    document.getElementById('mobility').style.display = 'none';
                    document.getElementById('flexibility').style.display = 'none';
                    document.getElementById('analytics').style.display = 'none';
                    document.getElementById('other').style.display = 'none';
                }else{
                    document.getElementById('productivity').style.display = 'none';
                    document.getElementById('other').style.display = 'block';
                }

                e.dataSeries.dataPoints[0].exploded= false;
                //e.dataSeries.dataPoints[1].exploded= false;
                e.dataSeries.dataPoints[2].exploded= false;
                e.dataSeries.dataPoints[3].exploded= false;
                e.dataSeries.dataPoints[4].exploded= false;

                setTimeout(function(){ 
                    window.location.href = 'productivity-and-collaboration';
                }, 2000);
            }
            else if(e.dataPoint.typename=='security'){
                if(e.dataSeries.dataPoints[0].exploded){
                    document.getElementById('productivity').style.display = 'none';
                    document.getElementById('security').style.display = 'block';
                    document.getElementById('mobility').style.display = 'none';
                    document.getElementById('flexibility').style.display = 'none';
                    document.getElementById('analytics').style.display = 'none';
                    document.getElementById('other').style.display = 'none';
                }else{
                    document.getElementById('security').style.display = 'none';
                    document.getElementById('other').style.display = 'block';
                }

                //e.dataSeries.dataPoints[0].exploded= false;
                e.dataSeries.dataPoints[1].exploded= false;
                e.dataSeries.dataPoints[2].exploded= false;
                e.dataSeries.dataPoints[3].exploded= false;
                e.dataSeries.dataPoints[4].exploded= false;


                setTimeout(function(){ 
                    window.location.href = 'security-and-compliance';
                }, 2000);
            }
            else if(e.dataPoint.typename=='mobility'){
                
                if(e.dataSeries.dataPoints[2].exploded){
                    //e.dataSeries.dataPoints[0].indexLabelFontSize = 35;
                    document.getElementById('productivity').style.display = 'none';
                    document.getElementById('security').style.display = 'none';
                    document.getElementById('mobility').style.display = 'block';
                    document.getElementById('flexibility').style.display = 'none';
                    document.getElementById('analytics').style.display = 'none';
                    document.getElementById('other').style.display = 'none';
                }else{
                    //e.dataSeries.dataPoints[0].indexLabelFontSize = 15;
                    document.getElementById('mobility').style.display = 'none';
                    document.getElementById('other').style.display = 'block';
                }
                
                e.dataSeries.dataPoints[0].exploded= false;
                e.dataSeries.dataPoints[1].exploded= false;
                //e.dataSeries.dataPoints[2].exploded= false;
                e.dataSeries.dataPoints[3].exploded= false;
                e.dataSeries.dataPoints[4].exploded= false;
                
                setTimeout(function(){ 
                    window.location.href = 'mobility';
                }, 2000);

            }

            else if(e.dataPoint.typename=='flexibility'){
                if(e.dataSeries.dataPoints[3].exploded){
                    document.getElementById('productivity').style.display = 'none';
                    document.getElementById('security').style.display = 'none';
                    document.getElementById('mobility').style.display = 'none';
                    document.getElementById('flexibility').style.display = 'block';
                    document.getElementById('analytics').style.display = 'none';
                    document.getElementById('other').style.display = 'none';
                }else{
                    document.getElementById('flexibility').style.display = 'none';
                    document.getElementById('other').style.display = 'block';
                }

                e.dataSeries.dataPoints[0].exploded= false;
                e.dataSeries.dataPoints[1].exploded= false;
                e.dataSeries.dataPoints[2].exploded= false;
                //e.dataSeries.dataPoints[3].exploded= false;
                e.dataSeries.dataPoints[4].exploded= false;


                setTimeout(function(){ 
                    window.location.href = 'flexibility-efficiency-and-sustainability';
                }, 2000);
            }

            else if(e.dataPoint.typename=='analytics'){
                if(e.dataSeries.dataPoints[4].exploded){
                    document.getElementById('productivity').style.display = 'none';
                    document.getElementById('security').style.display = 'none';
                    document.getElementById('mobility').style.display = 'none';
                    document.getElementById('flexibility').style.display = 'none';
                    document.getElementById('analytics').style.display = 'block';
                    document.getElementById('other').style.display = 'none';
                }else{
                    document.getElementById('analytics').style.display = 'none';
                    document.getElementById('other').style.display = 'block';
                }
                e.dataSeries.dataPoints[0].exploded= false;
                e.dataSeries.dataPoints[1].exploded= false;
                e.dataSeries.dataPoints[2].exploded= false;
                e.dataSeries.dataPoints[3].exploded= false;
                //e.dataSeries.dataPoints[4].exploded= false;

                setTimeout(function(){ 
                    window.location.href = 'analytics-and-intelligence';
                }, 2000);
            }else{
                document.getElementById('productivity').style.display = 'none';
                document.getElementById('security').style.display = 'none';
                document.getElementById('mobility').style.display = 'none';
                document.getElementById('flexibility').style.display = 'none';
                document.getElementById('analytics').style.display = 'none';
                document.getElementById('other').style.display = 'none';
            }
        },
        mouseover: function(e){
            
        },
        mouseout: function(e){
            
        },
    
        type: "pie",
        explodeOnClick: true,
        //animationEnabled: false,
        startAngle: -18,
        showInLegend: false,
        toolTipContent: "<b>{name}</b> <div style='text-align:centre'>Click to start</div>",
        indexLabel: "{name}",
        indexLabelFormatter: function(e){           
                return e.dataPoint.name;                
        },
        //legendText: "{name} (#percent%)",
        indexLabelPlacement: "inside",//"outside or inside"
        indexLabelTextAlign: "center",
        dataPoints: [
            
            { y: 72,typename:'security',mouseout: onMouseout,mouseover: onMouseOver,exploded:false,  cursor: "pointer",name: "Security & Compliance",indexLabelFontColor: "white",indexLabelWrap: true,indexLabelPlacement: "inside", indexLabelFontSize: moblityfontsize,indexLabelTextAlign: "center" ,indexLabelMaxWidth: 100, color: "#009EB7",indexLabelFontFamily: "Open Sans", indexLabelFontWeight: "600",},

            { y: 72,typename:'productivity',mouseout: onMouseout,mouseover: onMouseOver,exploded:false, cursor: "pointer", name: "Productivity & Collaboration" ,indexLabelFontColor: "white",indexLabelWrap: true,indexLabelPlacement: "inside", indexLabelFontSize: moblityfontsize, indexLabelTextAlign: "center",indexLabelMaxWidth: 117, color: "#CEA100",indexLabelFontFamily: "Open Sans", indexLabelFontWeight: "600",},

            { y: 72,typename:'mobility',mouseout: onMouseout,mouseover: onMouseOver,exploded:false, cursor: "pointer",name: "Mobility",indexLabelFontColor: "white",indexLabelPlacement: "inside", indexLabelFontSize: moblityfontsize, indexLabelTextAlign: "center",indexLabelMaxWidth: 100, color: "#C0167B",indexLabelFontFamily: "Open Sans", indexLabelFontWeight: "600",},

            { y: 72,typename:'flexibility',mouseout: onMouseout,mouseover: onMouseOver,exploded:false, cursor: "pointer", name: "Flexibility, Efficiency & Sustainability",indexLabelFontColor: "white",indexLabelWrap: true,indexLabelPlacement: "inside", indexLabelFontSize: moblityfontsize, indexLabelTextAlign: "center",indexLabelMaxWidth: 115, color: "#826FB0",indexLabelFontFamily: "Open Sans", indexLabelFontWeight: "600",},

            
            { y: 72,typename:'analytics',mouseout: onMouseout,mouseover: onMouseOver,exploded:false,  cursor: "pointer",name: "Analytics & Intelligence",indexLabelFontColor: "white",indexLabelWrap: true,indexLabelPlacement: "inside", indexLabelFontSize: moblityfontsize, indexLabelMaxWidth: 100, color: "#0062C2",indexLabelFontFamily: "Open Sans", indexLabelFontWeight: "600",},
        ]
    }]
});
chart.render();
//$("#chartContainer").CanvasJSChart(options);
    //console.log(document.getElementsByClassName("canvasjs-chart-toolbar")[0].childNodes);
    //document.getElementsByClassName("canvasjs-chart-toolbar")[0].childNodes[3].childNodes[0].style.display = "none";
    //document.getElementsByClassName("canvasjs-chart-credit").style.display = "none";

    document.getElementsByClassName("canvasjs-chart-toolbar")[0].style.display = "none";
}

function onMouseout(e){
      if(e.dataPoint.typename=='security'){
        document.getElementById('other').style.display = 'block';
           document.getElementById('security').style.display = 'none';
      }
    else  if(e.dataPoint.typename=='productivity'){
        document.getElementById('other').style.display = 'block';
           document.getElementById('productivity').style.display = 'none';
      }
     else if(e.dataPoint.typename=='security'){
        document.getElementById('other').style.display = 'block';
           document.getElementById('security').style.display = 'none';
      }
     else if(e.dataPoint.typename=='mobility'){
        document.getElementById('other').style.display = 'block';
           document.getElementById('mobility').style.display = 'none';
      }
     else if(e.dataPoint.typename=='flexibility'){
        document.getElementById('other').style.display = 'block';
           document.getElementById('flexibility').style.display = 'none';
      }
     else if(e.dataPoint.typename=='analytics'){
        document.getElementById('other').style.display = 'block';
           document.getElementById('analytics').style.display = 'none';
      }
   
    }
  function onMouseOver(e){
    if(e.dataPoint.typename=='productivity'){
                document.getElementById('productivity').style.display = 'block';
                document.getElementById('security').style.display = 'none';
                document.getElementById('mobility').style.display = 'none';
                document.getElementById('flexibility').style.display = 'none';
                document.getElementById('analytics').style.display = 'none';
                document.getElementById('other').style.display = 'none';

            }
            else if(e.dataPoint.typename=='security'){
                document.getElementById('productivity').style.display = 'none';
                document.getElementById('security').style.display = 'block';
                document.getElementById('mobility').style.display = 'none';
                document.getElementById('flexibility').style.display = 'none';
                document.getElementById('analytics').style.display = 'none';
                document.getElementById('other').style.display = 'none';
            }
            else if(e.dataPoint.typename=='mobility'){
                document.getElementById('productivity').style.display = 'none';
                document.getElementById('security').style.display = 'none';
                document.getElementById('mobility').style.display = 'block';
                document.getElementById('flexibility').style.display = 'none';
                document.getElementById('analytics').style.display = 'none';
                document.getElementById('other').style.display = 'none';
            }
            else if(e.dataPoint.typename=='flexibility'){
                document.getElementById('productivity').style.display = 'none';
                document.getElementById('security').style.display = 'none';
                document.getElementById('mobility').style.display = 'none';
                document.getElementById('flexibility').style.display = 'block';
                document.getElementById('analytics').style.display = 'none';
                document.getElementById('other').style.display = 'none';
            }
            else if(e.dataPoint.typename=='analytics'){
                document.getElementById('productivity').style.display = 'none';
                document.getElementById('security').style.display = 'none';
                document.getElementById('mobility').style.display = 'none';
                document.getElementById('flexibility').style.display = 'none';
                document.getElementById('analytics').style.display = 'block';
                document.getElementById('other').style.display = 'none';
            }
            else{
                document.getElementById('productivity').style.display = 'none';
                document.getElementById('security').style.display = 'none';
                document.getElementById('mobility').style.display = 'none';
                document.getElementById('flexibility').style.display = 'none';
                document.getElementById('analytics').style.display = 'none';
                document.getElementById('other').style.display = 'block';
            }
    }