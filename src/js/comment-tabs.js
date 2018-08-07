import dom from './dom';

const init = () => {
  const tabs = dom.getNodeElements(".js-comment-tab");
  
  tabs.forEach(tab => {
    tab.addEventListener("click", e => {

      tabs.forEach(t => {
        if(t.dataset.target === e.target.dataset.target)
          t.classList.add("comments__tab--open");
        else
          t.classList.remove("comments__tab--open");
      });

      dom.getNodeElements(".js-comments-container").forEach(element => {
        if(element.dataset.tab === e.target.dataset.target)
          element.classList.add("comments--open");
        else
          element.classList.remove("comments--open");
      });
    });
  });
};

export default {init};