<!doctype html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--IE compatibility meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!--first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>FRISOGOLD - Management of CMPA</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link rel="stylesheet" href="/css/all.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="icon" type="image/png" href="https://app.webinarjam.com/pagebuilder/assets/img/favicon/favicon-192.png"/>

    <style>
        .btn-default {
            color: #23282c;
            background-color: #f0f3f5;
            border-color: #f0f3f5;
        }

        .custom-select-sm {
            height: calc(1.5em + .5rem + 2px);
            padding-top: .25rem;
            padding-bottom: .25rem;
            padding-left: .5rem;
            font-size: .765625rem;
        }
        .custom-control-label::before, .custom-file-label, .custom-select {
            transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        input[type="search"]{
            background-color: #a29e9ecc;
            padding: 0 10px;
            border-radius: 6px;
            color: #fff;
        }
        .dt-buttons .btn{
            margin-right: 10px;
        }
        .dt-buttons{
            margin-left: 15px;
        }
        .dataTables_length{
            margin-top: 5px;
        }
        select{
            border: solid 1px;
            padding: 2px 5px;
        }
        .dataTables_paginate{
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: .25rem;
            margin: 2px 0;
            white-space: nowrap;
            justify-content: flex-end;
        }
        .dataTables_paginate a {
            position: relative;
            display: inline-block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #20a8d8 !important;
            background-color: #fff;
            border: 1px solid #c8ced3;
            cursor: pointer;

        }

        .dataTables_paginate .current{
            color: #ececec !important;
            background-color: #007bff;
        }
    </style>
</head>

<body>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 div-f">
                <h3>Management of CMPA</h3>
                <h5>Registered Doctors</h5>
            </div>
            <!--col-lg-12-->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered datatable" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>SCFHS</th>
                                    <th>Specialty</th>
                                    <th>Hospital</th>
                                    <th>Attended Live</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item['name']}}</td>
                                        <td>{{$item['email']}}</td>
                                        <td>{{$item['phone']}}</td>
                                        <td>{{$item['scfhs']}}</td>
                                        <td>{{$item['specialty']}}</td>
                                        <td>{{$item['hospital']}}</td>
                                        <td>{{$item['attended_live']}}</td>
                                        <td>{{$item['date']}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>SCFHS</th>
                                    <th>Specialty</th>
                                    <th>Hospital</th>
                                    <th>Attended Live</th>
                                    <th>Date</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--col-lg-6-->


        </div>
        <!--row-->
    </div>
    <!--container-->
</section>
<!--content-->
<div class="clear"></div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/all.js"></script>
<script>
    $(function () {
        let copyButtonTrans = 'copy'
        let csvButtonTrans = 'csv'
        let excelButtonTrans = 'excel'
        let pdfButtonTrans = 'pdf'
        let printButtonTrans = 'print'
        let colvisButtonTrans = 'colvis'

        let languages = {
            'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
        };

        $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {className: 'btn'})
        $.extend(true, $.fn.dataTable.defaults, {
            language: {
                url: languages['{{ app()->getLocale() }}']
            },
            columnDefs: [{
                // orderable: false,
                // className: 'select-checkbox',
                // targets: 0
            }, {
                orderable: false,
                searchable: false,
                targets: -1
            }],
            order: [],
            scrollX: true,
            pageLength: 100,
            dom: 'lBfrtip<"actions">',
            buttons: [
                {
                    extend: 'copy',
                    className: 'btn-default',
                    text: copyButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    className: 'btn-default',
                    text: csvButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn-default',
                    text: excelButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    className: 'btn-default',
                    text: pdfButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn-default',
                    text: printButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'colvis',
                    className: 'btn-default',
                    text: colvisButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                }
            ]
        });

        $.fn.dataTable.ext.classes.sPageButton = '';
    });


    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

        $.extend(true, $.fn.dataTable.defaults, {
            order: [],
            pageLength: 25,
        });
        $('.datatable:not(.ajaxTable)').DataTable({buttons: dtButtons})
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    })

</script>
</body>

</html>

