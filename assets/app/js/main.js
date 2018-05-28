function validClass(e, a, r) {
    $('#' + e).addClass('form-control-' + a);
    $('#' + e).removeClass('form-control-' + r);
}

function returnDanger(e,f) {
    $.notify(e, {
        type: "danger"
    });
    $('#'+f).focus();
}
function returnSuccess(e) {
    $.notify(e, {
        type: "success"
    });
}