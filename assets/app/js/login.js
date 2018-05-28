
function captcha() {
    $.ajax({
	type: 'GET',
	url: main_base_url + 'captcha/load.php?func=captcha',
	beforeSend: function ()
	{
	    //            $('#se-pre-con').fadeIn(100);
	},
	success: function (data) {

	    $("#captcha").attr("src", data);
	    //window.alert(main_base_url);

	},
	error: function (data) {

	}

    });


}
captcha();
/**
 * func_captcha
 */
function func_captcha(captcha) {
    //	console.log(captcha);
    $.ajax({
	type: 'POST',
	url: main_base_url + 'captcha/check.php',
	data: {
	    'captcha': captcha
	},
	beforeSend: function ()
	{
	    //            $('#se-pre-con').fadeIn(100);
	},
	success: function (data) {

	    //            console.log(data);
	    $('#txt_captcha_chk').val(data);
	    if (data == '1') {
		$('#btn_login').prop("disabled", false);
	    } else {
		$('#btn_login').prop("disabled", true);
	    }


	},
	error: function (data) {

	}

    });
}
$('#txt_captcha').keyup(function () {
    var captcha = $('#txt_captcha').val();
    func_captcha(captcha);
    var s_password = $('#s_password').val();
    var s_username = $('#s_username').val();
    func_username(s_username);
    func_password(s_password, s_username);
});
$('#txt_captcha').blur(function () {
    var captcha = $('#txt_captcha').val();
    func_captcha(captcha);
    var s_password = $('#s_password').val();
    var s_username = $('#s_username').val();
    func_username(s_username);
    func_password(s_password, s_username);
});
/**
 * func_username
 */
function func_username(s_username) {
    //	console.log(s_username);
    $.ajax({
	type: 'POST',
	url: main_base_url + 'login/check_username',
	data: {
	    's_username': s_username
	},
	beforeSend: function ()
	{
	    //            $('#se-pre-con').fadeIn(100);
	},
	success: function (data) {

	    //            console.log(data);
	    $('#txt_s_username_chk').val(data);
	    /*if(data == '1'){
	     $('#btn_login').prop("disabled", false);
	     }else{
	     $('#btn_login').prop("disabled", true);
	     }*/
	},
	error: function (data) {

	}

    });
}
$('#s_username').keyup(function () {
    var s_username = $('#s_username').val();
    func_username(s_username);
});
$('#s_username').blur(function () {
    var s_username = $('#s_username').val();
    func_username(s_username);
});
/**
 * captcha
 */
function func_password(s_password, s_username) {
    //	console.log(s_password);
    $.ajax({
	type: 'POST',
	url: main_base_url + 'login/check_password',
	data: {
	    's_username': s_username,
	    's_password': s_password,
	},
	beforeSend: function ()
	{
	    //            $('#se-pre-con').fadeIn(100);
	},
	success: function (data) {

	    //            console.log(data);
	    $('#txt_s_password_chk').val(data);
	    /*if(data == '1'){
	     $('#btn_login').prop("disabled", false);
	     }else{
	     $('#btn_login').prop("disabled", true);
	     }*/


	},
	error: function (data) {

	}

    });
}
$('#s_password').keyup(function () {
    var s_password = $('#s_password').val();
    var s_username = $('#s_username').val();
    func_password(s_password, s_username);
});
$('#s_password').blur(function () {
    var s_password = $('#s_password').val();
    var s_username = $('#s_username').val();
    func_password(s_password, s_username);
});
/**
 * check_login
 */
function check_login() {

    var s_captcha = $('#txt_captcha').val();
    func_captcha(s_captcha);
    var s_password = $('#s_password').val();
    var s_username = $('#s_username').val();
    func_username(s_username);
    func_password(s_password, s_username);

    var username = $('#txt_s_username_chk').val();
    var password = $('#txt_s_password_chk').val();
    var captcha = $('#txt_captcha_chk').val();

    if (username == 0) {
	$.notify(" Not found Username , Please try again !!! ");
	$('#username').focus();
	return false;
    }

    if (password == 0) {
	$.notify(" Password wrong , Please try again !!! ");
	$('#password').focus();
	return false;
    }

    if (captcha == 0) {
	$.notify(" Captcha wrong , Please try again !!! ");
	$('#txt_captcha').focus();
	return false;
    }

}
