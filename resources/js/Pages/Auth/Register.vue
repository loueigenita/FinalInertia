<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>

    <Head title="Register" />

    <AuthenticationCard>
        <form @submit.prevent="submit" class="form">

            <p id="heading">SIGN UP</p>
            <div class="field">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 0C3.589 0 0 3.589 0 8c0 4.411 3.589 8 8 8s8-3.589 8-8c0-4.411-3.589-8-8-8zm0 14.595c-3.921 0-7.105-3.183-7.105-7.105C.895 3.57 4.079.387 8 .387c3.921 0 7.105 3.183 7.105 7.105 0 3.921-3.183 7.105-7.105 7.105zM7.5 4.847c-.687 0-1.246.56-1.246 1.246s.559 1.246 1.246 1.246c.686 0 1.246-.56 1.246-1.246s-.56-1.246-1.246-1.246zm2.953 8.049C9.947 11.5 8.743 12.02 8 12.02c-.743 0-1.947-.52-2.402-1.078C4.46 10.796 4.38 10.35 4.38 9.796c0-.562.374-.968.868-.968.432 0 .759.284.887.649H6.59c-.108-.299-.468-.608-.716-.608-.411 0-.636.327-.636.69 0 .396.25.662.591.662.285 0 .497-.163.583-.433h.105v.376H7.5c0 .542-.387.877-.949.877-.588 0-1.013-.412-1.013-.968 0-.609.424-1.072 1.074-1.072.591 0 1.003.454 1.034 1.15v.495H6.675v-.376H9.5v1.267h1v-.727h-.983v-.475z">
                    </path>
                </svg>
                <input autocomplete="off" id="name"
                    v-model="form.name"
                    type="text" class="input-field" placeholder="Name" required
                    autofocus>
            </div>

            <InputError class="mt-2" :message="form.errors.name" />

            <div class="field">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path
                        d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
                    </path>
                </svg>
                <input autocomplete="on" id="email"
                    v-model="form.email"
                    type="email" class="input-field" placeholder="Email"  required
                    autofocus>
            </div>
            <InputError class="mt-2" :message="form.errors.email" />
            <div class="field">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                    </path>
                </svg>
                <input placeholder="Password" class="input-field" id="password"
                    v-model="form.password"
                    type="password"  required
                    autocomplete="current-password">
            </div>
            <InputError class="mt-2" :message="form.errors.password" />
            <div class="field">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                    </path>
                </svg>
                <input placeholder="Confirm Password" class="input-field" id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    required
                    autocomplete="new-password">
            </div>

            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                
            <div class="flex items-center justify-end">
                <Link :href="route('login')" class="underline text-sm text-white hover:text-gray-900 p-2">
                    Already registered?
                </Link>
                <PrimaryButton class="button1" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</PrimaryButton>

            </div>
        </form>
    </AuthenticationCard>
</template>

<style>
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding-left: 2em;
  padding-right: 2em;
  padding-bottom: 0.4em;
  background-color: #2629ff;
  border-radius: 25px;
}

#heading {
  text-align: center;
  margin: 2em;
  color: rgb(255, 255, 255);
  font-size: 1.2em;
}

.field {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5em;
  border-radius: 25px;
  padding: 0.6em;
  border: none;
  outline: none;
  color: white;
  background-color: #ffffff;
  box-shadow: inset 2px 5px 10px rgb(5, 5, 5);
}

.input-icon {
  height: 1.3em;
  width: 1.3em;
  fill: rgb(0, 0, 0);
}

.input-field {
  background: none;
  border: none;
  outline: none;
  width: 100%;
  color: #000000;
}

.form .btn {
  display: flex;
  justify-content: center;
  flex-direction: row;
  margin-top: 2.5em;
}

.button1 {
  padding: 0.5em;
  padding-left: 1.1em;
  padding-right: 1.1em;
  border-radius: 5px;
  margin-right: 0.5em;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-color: #252525;
  color: white;
}

.button1:hover {
  background-color: black;
  color: white;
}

.button2 {
  padding: 0.5em;
  padding-left: 2.3em;
  padding-right: 2.3em;
  border-radius: 5px;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-color: #252525;
  color: white;
}

.button2:hover {
  background-color: black;
  color: white;
}

.button3 {
  margin-bottom: 3em;
  padding: 0.5em;
  text-align: center;
  border-radius: 5px;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-color: #252525;
  color: white;
}

.button3:hover {
  background-color: rgb(94, 255, 0);
  color: white;
}</style>

