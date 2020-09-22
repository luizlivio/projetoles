$(document).ready(function () {

    $(".ajax").click(function (e) {

        e.preventDefault();

        sendMe = $(this).attr("href");

        $("#main").load(sendMe + "?loadajax=true");

        //window.location = sendMe;

    });

    $(".appMenu ul li a").click(function(){
        $(this).parent("li").find("div").slideToggle();
    });

});

$(function () {

    $('.filter').keyup(function () {

        who = $(this).attr("data-who");
        type = who = $(this).attr("data-type");

        if (type == "table") {
            var searchText = $(this).val(),
                $allListElements = $(who + ' .live'),
                $matchingListElements = $allListElements.filter(function (i, el) {
                    return $(el).text().indexOf(searchText) !== -1;
                });

            $allListElements.parent().hide();
            $matchingListElements.parent().show();
        } else {
            var searchText = $(this).val(),
                $allListElements = $(who + '> li'),
                $matchingListElements = $allListElements.filter(function (i, el) {
                    return $(el).text().indexOf(searchText) !== -1;
                });

            $allListElements.hide();
            $matchingListElements.show();

        }
    });

});

function salvarConvenio() {

    var campo1 = document.convenio.nome.value;
    var campo2 = document.convenio.url.value;

    $.post("/panel/saveConvenio", { convenio: campo1, site: campo2 }, function (data) {

        if (data) {
            document.convenio.nome.value = "";
            document.convenio.url.value = "";

            alert("Cadastrado");
        } else {
            alert("Error");
        }

    }, "json");
}

function salvarAnamnese() {

    var campo1 = document.anamnese.nome.value;
    var campo2 = document.anamnese.sexo.value;
	var campo3 = document.anamnese.idade.value;
    var campo4 = document.anamnese.peso.value;
	var campo5 = document.anamnese.pa.value;
    var campo6 = document.anamnese.fc.value;
	var campo7 = document.anamnese.altura.value;
    var campo8 = document.anamnese.circunferencia_abdominal.value;
	var campo9 = document.anamnese.colesterol.value;
    var campo10 = document.anamnese.has.value;
	var campo11 = document.anamnese.dm.value;
    var campo12 = document.anamnese.dlp.value;
	var campo13 = document.anamnese.tabagista.value;
    var campo14 = document.anamnese.infarto.value;
	var campo15 = document.anamnese.apneia_do_sono.value;
    var campo16 = document.anamnese.dac_familiar.value;

    $.post("/saveAnamnese", { nome: campo1, sexo: campo2, idade: campo3, peso: campo4, pa: campo5, fc: campo6, altura: campo7, circunferencia_abdominal: campo8, colesterol: campo9, has: campo10, dm: campo11, dlp: campo12, tabagista: campo13, infarto: campo14, apneia_do_sono: campo15, dac_familiar: campo16 }, function (data) {

        if (data) {
            document.anamnese.reset();
            alert("Cadastrado");
        } else {
            alert("Error");
        }

    }, "json");
}

