var url='php/login/log.php';
$(document).ready(function(){
    $('#exit').on('submit',function(event){
        event.preventDefault();
        Swal.fire({
            title:'Вход',
            html:'Пожалуйста, подождите...',
            timer:1000,
            onBeforeOpen:()=>{
                Swal.showLoading()
            },
            onClose:()=>{
                send_ajax_form('exit',url);
            }
        })
    })
})
function send_ajax_form(ajax_form, url){
    $.ajax({
        url:url,
        type:'POST',
        dataType:'html',
        data:$("#"+ajax_form).serialize(),
        success:function(response){
            switch (response){
                case 'Менеджер':{
                    Swal.fire({
                        title:'Добро пожаловать!',
                        html:response,
                        icon:'success',
                        onClose:()=>{
                            window.location='index.html';
                        }
                    });
                    break;
                }
                case 'Сотрудник':{
                    Swal.fire({
                        title:'Добро пожаловать!',
                        html:response,
                        icon:'success',
                        onClose:()=>{
                            window.location='sotrudnik/index.html';
                        }
                    });
                    break;
                }
                    case 'Ошибка':{
                        Swal.fire({
                            title:'',
                            html:'Ошибка в логине или пароле!',
                            icon:'error',
                        });
                        break;
                    }
            }
        }
    })
}

