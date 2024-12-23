$(document).ready(function () {
    $('#tickets-list').DataTable(
        {
            "ajax": {
                "headers": {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "X-Requested-With": "XMLHttpRequest"
                },
                "type": "GET",
                "url": base + "/tickets",
            },
            "columns": [
                {
                    "orderable": false,
                    "render": function (data, type, row, meta) {
                        return parseInt(meta.row) + parseInt(meta.settings._iDisplayStart) + 1;
                    },
                    "title": 'No.',
                    "width": "10px",
                },
                {
                    "orderable": false,
                    "render": function (data, type, row, meta) {
                        return '<input type="checkbox" value="' + row.DISTRICT_CODE + '">';
                    },
                    "title": '<input class="checkAll" type="checkbox">',
                    "width": "10px",
                },
                { "data": "id" },
                { "data": "category_id" },
                { "data": "vessel_id" },
                { "data": "service_lines_id" },
                { "data": "support_engineer_id" },
                { "data": "sla_dt" },
                { "data": "working_time" }
            ],
            "lengthMenu": [10, 25, 50, 75, 100],
            "order": [[0, "asc"]],
            "pageLength": 10,
            "processing": true,
            "serverSide": true,
            "stateSave": true,
        }
    );
});