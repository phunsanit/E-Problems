<script setup lang="ts">
import { ref, onMounted, defineProps } from 'vue';
import axios from 'axios';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
import type { DataTableOptions } from 'datatables.net';

const props = defineProps<{
    caption: {
        default: '',
        type: String
    },
    class: {
        default: 'table table-bordered table-striped mt-4',
        type: String
    },
    columns: {
        default: () => [
            { data: 'no', title: 'No' },
            { data: 'id', title: 'ID' },
            { data: 'title', title: 'Title' },
            { data: 'action', title: 'Action' }
        ]
    },
    data: {
        default: () => [
            [1, 2, "", ""],
            [2, 3, "", ""],
        ]
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
        default: null,
        type: [String, Object]
    }
}>();

const tableData = ref<any[]>([]);
const columns = ref([
    { data: 'id', title: 'ID' },
    { data: 'name', title: 'Name' },
    { data: 'email', title: 'Email' },
]);
const data = [
    [1, 2],
    [3, 4],
];

const options = ref<DataTableOptions>({
    order: [[0, 'asc']],
    pageLength: 10
});

onMounted(async () => {
    console.log('Fetching data...');
    try {
        const response = await axios.get(props.url, {
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

        tableData.value = response.data.data;

        console.log('Data fetched:', response.data.data);

        // Initialize DataTables after data is fetched

        const table = $('#' + props.id).DataTable(options.value);

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
    <p>DataTables</p>
    <caption>{{ props.caption }}</caption>
    <DataTable :columns="props.columns" :data="props.data" :options="options"></DataTable>
</template>