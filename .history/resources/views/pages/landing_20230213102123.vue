<template>

    <div class="flex justify-center items-center text-2xl">
        <div class="card p-7 rounded-lg shadow-2xl mt-60">
            <div class="card-header ">
                <h1 class="text-center text-5xl bg-slate-200 p-2 rounded-lg shadow-lg">Home</h1>
            </div>

            <div class="card-body text-center ">
                <ul class="p-10 text-3xl">

                    <li><Link href="/employees" class="bg-slate-300 shadow-xl hover:bg-gray-900 hover:text-white p-2 rounded"><i class="fa-solid fa-people-group"></i> Employee</Link></li> <br>
                    <li><Link href="/offices" class="bg-slate-300 shadow-xl hover:bg-gray-900 hover:text-white p-2 rounded">Office</Link></li> <br>
                    <li><Link href="/items" class="bg-slate-300 shadow-xl hover:bg-gray-900 hover:text-white p-2 rounded">Item</Link></li>
                </ul>
            </div>
        </div>
    </div>

</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'



</script>
