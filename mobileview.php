<script>
    
     $(window).resize(function() {
    if ( screen.width < 768 ){
                
    $(".list-group-item").click(function (){
       $(".list-group").toggle();

    });
        $(".list-group").hide();
            }
    else {
         $(".list-group").show();
    }
     });
  
    $(".mobileSideBar").click(function(){
	
        $(".list-group").toggle(500);

       
    });
/*
$(".mobileSideBar").click(function(){
  $(".list-group").toggle();
}); */
</script>