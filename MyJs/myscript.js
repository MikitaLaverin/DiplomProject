//Обработчик получение заказщика с сервер 
var url='php/custom/custom.php';
var url_one='php/custom/search.php';
var url_object='php/custom/idCustom.php';
var upData_custom='php/custom/upData_custom.php';
var url_add='php/custom/add.php';
var url_delete_custom='php/custom/delete.php';

//let timerId = setInterval(()=>showZakazi(),1000);
setTimeout(showZakazi());
    $(document).ready(function(){
        $('#mira').on('keyup', function(){
            var txt=$(this).val();
            if((txt.length >=1)){   
                $.ajax({
                    url: url_one,
                    method:'POST',
                    dataType:'html',
                    data:$("#search").serialize(),
                    success: function(data){
                    $('#custom').html(data);
                    $('button.allObject').on('click',function(event){
                        var id = $(this).data('id');
                        $.ajax({
                            url:url_object,
                            method:'POST',
                            dataType:'html',
                            data: 'ID='+id,
                            success:function(data){
                                if(data=='норм'){
                               
                                }else{
                                    alert(data);
                                }
                            }
                        })
                      });

                    $('button.delete').on('click',function(event){
                        var id_custom = $(this).data('id');
                        Swal.fire({
                            title: ' Вы уверены?',
                            text: "Вместе с заказчиком удаляться и все его объекты",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            cancelButtonText: 'Оставить',
                            confirmButtonText: 'Да, удалить его!',
                          }).then((result) => {
                            if (result.value) {
                                $.ajax({
                                    url:url_delete_custom,
                                    method:'POST',
                                    dataType:'html',
                                    data: 'ID='+id_custom,
                                    success:function(data){
                                        if(data=="Удалилось!!!"){     
                                                   window.location="index.html";
                                        }
                                       
                                    }
                                })
                            }    
                          })
                        })
                     $('button.upData').on('click',function(event){
                        var id = $(this).data('id');
                        $.ajax({
                            url:upData_custom,
                            method:'POST',
                            dataType:'html',
                            data: 'ID='+id,
                            success:function(data){ 
                                $('#custom_update').html(data);        
                            }
                        })
                      });
                    }
                })
            }
            else{
                showZakazi();       
            }
    })
})
$(document).ready(function(){
    $('#forma').on('submit',function(event){
        event.preventDefault();
        showZakazi();
        add_custom('forma',url_add);
    })
})
function add_custom(ajax_form, url){
    $.ajax({
        url:url,
        type:'POST',
        dataType:'html',
        data:$("#"+ajax_form).serialize(),
        success:function(response){
            if(response=='неОК'){
                Swal.fire({
                    title:'Внимание',
                    html:"Данный заказчик уже внесен в таблицу",
                    icon:'warning',
                })
            }
            else(response=="Успешно");
            {
                showZakazi();   
                $('#results').html(response);        
            }
           
        }
    })
}
var url_change_custom='php/custom/change_custom.php';
$(document).ready(function(){
    $('#custom_update').on('submit',function(event){
        event.preventDefault();
        Fidit();
        
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
        update_custom('custom_update',url_change_custom);
    }
  })
}
function update_custom(ajax_form, url){
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

                            showZakazi();
                        }
                    });
                    break;
                }
            }
        }
    })
}
function showZakazi(){
    
    $.ajax({
    url: url,
    method:'GET',
   dataType:'html',
   success: function(data){
       
 $('#custom').html(data);

 $('button.upData').on('click',function(event){
     event.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url:upData_custom,
        method:'POST',
        dataType:'html',
        data: 'ID='+id,
        success:function(data){ 
            $('#custom_update').html(data);        
        }
    })
  });
 $('button.delete').on('click',function(event){
    var id_custom = $(this).data('id');
    Swal.fire({
        title: ' Вы уверены?',
        text: "Вместе с закачиком удалятся все его объекты",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Оставить',
        confirmButtonText: 'Да, удалить его!',
      }).then((result) => {
        if (result.value) {
            $.ajax({
                url:url_delete_custom,
                method:'POST',
                dataType:'html',
                data: 'ID='+id_custom,
                success:function(data){
                    if(data=="Удалилось!!!"){     
                               window.location="index.html";
                    }
                   
                }
            })
        }    
      })
    })
 $('button.allObject').on('click',function(event){
    var id = $(this).data('id');
    $.ajax({
        url:url_object,
        method:'POST',
        dataType:'html',
        data: 'ID='+id,
        success:function(data){
            if(data=='норм'){
           
            }else{
                alert(data);
            }
        }
    })
  });
   }
});
}
$("#phone").click(function(){
    $(this).setCursorPosition(3);
  }).mask("+7(999) 999-9999");


  //loadScript('./js/jquery.dataTables.min.js');
  //loadScript('./js/dataTables.bootstrap4.min.js');
  
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
