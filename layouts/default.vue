<script>
import Header from "../components/Header.vue";

export default {
  name: "DefaultLayout",
  components: {
    Header,
  },
};
</script>
<template>
  <div>
    <Header />
    <Nuxt />
  </div>
</template>

<style lang="scss">
html {
  font-family: "Be Vietnam", sans-serif;
}
body {
  margin: 0;
}
.wrapper {
  width: 100%;
  max-width: 68.75rem;
  margin: 0 auto;
}
.btn-primary {
  background-color: $primary-color;
  color: $white;
  text-decoration: none;
  text-transform: uppercase;
  padding: 0.6rem 2rem;
  margin: 0.5rem 0;
  display: inline-block;
  border-radius: 2rem;
}
</style>
