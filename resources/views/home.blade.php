<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>سوره قدر</title>
  <style>
    body {
      font-family: 'Vazir', Arial, sans-serif; /* استفاده از فونت Vazir */
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
  </style>
 
</head>
<body>
  <h1>سوره القدر</h1>
  <div class="ayeh1" onmouseout="normal(this)" onmouseover="hover(this)">
    <p id=text  style="color:#D2E0FB">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</p>
    <p id=tarjome style="color:#D2E0FB">بنام خداوند رحمتگر مهربان</p>
  </div>

  <div class="ayeh2" onmouseout="normal(this)" onmouseover="hover(this)">
    <p id=text  style="color:#F9F3CC" >إِنَّا أَنزَلْنَاهُ فِي لَيْلَةِ الْقَدْرِ</p>
    <p id=tarjome  style="color:#F9F3CC">ما آن را در شب قدر نازل کردیم</p>
  </div>

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
