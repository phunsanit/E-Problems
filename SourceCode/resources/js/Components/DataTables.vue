<script setup lang="ts">
import { ref, onMounted, defineProps } from 'vue';
import type { PropType } from 'vue';
import axios from 'axios';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net-dt';
import DataTablesLib from 'datatables.net';

const props = defineProps<{
    ajax: {
        default: null,
        type: [String, Object]
    },
    config: {
        type: Object
    },
    caption: {
        default: '',
        type: String
    },
    class: {
        default: 'table table-bordered table-striped mt-4',
        type: String
    },
    columns: {
        default: [],
        type: Array
    },
    draw: {
        default: 1,
        type: Number
    },
    id: {
        default: 'DataTablesTa',
        type: String
    },
    length: {
        default: 10,
        type: Number
    },
    start: {
        default: 0,
        type: Number
    },
    url: {
        default: '',
        type: String
    }
}>();

onMounted(async () => {
    console.log('Fetching data...');

    console.log('Props.config', props.config);

    console.log('Props.url', props.url);

    if (props.url) {
        /*
        try {
            const uriResponse = await axios.get(props.url as string);
            console.log('URI data fetched:', uriResponse.data);
        } catch (error) {
            console.error('Error fetching URL data:', error);
        }
        */
    }

    try {
        const response = await axios.get(props.ajax, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            params: {
                draw: props.draw + 1,
                length: props.length,
                start: props.start,
            }
        });

        console.log('Data fetched:', response.data.data);

        //props.data = response.data.data;

        // Initialize DataTables after data is fetched

        //const table = $('#' + props.id).DataTable(props);

    } catch (error) {
        console.error('Error fetching data:', error);
    }
});
</script>

<style>
.dataTables_wrapper {
    padding: 10px;
}
</style>

<template>
    <DataTable>
        <caption>{{ props.caption }}</caption>
    </DataTable>
</template>