//Pastor View Trigger
$(document).ready(function(){
    $(document).on('click','.view_pastor',function(){
        var view_pastor_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-pastor.php",
            type:"post",
            data:{view_pastor_id:view_pastor_id},
            success:function(data){
                $("#pastor_info").html(data);
                $("#viewPastorModal").modal('show');
            }
        });
    });
});


//Settings View Trigger
$(document).ready(function(){
    $(document).on('click','.view_settings',function(){
        var view_settings_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-settings.php",
            type:"post",
            data:{view_settings_id:view_settings_id},
            success:function(data){
                $("#settings_details").html(data);
                $("#viewSettingsModal").modal('show');
            }
        });
    });
});


//Admin View Trigger
$(document).ready(function(){
    $(document).on('click','.view_admin',function(){
        var view_admin_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-admin.php",
            type:"post",
            data:{view_admin_id:view_admin_id},
            success:function(data){
                $("#admin_info").html(data);
                $("#viewAdminModal").modal('show');
            }
        });
    });
});


//Quotes View Trigger
$(document).ready(function(){
    $(document).on('click','.view_quote',function(){
        var view_quote_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-quotes.php",
            type:"post",
            data:{view_quote_id:view_quote_id},
            success:function(data){
                $("#quote_info").html(data);
                $("#viewQuoteModal").modal('show');
            }
        });
    });
});


//Media View Trigger
$(document).ready(function(){
    $(document).on('click','.view_media',function(){
        var view_media_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-media.php",
            type:"post",
            data:{view_media_id:view_media_id},
            success:function(data){
                $("#media_infos").html(data);
                $("#viewMediaModal").modal('show');
            }
        });
    });
});


//Branch View Trigger
$(document).ready(function(){
    $(document).on('click','.view_branch',function(){
        var view_branch_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-branch.php",
            type:"post",
            data:{view_branch_id:view_branch_id},
            success:function(data){
                $("#branch_info").html(data);
                $("#viewBranchModal").modal('show');
            }
        });
    });
});


//Devotional View Trigger
$(document).ready(function(){
    $(document).on('click','.view_devotional',function(){
        var view_devotional_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-devotional.php",
            type:"post",
            data:{view_devotional_id:view_devotional_id},
            success:function(data){
                $("#devotional_info").html(data);
                $("#viewDevotionalModal").modal('show');
            }
        });
    });
});


//Event View Trigger
$(document).ready(function(){
    $(document).on('click','.view_event',function(){
        var view_event_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-event.php",
            type:"post",
            data:{view_event_id:view_event_id},
            success:function(data){
                $("#event_info").html(data);
                $("#viewEventModal").modal('show');
            }
        });
    });
});