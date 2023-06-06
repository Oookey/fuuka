// ローディング
$(function testFunc(callback){
  $(window).on('load',function(){
  $('#loader').delay(600).fadeOut(600);
}); 
  setTimeout(function(){
    $('#loader').fadeOut(500);
      },800);
    setTimeout(function (){
    var wHeight = $(document).height();
    var scrollAmount = $(document).scrollTop();
    // フェードインアニメーション
    $('.fv_fadein').each(function () {
        var targetPosition = $(this).offset().top;
        console.log(targetPosition);
        if(scrollAmount > targetPosition - wHeight + 200) {
            $(this).addClass("fv_is-fadein");
        }
      });
    },800);
});

// kirigirisu
(function(d) {
  var config = {
    kitId: 'jfc4tfq',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

// フェードイン
$(window).on('scroll',function () {
  const windowHeight = $(window).height();
  const scroll = $(window).scrollTop();

  $('.fadein').each(function () {
  const targetPosition = $(this).offset().top;
  if (scroll > targetPosition - windowHeight + 0) {
      $(this).addClass("is-fadein");
  }
  });
}).trigger('scoll');

// main.js
// スムーススクロール
$(function(){
  $('a[href^="#"]').click(function(){
  var href= $(this).attr("href");
  var speed = 1100;
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $("html, body").animate({scrollTop:position}, speed, 'swing');
  return false;
});
});
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

// // 宿泊予約PC
$(".hotel_reserve").hover(function () {//ボタンがホバーされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $(".hotel_reserve_inner").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});
// // 宿泊予約SP
$("#hotel_reserve_btn_sp").on('click',function () {//ボタンがクリックされたら
  $(".hotel_reserve_inner_sp").addClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#sp_nav_close").on('click',function () {//ボタンがクリックされたら
  $(".hotel_reserve_inner_sp").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
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

//スライダー
$(function(){
  $('.slick').slick({
      autoplay: true,
      dots: true,
      infinite: true,
      speed: 1500,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      autoplaySpeed:1500,
      arrows:false,
  });
});

// 体験宿泊プラン
$(function(){
  $('.slick_exp').slick({
      autoplay: true,//自動的に動き出すか。初期値はfalse。
      infinite: true,//スライドをループさせるかどうか。初期値はtrue。
      speed: 1500,//スライドのスピード。初期値は300。
      autoplaySpeed:5000,
      slidesToShow: 1,//スライドを画面に3枚見せる
      slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
      arrows:true,
      prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
      nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
      centerMode: true,//要素を中央ぞろえにする
      variableWidth: true,//幅の違う画像の高さを揃えて表示
      dots: true,//下部ドットナビゲーションの表示
      dotsClass: "slick_exp-dots",
  });
});
 
// 八ヶ岳周辺観光
$(function(){
  $('.slick_tourism').slick({
      autoplay: true,
      dots: false,
      infinite: true,
      speed: 1500,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      initialSlide:5,
      autoplaySpeed:1500,
      arrows:false,
  });
});


//インスタグラムクラス追加
$("[id=sbi_images]").addClass("swiper-wrapper");
$(".sbi_item").addClass("swiper-slide");


//インスタグラム
const slideLength = document.querySelectorAll('.insta_slide .swiper-a .sbi .swiper-slide').length;

  const params = {
    slidesPerView: 'auto',
    loop: true,
    loopedSlides: slideLength,
    speed: 10000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    freeMode: {
      enabled: true,
      momentum: false,
    },
    grabCursor: true,
    spaceBetween: 14, // スライド間余白
  }

  const initSwiper = () => {
    const mySwiper_a = new Swiper('.insta_slide .swiper-a .sbi', {
      ...params,
      on: {
        touchEnd: (swiper) => {
          swiper.slideTo(swiper.activeIndex + 1);
        }
      }
    });

    const mySwiper_b = new Swiper('.insta_slide .swiper-b .sbi', {
      ...params,
      autoplay: {
        ...params.autoplay,
        reverseDirection: true
      },
      on: {
        touchEnd: (swiper) => {
          swiper.slideTo(swiper.activeIndex - 1);
        }
      }
    });
  };
  window.addEventListener('load', function(){
    initSwiper();
  }); 

  // 文字数制限
  $(function() {
    var count = 42;
  $('.slide-detail').each(function() {
      var thisText = $(this).text();
       var textLength = thisText.length;
        if (textLength > count) {
           var showText = thisText.substring(0, count);
           var insertText = showText += '…続きを読む';
           $(this).html(insertText);
       };
    });
  });

  $(function() {
  var count = 114;
  $('.plan_text_pc').each(function() {
    var thisText = $(this).text();
     var textLength = thisText.length;
      if (textLength > count) {
         var showText = thisText.substring(0, count);
         var insertText = showText += '…続きを読む';
         $(this).html(insertText);
      };
    });
  });

  $(function() {
    var count = 45;
    $('.plan_text_sp').each(function() {
      var thisText = $(this).text();
       var textLength = thisText.length;
        if (textLength > count) {
           var showText = thisText.substring(0, count);
           var insertText = showText += '…続きを読む';
           $(this).html(insertText);
        };
    });
  });

  $(function() {
      $("p:contains('創設以来')").css("color", "868686");
  });
    