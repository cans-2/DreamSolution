
// -----------
// document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
//   anchor.addEventListener("click", function (e) {
//     // デフォルトの動作を無効化
//     e.preventDefault();
//     // スクロール先の要素を取得
//     const target = document.querySelector(this.getAttribute("href"));
//     const headerOffset = 0; // ヘッダーの高さ
//     const targetOffset =
//       target.getBoundingClientRect().top + window.pageYOffset - headerOffset;
//     const speed = 500; // ミリ秒
//     // スムーススクロール
//     window.scrollTo({
//       top: targetOffset,
//       behavior: "smooth",
//     });
//   });
// });


//　TOPへ戻る

    // スクロールイベントを監視
    window.addEventListener('scroll', function() {
      // スクロール量を取得
      var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  
      // 表示する位置の閾値（例: 200px）
      var threshold = 400;
  
      // 閾値を超えた場合、ボタンを表示
      if (scrollPosition > threshold) {
        document.getElementById('page__top__btn').style.opacity = '1';
      } else {
        document.getElementById('page__top__btn').style.opacity = '0';
      }
    });
  
    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    //PBXページ 12の機能
    function scrollToSection(event,pbx_func) {
      event.preventDefault();
      const offset = document.getElementById(pbx_func).offsetTop-80;
      window.scrollTo({ top: offset, behavior: 'smooth' });
    }
    //フェードアップアニメーション
    // ページの読み込みが完了したら実行
    window.addEventListener('DOMContentLoaded', function() {
      // 要素を取得
      var element = document.querySelector('.fade-up');

      // スクロール時のイベントリスナーを追加
      window.addEventListener('scroll', function() {
        // 要素の上端がウィンドウの下端よりも上に位置する場合
        if (isElementInViewport(element)) {
          // 要素に表示用のクラスを追加
          element.classList.add('fade-up_d');
        }
      });

      // 要素がウィンドウ内に表示されているかどうかを判定する関数
      function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }
    });