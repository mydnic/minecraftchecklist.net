<template>
    <Head title="Log in" />

    <h1 class="mb-10 text-2xl font-bold leading-tight text-gray-800 dark:text-gray-100">Login</h1>

    <BreezeValidationErrors class="mb-4" />

    <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
        {{ status }}
    </div>

    <form @submit.prevent="submit">
        <div>
            <BreezeLabel for="email" value="Email" />
            <AppInput id="email" type="email" class="block w-full mt-1" v-model="form.email" required autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
            <BreezeLabel for="password" value="Password" />
            <AppInput id="password" type="password" class="block w-full mt-1" v-model="form.password" required autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label class="flex items-center">
                <BreezeCheckbox name="remember" v-model:checked="form.remember" />
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-200">Remember me</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <Link v-if="canResetPassword" :href="route('password.request')" class="text-sm text-gray-600 underline dark:text-gray-200 hover:text-gray-900">
                Forgot your password?
            </Link>

            <AppButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Log in
            </AppButton>
        </div>
    </form>
</template>

<script>
import BreezeCheckbox from '@/Components/Checkbox.vue'
import Layout from '@/Layouts/Layout.vue'
import BreezeLabel from '@/Components/Label.vue'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    layout: Layout,

    components: {
        BreezeCheckbox,
        BreezeLabel,
        BreezeValidationErrors,
        Head,
    },

    props: {
        canResetPassword: Boolean,
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('login'), {
                onFinish: () => this.form.reset('password'),
            })
        }
    }
}
</script>
