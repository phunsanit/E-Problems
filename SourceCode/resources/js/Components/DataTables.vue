<template>
    <DataTable :data="tableData" :columns="columns" :options="options" table-id="myTable" table-class="table table-bordered table-striped mt-4"/>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue';
import axios from 'axios';
import type { DataTableOptions } from 'datatables.net';

const tableData = ref<any[]>([]);
const columns = ref([
    { data: 'id', title: 'ID' },
    { data: 'name', title: 'Name' },
    { data: 'email', title: 'Email' },
]);

const options = ref<DataTableOptions>({
    order: [[0, 'asc']],
    pageLength: 10
});

onMounted(async () => {
    try {
        const response = await axios.get('/api/users');
        tableData.value = response.data.data;
    } catch (error) {
        console.error('Error fetching data:', error);
    }
});
</script>