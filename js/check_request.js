$(".check_request[data-status='1']").css('color','black');
$(".check_request[data-status='0']").css('color','#999');

function sendAjax(action, elem, id){

  var status = elem.data('status');

  $.ajax({
        url: action,
        type: 'POST',                        
        data: {
        'action': "check_status",
        'id': id,
        'status' : status
      }, 
        success: function(data) {

          if(status == 1){
             elem.removeData();
             elem.attr('data-status','0');
          }
          
          if(status == 0){
            elem.removeData();
            elem.attr('data-status','1');
          }

           $(".check_request[data-status='1']").css('color','black');
           $(".check_request[data-status='0']").css('color','#999');
        },

    });

}
