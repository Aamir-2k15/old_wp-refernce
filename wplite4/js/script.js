(function ($) {
    $(document).ready(function () {
        $('nav.main-nav li.dropdown').addClass('drop-down');
        $('#message').click(function () {
            $(this).addClass('msg-expand');
        });

    });
})(jQuery);	