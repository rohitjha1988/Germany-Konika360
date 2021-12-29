(function ($, Drupal, drupalSettings) {
  /**
   * @namespace
   */
  /**Drupal.behaviors.assessAccessData = {
    attach: function (context) {
      var data = parseInt(drupalSettings.myname);
      var data2 = drupalSettings.myname2;
    // alert(data2);
      // if(data2 == "productivity-collaborations"){
      //     var data_vals = [{"y":data,"label":"PRODUCTIVITY AND COLLABORATION"},{"y":0,"label":"SECURITY & COMPLIANCE"},{"y":0,"label":"ANALYTICS AND INTELLIGENCE"},{"y":0,"label":"FLEXIBILITY, EFFICIENCY & SUSTAINABILITY"},{"y":0,"label":"MOBILITY"}];
      // }else{
      //     var data_vals = [{"y":0,"label":"PRODUCTIVITY AND COLLABORATION"},{"y":0,"label":"SECURITY & COMPLIANCE"},{"y":0,"label":"ANALYTICS AND INTELLIGENCE"},{"y":0,"label":"FLEXIBILITY, EFFICIENCY & SUSTAINABILITY"},{"y":data,"label":"MOBILITY"}];
      // }
      
      
      window.onload = function() {

 

          if(data2 == "productivity-collaborations"){
              var data_vals = [{"y":data,"label":"PRODUCTIVITY AND COLLABORATION"},{"y":0,"label":"SECURITY & COMPLIANCE"},{"y":0,"label":"ANALYTICS AND INTELLIGENCE"},{"y":0,"label":"FLEXIBILITY, EFFICIENCY & SUSTAINABILITY"},{"y":0,"label":"MOBILITY"}];
           }else if(data2 == "mobility"){
              var data_vals = [{"y":0,"label":"PRODUCTIVITY AND COLLABORATION"},{"y":0,"label":"SECURITY & COMPLIANCE"},{"y":0,"label":"ANALYTICS AND INTELLIGENCE"},{"y":0,"label":"FLEXIBILITY, EFFICIENCY & SUSTAINABILITY"},{"y":data,"label":"MOBILITY"}];
          }else if(data2 == "analytics-intelligence"){
              var data_vals = [{"y":0,"label":"PRODUCTIVITY AND COLLABORATION"},{"y":0,"label":"SECURITY & COMPLIANCE"},{"y":data,"label":"ANALYTICS AND INTELLIGENCE"},{"y":0,"label":"FLEXIBILITY, EFFICIENCY & SUSTAINABILITY"},{"y":0,"label":"MOBILITY"}];    
          }else if(data2 == "flexibility-efficiency"){
            var data_vals = [{"y":0,"label":"PRODUCTIVITY AND COLLABORATION"},{"y":0,"label":"SECURITY & COMPLIANCE"},{"y":0,"label":"ANALYTICS AND INTELLIGENCE"},{"y":data,"label":"FLEXIBILITY, EFFICIENCY & SUSTAINABILITY"},{"y":0,"label":"MOBILITY"}];    
        }else if(data2 == "security_and_compliance"){
          var data_vals = [{"y":0,"label":"PRODUCTIVITY AND COLLABORATION"},{"y":data,"label":"SECURITY & COMPLIANCE"},{"y":0,"label":"ANALYTICS AND INTELLIGENCE"},{"y":0,"label":"FLEXIBILITY, EFFICIENCY & SUSTAINABILITY"},{"y":0,"label":"MOBILITY"}];    
      }
          
     
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: "Your Digital Maturity Score Is:"
            },
            axisY: {
                title: "Your Digital Maturity Score Is:"
            },
            data: [{
                type: "column",
                yValueFormatString: data + " %",
                dataPoints: data_vals
            }]
        });
        chart.render();
         
        }
    }
  };**/

})

 $(document).ready(function(){
              // Check or Uncheck All checkboxes
              $(".addclassbg #edit-employees-in-my-company-have-the-ability-to-none-of-these").change(function(){
                 var checked = $(this).is(':checked');
                 if(checked){
                   $(".addclassbg .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".addclassbg #edit-employees-in-my-company-have-the-ability-to-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }else{
                   $(".addclassbg .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".addclassbg #edit-employees-in-my-company-have-the-ability-to-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }
             });
              
             // Changing state of unCheckAll checkbox 
             $(".addclassbg .form-checkbox").click(function(){
  
                if($(".addclassbg .form-checkbox").length == $(".addclassbg .form-checkbox:checked").length) {
             $(".addclassbg #edit-employees-in-my-company-have-the-ability-to-none-of-these").prop("checked", false);
            } else {
             $(".addclassbg #edit-employees-in-my-company-have-the-ability-to-none-of-these").prop("checked", false);
            }

             });
          });


jQuery(".cookies").click(function (e) {
            localStorage.removeItem("uc_user_interaction")
            window.location.reload();
            });

 $(document).ready(function(){
              // Check or Uncheck All checkboxes
              $(".prod-section #edit-select-the-statements-that-reflect-your-workplace-and-operations-none-of-these").change(function(){
                 var checked = $(this).is(':checked');
                 if(checked){
                   $(".prod-section .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".prod-section #edit-select-the-statements-that-reflect-your-workplace-and-operations-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }else{
                   $(".prod-section .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".prod-section #edit-select-the-statements-that-reflect-your-workplace-and-operations-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }
             });
              
             // Changing state of unCheckAll checkbox 
             $(".prod-section .form-checkbox").click(function(){
  
                if($(".prod-section .form-checkbox").length == $(".prod-section .form-checkbox:checked").length) {
             $(".prod-section #edit-select-the-statements-that-reflect-your-workplace-and-operations-none-of-these").prop("checked", false);
            } else {
             $(".prod-section #edit-select-the-statements-that-reflect-your-workplace-and-operations-none-of-these").prop("checked", false);
            }

             });
          });

 $(document).ready(function(){
              // Check or Uncheck All checkboxes
              $(".addclassbg #edit-are-there-certain-departmental-processes-or-systems-that-can-t-b-none-of-these").change(function(){
                 var checked = $(this).is(':checked');
                 if(checked){
                   $(".addclassbg .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".addclassbg #edit-are-there-certain-departmental-processes-or-systems-that-can-t-b-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }else{
                   $(".addclassbg .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".addclassbg #edit-are-there-certain-departmental-processes-or-systems-that-can-t-b-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }
             });
              
             // Changing state of unCheckAll checkbox 
             $(".addclassbg .form-checkbox").click(function(){
  
                if($(".addclassbg .form-checkbox").length == $(".addclassbg .form-checkbox:checked").length) {
             $(".addclassbg #edit-are-there-certain-departmental-processes-or-systems-that-can-t-b-none-of-these").prop("checked", false);
            } else {
             $(".addclassbg #edit-are-there-certain-departmental-processes-or-systems-that-can-t-b-none-of-these").prop("checked", false);
            }

             });
          });

 $(document).ready(function(){
              // Check or Uncheck All checkboxes
              $(".fleximobilitys #edit-which-of-the-following-statement-is-true-none-of-these").change(function(){
                 var checked = $(this).is(':checked');
                 if(checked){
                   $(".fleximobilitys .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".fleximobilitys #edit-which-of-the-following-statement-is-true-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }else{
                   $(".fleximobilitys .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".fleximobilitys #edit-which-of-the-following-statement-is-true-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }
             });
              
             // Changing state of unCheckAll checkbox 
             $(".fleximobilitys .form-checkbox").click(function(){
  
                if($(".fleximobilitys .form-checkbox").length == $(".fleximobilitys .form-checkbox:checked").length) {
             $(".fleximobilitys #edit-which-of-the-following-statement-is-true-none-of-these").prop("checked", false);
            } else {
             $(".fleximobilitys #edit-which-of-the-following-statement-is-true-none-of-these").prop("checked", false);
            }

             });
          });

 $(document).ready(function(){
              // Check or Uncheck All checkboxes
              $(".analticsright #edit-which-areas-of-your-business-do-you-struggle-with-none-of-these").change(function(){
                 var checked = $(this).is(':checked');
                 if(checked){
                   $(".analticsright .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".analticsright #edit-which-areas-of-your-business-do-you-struggle-with-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }else{
                   $(".analticsright .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".analticsright #edit-which-areas-of-your-business-do-you-struggle-with-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }
             });
              
             // Changing state of unCheckAll checkbox 
             $(".analticsright .form-checkbox").click(function(){
  
                if($(".analticsright .form-checkbox").length == $(".analticsright .form-checkbox:checked").length) {
             $(".analticsright #edit-which-areas-of-your-business-do-you-struggle-with-none-of-these").prop("checked", false);
            } else {
             $(".analticsright #edit-which-areas-of-your-business-do-you-struggle-with-none-of-these").prop("checked", false);
            }

             });
          });

 $(document).ready(function(){
              // Check or Uncheck All checkboxes
              $(".prod-section #edit-are-you-struggling-with-lots-of-manual-and-repetitive-tasks-asso-none-of-these").change(function(){
                 var checked = $(this).is(':checked');
                 if(checked){
                   $(".prod-section .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".prod-section #edit-are-you-struggling-with-lots-of-manual-and-repetitive-tasks-asso-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }else{
                   $(".prod-section .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".prod-section #edit-are-you-struggling-with-lots-of-manual-and-repetitive-tasks-asso-none-of-these").each(function(){
                     $(this).prop("checked",true);
                   });
                 }
             });
              
             // Changing state of unCheckAll checkbox 
             $(".prod-section .form-checkbox").click(function(){
  
                if($(".prod-section .form-checkbox").length == $(".prod-section .form-checkbox:checked").length) {
             $(".prod-section #edit-are-you-struggling-with-lots-of-manual-and-repetitive-tasks-asso-none-of-these").prop("checked", false);
            } else {
             $(".prod-section #edit-are-you-struggling-with-lots-of-manual-and-repetitive-tasks-asso-none-of-these").prop("checked", false);
            }

             });

          });
 
 $(document).ready(function(){
              // Check or Uncheck All checkboxes
              $(".fleximobilitys #edit-which-of-these-activities-are-currently-manual-and-repetitive-ta-we-do-not-have-paper-based-processes-anymore-and-or-all-repetitive-tasks-are-automated").change(function(){
                 var checked = $(this).is(':checked');
                 if(checked){
                   $(".fleximobilitys .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".fleximobilitys #edit-which-of-these-activities-are-currently-manual-and-repetitive-ta-we-do-not-have-paper-based-processes-anymore-and-or-all-repetitive-tasks-are-automated").each(function(){
                     $(this).prop("checked",true);
                   });
                 }else{
                   $(".fleximobilitys .form-checkbox").each(function(){
                     $(this).prop("checked",false);
                   });
                   $(".fleximobilitys #edit-which-of-these-activities-are-currently-manual-and-repetitive-ta-we-do-not-have-paper-based-processes-anymore-and-or-all-repetitive-tasks-are-automated").each(function(){
                     $(this).prop("checked",true);
                   });
                 }
             });
              
             // Changing state of unCheckAll checkbox 
             $(".fleximobilitys .form-checkbox").click(function(){
  
                if($(".fleximobilitys .form-checkbox").length == $(".fleximobilitys .form-checkbox:checked").length) {
             $(".fleximobilitys #edit-which-of-these-activities-are-currently-manual-and-repetitive-ta-we-do-not-have-paper-based-processes-anymore-and-or-all-repetitive-tasks-are-automated").prop("checked", false);
            } else {
             $(".fleximobilitys #edit-which-of-these-activities-are-currently-manual-and-repetitive-ta-we-do-not-have-paper-based-processes-anymore-and-or-all-repetitive-tasks-are-automated").prop("checked", false);
            }

             });
          });


(jQuery, Drupal, drupalSettings);

