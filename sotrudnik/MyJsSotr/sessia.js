var url_sessia='php/login/provercka.php';
var url_exit='php/login/exit.php';
window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }
setTimeout(proverka());
function proverka(){
    $.ajax({
        url:url_sessia,
        method:'POST',
        dataType:'html',
        success:function(data){
            if(data=='Не вошел')
            {
                window.location='../login.html';
            }
         }
    })
}
$('#exit').on('click',function(event){
    event.preventDefault();
    exit_sistem()
})
function exit_sistem(){
    $.ajax({
        url:url_exit,
        method:'POST',
        dataType:'html',
        success:function(data){
                window.location='../login.html';
        }
    })
}