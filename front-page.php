<?php get_header(); ?>

<main>
  
<!-- HERO -->
<section class="hero">
  <div class="container">
    
    <!-- Texto -->
    <div class="hero-text">
      <h1>Transformamos <span>ideias</span> em soluções digitais</h1>
      <p>Impulsionamos seu negócio com tecnologia de ponta, integrações inteligentes e inovação contínua.</p>
      <a href="#contato" class="btn">Conheça nossas soluções</a>
     

      <!-- Ícones -->
      <div class="hero-icons">
        <div class="icon-card">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/nuvem.png' ); ?>" alt="Cloud Computing">
          <p>Cloud Computing</p>
        </div>
        <div class="icon-card">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/ia.png' ); ?>" alt="Inteligência Artificial">
          <p>Inteligência Artificial</p>
        </div>
        <div class="icon-card">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/integracoes.png' ); ?>" alt="Integrações">
          <p>Integrações</p>
        </div>
      </div><!-- fecha hero-icons -->

    </div><!-- fecha hero-text -->

    <!-- Imagem -->
    <div class="hero-img">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero.png' ); ?>" alt="Hero">
    </div>

  </div>
</section>




  <!-- sobre -->
<section id="sobre" class="sobre">
  <div class="container">
    
   <div class="sobre-img">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/sobre.png' ); ?>" alt="Equipe N1.AG">

  <div class="sobre-card">
    <span class="card-icon">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/check.png' ); ?>" alt="">
      <!-- use o seu ícone (check/meta) aqui -->
    </span>
    <div class="card-text">
      <h3>Equipe N1.AG</h3>
      <p>Qualidade Garantida</p>
    </div>
  </div>
</div>


    <!-- Texto -->
    <div class="sobre-texto">
      <h2>Sobre a N1.AG</h2>
      <p>
       Somos uma empresa de tecnologia especializada em transformação digital, oferecendo soluções inovadoras que conectam estratégia de negócio com excelência técnica. Nossa equipe multidisciplinar trabalha com paixão para entregar resultados excepcionais.
       
      </p>

      <!-- Métricas -->
      <ul class="sobre-metricas">
        <li>
          <strong>150+</strong>
          Projetos Entregues
        </li>
        <li>
          <strong>98%</strong>
          Satisfação do Cliente
        </li>
        <li>
          <strong>5</strong>
          Anos de Experiência
        </li>
        <li>
          <strong>50+</strong>
          Clientes Ativos
        </li>
      </ul>
    </div>

  </div>
</section>


<!-- Missão, Visão e Valores -->
<section class="mvv">
  <div class="container">

    <div class="mvv-card">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/missao.png' ); ?>" alt="Missão" class="icon-img">
      <h3>Missão</h3>
      <p>Democratizar o acesso à tecnologia avançada, oferecendo soluções personalizadas que impulsionam o crescimento dos nossos clientes.</p>
    </div>

    <div class="mvv-card">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/visao.png' ); ?>" alt="Visão" class="icon-img">
      <h3>Visão</h3>
      <p>Ser referência em inovação tecnológica, criando um futuro digital mais conectado e eficiente para empresas de todos os portes.</p>
    </div>

    <div class="mvv-card">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/valores.png' ); ?>" alt="Valores" class="icon-img">
      <h3>Valores</h3>
      <p>Excelência, transparência, inovação contínua e compromisso total com o sucesso dos nossos parceiros de negócio.</p>
    </div>

  </div>
</section>





  
<!-- SERVIÇOS -->
<section id="servicos" class="servicos">
  <div class="container">
    <h2>Nossos Serviços</h2>
    <p>Oferecemos soluções completas em tecnologia para impulsionar sua empresa rumo ao futuro digital</p>

    <div class="grid-servicos">

      <!-- Desenvolvimento -->
      <div class="card">
        <figure class="icon-wrap">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/container1.png' ); ?>" alt="Desenvolvimento" width="40" height="40" loading="lazy">
        </figure>
        <h3>Desenvolvimento</h3>
        <p>Aplicações web e mobile modernas, escaláveis e performáticas, utilizando as tecnologias mais avançadas do mercado.</p>
        <ul class="bullets">
          <li>React / Next.js</li>
          <li>Node.js</li>
          <li>React Native</li>
          <li>Progressive Web Apps</li>
        </ul>
        <a href="#" class="card-cta">Saiba mais </a>
      </div>

      <!-- Integrações -->
      <div class="card">
        <figure class="icon-wrap">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/container2.png' ); ?>" alt="Integrações" width="40" height="40" loading="lazy">
        </figure>
        <h3>Integrações</h3>
        <p>Conectamos seus sistemas de forma inteligente, automatizando processos e otimizando fluxos de trabalho.</p>
        <ul class="bullets">
          <li>APIs RESTful</li>
          <li>Microserviços</li>
          <li>Webhooks</li>
          <li>Sincronização de dados</li>
        </ul>
        <a href="#" class="card-cta">Saiba mais </a>
      </div>

      <!-- Cloud Computing -->
      <div class="card">
        <figure class="icon-wrap">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/container3.png' ); ?>" alt="Cloud Computing" width="40" height="40" loading="lazy">
        </figure>
        <h3>Cloud Computing</h3>
        <p>Otimização de infraestrutura em nuvem para máxima disponibilidade e economia.</p>
        <ul class="bullets">
          <li>AWS / Azure</li>
          <li>DevOps</li>
          <li>Monitoramento</li>
          <li>Backup & Recovery</li>
        </ul>
        <a href="#" class="card-cta">Saiba mais</a>
      </div>

      <!-- Consultoria -->
      <div class="card">
        <figure class="icon-wrap">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/container4.png' ); ?>" alt="Consultoria" width="40" height="40" loading="lazy">
        </figure>
        <h3>Consultoria</h3>
        <p>Estratégias personalizadas de transformação digital para acelerar seu crescimento tecnológico.</p>
        <ul class="bullets">
          <li>Auditoria técnica</li>
          <li>Arquitetura de soluções</li>
          <li>Metodologias ágeis</li>
          <li>Gestão de projetos</li>
        </ul>
        <a href="#" class="card-cta">Saiba mais </a>
      </div>

    </div>
  </div>
