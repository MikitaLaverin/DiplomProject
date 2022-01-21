var url_cosmetics='php/cosmetics/cosmetics.php';
var url_cosmetics1='php/cosmetics/cosmeticsOne.php';
var url_cosmetics2='php/cosmetics/cosmeticsTwo.php';
setTimeout(cosmetics());
function cosmetics(){
    $.ajax({
    url: url_cosmetics,
    method:'GET',
   dataType:'html',
   success: function(data){
 $('#NameFamil').html(data);
   }
});
}

setTimeout(cosmetics1());
function cosmetics1(){
    $.ajax({
    url: url_cosmetics1,
    method:'GET',
   dataType:'html',
   success: function(data){
 $('#spisokZack').html(data);
   }
});
}
var url_profile='../php/user/editing.php';
setTimeout(profile());
function profile(){
    $.ajax({
    url: url_profile,
    method:'GET',
   dataType:'html',
   success: function(data){
 $('#proUser').html(data);
   }
});
}

