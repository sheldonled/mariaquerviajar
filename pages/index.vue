<script>
import MARIA_MARTINS from "../assets/img/maria_martins.png";

export default {
  name: "IndexPage",
  methods: {
    youtubeLink(videoId) {
      return `https://www.youtube.com/watch?v=${videoId}`;
    },
    youtubeThumbnailSrc(videoId) {
      return `https://i.ytimg.com/vi/${videoId}/maxresdefault.jpg`;
    },
  },
  MARIA_MARTINS,
  youtubeVideos: [
    {
      id: "S7Fj6UdvR4g",
      title: "COMPRAS NA IKEA IRLANDA - IKEA TOUR 2021 | Maria Quer Viajar",
    },
    {
      id: "2RWGO1xCpc0",
      title:
        "COMO É SER ADOLESCENTE NA IRLANDA? | Diferenças na escola do Brasil e da Irlanda | Maria Quer Viajar",
    },
    {
      id: "M_XjVroo7eQ",
      title: "05 ERROS AO MUDAR PRA IRLANDA | Maria Quer Viajar",
    },
  ],
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
          <a href="https://instagram.com/mariaquerviajar" class="btn-primary">
            Saiba Mais
          </a>
        </section>
        <img :src="$options.MARIA_MARTINS" class="maria-martins" />
      </section>
    </section>
    <article class="who-am-i wrapper">
      <img :src="$options.MARIA_MARTINS" class="maria-martins-mobile" />
      <h2 class="section-pre-title" id="sobre">Quem sou eu?</h2>
      <h3 class="section-title">Prazer, Maria!</h3>
      <p>
        Nasci no Rio de Janeiro mas me considero mais goiana do que carioca, já
        que vivi a maior parte da minha vida em Goiânia. Sempre tive o sonho de
        morar fora do Brasil mas, olhando para a minha realidade financeira, por
        muitos anos acreditei que isso seria impossível. Quando me casei com o
        meu marido, por não conseguir nem pagar um aluguel, moramos de favor na
        casa de familiares. Durante um bom tempo da minha vida, a minha
        realidade era correr atrás de pagar as contas e conquistar um pouco de
        conforto e a ideia de morar fora era muito distante e adormeceu... O
        tempo passou e, após alguns anos de trabalho, alcançamos salários
        melhores e nossa situação financeira ficou mais estável mas ainda assim
        não conseguíamos ter a vida confortável que a gente desejava, sabe?
        Fazer passeios de final de semana, viajar, comprar coisas de marca e ter
        uma casa própria ainda não cabiam no nosso bolso. E a sensação era de
        que trabalhávamos e trabalhávamos, mas o dinheiro não dava pra nada.
      </p>
      <p>
        Foi quando lembramos do nosso sonho de sair do Brasil e resolvemos
        tirá-lo do papel. Como uma boa capricorniana que sou eu busquei
        alternativas, pesquisei e estudei muito, organizei tudo para a nossa
        mudança de país. Viemos pra Irlanda em 2017 e vivemos aqui desde então.
        Aqui nós construímos nossa vida, nos estabelecemos profissionalmente,
        compramos nossa casa dos sonhos, conhecemos vários países e atualmente
        estamos nos organizando para dar entrada no processo de cidadania
        irlandesa, já que nem eu e nem o meu marido temos cidadania europeia.
      </p>
      <p>
        Mas mesmo tentando prever e diminuir ao máximo os perrengues ainda assim
        foi muito difícil nossa mudança e início aqui na Irlanda. Hoje eu sei
        que sofremos muito mais do que o que precisávamos ter sofrido. E sendo a
        louca das listas e das planilhas eu documentei TODOS esses anos, desde a
        mudança do Brasil até o dia de hoje e agora vou compartilhar tudo com o
        mundo. Essa é a missão do mariaquerviajar, descomplicar sua vida na
        Irlanda, sua vida como expatriada(o), e facilitar ao máximo a sua
        mudança e da sua família de país! Seja bem-vindo!
      </p>
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
    <section class="featured-blog-posts">
      <h2 class="section-pre-title">Blog</h2>
      <h3 class="section-title">Em breve</h3>
    </section>
    <section class="fatured-youtube-videos">
      <h2 class="section-pre-title">Youtube</h2>
      <h3 class="section-title">
        Conteúdo semanal.
        <a
          href="https://www.youtube.com/mariaquerviajar"
          target="_blank"
          rel="noopener noreferrer"
          >Inscreva-se!</a
        >
      </h3>
      <section class="youtube-videos wrapper">
        <a
          v-for="video in $options.youtubeVideos"
          :key="video.id"
          class="youtube-video"
          :href="youtubeLink(video.id)"
          target="_blank"
          rel="noopener noreferrer"
        >
          <img :src="youtubeThumbnailSrc(video.id)" :alt="video.title" />
        </a>
      </section>
    </section>
    <section class="featured-instagram-posts wrapper">
      <h2 class="section-pre-title">instagram</h2>
      <h3 class="section-title">
        Conteúdo diário.
        <a
          href="https://instagram.com/mariaquerviajar"
          target="_blank"
          rel="noopener noreferrer"
          >Me siga lá!</a
        >
      </h3>
      <div class="instagram-post">
        <a
          href="https://www.instagram.com/p/CUGDnRfI1Uq/"
          target="_blank"
          rel="noopener noreferrer"
          class="instagram-post1"
        ></a>
        <a
          href="https://www.instagram.com/p/CUIogrZofIR/"
          target="_blank"
          rel="noopener noreferrer"
          class="instagram-post2"
        ></a>
        <a
          href="https://www.instagram.com/p/CT2mkmbIbCx/"
          target="_blank"
          rel="noopener noreferrer"
          class="instagram-post3"
        ></a>
      </div>
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
  width: 100%;
  @media (min-width: 40rem) {
    width: 50%;
  }
}

