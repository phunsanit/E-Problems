<template>
  <div>{{ formattedDate }}</div>
</template>

<script>
export default {
  computed: {
    formattedDate() {
      try {
        const date = new Date(this.date);
        if (isNaN(date.getTime())) {
          return 'Invalid date';
        }
        return date.toLocaleDateString(window.locales, window.datetimeOptions);
      } catch (error) {
        console.error('Date formatting error:', error);
        return 'Error formatting date';
      }
    }
  },
  props: {
    date: {
      required: true,
      type: String,
      validator: function(value) {
        return !isNaN(new Date(value).getTime());
      }
    }
  },
  mounted() {
    console.log('Component mounted with date:', this.date);
  }
};
</script>