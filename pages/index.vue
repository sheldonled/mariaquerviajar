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
    <section class="my-work wrapper">
      <h2 class="section-pre-title">Meu trabalho</h2>
      <h3 class="section-title">Entenda como eu posso te ajudar</h3>
      <p>
        Desde 2018 eu descomplico a vida de brasileiros que querem se mudar e
        construir vida na Irlanda, através de 4 principais pilares de conteúdo,
        e também através de consultorias individuais.
      </p>
      <section class="content-pilars">
        <div class="content-pilar">
          <div
            class="content-pilar__circle content-pilar__circle--yellow"
          ></div>
          <h4>Planejamento de Mudança</h4>
          <p>
            Tudo para te ajudar a planejar a sua mudança de país com segurança.
          </p>
        </div>
        <div class="content-pilar">
          <div class="content-pilar__circle content-pilar__circle--green"></div>
          <h4>Primeiros Passos</h4>
          <p>Descomplicando os seus primeiros passos e adaptação na Irlanda.</p>
        </div>
        <div class="content-pilar">
          <div
            class="content-pilar__circle content-pilar__circle--orange"
          ></div>
          <h4>Construindo Vida na Irlanda</h4>
          <p>
            O guia para um expatriado na Irlanda: tudo que você precisa saber
            para estabelecer a sua vida a longo prazo.
          </p>
        </div>
        <div class="content-pilar">
          <div class="content-pilar__circle content-pilar__circle--red"></div>
          <h4>Vida na Irlanda</h4>
          <p>
            Estilo de vida, curiosidades, passeios e viagens de uma brasileira
            que construiu raízes na Irlanda.
          </p>
        </div>
      </section>
    </section>
  </main>
</template>
<style lang="scss" scoped>
.site-hero {
  background-color: $primary-yellow;
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
  margin: calc(-1 * calc($hero-padding + 3rem)) auto 0;
  padding: 0 7.5rem;
  border-radius: 1rem;
  overflow: hidden;
  box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.2);
}

.my-work {
  padding: 0 0 2.5rem;

  & > p {
    padding: 0 7.5rem;
    margin: 0 0 2.5rem;
  }
}

.content-pilars {
  display: flex;
}

.content-pilar {
  width: calc(25% - 1.6rem);
  margin: 0 0.8rem;
  border-radius: 0.8rem;
  box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.2);
  padding: 1rem;
  text-align: center;

  h4 {
    font-size: 1.25rem;
    line-height: 1.5rem;
  }
}

.content-pilar__circle {
  width: 8rem;
  height: 8rem;
  margin: 1rem auto;
  border-radius: 50%;
}

.content-pilar__circle--yellow {
  background-color: $primary-yellow;
}

.content-pilar__circle--green {
  background-color: $primary-green;
}

.content-pilar__circle--orange {
  background-color: $primary-orange;
}

.content-pilar__circle--red {
  background-color: $primary-red;
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
