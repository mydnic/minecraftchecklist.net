<template>
    <Head title="The ultimate todo list for Minecraft players" />

    <Layout>
        <div class="container flex flex-col items-start justify-between pb-4 mx-auto my-6 border-b border-gray-300 lg:my-12 md:flex-row md:items-center">

            <h1 class="text-2xl font-bold leading-tight text-gray-800 dark:text-gray-100">
                The Ultimate Checklist
            </h1>

            <div class="relative rounded-md shadow-sm w-96">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" aria-hidden="true">
                    <svg class="w-4 h-4 mr-3 text-gray-400" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input v-model="filters.search" type="text" name="search" id="search" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-9 sm:text-sm" placeholder="Search">
          </div>

        </div>

        <div class="container mx-auto">
            <ObjectiveCard :objective="objective" v-for="objective in filteredObjectives" :key="objective.id" />
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

    data() {
        return {
            filters: {
                search: '',
            }
        }
    },

    props: {
        objectives: Array,
    },

    computed: {
        filteredObjectives() {
            return this.objectives.filter(objective => {
                return objective.title.en.toLowerCase().includes(this.filters.search.toLowerCase())
            })
        }
    }
}
</script>
