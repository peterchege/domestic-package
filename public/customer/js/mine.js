// BUILDING AND CONTENTS FORM

// Question four

$(function () {
    $('input[name="rad"]').on('click', function () {
        if ($(this).val() == '1') {
            $('#textboxes').show();
        } else {
            $('#textboxes').hide();
        }
    });
});


// QUESTION SIX -this is the trigger to question 7

$(function () {
    $('input[name="dwelling_occupation"]').on('click', function () {
        if ($(this).val() == '0') {
            $('#occupation').show();
        } else {
            $('#occupation').hide();
        }
    });
});

// QUESTION EIGHT

$(function () {
    $('input[name="radio_30"]').on('click', function () {
        if ($(this).val() == 'yes') {
            $('#textboxes1').show();
        } else {
            $('#textboxes1').hide();
        }
    });
});

// QUESTION EIGHT NO - to trigger nine

$(function () {
    $('input[name="thirty_day"]').on('click', function () {
        if ($(this).val() == '0') {
            $('#inhabit').show();
        } else {
            $('#inhabit').hide();
        }
    });
});

// QUESTION NINE TEXTBOX

$(function () {
    $('input[name="radio_sev"]').on('click', function () {
        if ($(this).val() == 'yes') {
            $('#textboxes2').show();
        } else {
            $('#textboxes2').hide();
        }
    });
});

// QUESTION TEN TEXTBOX

$(function () {
    $('input[name="radio_proof"]').on('click', function () {
        if ($(this).val() == 'yes') {
            $('#textboxes3').show();
        } else {
            $('#textboxes3').hide();
        }
    });
});


// GENERAL INFORMAION FORM

// Question One A

$(function () {
    $('input[name="radio_decline"]').on('click', function () {
        if ($(this).val() == 'yes') {
            $('#textboxes4').show();
        } else {
            $('#textboxes4').hide();
        }
    });
});

// Question One B

$(function () {
    $('input[name="radio_special"]').on('click', function () {
        if ($(this).val() == 'yes') {
            $('#textboxes5').show();
        } else {
            $('#textboxes5').hide();
        }
    });
});

// Question One C

$(function () {
    $('input[name="radio_cancelled"]').on('click', function () {
        if ($(this).val() == 'yes') {
            $('#textboxes6').show();
        } else {
            $('#textboxes6').hide();
        }
    });
});

// Question One D

$(function () {
    $('input[name="radio_increase"]').on('click', function () {
        if ($(this).val() == 'yes') {
            $('#textboxes7').show();
        } else {
            $('#textboxes7').hide();
        }
    });
});

// Question TWO

$(function () {
    $('input[name="radio_loss"]').on('click', function () {
        if ($(this).val() == 'yes') {
            $('#textboxes8').show();
        } else {
            $('#textboxes8').hide();
        }
    });
});
