$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $('.owl_cal_info_group button').on('click',function(){
        let id_info = $(this).attr('data-id');
        let url = "http://localhost:8080/show_content_cv_index";
        let data = {
            id : id_info
        };
        $.ajax({
            method : "POST",
            url  : url,
            data : data,
            success : function(result){
                document.getElementById('modal_show_cv_person').innerHTML = result;
            }
        });  
    })
})