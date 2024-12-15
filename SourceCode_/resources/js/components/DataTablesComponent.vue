<template>
    <div class="container mx-auto p-4">
      <table id="users-table" class="display w-full border-collapse border border-gray-300">
        <thead>
          <tr class="bg-gray-100">
            <th class="p-2 border border-gray-300">ID</th>
            <th class="p-2 border border-gray-300">Name</th>
            <th class="p-2 border border-gray-300">Email</th>
            <th class="p-2 border border-gray-300">Created At</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </template>
  
  <script setup>
  onMounted(() => {
    $('#users-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: '/users/data',
      },
      columns: [
        { data: 'id' },
        { data: 'name' },
        { data: 'email' },
        { data: 'created_at' },
      ],
      // Tailwind styling (examples)
      "createdRow": function( row, data, dataIndex){
          $(row).addClass('border-b border-gray-300');
      },
      "drawCallback": function( settings ) {
        $('.dataTables_paginate > .pagination').addClass('flex justify-center');
        $('.paginate_button').addClass('px-3 py-1 mx-1 rounded bg-gray-200 hover:bg-gray-300');
        $('.current').addClass('bg-blue-500 text-white');
        $('.dataTables_length select').addClass('border rounded px-2 py-1');
        $('.dataTables_filter input').addClass('border rounded px-2 py-1');
      }
  
    });
  });
  </script>