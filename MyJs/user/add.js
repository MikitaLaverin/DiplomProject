var url_add_akk='php/user/add.php';
var url_see_user='php/user/seeUser.php';
var url_photo_user='php/user/photo.php';
setTimeout(see_user());
function see_user(){
    $.ajax({
    url: url_see_user,
    method:'GET',
   dataType:'html',
   success: function(data){
 $('#user').html(data);
   }
});
}
setTimeout(see_delete());
function see_delete(){
    $.ajax({
    url: url_see_user,
    method:'GET',
   dataType:'html',
   success: function(data){
 $('#user_delete').html(data);
   }
});
}

$(function(){
    $('#form').on('submit', function(e){
      e.preventDefault();
      var $that = $(this),
      formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
      $.ajax({
        url:url_photo_user,
        type:"POST",
        contentType: false, // важно - убираем форматирование данных по умолчанию
        processData: false, // важно - убираем преобразование строк по умолчанию
        data: formData,
        success: function(json){
            if(json=='Успешно зарегистрирован'){
              Swal.fire({
                  title:'Успешно!',
                  html:"Аккаунт создан, сообщите сотруднику",
                  icon:'success',
                  onClose:()=>{
                    see_user()
                }
              })
          }    if(json=='Такой уже существует'){
            Swal.fire({
                title:'Предупреждение',
                html:"Такой аккаунт уже есть!",
                icon:'warning',
                onClose:()=>{
                    see_user()
                }
            })
        }
        }
      });
    });
  });
