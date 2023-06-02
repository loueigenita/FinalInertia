<template>
    <AppLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>

                <section class="content mt-3">
                    <div class="container-fluid">
                        <div class="row justify-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3 class="text-4xl">{{ count }}</h3>
                                        <p class="mt-2 text-xl">Books</p>
                                    </div>
                                    <div class="icon text-dark">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <a :href="route('books')" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3 class="text-4xl">{{ countUser }}</h3>
                                        <p class="mt-2 text-xl">Users</p>
                                    </div>
                                    <div class="icon text-dark">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <a :href="route('users')" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3 class="text-4xl">{{ countUser }}</h3>
                                        <p class="mt-2 text-xl">Visitors</p>
                                    </div>
                                    <div class="icon text-dark">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <a :href="route('users')" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content mt-3">
                    <div class="container-fluid">
                        <div class="row justify-center">
                            <div class="col-lg-12 col-md-10">
                                <p class="text-sm text-center">A <strong>BOOK</strong> is a written or printed work consisting of pages bound
                                    together, typically contained within a cover. It serves as a medium for conveying
                                    information, ideas, stories, and knowledge to readers. Books have been an essential part
                                    of human civilization for centuries, playing a crucial role in education, entertainment,
                                    and preserving cultural heritage.

                                    Books come in various genres and formats, catering to diverse interests and preferences.
                                    They can be fiction or non-fiction, encompassing a wide range of subjects such as
                                    literature, science, history, philosophy, and more. Books allow readers to explore new
                                    worlds, experience different perspectives, and broaden their understanding of the world
                                    around them. They provide an immersive and intellectual experience, stimulating
                                    imagination, critical thinking, and personal growth.

                                    With the advent of digital technology, books have also embraced electronic formats, such
                                    as e-books, which can be read on electronic devices like e-readers, tablets, and
                                    smartphones. This digital transformation has made books more accessible, portable, and
                                    convenient for readers worldwide. Regardless of the format, books continue to be
                                    cherished as valuable sources of knowledge, sources of inspiration, and windows into
                                    different cultures and societies.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </AppLayout>
</template>
  
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

export default {
    components: {
        AppLayout,
        Welcome,
    },
    props: ['count', 'countUser'],
}
</script>
  
<style scoped>
.content {
    margin-top: 5rem;
}

.container-fluid {
    max-width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    margin-right: auto;
    margin-left: auto;
}

.row {
    margin-right: -0.5rem;
    margin-left: -0.5rem;
}

.col-lg-4,
.col-md-6 {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}

.small-box {
    display: block;
    position: relative;
    box-sizing: border-box;
    margin-bottom: 1rem;
    border-radius: 0.25rem;
    background-color: #f8f9fa;
    border: 1px solid #f8f9fa;
    color: #333;
}

.small-box .inner {
    padding: 1.5rem;
}

.small-box h3 {
    font-size: 2rem;
    font-weight: 600;
    margin: 0 0 1rem 0;
    white-space: nowrap;
    color: #333;
}

.small-box p {
    margin: 0;
    font-weight: 500;
    color: #333;
}

.small-box .icon {
    position: absolute;
    top: -0.5rem;
    right: -0.5rem;
    z-index: 0;
    display: block;
    width: 4.5rem;
    height: 4.5rem;
    text-align: center;
    font-size: 3rem;
    line-height: 4.5rem;
    background-color: rgba(0, 0, 0, 0.15);
    border-radius: 50%;
    color: #fff;
}

.small-box .icon i {
    line-height: inherit;
}

.small-box a {
    position: absolute;
    bottom: 0;
    right: 0;
    color: rgba(255, 255, 255, 0.8);
    background-color: rgba(0, 0, 0, 0.1);
    padding: 0.75rem;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.875rem;
    border-top-left-radius: 0.25rem;
}

.small-box a:hover {
    color: rgba(255, 255, 255, 0.9);
    background-color: rgba(0, 0, 0, 0.15);
}</style>
  