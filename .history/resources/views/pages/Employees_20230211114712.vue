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
        <h1 class="text-4xl float-left">List of Employees</h1>
        <hr>
        <table class="w-full border text-2xl">
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Designation</th>
            </tr>
            <tr v-for="employee of employees">
                <td class="border border-gray-300 p-2">{{ employee.id }}</td>
                <td class="border border-gray-300 p-2">{{ employee.last_name }}</td>
                <td class="border border-gray-300 p-2">{{ employee.first_name }}</td>
                <td class="border border-gray-300 p-2">{{ employee.designation }}</td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'


import { InertiaProgress } from '@inertiajs/progress'



defineProps({
    employees: Array

})

InertiaProgress.init({
    color: 'red'
});

</script>
