<template>
    <div>
        <h1>Lista movies</h1>
        <ul class="list-group">
            <li
                v-for="movie in movies"
                :key="movie.id"
                class="list-group-item d-flex"
            >
                <img
                    class="img-thumbnail me-3"
                    :src="movie.poster"
                    style="width: 50px; height: 50px"
                />
                {{ movie.title }}
            </li>
        </ul>
        <ul class="pagination">
            <li>
                <button class="page-link" @click="currentPage=1 ? currentPage=1: getData(currentPage - 1)">
                    Indietro
                </button>
            </li>
            <li
                v-for="page of lastPage"
                :key="page"
                class="page-item"
                :class="{ active: currentPage === page }"
            >
                <button class="page-link" @click="getData(page)">{{page}}</button>
            </li>
            <li>
                <button class="page-link" @click="currentPage=lastPage ? currentPage = lastPage: getData(currentPage - 1)">
                    Avanti
                </button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            movies: [],
            currentPage: 1,
            lastPage: null,
        };
    },

    methods: {
        getData(page=1) {
            axios.get("/api/movies?page="+ page).then((resp) => {
                this.movies = resp.data.data;
                this.currentPage = resp.data.current_page;
                this.lastPage = resp.data.last_page;
               
            });
        },
    },

    mounted() {
        this.getData();
    },
};
</script>

<style></style>
