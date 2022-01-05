<template>
    <div class="w-full h-full min-h-screen bg-gray-200 dark:bg-gray-800">
        <nav class="bg-white shadow dark:bg-gray-500">
            <div class="container px-6 py-2 mx-auto xl:py-0">
                <div class="flex items-center justify-between">
                    <div class="inset-y-0 left-0 flex items-center xl:hidden">
                        <div class="inline-flex items-center justify-center p-2 text-gray-700 transition duration-150 ease-in-out rounded-md hover:text-gray-100 focus:outline-none">
                            <div class="visible xl:hidden">
                                <ul class="absolute left-0 right-0 hidden p-2 mt-8 bg-white border-r rounded shadow md:mt-8">
                                    <li class="flex py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                                <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                                <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                                <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                            </svg>
                                            <span class="ml-2 font-bold">Dashboard</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-col justify-center py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none" @click="dropdownHandler($event)">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                                            </svg>
                                            <span class="ml-2 font-bold">Products</span>
                                        </div>
                                    </li>
                                    <li class="flex items-center py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                            <circle cx="12" cy="12" r="9"></circle>
                                        </svg>
                                        <span class="ml-2 font-bold">Performance</span>
                                    </li>
                                    <li class="flex items-center pt-2 pb-4 text-sm leading-3 tracking-normal text-gray-600 border-b border-gray-300 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <polyline points="7 8 3 12 7 16"></polyline>
                                            <polyline points="17 8 21 12 17 16"></polyline>
                                            <line x1="14" y1="4" x2="10" y2="20"></line>
                                        </svg>
                                        <span class="ml-2 font-bold">Deliverables</span>
                                    </li>
                                    <li v-if="$page.props.auth.user" class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <div class="flex w-12 text-sm transition duration-150 ease-in-out border-2 border-transparent rounded cursor-pointer focus:outline-none focus:border-white">
                                                <img class="object-cover w-10 h-10 rounded" :src="$page.props.auth.user.avatar" alt="logo" />
                                            </div>
                                            <p class="ml-2 text-sm cursor-pointer">Jane Doe</p>
                                            <div class="relative text-white sm:ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer icon icon-tabler icon-tabler-chevron-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <circle cx="12" cy="7" r="4" />
                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            </svg>
                                            <span class="ml-2">Profile</span>
                                        </div>
                                    </li>
                                </ul>
                                <svg @click="MenuHandler($event, true)" aria-haspopup="true" aria-label="Main Menu" xmlns="http://www.w3.org/2000/svg" class="show-m-menu icon icon-tabler icon-tabler-menu" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <line x1="4" y1="8" x2="20" y2="8"></line>
                                    <line x1="4" y1="16" x2="20" y2="16"></line>
                                </svg>
                                <div class="hidden text-gray-700 close-m-menu" @click="MenuHandler($event, false)">
                                    <svg aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <line x1="18" y1="6" x2="6" y2="18" />
                                        <line x1="6" y1="6" x2="18" y2="18" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end w-full sm:w-auto sm:items-stretch sm:justify-start">
                        <Link href="/" class="flex items-center">
                            <h2 class="hidden text-base font-bold leading-normal text-gray-700 dark:text-gray-300 sm:block">MinecraftChecklist.net</h2>
                        </Link>
                    </div>
                    <div class="flex">
                        <div class="hidden xl:flex md:mr-6 xl:mr-16">
                            <Link
                                href="/"
                                class="flex items-center px-5 py-6 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out dark:text-gray-300 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
                                :class="{ 'bg-indigo-50 dark:bg-gray-700': $page.url === '/' }"
                            >
                                <span class="mr-2">
                                    <svg class="icon icon-tabler icon-tabler-grid" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                </span>
                                Home
                            </Link>
                            <Link
                                href="/checklist"
                                class="flex items-center px-5 py-6 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out dark:text-gray-300 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
                                :class="{ 'bg-indigo-50 dark:bg-gray-700': $page.url.startsWith('/checklist') }"
                            >
                                <span class="mr-2">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                                </span>
                                Checklist
                            </Link>
                        </div>
                        <div class="items-center hidden xl:flex">
                            <div class="relative ml-6">
                                <div v-if="$page.props.auth.user" class="relative flex items-center" @click="dropdownHandler($event)">
                                    <ul class="absolute top-0 right-0 hidden w-40 p-2 mt-16 bg-white border-r rounded shadow">
                                        <Link href="/user/worlds" class="py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd" /></svg>
                                                <span class="ml-2">Game Worlds</span>
                                            </div>
                                        </Link>
                                        <Link as="button" method="post" href="/logout" class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" /></svg>
                                            <span class="ml-2">Log out</span>
                                        </Link>
                                    </ul>
                                    <div class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full cursor-pointer focus:outline-none focus:border-white">
                                        <img class="object-cover w-10 h-10 rounded-full" :src="$page.props.auth.user.avatar" alt="logo" />
                                    </div>
                                    <div class="ml-2 text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer icon icon-tabler icon-tabler-chevron-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>

                                <div v-else class="flex-row hidden space-x-4 sm:flex">
                                    <Link href="/register" class="flex items-center justify-center w-24 h-10 space-x-2 text-sm font-normal leading-3 text-indigo-700 duration-150 bg-white border border-indigo-700 rounded-md focus:outline-none focus:bg-gray-200 hover:bg-gray-200" >Sign Up</Link>
                                    <Link href="/login" class="flex items-center justify-center w-24 h-10 space-x-2 text-sm font-normal leading-3 text-white duration-150 bg-indigo-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600" >Sign In</Link>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container p-6 mx-auto">
            <slot></slot>
        </div>

        <AppFooter />
    </div>
</template>

<script>
import AppFooter from '@/Components/Footer.vue'

export default {
    components: { AppFooter },

    methods: {
        dropdownHandler(event) {
            let single = event.currentTarget.getElementsByTagName("ul")[0];
            single.classList.toggle("hidden");
        },
        MenuHandler(el, val) {
            let MainList = el.currentTarget.parentElement.getElementsByTagName("ul")[0];
            let closeIcon = el.currentTarget.parentElement.getElementsByClassName("close-m-menu")[0];
            let showIcon = el.currentTarget.parentElement.getElementsByClassName("show-m-menu")[0];
            if (val) {
                MainList.classList.remove("hidden");
                el.currentTarget.classList.add("hidden");
                closeIcon.classList.remove("hidden");
            } else {
                showIcon.classList.remove("hidden");
                MainList.classList.add("hidden");
                el.currentTarget.classList.add("hidden");
            }
        },
    },
};
</script>
