<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>基本のHTMLテンプレート</title>
  <link rel="stylesheet" href="style.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
<header>
  <div class="header_wrapper">
    <a class="logo">
      <img src="assets/images/logo.png" alt="ロゴ画像">
    </a>
  </div>
</header>

<main>
  <div class="header_padding"></div>
  <section id="fv">
    <div class="fv_bg">
      <img src="assets/images/fv_bg.png" alt="背景画像">
    </div>
    <div class="fv_wrapper">
      <div class="fv_title">
        <img class="absolute" src="assets/images/fv_caption.png" alt="求人広告代理店パートナー募集">
        <img src="assets/images/fv_title.png" alt="圧倒的なサービスラインナップとバックアップ">
      </div>
      <div class="fv_info">
        <div class="frame_contents">
          <img src="assets/images/fv_frame1.png" alt="営業研修ツール無料で利用可能">
          <img src="assets/images/fv_frame2.png" alt="国内複数拠点で全国対応">
          <img src="assets/images/fv_frame3.png" alt="二人三脚のサポート体制">
        </div>
        <div class="map_block">
          <img class="map" src="assets/images/fv_map.png" alt="エリア展開画像">
          <img class="absolute" src="assets/images/fv_person.png" alt="fv_person">
        </div>
      </div>
      <div class="fv_contact">
        <div class="orange_button">
          <span>お問い合わせはこちら</span>
          <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
            <ellipse cx="16.9848" cy="16.9944" rx="16.9848" ry="16.9944" fill="white"/>
            <path d="M24.7891 16.5351L12.3948 23.695L12.3948 9.37522L24.7891 16.5351Z" fill="url(#paint0_linear_3_170)"/>
            <defs>
              <linearGradient id="paint0_linear_3_170" x1="16.5262" y1="8.26758" x2="16.5262" y2="24.8026" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FD8D00"/>
                <stop offset="0.445" stop-color="#FC9D01"/>
                <stop offset="1" stop-color="#FBA801"/>
              </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <section id="merit">
    <div class="merit_wrapper">
      <div class="section_title">
        <h2>MERIT</h2>
        <h1>パートナー契約を結ぶ<br>
          <span>3</span>つのメリット</h1>
      </div>
      <div class="merit_content">
        <div class="merit_block">
          <div class="text_block">
            <div class="num">
              <span>MERIT</span>
              <span class="number">01</span>
            </div>
            <div class="sub_title">
              <p>圧倒的な取り扱い商材</p>
            </div>
            <p class="text">総合求人広告代理店であるネオキャリアでは、中途、新卒、アルバイト、幅広い雇用形態で充実したサービス数をそろえています。<br>
              <span>メインとなる求人広告のほとんどを好条件でお取り扱いいただけます。</span></p>
          </div>
          <div class="img_block">
            <img src="assets/images/merit1.png" alt="merit1">
          </div>
        </div>

        <div class="merit_block">
          <div class="text_block">
            <div class="num">
              <span>MERIT</span>
              <span class="number">02</span>
            </div>
            <div class="sub_title">
              <p>手厚いサポート体制</p>
            </div>
            <p class="text"><span>専任の渉外営業担当がつき、パートナー様の営業活動やサポート活動などを一緒にさせていただきます。</span><br>
              いつでもご連絡いただけるよう、専用のチャットツールとパートナーシステムを導入しています。いつでも最新の情報が確認でき、お気軽にご相談していただける体制となっていますので、安心して営業活動をおこなっていただけます。</p>
          </div>
          <div class="img_block">
            <img src="assets/images/merit2.png" alt="merit2">
          </div>
        </div>

        <div class="merit_block">
          <div class="text_block">
            <div class="num">
              <span>MERIT</span>
              <span class="number">03</span>
            </div>
            <div class="sub_title">
              <p>各求人メディアとの強いつながり</p>
            </div>
            <p class="text">ネオキャリアでは、エン転職やマイナビ新卒など、国内大手求人メディアにおいて<span>豊富な販売実績があるため、良い条件・ロイヤリティで販売ができます。</span>そのためパートナー企業の皆様にも好条件で販売していただくことができ、メーカー実施の勉強会やキャンペーンなどにもご参加いただけます。</p>
          </div>
          <div class="img_block">
            <img src="assets/images/merit3.png" alt="merit3">
          </div>
        </div>

        <div class="merit_block">
          <div class="text_block">
            <div class="num">
              <span>MERIT</span>
              <span class="number">04</span>
            </div>
            <div class="sub_title">
              <p>様々な角度の勉強会やイベントを実施</p>
            </div>
            <p class="text">・全体向けの勉強会<span>月6回ほど実施</span><br>
              ・個社別の課題に合わせた<span>勉強会も実施</span><br>
              ・テレアポ大会の実施や、年間表彰式の開催など<br>
              ・ネオキャリア限定キャンペーンの実施</p>
          </div>
          <div class="img_block">
            <img src="assets/images/merit4.png" alt="merit4">
          </div>
        </div>

        <div class="merit_block">
          <div class="text_block">
            <div class="num">
              <span>MERIT</span>
              <span class="number">05</span>
            </div>
            <div class="sub_title">
              <p class="text">求人広告以外のニーズにも対応</p>
            </div>
            <p>・企業立ち上げ時のリソース不足に合わせた<span>リーガルツールのご提供</span><br>
              ・制作のサポート<br>
              ・ATSやHPなどの制作物、RPO、オウントメディアなど</p>
          </div>
          <div class="img_block">
            <img src="assets/images/merit5.png" alt="merit5">
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="advertisement">
    <div class="advertisement_wrapper">
      <div class="section_title">
        <h2>advertisement</h2>
        <h1>取扱求人広告</h1>
      </div>
      <div class="advertisement_content">

      </div>
    </div>
  </section>

  <section id="member">
    <div class="member_wrapper">
      <div class="section_title">
        <h2>MEMBER</h2>
        <h1>メンバー紹介</h1>
      </div>
      <div class="member_content">

      </div>
    </div>
  </section>

  <section id="voice">
    <div class="voice_wrapper">
      <div class="section_title">
        <h2>VOICE</h2>
        <h1>パートナー様からの声</h1>
      </div>
      <div class="voice_content">

      </div>
    </div>
  </section>

  <section id="youtube">
    <div class="youtube_wrapper">
      <div class="section_title">
        <h2>YOUTUBE</h2>
        <h1>仕事のリアルを紹介</h1>
      </div>
      <div class="youtube_content">

      </div>
    </div>
  </section>

  <section id="qa">
    <div class="qa_wrapper">
      <div class="section_title">
        <h2>Q&A</h2>
        <h1>よくある質問</h1>
      </div>
      <div class="qa_content">

      </div>
    </div>
  </section>

  <section id="contact">
    <div class="contact_wrapper">
      <div class="section_title">
        <h2>contact</h2>
        <h1>お問い合わせ</h1>
      </div>
      <div class="contact_content">

      </div>
    </div>
  </section>
</main>

<footer>
  <p>© 2025 My Website</p>
</footer>
</body>
</html>
