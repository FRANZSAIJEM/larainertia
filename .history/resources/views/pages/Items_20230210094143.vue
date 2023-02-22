<template>
    <nav>
        <ul class="flex space-x-2 p-4 shadow-xl text-3xl mb-10">
            <li><Link href="/" class="duration-100 hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded">Home</Link></li>
            <li><Link href="/employees" class="duration-100 hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded">Employee</Link></li>
            <li><Link href="/offices" class="duration-100 hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded">Office</Link></li>
            <li><Link href="/items" class="duration-100 hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded">Item</Link></li>
        </ul>
    </nav>
    <div class="p-8">
        <h1 class="text-4xl">List of Items</h1>
        <hr>
        <table class="w-full border">
            <tr>
                <th>Office ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Value</th>
                <th>Status</th>
                <th>Date Acquired</th>

            </tr>
            <tr v-for="item of items">
                <td class="border border-gray-300 p-2">{{ item.office_id }}</td>
                <td class="border border-gray-300 p-2">{{ item.name }}</td>
                <td class="border border-gray-300 p-2">{{ item.description }}</td>
                <td class="border border-gray-300 p-2">{{ item.value }}</td>
                <td class="border border-gray-300 p-2">{{ item.status }}</td>
                <td class="border border-gray-300 p-2">{{ item.date_acquired }}</td>


            </tr>
        </table>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    items: Array
})

</script>