function salvarobesidade() {

    var campo1 = document.obesidade.nome.value;
    var campo2 = document.obesidade.sexo.value;
	var campo3 = document.obesidade.idade.value;
	var campo4 = document.obesidade.telefone.value;
    var campo5 = document.obesidade.peso.value;
	var campo6 = document.obesidade.pa.value;
    var campo7 = document.obesidade.fc.value;
	var campo8 = document.obesidade.altura.value;
    var campo9 = document.obesidade.circunferencia_abdominal.value;
	var campo10 = document.obesidade.anamnese_has.value;
    var campo11 = document.obesidade.anamnese_hiperglicemia.value;
	var campo12 = document.obesidade.anamnese_apneiasono.value;
    var campo13 = document.obesidade.anamnese_tiroidopatia.value;
	var campo14 = document.obesidade.anamnese_tabagista.value;
	var campo15 = document.obesidade.anamnese_hipercolesterolemia.value;
    var campo16 = document.obesidade.familiar_colesterol.value;
	var campo17 = document.obesidade.familiar_has.value;
    var campo18 = document.obesidade.familiar_dm.value;
	var campo19 = document.obesidade.familiar_dlp.value;
	var campo20 = document.obesidade.familiar_infarto.value;
	var campo21 = document.obesidade.familiar_dac.value;
	

    $.post("/saveobesidade", { nome: campo1, sexo: campo2, idade: campo3, telefone: campo4, peso: campo5, pa: campo6, fc: campo7, altura: campo8, circunferencia_abdominal: campo9, anamnese_has: campo10, anamnese_hiperglicemia: campo11, anamnese_apneiasono: campo12, anamnese_tiroidopatia: campo13, anamnese_tabagista: campo14, anamnese_hipercolesterolemia: campo15 ,familiar_colesterol: campo16, familiar_has: campo17, familiar_dm: campo18 , familiar_dlp: campo19 , familiar_infarto: campo20 , familiar_dac: campo21 }, function (data) {

        if (data) {
            document.obesidade.reset();
            alert("Cadastrado");
        } else {
            alert("Error");
        }

    }, "json");
}

function salvararterial() {

    var campo1 = document.arterial.nome.value;
    var campo2 = document.arterial.sexo.value;
	var campo3 = document.arterial.telefone.value;
	var campo4 = document.arterial.idade.value;
    var campo5 = document.arterial.convenio.value;
	var campo6 = document.arterial.familiar_medicamentos.value;
    var campo7 = document.arterial.fatores_colesterol.value;
	var campo8 = document.arterial.fatores_diabetico.value;
    var campo9 = document.arterial.fatores_renal.value;
	var campo10 = document.arterial.fatores_pressao.value;
    var campo11 = document.arterial.fatores_tonturas.value;
	var campo12 = document.arterial.fatores_infarto.value;
    var campo13 = document.arterial.fatores_fumante.value;
	var campo14 = document.arterial.fatores_fisica.value;
	var campo15 = document.arterial.fatores_dores.value;
    var campo16 = document.arterial.familiar_infarto.value;
	var campo17 = document.arterial.familiar_avc.value;
    var campo18 = document.arterial.dados_peso.value;
	var campo19 = document.arterial.dados_altura.value;
	var campo20 = document.arterial.dados_imc.value;
	var campo21 = document.arterial.dados_circunferencia.value;
	var campo22 = document.arterial.dados_glicemia.value;
	var campo23 = document.arterial.dados_arterial1.value;
    var campo24 = document.arterial.dados_arterial2.value;
	var campo25 = document.arterial.dados_arterial3.value;
    var campo26 = document.arterial.dados_arterial4.value;
	var campo27 = document.arterial.dados_itbdireito.value;
	var campo28 = document.arterial.dados_itbesquerdo.value;
	var campo29 = document.arterial.dados_observacoes.value;

    $.post("/savearterial", { nome: campo1, sexo: campo2, telefone: campo3, idade: campo4, convenio: campo5, familiar_medicamentos: campo6, fatores_colesterol: campo7, fatores_diabetico: campo8, fatores_renal: campo9, fatores_pressao: campo10, fatores_tonturas: campo11, fatores_infarto: campo12, fatores_fumante: campo13, fatores_fisica: campo14, fatores_dores: campo15 ,familiar_infarto: campo16, familiar_avc: campo17, dados_peso: campo18 , dados_altura: campo19 , dados_imc: campo20 , dados_circunferencia: campo21 , dados_glicemia: campo22 , dados_arterial1: campo23 , dados_arterial2: campo24 , dados_arterial3: campo25 , dados_arterial4: campo26 , dados_itbdireito: campo27 , dados_itbesquerdo: campo28 , dados_observacoes: campo29 }, function (data) {

        if (data) {
            document.arterial.reset();
            alert("Cadastrado");
        } else {
            alert("Error");
        }

    }, "json");
}

