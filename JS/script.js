jQuery(function () {
  //TOPのスワイパー
  let swipeOption = {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false, // 自動再生を継続させる
    },
    speed: 2000,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    }
  }
  new Swiper('.swiper-container', swipeOption);
});


// ページトップへ戻る
jQuery(window).scroll(function () {
  var now = jQuery(window).scrollTop();
  if (now > 200) {
    jQuery('.pagetop').fadeIn("slow");
  } else {
    jQuery('.pagetop').fadeOut('slow');
  }
});

// ハンバーガーメニュー
jQuery(function () {
  jQuery('#toggle').on('click', function () {
    jQuery('body').toggleClass('is-open');
    jQuery('#main').toggleClass('overlay');
  });
  jQuery(document).on('click', '.overlay', function () {
    jQuery('body').removeClass('is-open');
    jQuery('#main').removeClass('overlay');
  });
});

// jQuery(function(){
//   jQuery("nav").hide();
//   jQuery(".js-btn").click(function(){//メニューボタンをクリックしたとき
//       jQuery("nav").toggle(300);//0.3秒で表示したり非表示にしたりする
//       jQuery('.header-container, .btn-line').toggleClass('open');
//   });
// });

// jQuery(function () {
//   jQuery('.js-btn').on('click', function () {
//     // js-btnクラスをクリックすると、
//     jQuery(this).toggleClass("open");
//     jQuery(".header, .drawer-bg, nav").slideToggle();
//     // jQuery(".header, .drawer-bg, nav").toggle(300);
//     jQuery('.btn-line').toggleClass('open');
//     // メニューとバーガーの線にopenクラスをつけ外しする
//   })
// });




// ーーーー
// メニューページのタブ
// ーーーー

jQuery(function(){
  jQuery("#js-tab li").click(function(){
    jQuery("#js-tab li").removeClass("active");
    jQuery(this).addClass("active");
    var index = jQuery(this).index();

    jQuery(".l-menu-box").removeClass("active");
    jQuery(".l-menu-box").eq(index).addClass("active");
  });
});
