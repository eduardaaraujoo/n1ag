// Barra de progresso de leitura
(function(){
  const bar = document.getElementById('read-progress');
  if(!bar) return;
  const onScroll = () => {
    const h = document.documentElement;
    const scrolled = (h.scrollTop) / (h.scrollHeight - h.clientHeight);
    bar.style.width = (Math.min(1, Math.max(0, scrolled)) * 100) + '%';
  };
  window.addEventListener('scroll', onScroll, {passive:true});
  onScroll();
})();

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.nav-toggle');
  const nav = document.getElementById('site-nav');
  if(!btn || !nav) return;

  btn.addEventListener('click', () => {
    const open = nav.classList.toggle('is-open');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    document.documentElement.classList.toggle('menu-open', open);
  });
});
