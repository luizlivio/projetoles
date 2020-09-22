$(document).ready(function () {

    $(".query").keyup(function () {

        field = $(this);
        main = $("#queryResults");
        loading = $("#loadingResults");

        if (field.val().length > 5) {

            main.html(" ");
            loading.show();

            setTimeout(function () {

                $.getJSON("/medic/GerarPacientesHemo?q=" + field.val() + "", function (data) {

                    loading.hide();

                    main.html("<h2>" + data.length + " Paciente(s) Encontrado(s) </h2>");

                    var items = [];
                    $.each(data, function (key, val) {
                        items.push("<a href='/medic/Pesquisa2/" + val.id + "' class='spr'>" + val.nome + "</a>");
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

function enviaRecados() {

    var campo1 = document.recadoform.clientSkill.value;
    var campo2 = document.recadoform.texto.value;

    $.post("/info/enviarRecado", { clientSkill: campo1, texto: campo2 }, function (data) {

        if (data) {
            document.recadoform.reset();
            alert("Recado Enviado");
        } else {
            alert("Error");
        }

    }, "json");
}

function editaAtivos() {

    var campo1 = document.editaativoform.numeropatrimonio.value;
    var campo2 = document.editaativoform.descricaopatrimonio.value;

    $.post("/info/editarAtivos", { numeropatrimonio: campo1, descricaopatrimonio: campo2 }, function (data) {

        if (data) {
            document.editaativoform.reset();
            alert("Ativo Editado");
        } else {
            alert("Error");
        }

    }, "json");
}