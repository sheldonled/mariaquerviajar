const 
  loadImages = function(images) {
    const feedContainer = document.querySelector(".insta-feed");
    images.forEach(image => {
      let li  = document.createElement("li"),
          a   = document.createElement("a"),
          img = document.createElement("img");
      a.href = "https://www.instagram.com/p/"+image.node.shortcode;
      a.title = "Veja essa imagem no Instagram";
      a.target = "_blank";
      img.src = image.node.thumbnail_resources[0].src;
      img.alt = "Veja essa imagem no Instagram";
      
      a.appendChild(img);
      li.appendChild(a);
      feedContainer.appendChild(li);
    });
  },
  init = () => {
    try {
      const feedContainer = document.querySelector(".insta-feed"),
            cachedImages = JSON.parse(window.localStorage.getItem('instaFeed')) || {};
      if (!feedContainer) return;
      if (cachedImages.images && cachedImages.expires > Date.now()) {
        loadImages(cachedImages.images);
        return;
      }
      
      const xhr = new XMLHttpRequest();
      xhr.open('GET', "https://www.instagram.com/mariaquerviajar", true);
      xhr.onload = evt => {
        const 
          response = JSON.parse(evt.target.response
            .match(/<script type="text\/javascript">window\._sharedData = (.*)<\/script>/)[1].slice(0, -1)
          ),
          cache = {
            images: response.entry_data.ProfilePage[0].graphql.user.edge_owner_to_timeline_media.edges,
            expires: Date.now() + 3600000 * 4 //4 hours
          };
        loadImages(cache.images);
        window.localStorage.setItem('instaFeed', JSON.stringify(cache));
      };
      xhr.send();
    } catch (e) {
      console.log(e); //eslint-disable-line
    }
  };
export default {init};
