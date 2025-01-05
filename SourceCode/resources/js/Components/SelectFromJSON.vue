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
            default: false,
            type: Boolean
        },
        disabled: {
            default: false,
            type: Boolean
        },
        form: {
            default: '',
            type: String
        },
        json: {
            required: true,
            type: String
        },
        multiple: {
            default: false,
            type: Boolean
        },
        name: {
            required: true,
            type: String
        },
        required: {
            default: false,
            type: Boolean
        },
        size: {
            default: 1,
            type: Number
        }
    }
};
</script>

<template>
    <select
        :autofocus="autofocus"
        :disabled="disabled"
        :multiple="multiple"
        :name="name"
        :required="required"
        v-bind:form="form !== '' ? form : null"
        v-bind:size="size !== 1 ? size : null"
        v-model="selectedOption"
    >
        <option v-for="option in options" :key="option.value" :value="option.value">
            {{ option.text }}
        </option>
    </select>
</template>