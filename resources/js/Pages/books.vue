<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-3">
                    <BookDash/>
                </div>
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert" v-if="$page.props.flash.message">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ $page.props.flash.message }}</p>
                        </div>
                    </div>
                </div>

                <button @click="openForm()" class="btn btn-sm btn-primary mb-2 ">
                    <i class="fas fa-plus"></i>
                </button>

                <!-- table -->
                <div class="table-full-width table-responsive"></div>
                <table class="table table-striped table-bordered shadow text-center">
                    <thead>
                        <tr>
                            <th class="bg-primary text-light">No.</th>
                            <th class="bg-primary text-light">Title</th>
                            <th class="bg-primary text-light">Author</th>
                            <th class="bg-primary text-light">Genre</th>
                            <th class="bg-primary text-light">Year</th>
                            <th class="bg-primary text-light">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="item in data.data" :key="item.id">
                            <td class="px-4 py-2 border text-center">{{ item.id }}</td>
                            <td class="px-4 py-2 border text-center">{{ item.title }}</td>
                            <td class="px-4 py-2 border text-center">{{ item.author }}</td>
                            <td class="px-4 py-2 border text-center">{{ item.genre }}</td>
                            <td class="px-4 py-2 border text-center">{{ item.year_published }}</td>
                            <td class="border px-4 py-2 text-center">
                                <button @click="openForm(item)" class="btn btn-sm btn-primary mr-2">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button @click="deleteItem(item)" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <pagination :links="data.links"></pagination>
                <book-form :isOpen="isFormOpen" :isEdit="isFormEdit" :form="formObject" @formsave="saveItem"
                    @formclose="closeModal"></book-form>
            </div>
        </div>
    </app-layout>
</template>
  
<script>
const defaultFormObject = {
    title: null,
    author: null,
    genre: null,
    year_published: null,
};

import AppLayout from './../Layouts/AppLayout.vue';
import Pagination from './../Components/pagination.vue';
import BookForm from './../Components/Book/form.vue';
import BookDash from '@/Components/BookDash.vue';

export default {
    props: ['data'],
    components: {
        AppLayout,
        BookDash,
        Pagination,
        BookForm,
    },
    data() {
        return {
            isFormOpen: false,
            isFormEdit: false,
            formObject: defaultFormObject,
        };
    },
    methods: {
        saveItem(item) {
            let url = '/books';
            if (item.id) {
                url = '/books/' + item.id;
                item._method = 'PUT';
            }
            this.$inertia.post(url, item, {
                onError: () => { },
                onSuccess: () => {
                    this.closeModal();
                },
            });
        },
        closeModal() {
            this.isFormOpen = false;
        },
        openForm(item) {
            this.isFormOpen = true;
            this.isFormEdit = !!item;
            this.formObject = item ? item : defaultFormObject;
            this.$page.props.errors = {};
        },
        deleteItem(item) {
            if (window.confirm('Are you sure you want to delete?')) {
                this.$inertia.post('/books/' + item.id, {
                    _method: 'DELETE',
                });
            }
        },
        props: {
            users: {
                type: Array,
                required: true,
            },
        },
    },
};
</script>
  