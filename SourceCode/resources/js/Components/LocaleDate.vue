<script lang="ts">
interface Window {
  locales: string[];
  datetimeOptions: {
    year: 'numeric' | '2-digit';
    month: 'numeric' | '2-digit';
    day: 'numeric' | '2-digit';
    hour: 'numeric' | '2-digit';
    minute: 'numeric' | '2-digit';
  };
}
export default {
  computed: {
    formattedDate() {
      const date = new Date(this.datetime);
      const locales = [...window.userLocales];
      const datetimeOptions = {
        ...window.datetimeOptions,
        year: window.datetimeOptions.year as 'numeric' | '2-digit',
        month: window.datetimeOptions.month as 'numeric' | '2-digit',
        day: window.datetimeOptions.day as 'numeric' | '2-digit',
        hour: window.datetimeOptions.hour as 'numeric' | '2-digit',
        minute: window.datetimeOptions.minute as 'numeric' | '2-digit'
      };
      return date.toLocaleDateString(locales, datetimeOptions);
    }
  },
  name: 'LocaleDate',
  props: {
    datetime: {
      type: String,
      required: true
    }
  }
}
</script>

<template>
  <div>{{ formattedDate }}</div>
</template>