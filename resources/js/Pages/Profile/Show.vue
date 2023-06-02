<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue';;
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue';


</script>

<template>
    <AppLayout title="Profile">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div>
            <div class="max-w-5xl mx-5 py-2">
                <div v-if="$page.props.jetstream.canUpdateProfileInformation" >
                    <UpdateProfileInformationForm :user="$page.props.user" />
                    
                </div>
                <div v-if="$page.props.jetstream.canUpdatePassword">
                    <UpdatePasswordForm class="mt-10 sm:mt-0" />
                    
                </div>
                <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
                    
                    <DeleteUserForm class="mb-10 mt-10 sm:mt-0" />
                </template>
            </div>
        </div>
    </AppLayout>
</template>
