<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>سوره قدر</title>
  <style>
    body {
      font-family: tahoma;
      text-align: right;
      background-image: url('../moon.jpg');
      background-size: cover;
      background-position: center;
      padding: 20px;
      line-height: 1;
    }
    h1 {
      text-align: center;
      color: #C6CF9B; /* رنگ زرد */
      font-size: 2.5em;
      margin-bottom: 20px;
      margin-top: -1%;
    }
    p {
      text-align:center;
      font-size:16px;
      color: #ffffff; /* رنگ سفید */
      margin-bottom: 10px;
      transition: all 0.3s ease;
    }
    .ayeh1 {
      margin-bottom:20px
    }

    .ayeh2 {
      margin-bottom:20px
    }
    .ayeh3 {
      margin-bottom:20px
    }
    .ayeh4{
      margin-bottom:20px
    }
    .ayeh5 {
      margin-bottom:20px
    } 
     .ayeh6{
      margin-bottom:20px
    }
    body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
  overflow: hidden;
}

.stars {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 120%;
  transform: rotate(-45deg);
}

.star {
  --star-color: #F1C93B;
  --star-tail-length: 6em;
  --star-tail-height: 2px;
  --star-width: calc(var(--star-tail-length) / 6);
  --fall-duration: 9s;
  --tail-fade-duration: var(--fall-duration);
  position: absolute;
  top: var(--top-offset);
  left: 0;
  width: var(--star-tail-length);
  height: var(--star-tail-height);
  color: var(--star-color);
  background: linear-gradient(45deg, currentColor, transparent);
  border-radius: 50%;
  filter: drop-shadow(0 0 6px currentColor);
  transform: translate3d(104em, 0, 0);
  animation: fall var(--fall-duration) var(--fall-delay) linear infinite, tail-fade var(--tail-fade-duration) var(--fall-delay) ease-out infinite;
}
@media screen and (max-width: 750px) {
  .star {
    animation: fall var(--fall-duration) var(--fall-delay) linear infinite;
  }
}
.star:nth-child(1) {
  --star-tail-length: 5.56em;
  --top-offset: 29.34vh;
  --fall-duration: 10.125s;
  --fall-delay: 0.531s;
}
.star:nth-child(2) {
  --star-tail-length: 5.26em;
  --top-offset: 97.34vh;
  --fall-duration: 9.974s;
  --fall-delay: 0.729s;
}
.star:nth-child(3) {
  --star-tail-length: 5.14em;
  --top-offset: 16.19vh;
  --fall-duration: 6.439s;
  --fall-delay: 6.522s;
}
.star:nth-child(4) {
  --star-tail-length: 5.34em;
  --top-offset: 26.25vh;
  --fall-duration: 7.266s;
  --fall-delay: 1.076s;
}
.star:nth-child(5) {
  --star-tail-length: 6.56em;
  --top-offset: 97.79vh;
  --fall-duration: 10.397s;
  --fall-delay: 5.01s;
}
.star:nth-child(6) {
  --star-tail-length: 7.24em;
  --top-offset: 24.66vh;
  --fall-duration: 7.926s;
  --fall-delay: 2.299s;
}
.star:nth-child(7) {
  --star-tail-length: 5.66em;
  --top-offset: 19.04vh;
  --fall-duration: 6.889s;
  --fall-delay: 2.915s;
}
.star:nth-child(8) {
  --star-tail-length: 5.52em;
  --top-offset: 15.7vh;
  --fall-duration: 11.005s;
  --fall-delay: 9.425s;
}
.star:nth-child(9) {
  --star-tail-length: 6.82em;
  --top-offset: 83.68vh;
  --fall-duration: 11.288s;
  --fall-delay: 2.526s;
}
.star:nth-child(10) {
  --star-tail-length: 5.31em;
  --top-offset: 25.23vh;
  --fall-duration: 7.293s;
  --fall-delay: 3.096s;
}
.star:nth-child(11) {
  --star-tail-length: 7.19em;
  --top-offset: 41.14vh;
  --fall-duration: 11.614s;
  --fall-delay: 1.581s;
}
.star:nth-child(12) {
  --star-tail-length: 5.67em;
  --top-offset: 72.6vh;
  --fall-duration: 6.313s;
  --fall-delay: 0.911s;
}
.star:nth-child(13) {
  --star-tail-length: 5.33em;
  --top-offset: 41.53vh;
  --fall-duration: 8.808s;
  --fall-delay: 2.978s;
}
.star:nth-child(14) {
  --star-tail-length: 5.89em;
  --top-offset: 80.62vh;
  --fall-duration: 8.81s;
  --fall-delay: 4.431s;
}
.star:nth-child(15) {
  --star-tail-length: 7.03em;
  --top-offset: 88.08vh;
  --fall-duration: 10.859s;
  --fall-delay: 3.236s;
}
.star:nth-child(16) {
  --star-tail-length: 6.15em;
  --top-offset: 90.99vh;
  --fall-duration: 10.098s;
  --fall-delay: 6.191s;
}
.star:nth-child(17) {
  --star-tail-length: 6.3em;
  --top-offset: 65.03vh;
  --fall-duration: 6.983s;
  --fall-delay: 3.542s;
}
.star:nth-child(18) {
  --star-tail-length: 6.81em;
  --top-offset: 23.82vh;
  --fall-duration: 9.997s;
  --fall-delay: 0.396s;
}
.star:nth-child(19) {
  --star-tail-length: 7.07em;
  --top-offset: 11.09vh;
  --fall-duration: 8.288s;
  --fall-delay: 0.747s;
}
.star:nth-child(20) {
  --star-tail-length: 7.21em;
  --top-offset: 2.4vh;
  --fall-duration: 11.942s;
  --fall-delay: 2.539s;
}
.star:nth-child(21) {
  --star-tail-length: 7.31em;
  --top-offset: 88.35vh;
  --fall-duration: 6.14s;
  --fall-delay: 4.89s;
}
.star:nth-child(22) {
  --star-tail-length: 6.54em;
  --top-offset: 74.75vh;
  --fall-duration: 11.2s;
  --fall-delay: 9.337s;
}
.star:nth-child(23) {
  --star-tail-length: 7.13em;
  --top-offset: 96.24vh;
  --fall-duration: 7.951s;
  --fall-delay: 5.634s;
}
.star:nth-child(24) {
  --star-tail-length: 5.7em;
  --top-offset: 7.38vh;
  --fall-duration: 6.427s;
  --fall-delay: 0.429s;
}
.star:nth-child(25) {
  --star-tail-length: 6.06em;
  --top-offset: 35.28vh;
  --fall-duration: 6.714s;
  --fall-delay: 2.479s;
}
.star:nth-child(26) {
  --star-tail-length: 6.09em;
  --top-offset: 80.53vh;
  --fall-duration: 9.42s;
  --fall-delay: 5.533s;
}
.star:nth-child(27) {
  --star-tail-length: 5.63em;
  --top-offset: 54.03vh;
  --fall-duration: 6.042s;
  --fall-delay: 0.265s;
}
.star:nth-child(28) {
  --star-tail-length: 5.8em;
  --top-offset: 86.5vh;
  --fall-duration: 11.478s;
  --fall-delay: 0.614s;
}
.star:nth-child(29) {
  --star-tail-length: 6.07em;
  --top-offset: 89.33vh;
  --fall-duration: 11.681s;
  --fall-delay: 3.838s;
}
.star:nth-child(30) {
  --star-tail-length: 5.78em;
  --top-offset: 42.48vh;
  --fall-duration: 9.987s;
  --fall-delay: 3.033s;
}
.star:nth-child(31) {
  --star-tail-length: 6.44em;
  --top-offset: 38.61vh;
  --fall-duration: 10.144s;
  --fall-delay: 2.354s;
}
.star:nth-child(32) {
  --star-tail-length: 5.57em;
  --top-offset: 94.06vh;
  --fall-duration: 7.33s;
  --fall-delay: 1.2s;
}
.star:nth-child(33) {
  --star-tail-length: 6.8em;
  --top-offset: 2.86vh;
  --fall-duration: 8.656s;
  --fall-delay: 7.939s;
}
.star:nth-child(34) {
  --star-tail-length: 5.98em;
  --top-offset: 76.45vh;
  --fall-duration: 6.454s;
  --fall-delay: 6.148s;
}
.star:nth-child(35) {
  --star-tail-length: 5.12em;
  --top-offset: 38.59vh;
  --fall-duration: 11.201s;
  --fall-delay: 4.772s;
}
.star:nth-child(36) {
  --star-tail-length: 6.7em;
  --top-offset: 42.42vh;
  --fall-duration: 10.9s;
  --fall-delay: 7.19s;
}
.star:nth-child(37) {
  --star-tail-length: 5.11em;
  --top-offset: 83.85vh;
  --fall-duration: 11.319s;
  --fall-delay: 4.355s;
}
.star:nth-child(38) {
  --star-tail-length: 7.02em;
  --top-offset: 88.42vh;
  --fall-duration: 8.227s;
  --fall-delay: 5.886s;
}
.star:nth-child(39) {
  --star-tail-length: 5.19em;
  --top-offset: 49.04vh;
  --fall-duration: 10.465s;
  --fall-delay: 6.279s;
}
.star:nth-child(40) {
  --star-tail-length: 6.35em;
  --top-offset: 96.28vh;
  --fall-duration: 8.063s;
  --fall-delay: 1.912s;
}
.star:nth-child(41) {
  --star-tail-length: 6.5em;
  --top-offset: 22vh;
  --fall-duration: 7.654s;
  --fall-delay: 1.672s;
}
.star:nth-child(42) {
  --star-tail-length: 5.58em;
  --top-offset: 61.72vh;
  --fall-duration: 10.403s;
  --fall-delay: 4.321s;
}
.star:nth-child(43) {
  --star-tail-length: 6.39em;
  --top-offset: 13.15vh;
  --fall-duration: 6.366s;
  --fall-delay: 0.351s;
}
.star:nth-child(44) {
  --star-tail-length: 5.66em;
  --top-offset: 6.74vh;
  --fall-duration: 10.8s;
  --fall-delay: 6.199s;
}
.star:nth-child(45) {
  --star-tail-length: 7.36em;
  --top-offset: 94.19vh;
  --fall-duration: 7.869s;
  --fall-delay: 1.799s;
}
.star:nth-child(46) {
  --star-tail-length: 6.59em;
  --top-offset: 70.81vh;
  --fall-duration: 11.422s;
  --fall-delay: 8.688s;
}
.star:nth-child(47) {
  --star-tail-length: 5.07em;
  --top-offset: 99.61vh;
  --fall-duration: 7.974s;
  --fall-delay: 8.518s;
}
.star:nth-child(48) {
  --star-tail-length: 7.09em;
  --top-offset: 6.85vh;
  --fall-duration: 9.256s;
  --fall-delay: 2.606s;
}
.star:nth-child(49) {
  --star-tail-length: 6.11em;
  --top-offset: 39.14vh;
  --fall-duration: 8.186s;
  --fall-delay: 3.69s;
}
.star:nth-child(50) {
  --star-tail-length: 5.63em;
  --top-offset: 43.73vh;
  --fall-duration: 7.546s;
  --fall-delay: 9.711s;
}
.star::before, .star::after {
  position: absolute;
  content: "";
  top: 0;
  left: calc(var(--star-width) / -2);
  width: var(--star-width);
  height: 100%;
  background: linear-gradient(45deg, transparent, currentColor, transparent);
  border-radius: inherit;
  animation: blink 2s linear infinite;
}
.star::before {
  transform: rotate(45deg);
}
.star::after {
  transform: rotate(-45deg);
}

