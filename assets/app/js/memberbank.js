function initialDataTable(initial,id) {
    if (!initial) {
        table.destroy();
        table = $('#list-datatable');
    }
    //alert(main_base_url);
    $.ajax({
        type: 'GET',
        url: main_base_url + 'memberbank/datatable?id='+id,
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
                    field: "s_account_name",
                    title: "ชื่อบัญชี",
                    sortable: 'asc'
                }, {
                    field: "s_account_no",
                    title: "เลขบัญชี",
                    sortable: 'asc',

                }, {
                    field: "bankname",
                    title: "ธนาคาร",
                    sortable: 'asc'
                }, {
                    field: "s_status",
                    title: "สถานะ",
                    width: 100,
                    sortable: 'asc',
                    template: function (row) {
                        return initialStatusAC(row.status);
                    }
                }, {
                    field: "i_id",
                    width: 110,
                    title: "Actions",
                    sortable: !1,
                    overflow: "visible",
                    template: function (row) {
                        //var act = '<a href="'+main_base_url+'memberbank?id='+row.i_id+'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Bank">\t\t\t\t\t\t\t<i class="fa fa-bank"></i>\t\t\t\t\t\t</a>'
                         var act = '<a href="'+main_base_url+'memberbank/form?id='+row.i_id+'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\t\t\t\t\t\t\t<i class="la la-edit"></i>\t\t\t\t\t\t</a>'
                        return act;
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
            url: main_base_url + "memberbank/validUser",
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

    var s_account_no = $('#s_account_no').val();
    var s_account_name = $('#s_account_name').val();
    if (s_account_no == 0) {
        var txt = " กรุณากรอกเลขบัญชีด้วยค่ะ";
        var f = "s_account_no";
        returnDanger(txt, f);
        return false;
    }
    if (s_account_name == '') {
        var txt = " กรุณากรอกชื่อบัญชีด้วยค่ะ";
        var f = "s_account_name";
        returnDanger(txt, f);
        return false;
    }


    var dataform = $('#dataform').serialize();
    //alert(dataform)
    $.ajax({
        type: 'POST',
        url: main_base_url + "memberbank/Postdata",
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