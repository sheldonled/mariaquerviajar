<script>
import Header from "../components/Header.vue";
import Footer from "../components/Footer.vue";

export default {
  name: "DefaultLayout",
  components: {
    Header,
    Footer,
  },
};
</script>
<template>
  <div>
    <Header />
    <Nuxt />
    <Footer />
  </div>
</template>
<style lang="scss">
* {
  box-sizing: border-box;
}

html {
  font-family: "Be Vietnam", sans-serif;
}

body {
  margin: 0;
  color: $text-default-color;
}

.wrapper {
  width: 100%;
  margin: 0 auto;
  padding: 0 1rem;
  @media (min-width: 40rem) {
    max-width: 68.75rem;
    padding: 0;
  }
}

.btn-primary {
  background-color: $primary-red;
  color: $white;
  text-decoration: none;
  text-transform: uppercase;
  padding: 0.6rem 2rem;
  margin: 0.5rem 0;
  display: inline-block;
  border-radius: 2rem;
}
</style>
