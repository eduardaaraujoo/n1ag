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
