<script>
export default {
  computed: {
    formattedDate() {
      const date = new Date(this.datetime);
      return date.toLocaleDateString(window.locales, window.datetimeOptions);
    }
  },
  name: 'ToLocaleDateString',
  props: {
    datetime: {
      type: String,
      required: true
    }
  },
}
</script>

<template>
  <div>{{ formattedDate }}</div>
</template>