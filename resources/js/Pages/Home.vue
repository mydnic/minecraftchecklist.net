<template>
    <Head title="The ultimate todo list for Minecraft players" />

    <Layout>

        <div class="container flex flex-col items-center py-12 mx-auto sm:py-24">
            <div class="w-11/12 mb-5 sm:w-2/3 sm:mb-10">
                <h1 class="text-2xl font-extrabold leading-tight text-center text-gray-800 dark:text-gray-200 sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl">
                    The Ultimate Checklist for
                    <span class="text-indigo-700">Minecraft</span>
                    Players
                </h1>
                <p class="mt-5 text-lg font-normal text-center text-gray-600 dark:text-gray-400 sm:mt-10 sm:text-lg">You're looking for new objectives and new things to do in your Minecraft world ? You've come to the right place.</p>
            </div>
            <div class="flex items-center justify-center">
                <Link href="/checklist" class="px-4 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded focus:outline-none hover:bg-indigo-600 sm:px-10 sm:py-4">
                    Go to Checklist
                </Link>
            </div>
        </div>

        <div class="container flex flex-col items-start justify-between px-6 pb-4 mx-auto my-6 border-b border-gray-300 lg:my-12 md:flex-row md:items-center">
            <div>
                <h4 class="text-2xl font-bold leading-tight text-gray-800 dark:text-gray-100">Most Completed Objectives</h4>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-4">
            <ObjectiveCard class="h-64" :objective="objective" v-for="objective in objectives" :key="objective.id" />
        </div>

    </Layout>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/Layout.vue';
import ObjectiveCard from '@/Components/Objectives/ObjectiveCard.vue';

export default {
    components: {Layout, Head, ObjectiveCard},

    props: {
        objectives: Array,
    }
}
</script>