@keyframes fall {
  to {
    transform: translate3d(-30em, 0, 0);
  }
}
@keyframes tail-fade {
  0%, 50% {
    width: var(--star-tail-length);
    opacity: 1;
  }
  70%, 80% {
    width: 0;
    opacity: 0.4;
  }
  100% {
    width: 0;
    opacity: 0;
  }
}
@keyframes blink {
  50% {
    opacity: 0.6;
  }
}
  </style>
 
</head>
<body>

<div class="stars">
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
</div>
<div style="z-index:4;">


<h1>سوره القدر</h1>
  <a href="/1">
  <div class="ayeh1" onmouseout="normal(this)" onmouseover="hover(this)">
    <p id=text  style="color:#D2E0FB">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</p>
    <p id=tarjome style="color:#D2E0FB">بنام خداوند رحمتگر مهربان</p>
  </div>
  </a>
  
  <a href="/2">

  <div class="ayeh2" onmouseout="normal(this)" onmouseover="hover(this)">
    <p id=text  style="color:#F9F3CC" >إِنَّا أَنزَلْنَاهُ فِي لَيْلَةِ الْقَدْرِ</p>
    <p id=tarjome  style="color:#F9F3CC">ما آن را در شب قدر نازل کردیم</p>
  </div>
</a>
  <div class="ayeh3"onmouseout="normal(this)" onmouseover="hover(this)">
    <p id=text  style="color:#D7E5CA">وَمَا أَدْرَاكَ مَا لَيْلَةُ الْقَدْرِ</p>
    <p id=tarjome  style="color:#D7E5CA">تو چگونه می‌دانی شب قدر چیست؟</p>
  </div>

  <div class="ayeh4"onmouseout="normal(this)" onmouseover="hover(this)">
    <p id=text  style="color:#8EACCD">لَيْلَةُ الْقَدْرِ خَيْرٌ مِّنْ أَلْفِ شَهْرٍ</p>
    <p id=tarjome  style="color:#8EACCD">شب قدر بهتر از هزار ماه است</p>
  </div>
  <div class="ayeh5"onmouseout="normal(this)" onmouseover="hover(this)">
    <p id=text  style="color:#DCF2F1">تَنَزَّلُ الْمَلَائِكَةُ وَالرُّوحُ فِيهَا بِإِذْنِ رَبِّهِم مِّن كُلِّ أَمْرٍ</p>
    <p id=tarjome  style="color:#DCF2F1">فرشتگان و روح در آن شب به امر پروردگارشان به هر کاری نازل می‌شوند</p>
  </div>

  <div class="ayeh6" onmouseout="normal(this)" onmouseover="hover(this)">
    <p id=text  style="color:#E5E1DA">سَلَامٌ هِيَ حَتَّىٰ مَطْلَعِ الْفَجْرِ</p>
    <p id=tarjome  style="color:#E5E1DA">سلامی است آن شب تا طلوع فجر</p>
  </div>

  <!-- <div class="ayeh" > not work </div> -->

</div>
<script>
  function normal(x) {
    var parent = x.className;
    var child = '.' +parent + ' #tarjome';
    var childElement = document.querySelector(child);
    childElement.style.fontSize = '14px';
    childElement.style.fontWeight = '500';

    var child = '.' +parent + ' #text';

    var childElement = document.querySelector(child);

    childElement.style.fontSize = '14px';
    childElement.style.fontWeight = '500';

  }
  
  function hover(x) {
    
    var parent = x.className;
    var child ='.' + parent + ' #tarjome';
    var childElement = document.querySelector(child);
    console.log(child);

    childElement.style.fontSize = '19px';
    childElement.style.fontWeight = 'bold';
    var child ='.' + parent + ' #text';

    var childElement = document.querySelector(child);

    childElement.style.fontSize = '19px';
    childElement.style.fontWeight = 'bold';

  }
</script>

</body>

</html>
