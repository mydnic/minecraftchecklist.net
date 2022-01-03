<template>
    <div class="w-full h-full bg-gray-200">
        <!-- Navigation starts -->
        <nav class="w-full mx-auto bg-white shadow">
            <div class="container flex items-center justify-between h-16 px-6 mx-auto lg:items-stretch">
                <div class="flex items-center h-full">
                    <div class="flex items-center mr-10">
                        <svg aria-label="Home" id="logo" enable-background="new 0 0 300 300" height="44" viewBox="0 0 300 300" width="43" v-bind:xmlns="xmlns" :xmlns:xlink="xlink">
                            <g>
                                <path
                                    fill="#4c51bf"
                                    d="m234.735 35.532c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16zm0 24c-4.412 0-8-3.588-8-8s3.588-8 8-8 8 3.588 8 8-3.588 8-8 8zm-62.529-14c0-2.502 2.028-4.53 4.53-4.53s4.53 2.028 4.53 4.53c0 2.501-2.028 4.529-4.53 4.529s-4.53-2.027-4.53-4.529zm89.059 60c0 2.501-2.028 4.529-4.53 4.529s-4.53-2.028-4.53-4.529c0-2.502 2.028-4.53 4.53-4.53s4.53 2.029 4.53 4.53zm-40.522-5.459-88-51.064c-1.242-.723-2.773-.723-4.016 0l-88 51.064c-1.232.715-1.992 2.033-1.992 3.459v104c0 1.404.736 2.705 1.938 3.428l88 52.936c.635.381 1.35.572 2.062.572s1.428-.191 2.062-.572l88-52.936c1.201-.723 1.938-2.023 1.938-3.428v-104c0-1.426-.76-2.744-1.992-3.459zm-90.008-42.98 80.085 46.47-52.95 31.289-23.135-13.607v-21.713c0-2.209-1.791-4-4-4s-4 1.791-4 4v21.713l-26.027 15.309c-1.223.719-1.973 2.029-1.973 3.447v29.795l-52 30.727v-94.688zm0 198.707-80.189-48.237 51.467-30.412 24.723 14.539v19.842c0 2.209 1.791 4 4 4s4-1.791 4-4v-19.842l26.027-15.307c1.223-.719 1.973-2.029 1.973-3.447v-31.667l52-30.728v94.729z"
                                />
                            </g>
                        </svg>
                        <h3 class="hidden ml-3 text-base font-bold leading-tight tracking-normal text-gray-800 lg:block">The North</h3>
                    </div>

                    <ul class="items-center hidden h-full pr-12 xl:flex">
                        <li class="flex items-center h-full text-sm tracking-normal text-indigo-700 border-b-2 border-indigo-700 cursor-pointer hover:text-indigo-700">Dashboard</li>
                        <li class="flex items-center h-full mx-10 text-sm tracking-normal cursor-pointer hover:text-indigo-700 text-gry-800">Products</li>
                        <li class="flex items-center h-full mr-10 text-sm tracking-normal cursor-pointer hover:text-indigo-700 text-gry-800">Performance</li>
                        <li class="flex items-center h-full text-sm tracking-normal text-gray-800 cursor-pointer hover:text-indigo-700">Deliverables</li>
                    </ul>
                </div>

                <div class="items-center justify-end hidden h-full xl:flex">
                    <div class="flex items-center w-full h-full">
                        <div class="flex items-center w-full h-full pr-12 border-r">
                            <div class="relative w-full">
                                <div class="absolute inset-0 w-4 h-4 m-auto ml-3 text-gray-500">
                                    <svg v-bind:xmlns="xmlns" class="icon icon-tabler icon-tabler-search" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </div>
                                <input class="w-56 py-2 pl-8 text-sm text-gray-500 bg-gray-100 border border-gray-100 rounded focus:outline-none focus:border-indigo-700" type="text" placeholder="Search" />
                            </div>
                        </div>
                        <div class="flex w-full h-full">
                            <div class="flex items-center justify-center w-32 h-full text-gray-600 border-r cursor-pointer">
                                <svg v-bind:xmlns="xmlns" class="icon icon-tabler icon-tabler-bell" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                            </div>
                            <div aria-haspopup="true" class="relative flex items-center justify-end w-full cursor-pointer" @click="dropdownHandler($event)">
                                <ul class="absolute left-0 z-40 hidden w-40 p-2 mt-64 bg-white border-r rounded shadow">
                                    <li class="py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <div class="flex items-center">
                                            <svg v-bind:xmlns="xmlns" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <circle cx="12" cy="7" r="4" />
                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            </svg>
                                            <span class="ml-2"> My Profile </span>
                                        </div>
                                    </li>
                                    <li class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <svg v-bind:xmlns="xmlns" class="icon icon-tabler icon-tabler-help" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="12" y1="17" x2="12" y2="17.01" />
                                            <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
                                        </svg>
                                        <span class="ml-2">Help Center</span>
                                    </li>
                                    <li class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <svg v-bind:xmlns="xmlns" class="icon icon-tabler icon-tabler-settings" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                        <span class="ml-2">Account Settings</span>
                                    </li>
                                </ul>
                                <img class="object-cover w-10 h-10 rounded" v-bind:src="profilePhoto" alt="logo" />
                                <p class="ml-2 text-sm text-gray-800">Jane Doe</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center visible xl:hidden">
                    <ul class="absolute top-0 left-0 right-0 z-40 hidden p-2 mt-16 bg-white border-r rounded shadow md:mt-16">
                        <li class="flex py-3 mt-2 text-base leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <div class="flex items-center">
                                <span class="ml-2 font-bold leading-6"> Dashboard </span>
                            </div>
                        </li>
                        <li class="flex flex-col justify-center py-3 text-base leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none" @click="dropdownHandler($event)">
                            <div class="flex items-center">
                                <span class="ml-2 font-bold leading-6"> Products </span>
                            </div>
                            <ul class="hidden mt-3 ml-2">
                                <li class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer hover:bg-indigo-700 hover:text-white">Landing Pages</li>
                                <li class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer hover:bg-indigo-700 hover:text-white">Templates</li>
                                <li class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer hover:bg-indigo-700 hover:text-white">Components</li>
                            </ul>
                        </li>
                        <li class="flex items-center py-3 text-base leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <span class="ml-2 font-bold leading-6">Performance</span>
                        </li>
                        <li class="flex flex-col justify-center py-3 mb-2 text-base leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none" @click="dropdownHandler($event)">
                            <div class="flex items-center">
                                <span class="ml-2 font-bold leading-6"> Deliverables </span>
                            </div>
                            <ul class="hidden mt-3 ml-2">
                                <li class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer hover:bg-indigo-700 hover:text-white">Landing Pages</li>
                                <li class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer hover:bg-indigo-700 hover:text-white">Templates</li>
                                <li class="px-3 py-3 text-sm font-normal leading-3 tracking-normal text-gray-600 cursor-pointer hover:bg-indigo-700 hover:text-white">Components</li>
                            </ul>
                        </li>
                        <li>
                            <hr class="w-full border-b border-gray-300" />
                        </li>
                        <li class="flex items-center py-2 mt-2 ml-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <div class="flex items-center">
                                <div class="flex w-12 text-sm transition duration-150 ease-in-out border-2 border-transparent rounded cursor-pointer focus:outline-none focus:border-white">
                                    <img class="object-cover w-10 h-10 rounded" v-bind:src="profilePhoto" alt="logo" />
                                </div>
                                <p class="ml-1 text-base leading-6 cursor-pointer">Jane Doe</p>
                                <div class="relative text-white sm:ml-2">
                                    <svg v-bind:xmlns="xmlns" class="cursor-pointer icon icon-tabler icon-tabler-chevron-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li class="py-2 ml-2 text-base leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <div class="flex items-center">
                                <svg v-bind:xmlns="xmlns" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="12" cy="7" r="4" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                                <span class="ml-2 leading-6">Profile</span>
                            </div>
                        </li>
                    </ul>

                    <svg @click="MenuHandler($event, true)" aria-haspopup="true" aria-label="Main Menu" v-bind:xmlns="xmlns" class="show-m-menu icon icon-tabler icon-tabler-menu" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"></path>
                        <line x1="4" y1="8" x2="20" y2="8"></line>
                        <line x1="4" y1="16" x2="20" y2="16"></line>
                    </svg>
                    <div class="hidden close-m-menu" @click="MenuHandler($event, false)">
                        <svg aria-label="Close" v-bind:xmlns="xmlns" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navigation ends -->
        <!-- Page title starts -->

        <div class="container flex flex-col items-start justify-between px-6 pb-4 mx-auto my-6 border-b border-gray-300 lg:my-12 lg:flex-row lg:items-center">
            <div>
                <h4 class="text-2xl font-bold leading-tight text-gray-800">User Profile</h4>
                <ul class="flex flex-col items-start mt-3 text-sm text-gray-600 md:flex-row md:items-center">
                    <li class="flex items-center mt-3 mr-3 md:mt-0">
                        <span class="mr-2">
                            <svg v-bind:xmlns="xmlns" class="icon icon-tabler icon-tabler-paperclip" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9 l6.5 -6.5" />
                            </svg>
                        </span>
                        <span>Active</span>
                    </li>
                    <li class="flex items-center mt-3 mr-3 md:mt-0">
                        <span class="mr-2">
                            <svg v-bind:xmlns="xmlns" class="icon icon-tabler icon-tabler-trending-up" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <polyline points="3 17 9 11 13 15 21 7" />
                                <polyline points="14 7 21 7 21 14" />
                            </svg>
                        </span>
                        <span>Trending</span>
                    </li>
                    <li class="flex items-center mt-3 md:mt-0">
                        <span class="mr-2">
                            <svg v-bind:xmlns="xmlns" class="icon icon-tabler icon-tabler-plane-departure" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path d="M15 12h5a2 2 0 0 1 0 4h-15l-3 -6h3l2 2h3l-2 -7h3z" transform="rotate(-15 12 12) translate(0 -1)" />
                                <line x1="3" y1="21" x2="21" y2="21" />
                            </svg>
                        </span>
                        <span>Started on 29 Jan 2020</span>
                    </li>
                </ul>
            </div>
            <div class="mt-6 lg:mt-0">
                <button class="px-6 py-2 mx-2 my-2 text-sm text-indigo-700 transition duration-150 ease-in-out bg-white rounded focus:outline-none hover:bg-gray-100">Back</button>
                <button class="px-8 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 border rounded hover:bg-indigo-600 focus:outline-none">Edit Profile</button>
            </div>
        </div>
        <!-- Page title ends -->
        <div class="container px-6 mx-auto">
            <!-- Remove class [ h-64 ] when adding a card block -->
            <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
            <div class="w-full h-64 border-2 border-gray-300 border-dashed rounded">
                <!-- Place your content here -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            xmlns: "http://www.w3.org/2000/svg",
            xlink: "http://www.w3.org/1999/xlink",
            profilePhoto: "https://tuk-cdn.s3.amazonaws.com/assets/components/boxed_layout/bl_1.png",
        };
    },
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
