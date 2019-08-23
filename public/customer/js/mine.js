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
    $('input[name="thirty_day"]').on('click', function () {
        if ($(this).val() == '1') {
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
    $('input[name="seven_day"]').on('click', function () {
        if ($(this).val() == '1') {
            $('#textboxes2').show();
        } else {
            $('#textboxes2').hide();
        }
    });
});

// QUESTION TEN TEXTBOX

$(function () {
    $('input[name="burglar_proof"]').on('click', function () {
        if ($(this).val() == '1') {
            $('#textboxes3').show();
        } else {
            $('#textboxes3').hide();
        }
    });
});


// GENERAL INFORMAION FORM      

// Question One A

$(function () {
    $('input[name="insurer_decline"]').on('click', function () {
        if ($(this).val() == '1') {
            $('#textboxes4').show();
        } else {
            $('#textboxes4').hide();
        }
    });
});

// Question One B

$(function () {
    $('input[name="special_terms"]').on('click', function () {
        if ($(this).val() == '1') {
            $('#textboxes5').show();
        } else {
            $('#textboxes5').hide();
        }
    });
});

// Question One C

$(function () {
    $('input[name="cancelled_refused_cover"]').on('click', function () {
        if ($(this).val() == '1') {
            $('#textboxes6').show();
        } else {
            $('#textboxes6').hide();
        }
    });
});

// Question One D

$(function () {
    $('input[name="increased_premium"]').on('click', function () {
        if ($(this).val() == '1') {
            $('#textboxes7').show();
        } else {
            $('#textboxes7').hide();
        }
    });
});

// Question TWO

$(function () {
    $('input[name="sustained_loss_from_mentioned_perils"]').on('click', function () {
        if ($(this).val() == '1') {
            $('#textboxes8').show();
        } else {
            $('#textboxes8').hide();
        }
    });
});
