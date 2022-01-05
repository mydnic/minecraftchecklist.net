<template>
    <Head title="About" />

    <Layout>
        <div class="px-4 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9">
            <div class="w-full lg:w-10/12">
                <p class="text-sm font-normal leading-3 text-left text-indigo-700 cursor-pointer hover:text-indigo-800">About</p>
                <h2 class="w-full mt-2 text-3xl font-bold leading-9 text-left text-gray-800 dark:text-gray-50 xl:w-8/12 lg:w-10/12 lg:text-4xl lg:leading-10">What the heck is this website ?</h2>
                <p class="mt-6 text-base font-normal leading-6 text-left text-gray-600 dark:text-gray-300">
                    Build by one guy in Belgium, MinecraftChecklist.net is a website that aims to help you to keep track of your Minecraft objectives.
                </p>
            </div>

            <div class="flex flex-col justify-between gap-12 mt-16 lg:mt-16 sm:mt-12 lg:flex-row lg:gap-8">
                <div class="w-full xl:w-5/12 lg:w-6/12">
                    <p class="mt-4 text-base font-normal leading-6 text-gray-600 dark:text-gray-200">
                        My name is Clement and I built this website to gather together a list of all the possible things to do in Minecraft.
                    </p>
                    <p class="mt-4 text-base font-normal leading-6 text-gray-600 dark:text-gray-200">
                        Long time ago I "beat" the game and stopped playing it. Now, after several years and seeing how the game was updated, I wanted to start a new world and explore, do all the new things the game can offer.
                    </p>
                    <p class="mt-4 text-base font-normal leading-6 text-gray-600 dark:text-gray-200">
                        I was basically looking for a "todo list" with tons of stuff to do and guide me through the game. I found lots of lists on reddit and other websites, and then I thought it might be fun to merge all of them on a small website where I could keep track of all of this and mark the objectives as completed.
                    </p>
                    <p class="mt-4 text-base font-normal leading-6 text-gray-600 dark:text-gray-200">
                        <strong>Anyway</strong>, you can use this website if you're looking for new ideas of things to do in Minecraft. You can also add more objectives in the database, and keep track of your achievements by marking them as completed.
                    </p>
                    <p class="mt-4 text-base font-normal leading-6 text-gray-600 dark:text-gray-200">
                        I don't think anyone will use this but screw it, I wanted to build the damn thing. It also allowed to learn new dev tools so eh.
                    </p>
                    <p class="mt-4 text-base font-normal leading-6 text-gray-600 underline dark:text-gray-200">
                        <a href="https://github.com/mydnic/minecraftchecklist.net" target="_blank">If you're a web dev you can have a look at the project on github.</a>
                    </p>
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
    }
}
</script>
