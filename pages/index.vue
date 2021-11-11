<script>
import MARIA_MARTINS from "../assets/img/maria_martins.png";

export default {
  name: "IndexPage",
  MARIA_MARTINS,
};
</script>
<template>
  <main>
    <section class="site-hero">
      <section class="wrapper">
        <section class="hero-cta">
          <h1 class="hero-title">Um guia para expatriados na Irlanda</h1>
          <h2 class="hero-subtitle">
            Meu trabalho é ajudar brasileiros a morar e construir vida na
            Irlanda.
          </h2>
          <a href="/consultoria" class="btn-primary"> Saiba Mais </a>
        </section>
        <img :src="$options.MARIA_MARTINS" class="maria-martins" />
      </section>
    </section>
    <article class="who-am-i wrapper">
      <h2 class="section-pre-title">Quem sou eu?</h2>
      <h3 class="section-title">Prazer, Maria!</h3>
    </article>
    <section style="height=10rem"></section>
  </main>
</template>
<style lang="scss" scoped>
.site-hero {
  background-color: $yellow-bg-color;
  padding: 0 0 $hero-padding;
}
.site-hero .wrapper {
  display: flex;
  justify-content: space-between;
}
.hero-cta {
  width: 50%;
}
.hero-title {
  font-size: 3rem;
  font-family: "Alfa Slab One", cursive;
  letter-spacing: 0.2rem;
  color: $text-white-1;
  font-weight: normal;
  margin: 3rem 0 0;
}
.hero-subtitle {
  font-size: 1.5rem;
  letter-spacing: 0.2rem;
  color: $white;
  font-weight: normal;
  margin: 0;
}
.maria-martins {
  width: 25rem;
  margin: 0 3rem 0 0;
}
.who-am-i {
  position: relative;
  background-color: $white;
  margin: calc(-1 * calc($hero-padding + 2rem)) auto 0;
  padding: 0 7.5rem;
  border-radius: 1rem;
  overflow: hidden;
  box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.2);
}
.section-pre-title {
  font-size: 1rem;
  letter-spacing: 0.2rem;
  text-align: center;
  font-weight: normal;
  margin: 3.8rem 0 0;
}
.section-title {
  font-size: 1.8rem;
  text-align: center;
  font-family: "Alfa Slab One", cursive;
  letter-spacing: 0.2rem;
  margin: 0 0 2.5rem;
}
</style>
