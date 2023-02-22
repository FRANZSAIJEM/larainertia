<template>

    <div class="flex justify-center items-center text-2xl">
        <div class="card p-5 rounded-lg">
            <div class="card-header mt-60">
                <h1 class="text-center text-5xl bg-slate-200 p-2 rounded-lg shadow-lg">Home</h1>
            </div>

            <div class="card-body text-center">
                <ul class="p-10 text-3xl mb-10">

                    <li><Link href="/employees" class="bg-slate-300 shadow-inner sh hover:bg-gray-900 hover:text-white p-2 rounded">Employee</Link></li> <br>
                    <li><Link href="/offices" class="bg-slate-300 shadow-inner hover:bg-gray-900 hover:text-white p-2 rounded">Office</Link></li> <br>
                    <li><Link href="/items" class="bg-slate-300 shadow-inner hover:bg-gray-900 hover:text-white p-2 rounded">Item</Link></li>
                </ul>
            </div>
        </div>
    </div>

</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'



</script>
