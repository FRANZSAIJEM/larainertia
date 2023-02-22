<template>
    <nav>
        <ul class="flex space-x-2 p-4 shadow-xl text-4xl mb-10c bg-slate-700 text-white">
            <li><Link href="/" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"> <i class="fa-solid fa-house"></i> Home</Link></li>
            <li><Link href="/employees" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"><i class="fa-solid fa-people-simple"></i> Employee</Link></li>
            <li><Link href="/offices" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"> <i class="fa-duotone fa-chair-office"></i> Office</Link></li>
            <li><Link href="/items" class="shadow-inner  hover:bg-gray-400 hover:shadow-inner hover:text-white p-2 rounded"> <i class="fa-solid fa-objects-column"></i> Item</Link></li>
        </ul>
    </nav>
    <div class="p-8">
        <h1 class="text-4xl float-left mb-10 bg-slate-200 p-2 rounded-lg shadow-lg">List of Employees</h1>

        <table class="w-full border text-2xl shadow-2xl bg-slate-500">
            <tr class="text-white border border-gray-900 text-3xl">
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Designation</th>
            </tr>
            <tr v-for="employee of employees" class="bg-slate-600 text-center">
                <td class="border border-gray-900 p-2">{{ employee.id }}</td>
                <td class="border border-gray-900 p-2">{{ employee.last_name }}</td>
                <td class="border border-gray-900 p-2">{{ employee.first_name }}</td>
                <td class="border border-gray-900 p-2">{{ employee.designation }}</td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'



defineProps({
    employees: Array

})



</script>
