// main.js
// ハンバーガーメニュー
$(".hamburger").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    $("#g-nav").next().slideToggle(100);
});

$(".nav_sub a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".hamburger").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});

// topics
const mySwiper = new Swiper('.card02 .swiper', {
  slidesPerView: 'auto',
  spaceBetween: 16,
  grabCursor: true,
  freeMode: {
    enabled: true,
    momentum: false,
  },
  pagination: {
    el: '.card02 .swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.card02 .swiper-button-next',
    prevEl: '.card02 .swiper-button-prev',
  },
  breakpoints: {
    1025: {
      spaceBetween: 32,
    }
  },
});
