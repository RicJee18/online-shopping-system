$(document).ready(function(e){
       e.preventDefault();
       $('#cart-btn').on('click',function(){
           Swal.fire("Our First Alert", "With some body text and success icon!", "success");
       })
})