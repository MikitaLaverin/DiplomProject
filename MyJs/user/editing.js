var url_profile='php/user/editing.php';
var url_edit='php/user/editingOne.php';

let timerId = setInterval(()=>profile(),60000);
setTimeout(profile());
function profile(){
    $.ajax({
    url: url_profile,
    method:'GET',
   dataType:'html',
   success: function(data){
 $('#profile').html(data);
   }
});
}

$(document).ready(function(){
    $('#idit').on('submit',function(event){
        event.preventDefault();
        Fidit();
        //delete_Admin('delete',url3);
    })
})
function Fidit()
{ 
    Swal.fire({
    title: ' Вы уверены?',
    text: "Это действия перзапишут данные текущего профиля",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Перезаписать',
  }).then((result) => {
    if (result.value) {
        edit('idit',url_edit);
    }
  })
}
function edit(ajax_form, url){
    $.ajax({
        url:url,
        type:'POST',
        dataType:'html',
        data:$("#"+ajax_form).serialize(),
        success:function(response){
            switch (response){
                case 'Ошибка':{
                    Swal.fire(
                        'Что-то пошло не так',
                        response,
                        'error'
                    );
                    break;
                }
                case 'Данные изменены':{
                    Swal.fire({
                        title:'Данные изменены',
                        html:response,
                        icon:'success',
                        onClose:()=>{
                          
                            window.location='profile.html'
                        }
                    });
                    break;
                }
            }
        }
    })
}

