<template>
    <nav>
        <ul class="flex space-x-2 p-4 shadow-xl text-4xl mb-10c bg-slate-700 text-white">
            <li><Link href="/" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"> <i class="fa-solid fa-house"></i> Home</Link></li>
            <li><Link href="/employees" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"><i class="fa-solid fa-people-group"></i> Employee</Link></li>
            <li><Link href="/offices" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"><i class="fa-solid fa-table"></i> Office</Link></li>
            <li><Link href="/items" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"><i class="fa-solid fa-object-ungroup"></i> Item</Link></li>
        </ul>
    </nav>
    <div class="p-8">
        <h1 class="text-4xl float-left mb-10 bg-slate-200 p-2 rounded-lg shadow-lg"> <i class="fa-solid fa-table"></i></h1>

        <table class="w-full border text-2xl shadow-2xl bg-slate-500">
            <tr class="text-white border border-gray-900 text-3xl">
                <th> <i class="fa-solid fa-id-card"></i> ID</th>
                <th> <i class="fa-solid fa-file-signature"></i> Name</th>
                <th>Office Head</th>
                <th>Building</th>
            </tr>
            <tr v-for="office of offices" class="bg-slate-600 text-center">
                <td class="border border-gray-900 p-2">{{ office.id }}</td>
                <td class="border border-gray-900 p-2">{{ office.name }}</td>
                <td class="border border-gray-900 p-2">{{ office.employees.last_name + " " + office.employees.first_name}}</td>
                <td class="border border-gray-900 p-2">{{ office.building }}</td>
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
