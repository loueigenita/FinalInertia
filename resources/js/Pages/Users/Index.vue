<template>
    <AppLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-3">
                    <User />
                </div>
                <div class="table-full-width table-responsive">
                    <table class="table table-striped table-bordered shadow text-center">
                        <thead>
                            <tr>
                                <th class="bg-primary text-light">No.</th>
                                <th class="bg-primary text-light">Name</th>
                                <th class="bg-primary text-light">Email</th>
                                <th class="bg-primary text-light">Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(user, index) in users.data" :key="user.id">
                                <td class="px-4 py-2 border text-center">{{ (users.current_page - 1) * users.per_page +
                                    index + 1 }}</td>
                                <td class="px-4 py-2 border text-center">{{ user.name }}</td>
                                <td class="px-4 py-2 border text-center">{{ user.email }}</td>
                                <td class="px-4 py-2 border text-center">{{ user.created_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <Pagination :links="users.links"></Pagination>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
  
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Components/Pagination.vue';
import User from '@/Components/User.vue';

export default {
    components: {
        AppLayout,
        Pagination,
        User,
    },
    props: {
        users: {
            type: Object,
            required: true,
        },
    },
};
</script>
  