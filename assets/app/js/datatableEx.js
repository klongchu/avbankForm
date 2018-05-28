$(".m_datatable").mDatatable({
    data: {
        type: "remote",
        source: {
            read: {
                url: "https://keenthemes.com/metronic/preview/inc/api/datatables/demos/default.php"
                //url: main_base_url+"admin/datatable"
            }
        },
        pageSize: 10,
        saveState: {
            cookie: !1,
            webstorage: !0
        },
        serverPaging: !0,
        serverFiltering: !0,
        serverSorting: !0
    },
    layout: {
        theme: "default",
        class: "",
        scroll: !0,
        height: 380,
        footer: !1
    },
    sortable: !0,
    filterable: !1,
    pagination: !0,
    columns: [{
            field: "RecordID",
            title: "#",
            sortable: !1,
            width: 40,
            selector: {
                class: "m-checkbox--solid m-checkbox--brand"
            },
            textAlign: "center"
        }, {
            field: "OrderID",
            title: "Order ID S",
            sortable: "asc",
            filterable: !1,
            width: 150,
            template: "{{OrderID}} - {{ShipCountry}}"
        }, {
            field: "ShipName",
            title: "Ship Name",
            width: 150,
            responsive: {
                visible: "lg"
            }
        }, {
            field: "ShipDate",
            title: "Ship Date"
        }, 
        {
            field: "Status",
            title: "Status",
            width: 100,
            template: function (e) {
                var t = {
                    1: {
                        title: "Pending",
                        class: "m-badge--brand"
                    },
                    2: {
                        title: "Delivered",
                        class: " m-badge--metal"
                    },
                    3: {
                        title: "Canceled",
                        class: " m-badge--primary"
                    },
                    4: {
                        title: "Success",
                        class: " m-badge--success"
                    },
                    5: {
                        title: "Info",
                        class: " m-badge--info"
                    },
                    6: {
                        title: "Danger",
                        class: " m-badge--danger"
                    },
                    7: {
                        title: "Warning",
                        class: " m-badge--warning"
                    }
                };
                return '<span class="m-badge ' + t[e.Status].class + ' m-badge--wide">' + t[e.Status].title + "</span>"
            }
        }, 
        {
            field: "Type",
            title: "Type",
            width: 100,
            template: function (e) {
                var t = {
                    1: {
                        title: "Online",
                        state: "danger"
                    },
                    2: {
                        title: "Retail",
                        state: "primary"
                    },
                    3: {
                        title: "Direct",
                        state: "accent"
                    }
                };
                return '<span class="m-badge m-badge--' + t[e.Type].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + t[e.Type].state + '">' + t[e.Type].title + "</span>"
            }
        }, 
        {
            field: "Actions",
            width: 110,
            title: "Actions",
            sortable: !1,
            overflow: "visible",
            template: function (e) {
                return '                        <div class="dropdown ' + (e.getDatatable().getPageSize() - e.getIndex() <= 4 ? "dropup" : "") + '">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    '
            }
        }]
});
