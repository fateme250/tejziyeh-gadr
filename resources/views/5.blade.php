<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    body{
        background-color:FFF4F4;
  font-family:tahoma;

    }
 .verse {
  font-size: 20px;
  text-align:center;
  margin-top:1%
}

.verse span:nth-child(1) {
  color: red;
  transition: all 0.3s ease;

}

.verse span:nth-child(2) {
  color: green;
  transition: all 0.3s ease;

}

.verse span:nth-child(3) {
  color: blue;
  transition: all 0.3s ease;

}

.verse span:nth-child(4) {
  color: orange;
  transition: all 0.3s ease;

}

.verse span:nth-child(5) {
  color: purple;
  transition: all 0.3s ease;

}
h5{
  text-align:center;
  font-size:28px;
  color:#186F65;
  margin-top: 10px;

}
.tafsir{
  margin-top: -40px;
  width:80%; 
 padding:20px;

 background-color:B5CB99;
 border-radius:25px;
 margin-left:8%;
 direction:rtl;

 color:#004225

}
.note{
  width:80%; 
 padding:20px;
 margin-top: 10px;
 background-color:#9ED2BE;
 border-radius:25px;
 margin-left:8%;
 direction:rtl;

 color:#004225
}


/* و غیره */

</style>
<body>

<div id="text" class="verse">
  <span id="v1" onmouseout="normal(this)" onmouseover="hover(this)">سَلامٌ </span> 
  <span id=v2 onmouseout="normal(this)" onmouseover="hover(this)">هِيَ </span>
  <span id=v3 onmouseout="normal(this)" onmouseover="hover(this)">حَتَّى  </span>
   <span id=v4 onmouseout="normal(this)" onmouseover="hover(this)">مَطْلَعِ  </span>
    <span id=v5 onmouseout="normal(this)" onmouseover="hover(this)">الْفَجْرِ </span> 
</div>
<div id="translation" class="verse">
    <span id=v1 onmouseout="normal(this)" onmouseover="hover(this)">سلام و رحمت است </span>
    <span id=v2 onmouseout="normal(this)" onmouseover="hover(this)">این شب</span>
    <span id=v3 onmouseout="normal(this)" onmouseover="hover(this)">تا زمان</span>
    <span id=v4 onmouseout="normal(this)" onmouseover="hover(this)">طلوع</span>
    <span id=v5 onmouseout="normal(this)" onmouseover="hover(this)">سپیده دم(فجر
    )</span>

</div>

<div id="tajziye" class="verse">
    <span id=v1 onmouseout="normal(this)" onmouseover="hover(this)">خبر مقدم ومرفوع</span>
    <span id=v2 onmouseout="normal(this)" onmouseover="hover(this)">مبتدای  موخر و محلا مرفوع</span>
    <span id=v3 onmouseout="normal(this)" onmouseover="hover(this)"> جار</span>
    <span id=v4 onmouseout="normal(this)" onmouseover="hover(this)">مجرور متعلق به سلام </span>
    <span id=v5 onmouseout="normal(this)" onmouseover="hover(this)">مضاف الیه سلام </span>

</div>

<h5>تفسیر  آیه</h3>
<div class="tafsir">
سَلامٌ»، يكى از نام‌هاى خداوند در قرآن است. هُوَ اللَّهُ الَّذِي لا إِلهَ إِلَّا هُوَ الْمَلِكُ الْقُدُّوسُ السَّلامُ‌ ...  <br>
مراد از «سَلامٌ» در اين آيه، لطف و عنايت ويژه الهى نسبت به بندگان در شب قدر است كه سلامت و رحمت و بركت را به دنبال دارد و باب نقمت و عذاب را مى‌بندد، زيرا كيد و وسوسه شيطان در آن شب مؤثر واقع نشود<br>
در شب قدر، فرشتگان به زمين نازل مى‌شوند و بر هر مرد و زنى كه در حال عبادت باشند، سلام مى‌كنند.  چنانكه در قيامت نيز با گفتن سلام به استقبال بهشتيان مى‌روند: «سَلامٌ‌

</div>

<div class="note">

1- شب قدر، شب سلامت فكر و روح آدمى و تعالى به سوى خداوندِ سلام است. «سَلامٌ هِيَ حَتَّى مَطْلَعِ الْفَجْرِ»<br>

2- شب قدر، شب رحمت است و مى‌توان با توبه، الطاف خداوند را به خود جلب كرد. «سَلامٌ هِيَ حَتَّى مَطْلَعِ الْفَجْرِ»<br>

3- تقدير امور از سوى خداوند، بر اساس سعادت بشر است، مگر آنكه او خود جز اين بخواهد. «سَلامٌ هِيَ حَتَّى مَطْلَعِ الْفَجْرِ»<br>
</div>

<script>
  function normal(x) {
    var element = "#text"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "20px";
    var element = "#translation"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "20px";
    var element = "#tajziye"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "20px";


  }
  
  function hover(x) {
    var element = "#text"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "25px";
    var element = "#translation"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "25px";
    var element = "#tajziye"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "22px";
  }
</script>
</body>
</html>