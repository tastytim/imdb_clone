<template>
    <div>
        <!-- <transition> -->
        <router-view></router-view>
        <!-- </transition> -->
    </div>
</template>

<script>
export default {
    name: "App",
    components: {  },
    data() {
        return {
            helloMsg: "Hello world",
        };
    },
};
</script>