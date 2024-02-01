<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    unpaidInvoices: Array,
    expiredEstimates: Array,
})
</script>

<template>
    <Head title="管理者向けコントロールパネル
" />

    <AdminAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">管理者向けコントロールパネル
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="text-2xl font-bold mb-4">管理者ダッシュボード</div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-blue-100 border border-blue-200 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-2">未払いの請求書</h3>
                                <ul>
                                    <li v-for="invoice in unpaidInvoices" :key="invoice.id" class="mb-2">
                                        {{ invoice.amount }} 円 - {{ invoice.due_date }}
                                    </li>
                                </ul>
                            </div>

                            <div class="bg-red-100 border-red-200 p-4 rounded-lg">
                                <h3 class="text-lg font-semibold mb-2">期限切れの見積書</h3>
                                <ul>
                                    <li v-for="estimate in expiredEstimates" :key="estimate.id" class="mb-2">
                                        {{ estimate.amount }} 円 - {{ estimate.expiration_date }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminAuthenticatedLayout>
</template>
