<script setup lang="ts">
import { ref, onMounted, defineProps } from 'vue';
import { format } from 'date-fns';
import { enUS } from 'date-fns/locale';

const props = defineProps<{
  datetimeString: string;
}>();

const formattedDateTime = ref<string | null>(null);

onMounted(() => {
  if (props.datetimeString) {
    const date = new Date(props.datetimeString);
    // Get the user's locale (you might need more robust logic here)
    formattedDateTime.value = format(date, 'PPPPp');
  }
});
</script>

<template>
  <div>
    <span v-if="formattedDateTime">{{ formattedDateTime }}</span>
    <span v-else>Loading...</span>
  </div>
</template>