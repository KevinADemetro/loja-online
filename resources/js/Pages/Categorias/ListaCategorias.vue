<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';

    const props = defineProps(['categorias']);
</script>

<template>
    <Head title="Categorias" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Categorias</h2>
        </template>
        <div class="p-12">
            <table class="w-full">
                <thead class="bg-indigo-700 text-white">
                    <tr>
                        <th class="p-1.5 text-left">#</th>
                        <th class="p-1.5 text-left">Nome</th>
                        <th class="p-1.5 text-left">Descrição</th>
                        <th class="p-1.5 text-left">Editar</th>
                        <th class="p-1.5 text-left">Remover</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="categoria in categorias" :key="categoria.id">
                        <td class="flex justify-center">{{ categoria.id }}</td>
                        <td>{{ categoria.nome }}</td>
                        <td>{{ categoria.descricao }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AuthenticatedLayout>
</template>