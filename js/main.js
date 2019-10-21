
//Contact

$('#contact-form').validate({
    submitHandler: function (form) {

        // Uzimanje podataka iz forme
        var data = $(form).serialize();

        // Uzimanje vrednosti iz action atributa
        var action = $(form).prop('action');

        // Onemogućavanje svih polja
        $('input, textarea, button').prop('disabled', true);
        // Promena natpisa na dugmetu
        $(form).find('button').text('Sending...');

        // Slanje podataka iz forme putem AJAX metode
        $.post(
            action,
            data,
            function (response) {
                console.log(response);
                if (response == 1) {
                    // Sakrij i ukloni formu
                    $(form).slideUp(function () {
                        $(this).remove();
                    });
                    // Prikaži da je poruka uspešno poslata
                    $('.alert-success').slideDown();
                } else if ( response != '') {
                    // Ako poruka nije prosleđena - pokazaće se greška
                    alert(response);
                } else {
                    alert('Serverska validacija nije prošla');
                }
            }
        );
    }
});

//Animation

$("h4").hide();

function test(elem) {
    elem.fadeIn(2000, function () {
        elem.fadeOut(2000, function () {
            test(elem.next('h4').length ? elem.next('h4') : $('h4:first'));
        });
    });
}

test($('h4:first'));

