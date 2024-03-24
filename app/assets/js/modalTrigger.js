// View Admin Modal
$(document).ready(function(){  
    $('.adminInfo').click(function(){  
         var admin_id = $(this).attr("id");  
         $.ajax({  
              url:"view-data.php",  
              method:"post",  
              data:{admin_id:admin_id},  
              success:function(data){  
                   $('#admin_detail').html(data);  
                   $('#viewAdminModal').modal("show");  
              }  
         });  
    });  
});  