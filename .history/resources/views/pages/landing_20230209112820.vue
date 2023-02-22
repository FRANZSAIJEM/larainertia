<template>

    <nav>
        <ul class="flex space-x-2 p-4 shadow">
            <li><Link href="/" class="hover:bg-gray-300 p-2 rounded">Home</Link></li>
            <li><Link href="/employees" class="hover:bg-gray-300 p-2 rounded">Employee</Link></li>
            <li><Link href="/offices" class="hover:bg-gray-300 p-2 rounded">Office</Link></li>
            <li><Link href="/items" class="hover:bg-gray-300 p-2 rounded">Item</Link></li>
        </ul>
    </nav>

    <div class="flex justify-center items-center mt-44 text-2xl">
        <div class="card p-5 rounded-lg shadow-2xl">
            <div class="card-header border-b-2">
                <h1 class="text-6xl text-center">Home</h1>
            </div>

            <div class="card-body text-center">
                <ul>
                    <li class="m-8"><Link href="/employees" class="shadow-inner rounded-xl p-2 bg-slate-200 hover:bg-white hover:shadow-lg duration-75">Employee</Link></li>
                    <li class="m-8"><Link href="/offices" class="shadow-inner rounded-xl p-2 bg-slate-200 hover:bg-white hover:shadow-lg duration-75">Office</Link></li>
                    <li class="m-8"><Link href="/items"  class="shadow-inner rounded-xl p-2 bg-slate-200 hover:bg-white hover:shadow-lg duration-75">Item</Link></li>
                </ul>
            </div>
        </div>
    </div>

</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'


</script>