</section>




 <!-- CTA -->
<section class="cta">
  <div class="container">
    <h2>Pronto para transformar seu negócio?</h2>
    <p>Entre em contato conosco e descubra como podemos acelerar sua jornada de transformação digital.</p>
    <a href="#contato" class="btn">Conversar com especialista</a>
  </div>
</section>



<!-- CASES -->
<section id="cases" class="cases">
  <div class="container">
    <h2>Cases de Sucesso</h2>
    <p class="cases-subtitle">
      Conheça algumas das empresas que confiaram na TechInova para suas transformações digitais
    </p>

    <div class="grid-cases">
      
      <div class="case-card">
        <img class="quote-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/container8.png' ); ?>" alt="Aspas">
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <p>"A TechInova transformou completamente nossa infraestrutura digital. O resultado foi um aumento de 300% na eficiência operacional."</p>
        <div class="case-footer">
          <div class="avatar">CS</div>
          <div class="case-info">
            <h4>Carlos Silva</h4>
            <p>CTO, InnovaCorp</p>
            <span class="company">InnovaCorp</span>
          </div>
        </div>
      </div>

      <div class="case-card">
        <img class="quote-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/container8.png' ); ?>" alt="Aspas">
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <p>"Profissionalismo exemplar e soluções que realmente funcionam. Nossa migração para a nuvem foi perfeita e sem interrupções."</p>
        <div class="case-footer">
          <div class="avatar">AC</div>
          <div class="case-info">
            <h4>Ana Costa</h4>
            <p>Diretora de TI, TechFlow</p>
            <span class="company">TechFlow</span>
          </div>
        </div>
      </div>

      <div class="case-card">
        <img class="quote-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/container8.png' ); ?>" alt="Aspas">
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <p>"Equipe altamente qualificada que entende as necessidades do negócio. Superaram nossas expectativas em todos os aspectos."</p>
        <div class="case-footer">
          <div class="avatar">RM</div>
          <div class="case-info">
            <h4>Roberto Mendes</h4>
            <p>CEO, DataMax Solutions</p>
            <span class="company">DataMax</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



 <!-- BLOG -->
<section id="blog" class="blog">
  <div class="container">
    <h2>Insights & Blog</h2>
    <p class="blog-subtitle">
      Fique por dentro das últimas tendências em tecnologia e transformação digital com nossos artigos especializados
    </p>

    <div class="grid-blog">
      <article class="blog-card">
        <div class="blog-img">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/blog1.png' ); ?>" alt="O Futuro do Desenvolvimento Web">
          <span class="category">Desenvolvimento</span>
        </div>
        <div class="blog-content">
          <div class="meta">
            <span>👤 Maria Santos</span>
            <span>📅 10 Set 2024</span>
            <span>⏱ 8 min</span>
          </div>
          <h3>O Futuro do Desenvolvimento Web: Tendências para 2024</h3>
          <p>Descubra as principais tecnologias e frameworks que estão moldando o futuro do desenvolvimento web e como se preparar para as mudanças.</p>
          <a href="#" class="read-more">Ler mais →</a>
        </div>
      </article>

      <article class="blog-card">
        <div class="blog-img">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/blog2.png' ); ?>" alt="IA Generativa: Como Implementar em sua Empresa">
          <span class="category">Inteligência Artificial</span>
        </div>
        <div class="blog-content">
          <div class="meta">
            <span>👤 Maria Santos</span>
            <span>📅 10 Set 2024</span>
            <span>⏱ 8 min</span>
          </div>
          <h3>IA Generativa: Como Implementar em sua Empresa</h3>
          <p>Um guia prático sobre como integrar inteligência artificial generativa nos processos empresariais para aumentar produtividade e inovação.</p>
          <a href="#" class="read-more">Ler mais →</a>
        </div>
      </article>

      <article class="blog-card">
        <div class="blog-img">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/blog3.png' ); ?>" alt="Segurança em Cloud: Melhores Práticas e Estratégias">
          <span class="category">Cloud Computing</span>
        </div>
        <div class="blog-content">
          <div class="meta">
            <span>👤 Maria Santos</span>
            <span>📅 10 Set 2024</span>
            <span>⏱ 8 min</span>
          </div>
          <h3>Segurança em Cloud: Melhores Práticas e Estratégias</h3>
          <p>Aprenda as estratégias essenciais para manter seus dados seguros na nuvem e implementar uma política de segurança robusta.</p>
          <a href="#" class="read-more">Ler mais →</a>
        </div>
      </article>
    </div>

    <div class="blog-actions">
      <a href="#" class="btn-outline">Ver todos os artigos →</a>
    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>
