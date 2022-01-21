var url_select_user='php/user/seeSelectUser.php';
var url_delete_user='php/user/deleteUser.php';
setTimeout(see_user());
setTimeout(see_delete());
$(document).ready(function(){
    $('#delete').on('submit',function(event){
        event.preventDefault();
        myFunction();
        //delete_Admin('delete',url3);
    })
})
function myFunction()
{ 
    Swal.fire({
    title: ' Вы уверены?',
    text: "Последствия будут не обратимы",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Да, удалить его!',
  }).then((result) => {
    if (result.value) {
        delete_user('delete',url_delete_user);
    }
  })
}
setTimeout(see_select());

function delete_user(ajax_form, url){
    $.ajax({
        url:url,
        type:'POST',
        dataType:'html',
        data:$("#"+ajax_form).serialize(),
        success:function(response){
            switch (response){
                case 'Невозможно удалить данный аккаунт':{
                    Swal.fire(
                        '',
                        response,
                        'error'
                    );
                    break;
                }
                case 'Удалилось!!!':{
                    Swal.fire({
                        title:'Аккаунт удален',
                        html:response,
                        icon:'success',
                        onClose:()=>{
                            see_select();
                        }
                    });
                    break;
                }
            }
        }
    })
}
function see_select(){
    $.ajax({
    url: url_select_user,
    method:'GET',
    dataType:'html',
    success: function(data){
    $('#selectUser').html(data);
}});
$.ajax({
    url: url_select_user,
    method:'GET',
    dataType:'html',
    success: function(data){
    $('#UpDataUser').html(data);
}
});
}
