<template>

    <div class="flex justify-center items-center text-2xl">
        <div class="card p-5 rounded-lg -2xl">
            <div class="card-header border-b-2">

            </div>

            <div class="card-body text-center">
                <ul class="flex space-x-2 p-4 shadow-xl float-right text-3xl mb-10">
            <li><Link href="/" class="hover:bg-gray-900 hover:text-white p-2 rounded">Home</Link></li>
            <li><Link href="/employees" class="hover:bg-gray-900 hover:text-white p-2 rounded">Employee</Link></li>
            <li><Link href="/offices" class="hover:bg-gray-900 hover:text-white p-2 rounded">Office</Link></li>
            <li><Link href="/items" class="hover:bg-gray-900 hover:text-white p-2 rounded">Item</Link></li>
        </ul>
            </div>
        </div>
    </div>

</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'


</script>
