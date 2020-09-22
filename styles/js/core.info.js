$(document).ready(function () {

    $(".query").keyup(function () {

        field = $(this);
        main = $("#queryResults");
        loading = $("#loadingResults");

        if (field.val().length > 5) {

            main.html(" ");
            loading.show();

            setTimeout(function () {

                $.getJSON("/info/c-paciente/GerarPacientesJson?q=" + field.val() + "", function (data) {

                    loading.hide();

                    main.html("<h2>" + data.length + " Paciente(s) Encontrado(s) </h2>");

                    var items = [];
                    $.each(data, function (key, val) {
                        items.push("<a href='/info/c-paciente/paciente/" + val.id + "' class='spr'>" + val.nome + " (" + val.id + ")</a>");
                    });

                    main.append(items.join(""));
                });

            }, 3000);

            return;

        } else {
            return false;
        }

    });


    $("#alterarSenha").validate({
        submitHandler: function (form) {
            $("input.error").css({
                "border-color": "#f20000 !important"
            });
            $(form).submit();
        }
    });

});