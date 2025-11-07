<footer class="site-footer">
  <div class="container footer-grid">
    
    <!-- Coluna 1: Logo + texto + contatos -->
    <div class="footer-col footer-about">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logofooter.png'); ?>" alt="N1.AG">
      </a>
      <p class="footer-desc">
        Transformando ideias em soluções digitais inovadoras.<br>
        Sua parceira estratégica na jornada de transformação digital.
      </p>

      <ul class="footer-contact">
        <li>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/local.png'); ?>" alt="">
          São Paulo, SP - Brasil
        </li>
        <li>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/telefone.png'); ?>" alt="">
          +55 (11) 9999-9999
        </li>
        <li>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/email.png'); ?>" alt="">
          contato@technova.com.br
        </li>
      </ul>
    </div>

    <!-- Coluna 2: Links rápidos -->
    <div class="footer-col">
      <h4>Links Rápidos</h4>
      <ul>
        <li><a href="#">Sobre Nós</a></li>
        <li><a href="#">Serviços</a></li>
        <li><a href="#">Cases</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Carreiras</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </div>

    <!-- Coluna 3: Serviços -->
    <div class="footer-col">
      <h4>Serviços</h4>
      <ul>
        <li><a href="#">Desenvolvimento Web</a></li>
        <li><a href="#">Aplicativos Mobile</a></li>
        <li><a href="#">Cloud Computing</a></li>
        <li><a href="#">Integrações</a></li>
        <li><a href="#">Consultoria em TI</a></li>
        <li><a href="#">Transformação Digital</a></li>
      </ul>
    </div>

    <!-- Coluna 4: Newsletter -->
    <div class="footer-col footer-newsletter">
      <h4>Newsletter</h4>
      <p>Receba insights exclusivos sobre tecnologia e inovação</p>

      <form class="newsletter-form">
        <input type="email" placeholder="Seu e-mail" required>
        <button type="submit">Assinar</button>
      </form>

      <div class="footer-social">
        <h5>Siga-nos</h5>
        <div class="social-links">
          <a href="#"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/linkedin.png'); ?>" alt="LinkedIn"></a>
          <a href="#"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/github.png'); ?>" alt="GitHub"></a>
          <a href="#"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/twtter.png'); ?>" alt="Twitter"></a>
          <a href="#"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/instagram.png'); ?>" alt="Instagram"></a>
        </div>
      </div>
    </div>

  </div>

  <!-- Linha inferior -->
  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>© 2024 TechNova. Todos os direitos reservados.</p>
      <ul class="footer-legal">
        <li><a href="#">Política de Privacidade</a></li>
        <li><a href="#">Termos de Uso</a></li>
        <li><a href="#">Cookies</a></li>
      </ul>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>


