<template>
    <Head title="Create a Game World" />


    <BreezeValidationErrors class="mb-4" />

    <Layout>
        <form @submit.prevent="submit">
            <div class="container mx-auto">
                <div class="flex flex-col items-start justify-between px-6 pb-4 my-6 border-b border-gray-300 lg:my-12 md:flex-row md:items-center">
                    <div>
                        <h1 class="text-2xl font-bold leading-tight text-gray-800 dark:text-gray-100">
                            Create a new game world
                        </h1>
                    </div>
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-200">World Name *</label>
                    <AppInput id="title" type="title" class="block w-full mt-1" v-model="form.title" required/>
                </div>

                <div class="mt-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-200">World description</label>
                    <AppInput id="description" type="description" class="block w-full mt-1" v-model="form.description" />
                </div>

            </div>
            <div class="container w-11/12 mx-auto xl:w-full">
                <div class="flex justify-end w-full py-4 bg-white sm:px-0 dark:bg-gray-800">
                    <AppButton>Save</AppButton>
                </div>
            </div>
        </form>
    </Layout>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/Layout.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'

export default {
    components: {
        BreezeValidationErrors,
        Layout,
        Head,
    },

    data() {
        return {
            form: this.$inertia.form({
                title: '',
                description: '',
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('worlds.store'))
        }
    }
}
</script>
