
$( document ).ready(function() {
    
   $('.add-to-cart').on('click', function () {
        var cart = $('.shopping-cart');        
        var imgtodrag = $(this).parent().parent().parent().parent().find('img').eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                'opacity': '0.5',
                    'position': 'absolute',
                    'height': '170px',
                    'width': '150px',
                    'z-index': '100'
            })
                .appendTo($('body'))
                .animate({
                'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 85,
                    'height': 75
            }, 1000, 'easeInOutExpo');
            
            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                    'height': 0
            }, function () {
                $(this).detach()
            });

            $.ajax({ 
                type: "POST",
                url: "http://localhost:8080/camera/cart/addCartProduct",  
                data: { productID: 1},  
                success: function(theResponse) {
                    setTimeout(function(){
                        $("#txtSoLuongSanPham").html(theResponse);
                    },1000);
                    
                },
                error: function(){
                    alert('error!');
                }
            });
            $('html, body').animate({
		        scrollTop: $(".menu-content  li:last-child").offset().top
		    }, 1000);
        }
    });
});
