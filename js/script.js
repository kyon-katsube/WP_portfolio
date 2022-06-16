$(function () {

  //ページ内スクロール
  var $nav = $(".header");

  $('a[href^="#"]').on("click", function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("html, body").animate(
      {
        scrollTop: position,
      },
      300,
      "swing"
    );
    return false;
  });

  //ページトップ
  $("#js-page-top").on("click", function () {
    $("body,html").animate({
        scrollTop: 0
      },300
    );
    return false;
  });
});


//幕が上がるアニメーション
// const CLASSNAME = "-visible";
// const TIMEOUT = 2000;
// const $target = $(".p-sprit");

// setInterval(() => {
//   $target.addClass(CLASSNAME);

//   setTimeout(() => {
//     $target.removeClass(CLASSNAME);
//   }, TIMEOUT);
// }, TIMEOUT*2);
