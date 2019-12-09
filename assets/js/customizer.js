; (function ($) {
    //for Service Heading
    wp.customize('cust_service_heading', function (value) {
        value.bind(function (newvalue) {
            $('#service-heading').html(newvalue);
        })
    })
    
    //for Service Color Icon
    wp.customize('cust_service_icon_color', function (value) {
        value.bind(function (newvalue) {
            $('.service i').css('color', newvalue);
        })
    })
    

})(jQuery);