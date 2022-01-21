var url_1='php/history/history1.php';
var url_2='php/history/history2.php';
var url_3='php/history/history3.php';
var url_4='php/history/history4.php';
var url_5='php/history/history5.php';
var url_6='php/history/history6.php';
var url_7='php/history/history7.php';
var url_8='php/history/history8.php';
var url_9='php/history/history9.php';
var url_10='php/history/history10.php';
var url_11='php/history/history11.php';
var url_12='php/history/history12.php';
var url_photo='php/history/photo_history.php';
setTimeout(see_1());
function see_1(){
    $.ajax({
        url:url_1,
        type:'POST',
        dataType:'html',
        data:$("#januere").serialize(),
        success:function(response){
            $('#1').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                      
                   }
               })
             });
    }})
    $('#januere').on('keyup', function(){
        $.ajax({
            url:url_1,
            type:'POST',
            dataType:'html',
            data:$("#januere").serialize(),
            success:function(response){
                $('#1').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                           
                       }
                   })
                 });
        }})
})
}
setTimeout(see_2());
function see_2(){
    $.ajax({
        url:url_2,
        type:'POST',
        dataType:'html',
        data:$("#february").serialize(),
        success:function(response){
            $('#2').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                      
                   }
               })
             });
    }})
    $('#february').on('keyup', function(){
        $.ajax({
            url:url_2,
            type:'POST',
            dataType:'html',
            data:$("#february").serialize(),
            success:function(response){
                $('#2').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                          
                       }
                   })
                 });
        }})
})
}
setTimeout(see_3());
function see_3(){
    $.ajax({
        url:url_3,
        type:'POST',
        dataType:'html',
        data:$("#march").serialize(),
        success:function(response){
            $('#3').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                     
                   }
               })
             });
    }})
    $('#march').on('keyup', function(){
        $.ajax({
            url:url_3,
            type:'POST',
            dataType:'html',
            data:$("#march").serialize(),
            success:function(response){
                $('#3').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                          
                       }
                   })
                 });
        }})
})
}
setTimeout(see_4());
function see_4(){
    $.ajax({
        url:url_4,
        type:'POST',
        dataType:'html',
        data:$("#april").serialize(),
        success:function(response){
            $('#4').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                      
                   }
               })
             });
    }})
    $('#april').on('keyup', function(){
        $.ajax({
            url:url_4,
            type:'POST',
            dataType:'html',
            data:$("#april").serialize(),
            success:function(response){
                $('#4').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                         
                       }
                   })
                 });
        }})
})
}
setTimeout(see_5());
function see_5(){
    $.ajax({
        url:url_5,
        type:'POST',
        dataType:'html',
        data:$("#may").serialize(),
        success:function(response){
            $('#5').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                     
                   }
               })
             });
    }})
    $('#may').on('keyup', function(){
        $.ajax({
            url:url_5,
            type:'POST',
            dataType:'html',
            data:$("#may").serialize(),
            success:function(response){
                $('#5').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                          
                       }
                   })
                 });
        }})
})
}
setTimeout(see_6());
function see_6(){
    $.ajax({
        url:url_6,
        type:'POST',
        dataType:'html',
        data:$("#june").serialize(),
        success:function(response){
            $('#6').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                     
                   }
               })
             });
    }})
    $('#june').on('keyup', function(){
        $.ajax({
            url:url_6,
            type:'POST',
            dataType:'html',
            data:$("#june").serialize(),
            success:function(response){
                $('#6').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                          
                       }
                   })
                 });
        }})
})
}

setTimeout(see_7());
function see_7(){
    $.ajax({
        url:url_7,
        type:'POST',
        dataType:'html',
        data:$("#july").serialize(),
        success:function(response){
            $('#7').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data:'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data); 
                }
            })
        });
    }})
    $('#july').on('keyup', function(){
        $.ajax({
            url:url_7,
            type:'POST',
            dataType:'html',
            data:$("#july").serialize(),
            success:function(response){
                $('#7').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                         
                       }
                   })
                 });
        }})
})
}
setTimeout(see_8());
function see_8(){
    $.ajax({
        url:url_8,
        type:'POST',
        dataType:'html',
        data:$("#august").serialize(),
        success:function(response){
            $('#8').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                     
                   }
               })
             });
    }})
    $('#august').on('keyup', function(){
        $.ajax({
            url:url_8,
            type:'POST',
            dataType:'html',
            data:$("#august").serialize(),
            success:function(response){
                $('#8').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                          
                       }
                   })
                 });
        }})
})
}
setTimeout(see_9());
function see_9(){
    $.ajax({
        url:url_9,
        type:'POST',
        dataType:'html',
        data:$("#september").serialize(),
        success:function(response){
            $('#9').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                     
                   }
               })
             });
    }})
    $('#september').on('keyup', function(){
        $.ajax({
            url:url_9,
            type:'POST',
            dataType:'html',
            data:$("#september").serialize(),
            success:function(response){
                $('#9').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                       
                       }
                   })
                 });
        }})
})
}
setTimeout(see_10());
function see_10(){
    $.ajax({
        url:url_10,
        type:'POST',
        dataType:'html',
        data:$("#october").serialize(),
        success:function(response){
            $('#10').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                      
                   }
               })
             });
    }})
    $('#october').on('keyup', function(){
        $.ajax({
            url:url_10,
            type:'POST',
            dataType:'html',
            data:$("#october").serialize(),
            success:function(response){
                $('#10').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                         
                       }
                   })
                 });
        }})
})
}
setTimeout(see_11());
function see_11(){
    $.ajax({
        url:url_11,
        type:'POST',
        dataType:'html',
        data:$("#november").serialize(),
        success:function(response){
            $('#11').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                       
                   }
               })
             });
    }})

    $('#november').on('keyup', function(){
        $.ajax({
            url:url_10,
            type:'POST',
            dataType:'html',
            data:$("#november").serialize(),
            success:function(response){
                $('#11').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                          
                       }
                   })
                 });
    }})
})
}
setTimeout(see_12());
function see_12(){
    $.ajax({
        url:url_12,
        type:'POST',
        dataType:'html',
        data:$("#december").serialize(),
        success:function(response){
            $('#12').html(response);
            $('a.dropdown').on('click',function(event){
                event.preventDefault();
               var id = $(this).data('id');
               $.ajax({
                   url:url_photo,
                   method:'POST',
                   dataType:'html',
                   data: 'ID='+id,
                   success:function(data){ 
                       $('#photo').html(data);
                     
                   }
               })
             });
    }})
    $('#december').on('keyup', function(){
        $.ajax({
            url:url_12,
            type:'POST',
            dataType:'html',
            data:$("#december").serialize(),
            success:function(response){
                $('#12').html(response);
                $('a.dropdown').on('click',function(event){
                    event.preventDefault();
                   var id = $(this).data('id');
                   $.ajax({
                       url:url_photo,
                       method:'POST',
                       dataType:'html',
                       data: 'ID='+id,
                       success:function(data){ 
                           $('#photo').html(data);
                         
                       }
                   })
                 });
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