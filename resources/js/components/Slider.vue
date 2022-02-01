<template>
        
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div
                class="carousel-item"
                :class="{ active: i === 0 }"
                v-for="(movie, i) in dataList"
                :key="movie.id">
                <img :src="movie.poster" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button class="carousel-control-prev" type="button"
              data-target="#carouselExampleControls"
              data-slide="prev">
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-target="#carouselExampleControls"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
    
  
    
</template>

<script>
export default {
  name:"Slider",
  props: {
      dataList: Array,
  }
};
</script>
