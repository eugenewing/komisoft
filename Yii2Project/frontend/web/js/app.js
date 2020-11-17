function showDevicesModal (url, storeName) {
    id = $.ajax({
        url: url,
        data: {id: storeName},
        type: 'GET',
        success: function (data) {
            $('#modal').modal('show').find('#modalContent').html(data);
            $('#modal-title').text(storeName);
        }
    });
    return false;
}

function openNewPage (e, event) {
    event.preventDefault();
    $('#modal').modal('hide');
    window.open(e.getAttribute('href'));
}

function tr1_addEffect1 () {
    if ($("#kv1").css("display") == "none") {$("#kv1").show();}
    else {$("#kv1").hide();}
}

function tr1_addEffect2 () {
    if ($("#kv2").css("display") == "none") {$("#kv2").slideDown("slow");}
    else {$("#kv2").hide();}
}

function tr1_addEffect3 () {
    if ($("#kv3").css("display") == "none") {$("#kv3").show().animate({fontSize:"36px"},3000);}
    else {$("#kv3").hide().attr("style",{fontSize:"14px"});}
}

function tr2_addStyle1 () {
    if ($("#st1").css("background-color") == 'rgb(255, 0, 0)') {$("#st1").css("background-color","yellow"); $("#b1").html("Сделать 1 блок красным");}
    else {$("#st1").css("background-color","red"); $("#b1").html("Вернуть как было");}
}

function tr2_addStyle2 () {
    if ($("p.withBorder").attr("style") == "border: 1px solid blue;") {$("p.withBorder").css("border","none"); $("#b2").html("Обвести текст 2 блока синей рамкой");}
    else {$("p.withBorder").css("border","1px solid blue"); $("#b2").html("Вернуть как было");}
}

function tr2_addStyle3 () {
    if ($("#st3").attr("style") == "font-weight: bold;") {$("#st1,#st3").css("fontWeight","normal"); $("#b3").html("Сделать шрифт в 1 и 3 блоках жирным");}
    else {$("#st1,#st3").css("fontWeight","bold"); $("#b3").html("Вернуть как было");}
}