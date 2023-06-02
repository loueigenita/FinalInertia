<template>
  <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" v-if="isOpen">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
      <div
        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
        role="dialog" aria-modal="true" aria-labelledby="modal-headline">

        <form @submit.prevent="saveForm">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="">
              <div class="mb-4">
                <label for="formBookTitle" class="block text-gray-700 text-sm font-bold mb-2">Title: </label>
                <input type="text" v-model="form.title"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="formBookTitle" placeholder="Enter Title">
                <div v-if="$page.props.errors.title" class="text-red-500">{{ $page.props.errors.title }}</div>
              </div>
              <div class="mb-4">
                <label for="formBookAuthor" class="block text-gray-700 text-sm font-bold mb-2">Author:</label>
                <input type="text" v-model="form.author"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="formBookAuthor" placeholder="Enter Author">
                <div v-if="$page.props.errors.author" class="text-red-500">{{ $page.props.errors.author }}</div>
              </div>

              <div class="mb-4">
                <label for="formBookGenre" class="block text-gray-700 text-sm font-bold mb-2">Genre:</label>
                <input type="text" v-model="form.genre"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="formBookGenre" placeholder="Enter Genre">
                <div v-if="$page.props.errors.genre" class="text-red-500">{{ $page.props.errors.genre }}</div>
              </div>

              <div class="mb-4">
                <label for="formBookYear" class="block text-gray-700 text-sm font-bold mb-2">Published:</label>
                <input type="text" v-model="form.year_published"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="formBookYear" placeholder="Enter Year">
                <div v-if="$page.props.errors.year_published" class="text-red-500">{{ $page.props.errors.year_published }}</div>
              </div>
            </div>
          </div>

          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
              <button type="submit" v-show="!isEdit"
                class="justify-center btn btn-sm btn-primary">
                Save
              </button>
            </span>
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
              <button type="submit" v-show="isEdit"
                class="justify-center btn btn-sm btn-primary">
                Update
              </button>
            </span>
            <span class="d-inline">
              <button type="button" @click="$emit('formclose')"
                class=" justify-center btn btn-sm btn-secondary">
                Cancel
              </button>
            </span>
          </div>
        </form>

      </div>
    </div>
  </div>
</template>
  
<script>
export default {
  props: ['form', 'isOpen', 'isEdit'],

  methods: {
    saveForm() {
      // Emit the event with the form data
      this.$emit('formsave', this.form);
    },

    handleImageUpload(event) {
      const file = event.target.files[0];
      this.form.image = file;
    }
  }
}
</script>
  