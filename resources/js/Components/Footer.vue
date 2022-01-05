<template>
    <div class="pb-12 bg-linear-pink-invert">
        <div class="container flex flex-col items-center justify-center pt-20 mx-auto lg:pt-72">
            <div class="flex flex-col pt-3 text-black dark:text-gray-400 md:items-center f-f-l">
                <h1 class="text-2xl font-black">Checklist for your Minecraft worlds.</h1>
                <div class="my-6 text-base text-color f-f-l">
                    <ul class="items-center md:flex md:space-x-6">
                        <li class="pt-4 cursor-pointer lg:py-0">
                            <Link href="/about">About</Link>
                        </li>
                        <li class="pt-4 cursor-pointer lg:py-0">
                            <Link href="/objectives/create">Add objectives</Link>
                        </li>
                    </ul>
                </div>
                <div class="mb-10 text-sm text-color f-f-l">
                    <p>© {{ (new Date()).getFullYear() }} MY DYNAMIC PRODUCTION SRL. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</template>
