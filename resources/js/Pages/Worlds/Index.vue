<template>
    <Head title="My worlds" />

    <Layout>

        <div class="container mx-auto">
            <div class="flex flex-col items-start justify-between w-full px-5 py-5 bg-white rounded-t shadow dark:bg-gray-800 xl:flex-row xl:items-center xl:px-10">
                <div class="mb-4 sm:mb-0 md:mb-0 lg:mb-0 xl:mb-0 lg:w-1/2">
                    <h2 class="text-lg font-bold text-gray-800 dark:text-gray-100">My Game Worlds</h2>
                    <p class="mt-1 text-sm font-normal text-gray-600 dark:text-gray-400">
                        Checking objectives must be linked with a Game World.
                    </p>
                </div>
                <Link class="px-8 py-3 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded hover:bg-indigo-600" href="/user/worlds/create">
                    Create Game World
                </Link>
            </div>
            <Link v-if="worlds.length === 0" href="/user/worlds/create" class="relative block w-full p-12 mt-10 text-center border-2 border-gray-300 border-dashed rounded-lg hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto text-gray-200" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd" /></svg>
                <span class="block mt-2 text-sm font-medium text-gray-900 dark:text-gray-200">
                    Create your first game world
                </span>
            </Link>

            <div v-else class="mt-4 space-y-3">

                <div v-for="world in worlds" :key="world.id" class="flex items-center justify-between p-4 bg-white border rounded-md">
                    <span>{{ world.title }}</span>
                    <Link v-if="!world.default" as="button" method="put" :href="`/user/worlds/${world.id}/default`" class="px-6 py-2 text-xs text-gray-800 transition duration-150 ease-in-out bg-white border border-gray-300 rounded hover:text-white hover:bg-indigo-600 focus:outline-none">
                        Set as default
                    </Link>
                    <div v-else class="px-6 py-2 text-xs text-white transition duration-150 ease-in-out bg-indigo-600 border border-gray-300 rounded">
                        Default
                    </div>
                </div>

            </div>
        </div>


    </Layout>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/Layout.vue';

export default {
    components: {
        Layout,
        Head,
    },

    props: {
        worlds: Array,
    }
}
</script>
