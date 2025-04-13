<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_header(); ?>
  <title>ブログ記事一覧｜YUBUKI WORKS</title>
</head>

<body>
  
  <header class="scr-target">
    <a href="/" class="logo">
      <img src="/wp-content/themes/yubukiworks/assets/images/logo.png" alt="YUBUKI WORKSのロゴ">
    </a>
  </header>

  <div id="nv_blog">
<?php get_template_part( 'parts/navi' ); ?>
  </div>
  
  <main id="blog">
   
    <section>
      
      <h1 class="scr-target">
        BLOG
      </h1>
      
      <article class="scr-target">
        
        <p>
          記事が入ります。
        </p>

      </article>
    </section>

  </main>

<?php get_footer(); ?>