<template>
    <div>
        <h1>Filtro boolean</h1>
        <!-- TITOLO FILTER -->
        <input
            class="form-control"
            type="text"
            placeholder="Titolo"
            name="title"
            v-model="selected.title"
        />
        <!-- SELECT OPTION FILTER-->
        <select
            class="form-control my-2"
            aria-label="Default select example"
            name="genres"
            multiple
            v-model="selected.genres"
        >
            <option selected>Select genre</option>
            <option
                v-bind:value="genre.id"
                v-for="genre in genres"
                :key="genre.id"
            >
                {{ genre.name }}
            </option>
        </select>
        <!-- CHECKBOX OPTION FILTER-->
        <div class="form-check" v-for="genre in genres" :key="genre.id">
            <input
                option.checked="true"
                class="form-check-input"
                type="checkbox"
                :value="genre.id"
                :id="genre.id"
                v-model="selected.genres"
            />
            <label class="form-check-label" :for="genre.id">
                {{ genre.name }}
            </label>
        </div>
        <!-- BUTTON PER CHIAMARE AXIOS -->
        <button @click="getData()" class="btn btn-primary my-2">Filtra</button>

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
        <!-- PAGINATION -->
        <ul class="pagination">
            <li>
                <button
                    class="page-link"
                    @click="
                        currentPage = 1
                            ? (currentPage = 1)
                            : getData(currentPage - 1)
                    "
                >
                    Indietro
                </button>
            </li>
            <li
                v-for="page of lastPage"
                :key="page"
                class="page-item"
                :class="{ active: currentPage === page }"
            >
                <button class="page-link" @click="getData(page)">
                    {{ page }}
                </button>
            </li>
            <li>
                <button
                    class="page-link"
                    @click="
                        currentPage = lastPage
                            ? (currentPage = lastPage)
                            : getData(currentPage - 1)
                    "
                >
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
            genres: [],
            title: null,
            selected: {
                genres: [],
                title: null,
            },
        };
    },

    methods: {
        getData(page = 1) {
            axios
                .get("/api/movies?page=" + page, { params: this.selected })
                .then((resp) => {
                    this.movies = resp.data.data;
                    this.currentPage = resp.data.current_page;
                    this.lastPage = resp.data.last_page;
                });
        },
        getGenres() {
            axios.get("/api/genres").then((resp) => {
                this.genres = resp.data;
            });
        },
    },

    mounted() {
        this.getData();
        this.getGenres();
    },
};
</script>

<style></style>
