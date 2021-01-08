//$('.bt_btn').click(function(e){
//
//    e.stopPropagation();
//     $('.bt_sm_navbar').toggleClass('show');
//    $('.bt_btn').toggleClass("is-active");
//});
//$('.bt_btn').click(function(e){
//    e.stopPropagation();
//});
//$('body,html').click(function(e){
//       $('.bt_sm_navbar').removeClass('show');
//});



$(document).ready(function(){
    
    
     $('#bt_btn1').click(function(){
       $(this).toggleClass("is-active");
      $(this).toggleClass("click");
      $('#bt_sm_navbar1').toggleClass("show");
    });
    
    
      $(document).click(function (e) {
            var container = $("#bt_sm_navbar1");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('#bt_sm_navbar1').hasClass('show')) {
                    $('#bt_sm_navbar1').removeClass('show');
                $('#bt_btn1').toggleClass("is-active");
                      $('#bt_btn1').toggleClass("click");
            }
            }
        });
    
    
    
    
    
    
    
   
    
});