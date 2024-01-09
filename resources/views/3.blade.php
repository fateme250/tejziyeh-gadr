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
  margin-top: 50px;

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
 margin-top: 30px;
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
  <span id="v1" onmouseout="normal(this)" onmouseover="hover(this)"> لَيْلَةُ </span> 
  <span id=v2 onmouseout="normal(this)" onmouseover="hover(this)">الْقَدْرِ</span>
  <span id=v3 onmouseout="normal(this)" onmouseover="hover(this)"> خَيْر </span>
   <span id=v4 onmouseout="normal(this)" onmouseover="hover(this)"> مِّنْ أَلْفِ </span>
    <span id=v5 onmouseout="normal(this)" onmouseover="hover(this)"> شَهْرٍ</span> 
</div>
<div id="translation" class="verse">
    <span id=v1 onmouseout="normal(this)" onmouseover="hover(this)"> شب</span>
    <span id=v2 onmouseout="normal(this)" onmouseover="hover(this)"> قدر </span>
    <span id=v3 onmouseout="normal(this)" onmouseover="hover(this)"> بهتر و بالاتر است</span>
    <span id=v4 onmouseout="normal(this)" onmouseover="hover(this)">از هزار </span>
    <span id=v5 onmouseout="normal(this)" onmouseover="hover(this)">ماه</span>
</div>

<div id="tajziye" class="verse">
    <span id=v1 onmouseout="normal(this)" onmouseover="hover(this)">مبتدا</span>
    <span id=v2 onmouseout="normal(this)" onmouseover="hover(this)">مضاف الیه لیله</span>
    <span id=v3 onmouseout="normal(this)" onmouseover="hover(this)">  خیر</span>
    <span id=v4 onmouseout="normal(this)" onmouseover="hover(this)">جار و مجرور متلق به خیر </span>
    <span id=v5 onmouseout="normal(this)" onmouseover="hover(this)">مضاف الیه الف  </span>
</div>

<h5>تفسیر  آیه</h3>
<div class="tafsir">
از امام صادق عليه السلام پرسيدند: آيا روح همان جبرئيل است؟ فرمود: جبرئيل از ملائكه است و روح برتر از ملائكه است. سپس اين آيه را تلاوت فرمودند: تَنَزَّلُ الْمَلائِكَةُ وَ الرُّوحُ‌ ... «1»

با نزول فرشتگان بر قلب پيامبر و امام معصوم در شب قدر، ارتباط زمين با آسمان، مُلك با ملكوت و طبيعت با ماوراء طبيعت برقرار مى‌شود.

روح انواعى دارد:<br>

- روحى كه منشأ تمايلات و شهوات است.<br>

- روحى كه منشأ قدرت و حركات است. اين دو روح، مشترك ميان انسان و حيوان است.<br>

- روحى كه منشأ اختيار و انديشه است، كه اين روح مختص انسان است.<br>

- روحى كه عقل محض است و جوهر وجودى فرشتگان را تشكيل مى‌دهد.<br>

- روحى كه برتر از فرشتگان است و شب قدر همراه آنان به زمين نازل مى‌شود.<br>

</div>

<div class="note">
1- براى امور مقدّس، زمان مقدّس انتخاب كنيد. «لَيْلَةُ الْقَدْرِ خَيْرٌ مِنْ أَلْفِ شَهْرٍ»<br>

2- زمان‌ها يكسان نيست، بعضى زمان‌ها بر بعضى ديگر برترى دارد. «لَيْلَةِ الْقَدْرِ
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