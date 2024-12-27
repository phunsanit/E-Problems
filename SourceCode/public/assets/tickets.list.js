$(document).ready(function () {
    $('#tickets-list').DataTable(
        {
            ajax: {
                headers: {
                    'X-CSRF-TOKEN': csrf_token,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                type: 'GET',
                url: base + '/tickets'
            },
            columns: [
                {
                    orderable: false,
                    render: function (data, type, row, meta) {
                        return parseInt(meta.row) + parseInt(meta.settings._iDisplayStart) + 1;
                    },
                    title: 'No.',
                    width: '10px'
                },
                {
                    orderable: false,
                    render: function (data, type, row, meta) {
                        return '<input type=checkbox value="' + row.DISTRICT_CODE + '">';
                    },
                    title: '<input class="checkAll" type="checkbox">',
                    width: '10px',
                },
                {
                    data: 'id',
                    name: 'id',
                    orderable: true,
                    title: 'ID',
                    width: '10px'
                },
                {
                    data: 'category_id',
                    orderable: true,
                    render: function (data, type, row) {
                        return row.category;
                    },
                    title: 'Category'
                },
                {
                    data: 'vessel_id',
                    orderable: true,
                    render: function (data, type, row) {
                        return row.vessel;
                    },
                    title: 'Vessel'

                },
                {
                    data: 'service_line_id',
                    orderable: true,
                    render: function (data, type, row) {
                        return row.service_line;
                    },
                    title: 'Service Line'
                },
                {
                    data: 'support_engineer_id',
                    orderable: true,
                    render: function (data, type, row) {
                        return row.support_engineer;
                    },
                    title: 'Support Engineer'
                },
                { data: 'sla_dt' },
                { data: 'working_time' },
                {
                    orderable: false,
                    render: function (data, type, row) {
                        return '<a href="' + base + '/tickets/'+ row.id +'/edit"><i class="fa fa-pen"></i> Edit</a> | ' +
                            '<a href="' + base + '/tickets"><i class="fa fa-trash"></i> Delete</i></a>';
                    },
                    width: '200px'
                }
            ],
            lengthMenu: [10, 25, 50, 75, 100],
            order: [[0, 'asc']],
            pageLength: 10,
            processing: true,
            serverSide: true,
            stateSave: true,
        }
    );
});