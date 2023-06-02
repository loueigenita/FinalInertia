<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
  <Head title="Book" />
  
    <div class="flex justify-center items-center h-screen">
      <div v-if="canLogin" class="centered-button">
        <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 dark:text-gray-500 underline">
          DASHBOARD
        </Link>
  
        <template v-else>
          <Link :href="route('login')" class="centered-button">GET STARTED</Link>
        </template>
      </div>
    </div>
</template>
  
  <style>
  
  .centered-button {
    border-radius: 0.25rem;
    text-transform: uppercase;
    font-weight: 400;
    padding-left: 25px;
    padding-right: 25px;
    color: #fff;
    -webkit-clip-path: polygon(0 0, 0 0, 100% 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0 100%);
    clip-path: polygon(0 0, 0 0, 100% 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0 100%);
    height: 50px;
    font-size: 1rem;
    line-height: 14px;
    letter-spacing: 1.2px;
    background-image: linear-gradient(10deg, #1c1c1c, #001aff);
    border: 0 solid;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  </style>
  