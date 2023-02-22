<template>

    <div class="flex justify-center items-center text-2xl">
        <div class="card p-5 rounded-lg">
            <div class="card-header border-b-2 mt-60 ">
                <h1 class="text-center text-5xl">Home</h1>
            </div>

            <div class="card-body text-center">
                <ul class="space-x-2 p-4 shadow-xl m-10 text-3xl mb-10">

                    <li><Link href="/employees" class="shadow-inner hover:bg-gray-900 hover:text-white p-2 rounded m-5">Employee</Link></li>
                    <li><Link href="/offices" class="shadow-inner hover:bg-gray-900 hover:text-white p-2 rounded">Office</Link></li>
                    <li><Link href="/items" class="shadow-inner hover:bg-gray-900 hover:text-white p-2 rounded">Item</Link></li>
                </ul>
            </div>
        </div>
    </div>

</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'


</script>
