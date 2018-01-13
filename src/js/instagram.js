export default () => {
  const loadImages = function(images) {
    const feedContainer = document.querySelector(".insta-feed");
    images.forEach(image => {
      let li  = document.createElement("li"),
          a   = document.createElement("a"),
          img = document.createElement("img");
      a.href = "https://www.instagram.com/p/"+image.code;
      a.title = "Veja essa imagem no Instagram";
      a.target = "_blank";
      img.src = image.thumbnail_resources[0].src;
      img.alt = "Veja essa imagem no Instagram";
      
      a.appendChild(img);
      li.appendChild(a);
      feedContainer.appendChild(li);
    });
  };

  return {
    init: () => {
      try {
        const feedContainer = document.querySelector(".insta-feed"),
              cachedImages = JSON.parse(window.localStorage.getItem('instaFeed')) || {};
        if (!feedContainer) return;
        if (cachedImages.images && cachedImages.expires > Date.now()) {
          loadImages(cachedImages.images);
          return;
        }
        
        const xhr = new XMLHttpRequest();
        xhr.open('GET', "https://www.instagram.com/mariaquerviajar/?__a=1", true);
        xhr.onload = evt => {
            const response = JSON.parse(evt.target.response),
                  cache = {
                    images: response.user.media.nodes,
                    expires: Date.now() + 3600000 * 4 //4 hours
                  };
            loadImages(cache.images);
            window.localStorage.setItem('instaFeed', JSON.stringify(cache));
        };
        xhr.send();
      } catch (e) {
        console.log(e); //eslint-disable-line
      }
    }
  };
};
