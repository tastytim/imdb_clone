<template>
  <ul class="list-group">
    <li
      v-for="movie in dataList"
      :key="movie.id"
      class="list-group-item d-flex"
    >
      <img class="img-thumbnail me-3" :src="movie.poster" style="width: 50px; height: 50px"/>
      {{ movie.title }}
    </li>
  </ul>
</template>

<script>
export default {
  props: {
    dataList: Array,
  },
};
</script>

<style></style>