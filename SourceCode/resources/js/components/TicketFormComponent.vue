<template>
  <div class="p-4 bg-gray-100 rounded-lg">
    <h1 class="text-2xl font-bold mb-2">Hello, {{ name }}!</h1>
    <button @click="incrementCount" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Count: {{ count }}
    </button>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';

export default defineComponent({
  props: {
    name: {
      type: String,
      required: true
    }
  },
  setup() {
    const count = ref(0);

    function incrementCount() {
      count.value++;
    }

    return { count, incrementCount };
  }
});
</script>