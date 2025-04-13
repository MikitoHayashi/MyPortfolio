<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_header(); ?>
  <title>プロフィール｜YUBUKI WORKS</title>
</head>

<body>
  
  <header class="scr-target">
    <a href="/" class="logo">
      <img src="/wp-content/themes/yubukiworks/assets/images/logo.png" alt="YUBUKI WORKSのロゴ">
    </a>
  </header>

  <div id="nv_profile">
<?php get_template_part( 'parts/navi' ); ?>
  </div>
    
  <main id="profile">
   
    <section>
      
      <!-- h1 class="scr-target">
        PROFILE
      </h1 -->
      
      <article class="scr-target">
        <div class="own">
          <img src="/wp-content/themes/yubukiworks/assets/images/own.png">
        </div>
        <p>
          15年以上のWeb制作経験を活かし、UI/UXを考慮した使いやすいWebサイト制作、集客に繋がるSEO対策、
          お客様のニーズに合わせたCMS構築などを通して、事業の成長に貢献します。
        </p>
        <dl class="scr-target">
          <dt>基本情報</dt>
          <dd>YUBUKI(1983)</dd>
          <dt>生息地</dt>
          <dd>谷津干潟</dd>
          <dt>対応可能作業</dt>
          <dd>
            ・UI/UXデザイン ( Figmaによるプロトタイプ作成 )<br>
            ・コーディング / WordPress構築 ( 独自テーマ開発対応 )<br>
            ・SEOコンサルティング ( 構造化データ設計 / コンテンツ戦略提案 )
          </dd>
          <dt>作業環境</dt>
          <dd>Macbook Air M2 - Figma , Phoenix Code 等</dd>
          <dt>デザインモットー</dt>
          <dd>「徹底したわかりやすさ・ミニマリズム」</dd>
          <dt>今後特に学びたいこと</dt>
          <dd>
            Vue.js / Webマーケティング<br>
            ( 将来的には自作アプリの企画・開発にも関心あり )
          </dd>
          <dt>好きなこと</dt>
          <dd>写真 / 旅行 / 読書 ( Audible )</dd>
          <dt>最近の関心事</dt>
          <dd>ChatGPTを使った学び直し</dd>
          <dt>アカウント</dt>
          <dd class="account">
            <a href="https://x.com/yubukiworks" target="_blank"><i class="fa-brands fa-x-twitter"></i>X(旧Twitter)</a>｜
            <a href="https://github.com/MikitoHayashi/MyPortfolio" target="_blank"><i class="fa-brands fa-github"></i>GitHub</a>
          </dd>
        </dl>
      </article>
    </section>

  </main>

<?php get_footer(); ?>