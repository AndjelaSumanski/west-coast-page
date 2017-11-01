//Contact form functionality
(function () {
    var $form = $('#form');
    var $response = $form.find('#contact-response');
    var $body = $('body');

    $form.submit(function (e) {
        e.preventDefault();

        $form.addClass('sending');
        $response.empty();
        $.post($form.attr('action'), $form.serialize(), function (response) {
            try {
                response = JSON.parse(response);

                if (!response.error) {
                    $response.removeClass('error').empty();
                    $form.find('input:not([type=submit]), textarea').val('');
                }
            } catch (e) {
                response = {
                    message: 'Bad response',
                    error: true
                }
            }

            $response.html(response.message).toggleClass('error', response.error);
            $form.removeClass('sending');
        });
    });
}());
