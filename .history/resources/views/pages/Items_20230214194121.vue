<template>
    <nav>
        <ul class="flex space-x-2 p-4 shadow-xl text-4xl mb-10c bg-slate-700 text-white">
            <li><Link href="/" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"> <i class="fa-solid fa-house"></i> Home</Link></li>
            <li><Link href="/employees" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"><i class="fa-solid fa-people-group"></i> Employees</Link></li>
            <li><Link href="/offices" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"><i class="fa-solid fa-table"></i> Offices</Link></li>
            <li><Link href="/items" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"><i class="fa-solid fa-object-ungroup"></i> Items</Link></li>
        </ul>
    </nav>
    <div class="p-8">
        <h1 class="text-4xl float-left mb-10 bg-slate-200 p-2 rounded-lg shadow-lg"> <i class="fa-solid fa-object-ungroup"></i></h1>

        <table class="w-full border text-2xl shadow-2xl bg-slate-500">
            <tr class="text-white border border-gray-900 text-3xl">
                <th class="p-4"> <i class="fa-solid fa-id-card"></i> Office ID</th>
                <th> <i class="fa-solid fa-file-signature"></i> Name</th>
                <th> <i class="fa-solid fa-file-word"></i> Description</th>
                <th> <i class="fa-solid fa-list-ol"></i> Value</th>
                <th> <i class="fa-solid fa-signal"></i> Status</th>
                <th> <i class="fa-solid fa-calendar-days"></i> Date Acquired</th>

            </tr>
            <tr v-for="item of items " class="bg-slate-600 text-center text-slate-300">
                <td class="border border-gray-900 p-2">{{ item.offices.id }}</td>
                <td class="border border-gray-900 p-2">{{ item.offices.name }}</td>
                <td class="border border-gray-900 p-2">{{ item.description }}</td>
                <td class="border border-gray-900 p-2">{{ item.value }}</td>
                <td class="border border-gray-900 p-2">{{ item.status }}</td>
                <td class="border border-gray-900 p-2">{{ item.date_acquired }}</td>


            </tr>
        </table>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init({
    delay: 250,

color: 'orange',

includeCSS: true,

showSpinner: true,
})

defineProps({
    items: Array
})

</script>
