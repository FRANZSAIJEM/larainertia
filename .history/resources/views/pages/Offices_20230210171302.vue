<template>
    <nav>
        <ul class="flex space-x-2 p-4 shadow-xl text-4xl mb-10 float-right">
            <li><Link href="/" class="shadow-inner bg-slate-300 hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded">Home</Link></li>
            <li><Link href="/employees" class="shadow-inner bg-slate-300 hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded">Employee</Link></li>
            <li><Link href="/offices" class="shadow-inner bg-slate-300 hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded">Office</Link></li>
            <li><Link href="/items" class="shadow-inner bg-slate-300 hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded">Item</Link></li>
        </ul>
    </nav>
    <div class="p-8">
        <h1 class="text-4xl">List of Offices</h1>
        <hr>
        <table class="w-full border">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Office Head</th>
                <th>Building</th>
            </tr>
            <tr v-for="office of offices">
                <td class="border border-gray-300 p-2">{{ office.id }}</td>
                <td class="border border-gray-300 p-2">{{ office.name }}</td>
                <td class="border border-gray-300 p-2">{{ office.employee.last_name}}</td>
                <td class="border border-gray-300 p-2">{{ office.building }}</td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    offices: Array
})

</script>
