<script setup>
import AdminAuthenticatedLayout from '@/Layouts/AdminAuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="管理者ダッシュボード" />

    <AdminAuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-bold text-gray-900">
                管理者向けコントロールパネル
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6 bg-white border-b border-gray-200 flex justify-center space-x-8">
                        <div class="flex justify-between w-full max-w-md">
                            <Link :href="route('admin.invoices.index')"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-200">
                            未払いの請求書</Link>
                            <Link :href="route('admin.estimates.index')"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-200">
                            期限切れの見積書</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</AdminAuthenticatedLayout></template>
