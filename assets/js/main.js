// 初期表示する要素と背景画像を指定
let currentCatch = 1;
let currentBgImage =
  "/wp-content/themes/DreamSolution/assets/image/mainvisual1.jpeg";

// 一定時間ごとに要素と背景画像を切り替える関数
function switchCatchAndBgImage() {
  // 現在表示している要素と背景画像を非表示にする
  const catchP = document.getElementById(`catch${currentCatch}`);
  catchP.children[0].style.marginLeft = "-60px"; // 最初の要素にmargin-leftを設定する
  catchP.children[1].style.marginRight = "-60px"; // 2番目の要素にmargin-rightを設定する
  catchP.style.opacity = 0;
  const mainBg = document.getElementById("mainBg");
  mainBg.style.animation = "none";
  mainBg.offsetHeight; // アニメーションを強制的にリフローさせる
  mainBg.style.animation = null;

  // CSSのanimationプロパティを定義する
  const style = document.createElement("style");
  style.innerHTML = `
@keyframes zoomInOut {
  0% {
    transform: scale(1.4);
  }
  100% {
    transform: scale(1);
  }
}
`;
  document.head.appendChild(style);

  // 次に表示する要素と背景画像の番号を切り替える
  currentCatch = currentCatch === 1 ? 2 : 1;
  currentBgImage =
    currentCatch === 1
      ? "/wp-content/themes/DreamSolution/assets/image/mainvisual1.jpeg"
      : "/wp-content/themes/DreamSolution/assets/image/mainvisual2.jpeg"; // catch1とcatch2の背景画像を切り替える

  // 次に表示する要素と背景画像を表示する
  const next = document.getElementById(`catch${currentCatch}`);
  next.children[0].style.marginLeft = "0px";
  catchP.children[0].style.opacity = 1;

  next.children[1].style.marginRight = "0px";
  next.style.opacity = 1;
  mainBg.src = currentBgImage;
  mainBg.style.animation = "zoomInOut 8s";
}

// 一定時間ごとにswitchCatchAndBgImage関数を実行する
setInterval(switchCatchAndBgImage, 7000); // 5000ミリ秒(5秒)ごとに切り替える場合

// ハンバーガーメニュー
const menuIcon = document.querySelector(".menu-icon");
const menu = document.querySelector(".menu");

menuIcon.addEventListener("click", () => {
  menuIcon.classList.toggle("active");
  menu.classList.toggle("active");
});

// ---------------------------------splide-------------------------

new Splide("#splide1", {
  type: "slide",
  perPage: 5,
  perMove: 1,
  type: "loop",
  autoplay: true,
  interval: 3000,
  gap: 20,
  pagination: false,

  breakpoints: {
    1200: {
      perPage: 4,
      gap: 15,
    },
    768: {
      perPage: 3,
      gap: 10,
    },
    576: {
      perPage: 2,
      gap: 5,

    },
  },
}).mount();

new Splide("#splide2", {
  type: "slide",
  perPage: 5,
  perMove: 1,
  gap: 20,
  pagination: false,
  breakpoints: {
    1200: {
      perPage: 4,
      gap: 15,
    },
    1067:{
      perPage: 3,
      gap: 15,
    },
    768: {
      perPage: 3,
      gap: 10,
    },
    576: {
      perPage: 2,
      gap: 5,
    },
  },
}).mount();

// -----------
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    // デフォルトの動作を無効化
    e.preventDefault();
    // スクロール先の要素を取得
    const target = document.querySelector(this.getAttribute("href"));
    const headerOffset = 0; // ヘッダーの高さ
    const targetOffset =
      target.getBoundingClientRect().top + window.pageYOffset - headerOffset;
    const speed = 500; // ミリ秒
    // スムーススクロール
    window.scrollTo({
      top: targetOffset,
      behavior: "smooth",
    });
  });
});
