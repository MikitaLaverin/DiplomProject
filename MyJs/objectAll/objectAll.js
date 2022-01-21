var url_object_all='php/objectAll/objectAll.php';
//let timerId = setInterval(()=>prim(),1000);
setTimeout(All());
function All(){
    $.ajax({
        url:url_object_all,
        type:'POST',
        dataType:'html',
        data:$("#search").serialize(),
        success:function(response){
            $('#objectAll').html(response);
        }})
$('#order').on('click', function(){
$.ajax({
    url:url_object_all,
    type:'POST',
    dataType:'html',
    data:$("#search").serialize(),
    success:function(response){
        $('#objectAll').html(response);
    }})
})
$(document).ready(function(){
    $('#mira').on('keyup', function(){
        $.ajax({
            url:url_object_all,
            type:'POST',
            dataType:'html',
            data:$("#search").serialize(),
            success:function(response){
                $('#objectAll').html(response);
            }})
    })
})
}
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
                    $('button.btn-danger').on('click',function(event){
                        var id_custom = $(this).data('id');
                        Swal.fire({
                            title: ' Вы уверены?',
                            text: "Вместе с заказам удаляться и все его объекты",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
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
                                                   window.location="/index.html";
                                        }
                                       
                                    }
                                })
                            }    
                          })
                        })
                     $('button.btn-warning').on('click',function(event){
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