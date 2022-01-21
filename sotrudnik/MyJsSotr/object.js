var url_object='php/object/object.php';
var url_object_search='php/object/objectSearch.php';
var url_object_status_2='php/object/objectStatus2.php';
var url_object_status_3='php/object/objectStatus3.php';
setTimeout(see_object());
function perezagryzka(){
    window.location='index.html';  
}
function see_object(){
    $.ajax({
        url:url_object,
        type:'POST',
        dataType:'html',
        data:$("#search").serialize(),
        success:function(data){
            $('#object').html(data);
            $('a.button7').on('click',function(e){
                e.preventDefault();
                var id_object = $(this).data('id');
                $.ajax({
                    url:url_object_status_3,
                    method:'POST',
                    dataType:'html',
                    data: 'ID='+id_object,
                    success:function(data){
                        $('#object_otchet').on('submit',function(e){   
                            e.preventDefault()
                            var $that = $(this),
                            formData = new FormData($that.get(0));
                            $.ajax({
                                url:url_object_status_2,
                                method:'POST',
                                contentType: false, 
                                processData: false,
                                dataType:'html',
                                data:formData,
                                success:function(response){
                                    if(response=='Ок')
                                       Swal.fire({
                                            title:'Окей',
                                            html:'Отчет принят',
                                            onClose:()=>{
                                                window.location='index.html';
                                    }
                                })
                            }
                        })           
                        })
                    }
                })
            })
    }})
    $('#mira').on('keyup', function(){
        $.ajax({
            url:url_object,
            type:'POST',
            dataType:'html',
            data:$("#search").serialize(),
            success:function(data){
                $('#object').html(data);
                $('a.button7').on('click',function(e){
                    e.preventDefault()
                    $.ajax({
                        url:url_object_status_3,
                        method:'POST',
                        dataType:'html',
                        data: 'ID='+id_object,
                        success:function(data){
                            $('#object_otchet').on('submit',function(e){  
                                e.preventDefault()
                                var $that = $(this),
                                formData = new FormData($that.get(0));   
                                $.ajax({
                                    url:url_object_status_2,
                                    method:'POST',
                                    dataType:'html',
                                    data:formData,
                                    success:function(response){
                                        if(response=='Ок'){
                                           Swal.fire({
                                        title:'Окей',
                                         html:'Отчет принят',
                                         onClose:()=>{
                                         window.location='index.html';              
                                }
                            })
                        }
                        }
                    })         

                    })
                }
            })
                
        })
    }})
})
}
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

