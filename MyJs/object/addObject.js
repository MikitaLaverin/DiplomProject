var url_bolop='php/object/object.php';
var url_add_ob='php/object/addObject.php';
var url_sreach_ob='php/object/sreachObject.php';
var url_delete_object='php/object/deleteObject.php';
var url_upData_object='php/object/upDate_Object.php';
//поиск объекта

var url_change_object='php/object/change_object.php';
// Изменение данных в объекте
$(document).ready(function(){
    $('#upData_object').on('submit',function(event){
        event.preventDefault();
        up_vopros();
    })
})
function up_vopros()
{ 
    Swal.fire({
    title: ' Вы уверены?',
    text: "Это действия перзапишут данные текущего объекта",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Оставить',
    confirmButtonText: 'Перезаписать',
  }).then((result) => {
    if (result.value) {
        update_object('upData_object',url_change_object);
    }
  })
}
function update_object(ajax_form, url){
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
                            see_profile();
                        }
                    });
                    break;
                }
            }
        }
    })
}
setTimeout(see_profile());
$(document).ready(function(){
    $('#object_add').on('submit',function(event){
        event.preventDefault();
        add_ob('object_add',url_add_ob);  
    })
})
function add_ob(ajax_form, url){
    $.ajax({
        url:url,
        type:'POST',
        dataType:'html',
        data:$("#"+ajax_form).serialize(),
        success:function(response){
            if(response=="ОК"){
            see_profile();
            }
            if(response=="noOK"){
                Swal.fire({
                  title:'Предупреждение',
                  icon:'warning',
                  html:'Анологичный объект уже создан',
               })
              }
        }
    })
}
function see_profile(){
    $.ajax({
        url: url_bolop,
        method:'POST',
        dataType:'html',
        data:$("#search").serialize(),
        success: function(data){
        $('#object').html(data);
        $('button.delete').on('click',function(event){
            var id_custom = $(this).data('id');
            Swal.fire({
                title: ' Вы уверены?',
                text: "Не только объект, но и вся его история будет удалена навсегда!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Оставить',
                confirmButtonText: 'Да, удалить его!',
              }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url:url_delete_object,
                        method:'POST',
                        dataType:'html',
                        data: 'ID='+id_custom,
                        success:function(data){
                            if(data=="Удалилось!!!"){     
                                see_profile();      
                            }         
                        }
                    })
                }    
              })
            })
            $('button.upData').on('click',function(event){
                var id = $(this).data('id');
                $.ajax({
                    url: url_upData_object,
                    method:'POST',
                    dataType:'html',
                    data: 'ID='+id,
                    success:function(data){ 
                        $('#upData_object').html(data);            
                    }
                })
              });
       }
   })
    $('#mira').on('keyup', function(){
        var txt=$(this).val();
        if((txt.length >=1)){   
            $.ajax({
                url: url_bolop,
                method:'POST',
                dataType:'html',
                data:$("#search").serialize(),
                success: function(data){
                $('#object').html(data);
                $('button.delete').on('click',function(event){
                    var id_custom = $(this).data('id');
                    Swal.fire({
                        title: ' Вы уверены?',
                        text: "Не только объект, но и вся его история будет удалена навсегда",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Оставить',
                        confirmButtonText: 'Да, удалить его!',
                      }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                url:url_delete_object,
                                method:'POST',
                                dataType:'html',
                                data: 'ID='+id_custom,
                                success:function(data){
                                    if(data=="Удалилось!!!"){     
                                        see_profile();      
                                    }
                                   
                                }
                            })
                        }    
                      })
                    })          
                    $('button.upData').on('click',function(event){
                        var id = $(this).data('id');
                        $.ajax({
                            url: url_upData_object,
                            method:'POST',
                            dataType:'html',
                            data: 'ID='+id,
                            success:function(data){ 
                                $('#upData_object').html(data);        
                            }
                        })
                });
            }
        })
      }
    })
}
$("#phone").click(function(){
    $(this).setCursorPosition();
  }).mask("+7(999) 999-9999");




  document.addEventListener('DOMContentLoaded', () => {

    const getSort = ({ target }) => {
        const order = (target.dataset.order = -(target.dataset.order || -1));
        const index = [...target.parentNode.cells].indexOf(target);
        const collator = new Intl.Collator(['en', 'ru'], { numeric: true });
        const comparator = (index, order) => (a, b) => order * collator.compare(
            a.children[index].innerHTML,
            b.children[index].innerHTML
        );
        
        for(const tBody of target.closest('table').tBodies)
            tBody.append(...[...tBody.rows].sort(comparator(index, order)));

        for(const cell of target.parentNode.cells)
            cell.classList.toggle('sorted', cell === target);
    };
    
    document.querySelectorAll('#datatable-example').forEach(tableTH => tableTH.addEventListener('click', () => getSort(event)));
    
});



