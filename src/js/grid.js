export default () => {
  return {
    placeMainGrid: () => {
      const isIE = !!navigator.userAgent.match(/Trident/g) || !!navigator.userAgent.match(/MSIE/g);
      if (!isIE) return;
      const articles = Array.prototype.slice.call(document.querySelectorAll(".content-area.grid article"));
      let articleColumn = 1,
          articleRow = 1;
      articles.forEach(article => {
        article.style.msGridColumn = articleColumn;
        article.style.msGridRow = articleRow;
        articleColumn++;
        if(articleColumn > 3) {
          articleColumn = 1;
          articleRow++;
        }
      });
    }
  };
};
    