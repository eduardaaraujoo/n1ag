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



 <!-- BLOG (dinâmico, com posts reais) -->
<section id="blog" class="blog">
  <div class="container">
    <h2>Insights & Blog</h2>
    <p class="blog-subtitle">
      Fique por dentro das últimas tendências em tecnologia e transformação digital com nossos artigos especializados
    </p>

    <?php
    $q = new WP_Query([
      'posts_per_page'      => 3,
      'ignore_sticky_posts' => 1,
    ]);
    ?>

    <?php if ($q->have_posts()) : ?>
      <div class="grid-blog">
        <?php while ($q->have_posts()) : $q->the_post(); ?>
          <article class="blog-card">
            <div class="blog-img">
              <a href="<?php the_permalink(); ?>" class="thumb">
                <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('card', ['loading' => 'lazy']);
                  }
                ?>
              </a>
              <?php
              // Mostra a 1ª categoria (opcional)
              $cats = get_the_category();
              if (!empty($cats)) {
                echo '<span class="category">' . esc_html($cats[0]->name) . '</span>';
              }
              ?>
            </div>

            <div class="blog-content">
              <div class="meta">
                <span>📅 <?php echo get_the_date(); ?></span>
                <span>👤 <?php the_author(); ?></span>
                  <span>⏱ <?php echo meu_tema_tempo_leitura(); ?></span>
              </div>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php echo wp_trim_words(get_the_excerpt(), 28); ?></p>
              <a href="<?php the_permalink(); ?>" class="read-more">Ler mais →</a>
            </div>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    <?php else: ?>
      <p>Nenhum post encontrado. Crie alguns em <strong>Posts</strong> no painel.</p>
    <?php endif; ?>

    <div class="blog-actions">
      <?php if ( get_option('page_for_posts') ) : ?>
        <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>" class="btn-outline">Ver todos os artigos →</a>
      <?php endif; ?>
    </div>
  </div>


</section>



</main>

<?php get_footer(); ?>