function enviaRecados() {

    var campo1 = document.recadoform.clientSkill.value;
    var campo2 = document.recadoform.texto.value;

    $.post("/enviarRecado", { clientSkill: campo1, texto: campo2 }, function (data) {

        if (data) {
            document.recadoform.reset();
            alert("Cadastrado");
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

function enviaRecados2() {

    var campo1 = document.recadoform.clientSkill.value;
    var campo2 = document.recadoform.texto.value;

    $.post("http://www.angiocorpore.com.br/panel/enviarRecado2", { clientSkill: campo1, texto: campo2 }, function (data) {

        if (data) {
            document.recadoform.reset();
            alert("Cadastrado");
        } else {
            alert("Error");
        }

    }, "json");
}

function novoLink() {

    var campo1 = document.recadoform.clientSkill.value;
    var campo2 = document.recadoform.texto.value;

    $.post("http://www.angiocorpore.com.br/panel/novo_link", { clientSkill: campo1, texto: campo2 }, function (data) {

        if (data) {
            document.recadoform.reset();
            alert("Cadastrado");
        } else {
            alert("Error");
        }

    }, "json");
}

function salvarneymar() {

    var campo1 = document.neymar1.idneymar.value;
    var campo2 = document.neymar1.nome.value;
	var campo3 = document.neymar1.peso.value;
    var campo4 = document.neymar1.altura.value;
	var campo5 = document.neymar1.idade.value;
    var campo6 = document.neymar1.sexo.value;
	var campo7 = document.neymar1.naturalidade.value;
    var campo8 = document.neymar1.qualnaturalidade.value;
	var campo9 = document.neymar1.religiao.value;
    var campo10 = document.neymar1.doencaprevias.value;
	var campo11 = document.neymar1.doencacardiaca.value;
    var campo12 = document.neymar1.carteiravacinal.value;
	var campo13 = document.neymar1.dorpeito.value;
    var campo14 = document.neymar1.desmaio.value;
	var campo15 = document.neymar1.doencafamiliar.value;
    var campo16 = document.neymar1.fadiga.value;
	var campo17 = document.neymar1.febre.value;
    var campo18 = document.neymar1.tosse.value;
	var campo19 = document.neymar1.diabetes.value;
    var campo20 = document.neymar1.asma.value;
	var campo21 = document.neymar1.vesicula.value;
    var campo22 = document.neymar1.internado.value;
	var campo23	= document.neymar1.pqinternacao.value;
    var campo24 = document.neymar1.ecg.value;
	var campo25 = document.neymar1.glicemia.value;
    var campo26 = document.neymar1.colesterol.value;
	var campo27 = document.neymar1.ureia.value;
	var campo28	= document.neymar1.creatinina.value;
    var campo29 = document.neymar1.ppf.value;
	var campo30 = document.neymar1.urina.value;
    var campo31 = document.neymar1.rx.value;
	
    $.post("/saveneymar1", { idneymar: campo1, nome: campo2, peso: campo3, altura: campo4, idade: campo5,
	sexo: campo6, naturalidade: campo7, qualnaturalidade: campo8, religiao: campo9, doencaprevias: campo10, doencacardiaca: campo11,
	carteiravacinal: campo12, dorpeito: campo13, desmaio: campo14, doencafamiliar: campo15 ,fadiga: campo16, febre: campo17, tosse: campo18 ,
	diabetes: campo19 , asma: campo20 , vesicula: campo21 , internado: campo22 , pqinternacao: campo23 , ecg: campo24 , glicemia: campo25 ,
	colesterol: campo26 , ureia: campo27 , creatinina: campo28 , ppf: campo29, urina: campo30, rx: campo31 }, function (data) {

        if (data) {
            document.neymar1.reset();
            alert("Cadastrado");
        } else {
            alert("Error");
        }

    }, "json");
}