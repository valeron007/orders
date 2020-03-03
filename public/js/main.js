
$('#receive-order').click(function (e) {
    e.preventDefault();
    var data_form = {};
    var data = $('#order-form');


    if ($('#exampleInputName')[0].value == ''){
        $('.error').css('display', 'block').text('Введите имя заказчика');
        return;
    }

    if ($('#exampleInputPhone')[0].value == ''){
        $('.error').css('display', 'block').text('Введите номер заказчика');
        return;
    }

    if ($('#exampleInputPrice')[0].value == ''){
        $('.error').css('display', 'block').text('Введите стоимость заказа');
        return;
    }

    if ($('#delivery')[0].value == ''){
        $('.error').css('display', 'block').text('Выберите время доставки');
        return;
    }

    for (let i = 1; i < data[0].elements.length; i++){
        if ($(data[0].elements[i])[0].type != 'select-one' && $(data[0].elements[i])[0].value != ''){
            data_form[$(data[0].elements[i])[0].name] =  $(data[0].elements[i])[0].value;
        }
    }

    data_form["tarif"] = $('#exampleFormControlTarif')[0].value.toString();

    data_form['adress'] = $('#exampleFormControlAdress option:selected').val().toString();

    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: 'POST',

        url: 'order/create',
        data: {
            "_token":token,
            "order":data_form
        },
        success: function (result) {
            console.log(result);
        },
        error: function(error){
            console.log(error);
        },
        // dataType: 'json'
    });
});

$('#exampleFormControlTarif').click(function (e) {
    var id = $(this).val();

    // $('#exampleFormControlAdress').attr('tarif-id', id);

    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: 'POST',

        url: 'order/tarifs',
        data: {
            "_token":token,
            "id":id
        },
        success: function (result) {

            var adres = JSON.parse(result);
            $('#exampleFormControlAdress').children('option').remove();
            for (let i = 0; i < adres.length; i++){
                let option = document.createElement("option");
                option.text = adres[i].name;
                $(option).val(adres[i].id);
                $('#exampleFormControlAdress').append(option);
            }
            $('#adresses').removeClass('d-none');
        },
        error: function(error){
            console.log(error);
        },

    });

});

