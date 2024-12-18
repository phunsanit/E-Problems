<template>
    <div>
      <h2>Child Component</h2>
      <form @submit.prevent="handleSubmit">
        <input type="text" v-model="filterText" placeholder="Filter data..." />
        <button type="submit">Filter</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        filterText: '',
      };
    },
    methods: {
      handleSubmit() {
        // Emit an event to MasterComponent with filter data
        this.$emit('update', { filterText: this.filterText });
      },
    },
  };
  </script>
  
  <style scoped>
    /* Optional styling for your child component */
  </style>