<template>
    <Head title="The ultimate todo list for Minecraft players" />

    <Layout>
        <div class="container flex flex-col items-start justify-between px-6 pb-4 mx-auto my-6 border-b border-gray-300 lg:my-12 md:flex-row md:items-center">
            <div>
                <h1 class="text-2xl font-bold leading-tight text-gray-800 dark:text-gray-100">
                    The Ultimate Checklist
                </h1>
            </div>
        </div>

        <div class="container mx-auto">
            <ObjectiveCard :objective="objective" v-for="objective in objectives" :key="objective.id" />
        </div>
    </Layout>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/Layout.vue';
import ObjectiveCard from '@/Components/Objectives/ObjectiveCard.vue';

export default {
    components: {
        ObjectiveCard,
        Layout,
        Head,
    },

    props: {
        objectives: Array,
    }
}
</script>
