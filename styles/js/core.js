//mediccs page
$(document).ready(function () {

	$(".query").keyup(function () {

        field = $(this);
        main = $("#queryResults");
        loading = $("#loadingResults");

        if (field.val().length > 5) {

            main.html(" ");
            loading.show();

            setTimeout(function () {

                $.getJSON("/GerarPacientesNeymarJson?q=" + field.val() + "", function (data) {

                    loading.hide();

                    main.html("<h2>" + data.length + " Paciente(s) Encontrado(s) </h2>");

                    var items = [];
                    $.each(data, function (key, val) {
                        items.push('<div class="pacient"><div class="cell"><b><a href="/info/paciente/' + val.id + '" class="spr">' + val.nome + '(' + val.id + ')</a></b></div></div>');
                    });

                    main.append(items.join(""));
                });

            }, 3000);

            return;

        } else {
            return false;
        }

    });
	
	
    $("#medicalBox .medic").click(function () {
        $(this).toggleClass("opened").find(".formation").slideToggle();
    });

    $("#procedimentos .procedimento").click(function () {

        openCheck = $(this).attr("data-status");

        clicked = $(this);

        if (openCheck == "false") {

            clicked.removeClass("inactive").attr("data-status", "true");

            $(".inactive").fadeOut(200, function () {
                clicked.fadeIn().find("div").fadeIn();
            });

        } else {

            clicked.attr("data-status", "false").find("div").fadeOut(300, function () {
                $(".inactive").fadeIn();
                clicked.addClass("inactive");
            });

        }

    });

    $("#clientSkill").change(function () {
        especialidade = $(this).val();

        $.post("/getMedic", { espec: especialidade }, function (data) {

            $("#clientMedics").empty()

            $.each(data, function () {
                $("#clientMedics").append("<option value=" + this.id + ">" + this.nome + "</option>");
            });

        }, "json");
    });

    $("#contato").validate({
        submitHandler: function (form) {
            $("input.error").css({
                "border-color": "#f20000 !important"
            });
            $(form).submit();
        }
    });

    $("#passwordDate").keydown(function (event) {
        //if (event.witch == 18) {
        //    event.preventDefault();
        //}

        str = $(this).val()
        str = str.replace('/', '')
        $(this).val(str)
    });

    $("#passwordDate").keyup(function (event) {
        //if (event.witch == 18) {
        //    event.preventDefault();
        //}

        str = $(this).val()
        str = str.replace('/', '')
        $(this).val(str)
    });

});

$(function () {

    $('.filter').keyup(function () {

        who = $(this).attr("data-who");
        type = who = $(this).attr("data-type");

        var searchText = $(this).val(),
            $allListElements = $(who),
            $matchingListElements = $allListElements.filter(function (i, el) {
                return $(el).text().indexOf(searchText.toUpperCase()) !== -1;
            });

        $allListElements.hide();
        $matchingListElements.show();
    });

});



//////////////