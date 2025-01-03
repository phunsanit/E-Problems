// jQuery
import $ from "jquery";

declare global {
    interface Window {
        $: typeof $;
    }
}

window.$ = $;

// jQuery.DataTables.net
import 'datatables.net';
import 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.min.css';