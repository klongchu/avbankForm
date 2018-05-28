function initialDataTable(initial) {
    if (!initial) {
        table.destroy();
        table = $('#list-datatable');
    }
    //alert(main_base_url);
    $.ajax({
        type: 'GET',
        url: main_base_url + 'staff/datatable',
        dataType: 'json',
        cache: false,
        beforeSend: function () {
//            blockui_always();
        },
        success: function (res) {
            var jsonColumn = [ {
                    field: "s_username",
                    title: "ชื่อผู้ใช้",
                    sortable: 'asc',
                }, {
                    field: "s_firstname",
                    title: "ชื่อจริง",
                    sortable: 'asc',
                    template: function (row) {
                        return row.s_firstname+' '+row.s_lastname;
                    }
                }, {
                    field: "s_level",
                    title: "ระดับ",
                    sortable: 'asc',
                    template: function (row) {
                        return 'เจ้าหน้าที่';
                    }
                }, {
                    field: "s_status",
                    title: "สถานะ",
                    width: 100,
                    sortable: 'asc',
                    template: function (row) {
                        return initialStatusAC(row.status);
                    }
                }, {
                    field: "s_password",
                    width: 110,
                    title: "Actions",
                    sortable: !1,
                    overflow: "visible",
                    template: function (row) {
                        return '<a href="'+main_base_url+'staff/form?id='+row.id+'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\t\t\t\t\t\t\t<i class="la la-edit"></i>\t\t\t\t\t\t</a>'
                    }
                }];
            initialDataTables(table, jsonColumn, res.data);


        },
        error: function (data) {
            console.log(data);
        }

    });
}

function validUser(username) {
    var id = $('#id').val();
    //alert(validUser)
    if (id == 0) {
        $.ajax({
            type: 'POST',
            url: main_base_url + "admin/validUser",
            data: {username: username},
            beforeSend: function () {
                //$('#se-pre-con').fadeIn(100);
            },
            success: function (data) {
                console.log(data)
                if (data > 0) {
                    $('#chk_username').val('0');
                    validClass('s_username', 'danger', 'success');
                } else {
                    $('#chk_username').val('1');
                    validClass('s_username', 'success', 'danger');
                }
            },
            error: function (data) {
                console.log('Error !!')
            }
        });
    }
    console.log(username)

}

function save() {
    var chk_username = $('#chk_username').val();
    var s_firstname = $('#s_firstname').val();
    var s_phone = $('#s_phone').val();
    if (chk_username == 0) {
        var txt = " ชื่อผู้ใช้งานนี้มีคนใช้แล้วค่ะ";
        var f = "s_username";
        returnDanger(txt, f);
        return false;
    }
    if (s_firstname == '') {
        var txt = " กรุณากรอกชื่อจริงด้วยค่ะ";
        var f = "s_firstname";
        returnDanger(txt, f);
        return false;
    }
    if (s_phone == '') {
        var txt = " กรุณากรอกเบอร์โทรศัพท์ด้วยค่ะ";
        var f = "s_phone";
        returnDanger(txt, f);
        return false;
    }

    var dataform = $('#dataform').serialize();
    $.ajax({
        type: 'POST',
        url: main_base_url + "admin/Postdata",
        data: dataform,
        beforeSend: function () {
            //$('#se-pre-con').fadeIn(100);
        },
        success: function (data) {
            console.log(data)
            var txt = " บันทึกข้อมูลสำเร็จ";
            returnSuccess(txt);
            var url = main_base_url + data;
            console.log(url)
            setTimeout(function () {
                location.replace(url);
            }, 1000);
        },
        error: function (data) {
            console.log('Error !!')
        }
    });
}