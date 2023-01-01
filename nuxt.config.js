export default {
  // https://nuxtjs.org/docs/configuration-glossary/configuration-ssr/
  ssr: false,
  // https://nuxtjs.org/docs/configuration-glossary/configuration-target/
  target: "static",
  // Global page headers: https://nuxtjs.org/docs/configuration-glossary/configuration-head/
  head: {
    title: "Maria Quer Viajar",
    htmlAttrs: {
      lang: "pt-BR",
    },
    meta: [
      { charset: "utf-8" },
      { name: "viewport", content: "width=device-width, initial-scale=1" },
      { hid: "description", name: "description", content: "Maria Quer Viajar" },
      { name: "format-detection", content: "telephone=no" },
    ],
    link: [
      { rel: "icon", type: "image/svg", href: "/favicon.svg" },
      { rel: "preconnect", href: "https://fonts.googleapis.com" },
      {
        rel: "preconnect",
        href: "https://fonts.gstatic.com",
        crossorigin: true,
      },
      {
        rel: "stylesheet",
        href: "https://fonts.googleapis.com/css2?family=Be+Vietnam&display=swap",
      },
      {
        rel: "stylesheet",
        href: "https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap",
      },
    ],
  },
  // Global CSS: https://nuxtjs.org/docs/configuration-glossary/configuration-css
  css: [],
  // Auto import components: https://nuxtjs.org/docs/configuration-glossary/configuration-components
  components: {
    dirs: ["~/components"],
  },
  // Modules: https://nuxtjs.org/docs/configuration-glossary/configuration-modules
  modules: ["@nuxtjs/sanity"],
  // Sanity CMS: https://www.sanity.io/docs/connect-your-content-to-nuxt3
  sanity: {
    projectId: "qhw09lqc",
    apiVersion: "2022-03-25",
  },
  vite: {
    css: {
      preprocessorOptions: {
        scss: {
          additionalData: '@import "~/assets/scss/variables.scss";',
        },
      },
    },
  },
};
