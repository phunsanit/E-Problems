$(document).ready(function () {
    const dateStart = new Date(0);

    let dateEnd = dateStart;

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
                    width: '60px'
                },
                {
                    orderable: false,
                    render: function (data, type, row, meta) {
                        return '<input type=checkbox value="' + row.DISTRICT_CODE + '">';
                    },
                    title: '<input class="checkAll" type="checkbox">',
                    width: '10px'
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
                    orderable: false,
                    render: function (data, type, row) {
                        return row.category;
                    },
                    title: 'Category'
                },
                {
                    data: 'vessel_id',
                    orderable: false,
                    render: function (data, type, row) {
                        return row.vessel;
                    },
                    title: 'Vessel'
                },
                {
                    data: 'service_line_id',
                    orderable: false,
                    render: function (data, type, row) {
                        return row.service_line;
                    },
                    title: 'Service Line'
                },
                {
                    data: 'support_engineer_id',
                    orderable: false,
                    render: function (data, type, row) {
                        return row.support_engineer;
                    },
                    title: 'Support Engineer'
                },
                {
                    data: 'sla_dt',
                    orderable: false,
                    render: function (data, type, row) {
                        return new Date(row.sla_dt).toLocaleDateString(locales, datetimeOptions);
                    },
                    title: 'SLA'
                },
                {
                    data: 'working_time',
                    orderable: false,
                    render: function (data, type, row) {
                        dateEnd.setMinutes(Number(row.working_time));
                
                        return window.formatDistance(dateStart, dateEnd, { includeSeconds: false });
                    },
                    title: 'Working Time'
                },
                {
                    orderable: false,
                    render: function (data, type, row) {
                        return '<a href="' + base + '/tickets/' + row.id + '" title="Show"><i class="fa-regular fa-file"></i><a> | ' +
                            '<a href="' + base + '/tickets/' + row.id + '/edit" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a> | ' +
                            '<form action="' + base + '/tickets/' + row.id + '" method="POST" style="display:inline;" onsubmit="return confirm(\'Are you sure you want to delete this ticket?\')">' +
                            '<input type="hidden" name="_method" value="DELETE">' +
                            '<input type="hidden" name="_token" value="' + csrf_token + '">' +
                            '<button type="submit" style="background:none;border:none;cursor:pointer;" title="Delete"><i class="fa-regular fa-trash-can"></i></button>' +
                            '</form>';
                    },
                    width: '100px'
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