<script lang="ts">
export default {
    created() {
        this.fetchOptions();
    },
    data() {
        return {
            options: [],
            selectedOption: null
        };
    },
    name: 'SelectFromJSON',
    methods: {
        async fetchOptions() {
            try {
                const response = await fetch(this.json);
                const data = await response.json();
                this.options = data;
            } catch (error) {
                console.error('Error fetching options:', error);
            }
        }
    },
    props: {
        autofocus: {
            type: Boolean,
            default: false
        },
        disabled: {
            type: Boolean,
            default: false
        },
        form: {
            type: String,
            default: ''
        },
        json: {
            type: String,
            required: true
        },
        multiple: {
            type: Boolean,
            default: false
        },
        name: {
            type: String,
            required: true
        },
        required: {
            type: Boolean,
            default: false
        },
        size: {
            type: Number,
            default: 1
        }
    }
};
</script>

<template>
    <select :name="name" v-model="selectedOption">
        <option v-for="option in options" :key="option.value" :value="option.value">
            {{ option.text }}
        </option>
    </select>
</template>