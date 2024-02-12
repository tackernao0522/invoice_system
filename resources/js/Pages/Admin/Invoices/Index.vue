<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import PaginationView from '@/Components/PaginationView.vue'
import dayjs from 'dayjs'
import { ref } from 'vue';

const props = defineProps({
    unpaidInvoices: Object,
})

const search = ref('')

const searchCustomers = () => {
    router.get(route('admin.invoices.index', { search: search.value }))
}
</script>

<template>
    <Head title="未払いの請求書一覧" />

    <AdminAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">未払いの請求書一覧</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-8 mx-auto">
                                <div class="flex pl-4 my-4 lg:w-2/3 w-full mx-auto">
                                    <div>
                                        <input type="text" name="search" v-model="search">
                                        <button class="bg-blue-300 text-white py-2 px-2"
                                            @click="searchCustomers">検索</button>
                                    </div>
                                </div>
                                <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                    <table class="table-auto w-full text-left whitespace-nowrap">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                                    ID</th>
                                                <th
                                                    class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                    顧客名</th>
                                                <th
                                                    class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                    カナ</th>
                                                <th
                                                    class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                    電話番号</th>
                                                <th
                                                    class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                    金額</th>
                                                <th
                                                    class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                    作成日時</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="invoice in unpaidInvoices.data" :key="invoice.id">
                                                <td class="border-b-2 px-4 py-3">{{ invoice.id }}</td>
                                                <td class="border-b-2 px-4 py-3">{{ invoice.customer.name }}</td>
                                                <td class="border-b-2 px-4 py-3">{{ invoice.customer.kana }}</td>
                                                <td class="border-b-2 px-4 py-3">{{ invoice.customer.phone }}</td>
                                                <td class="border-b-2 px-4 py-3">{{ invoice.amount }}</td>
                                                <td class="border-b-2 px-4 py-3">{{
                                                    dayjs(invoice.created_at).format('YYYY-MM-DD HH:mm:ss') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <PaginationView :links="unpaidInvoices.links"></PaginationView>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AdminAuthenticatedLayout>
</template>