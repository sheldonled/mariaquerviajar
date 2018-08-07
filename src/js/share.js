import dom from './dom';

const init = () => {
  document.body.addEventListener('scroll', shareScrollListener);
  dom.getNodeElements('.js-copy-share-link').forEach(el => el.addEventListener('click', evt => {
    evt.preventDefault();
    const tempEl = document.createElement('textarea');
    tempEl.value = evt.target.getAttribute('href');
    document.body.appendChild(tempEl);
    tempEl.select();
    document.execCommand('copy');
    document.body.removeChild(tempEl);
    window.alert('Link copiado =)');
  }));
};

const shareScrollListener = () => {
  let positionData = document.querySelector('.post-meta').getBoundingClientRect();

  if((positionData.top + positionData.height) < 0)
    document.querySelector('.post-share').classList.add('sticky');
  else
    document.querySelector('.post-share').classList.remove('sticky');
};


export default {init};