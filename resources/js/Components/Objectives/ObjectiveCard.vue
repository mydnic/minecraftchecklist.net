<template>
  <div class="flex flex-col justify-between w-full px-4 py-5 mb-6 bg-white border border-gray-400 rounded-lg dark:bg-gray-700 dark:border-gray-600">
        <div>
            <h4 class="mb-3 font-bold text-gray-800 dark:text-gray-100">
                {{ objective.title['en'] }}
            </h4>
            <p v-if="objective.description['en']" class="text-sm text-gray-800 dark:text-gray-100">
                {{objective.description['en']}}
            </p>
        </div>
        <div>
            <div class="flex items-center justify-between text-gray-800 dark:text-gray-100">
                <p class="text-sm">
                    Completed {{ objective.worlds_count }} times
                </p>
                <Link
                    as="button"
                    method="post"
                    href="/user/objective-toggle"
                    :data="{objective: objective.id}"
                    preserve-scroll
                    class="px-6 py-2 text-xs transition duration-150 ease-in-out bg-white border border-gray-300 rounded hover:text-white hover:bg-indigo-600 focus:outline-none"
                    :class="{'bg-green-600 text-white': objective.completed, 'bg-white text-gray-800': !objective.completed}"
                >
                    {{objective.completed ? 'Completed !' : 'Mark as Done'}}
                </Link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        objective: Object,
    }
}
</script>