.hero-title {
  font-size: 2rem;
  font-family: "Alfa Slab One", cursive;
  letter-spacing: 0.2rem;
  color: $text-white-1;
  font-weight: normal;
  margin: 3rem 0 0;
  @media (min-width: 40rem) {
    font-size: 3rem;
  }
}

.hero-subtitle {
  font-size: 1rem;
  letter-spacing: 0.2rem;
  color: $white;
  font-weight: normal;
  margin: 0;
  @media (min-width: 40rem) {
    font-size: 1.5rem;
  }
}

.maria-martins {
  width: 25rem;
  margin: 0 3rem 0 0;
  display: none;
  @media (min-width: 40rem) {
    display: block;
  }
}

.maria-martins-mobile {
  background-color: $primary-yellow;
  object-fit: contain;
  height: 10rem;
  width: 10rem;
  border-radius: 50%;
  margin: 1.5rem auto 0;
  display: block;
  @media (min-width: 40rem) {
    display: none;
  }
}

.who-am-i {
  position: relative;
  background-color: $white;
  width: 90%;
  margin: -14rem auto 2rem;
  padding: 0 1.5rem 2.5rem;
  border-radius: 1rem;
  overflow: hidden;
  box-shadow: 0 0 5px 1px $transparent-black;

  .section-pre-title {
    margin: 1rem 0 0;
  }

  @media (min-width: 40rem) {
    width: 100%;
    margin: calc(-1 * calc($hero-padding + 3rem)) auto 0;
    padding: 0 7.5rem 2.5rem;

    .section-pre-title {
      margin: 3.8rem 0 0;
    }
  }
}

.my-work {
  padding: 0 0 4rem;
  overflow: hidden;
  color: $white;
  background-color: $primary-yellow;
  padding: 0 1rem;
  margin: 0 auto 2.5rem;

  @media (min-width: 40rem) {
    color: inherit;
    background-color: inherit;

    & > p {
      padding: 0 7.5rem;
    }
  }
}

.content-pilars {
  display: flex;
  flex-flow: column;
  padding: 0 0 1rem;

  @media (min-width: 40rem) {
    flex-flow: row;
  }
}

.content-pilar {
  width: calc(100% - 1.6rem);
  margin: 0 0.8rem 1rem;
  border-radius: 0.8rem;
  box-shadow: 0 0 5px 1px $transparent-black;
  padding: 1rem;
  text-align: center;
  color: $text-default-color;
  background-color: $white;

  h4 {
    font-size: 1.25rem;
    line-height: 1.5rem;
  }

  @media (min-width: 40rem) {
    width: calc(25% - 1.6rem);
    margin: 0 0.8rem;
    background-color: transparent;
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

.featured-blog-posts {
  background-color: $white;
  padding: 0 0 2.5rem;
  overflow: hidden;

  .section-pre-title,
  .section-title {
    color: $text-default-color;
  }

  @media (min-width: 40rem) {
    background-color: $primary-yellow;
    .section-pre-title,
    .section-title {
      color: $white;
    }
  }
}

.youtube-videos {
  display: flex;
  padding: 0 0 2.5rem;
  flex-flow: column;

  @media (min-width: 40rem) {
    flex-flow: row;
  }
}

.youtube-video {
  width: calc(100% - 2rem);
  height: auto;
  margin: 0 1rem 1rem;
  display: block;
  position: relative;

  &:hover:after {
    position: absolute;
    background-color: $transparent-black;
    content: "";
    display: block;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  img {
    width: 100%;
  }

  @media (min-width: 40rem) {
    margin: 0 0.5rem;
    width: calc(33% - 1rem);
  }
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
  letter-spacing: 0.2rem;
  font-family: "Alfa Slab One", cursive;
  font-weight: normal;
  margin: 0 0 2.5rem;
  a {
    color: $text-default-color;
    &:hover {
      color: lighten($text-default-color, 10%);
    }
  }
}
.featured-instagram-posts {
  padding-bottom: 2.5rem;
}

.instagram-post {
  display: flex;
  flex-flow: column;

  a {
    width: calc(100% - 2rem);
    background-color: $transparent-black;
    margin: 0 1rem 1rem;
    background-image: url("../assets/img/mqv_instagram_preview.jpg");
    background-size: 100%;

    &:after {
      content: "";
      display: block;
      padding-bottom: 100%;
    }
  }

  .instagram-post1 {
    background-position: 0px 0px;
  }

  .instagram-post2 {
    background-position: 0px 50%;
  }

  .instagram-post3 {
    background-position: 0px 100%;
  }

  @media (min-width: 40rem) {
    flex-flow: row;
    a {
      width: calc(33% - 1.6rem);
      margin: 0 0.8rem;
    }
  }
}
</style>
