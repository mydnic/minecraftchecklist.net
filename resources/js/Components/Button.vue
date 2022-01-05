<template>
    <button :type="type" class="px-8 py-3 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded hover:bg-indigo-600">
        <slot />
    </button>
</template>

<script>
export default {
    props: {
        type: {
            type: String,
            default: 'submit',
        },
    }
}
</script>
