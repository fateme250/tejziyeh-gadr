<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:FFF4F4;
    }
 .verse {
  font-size: 24px;
  text-align:center;
  margin-top:3%
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


/* و غیره */

</style>
<body>
<div id="text" class="verse">
  <span id="v1" onmouseout="normal(this)" onmouseover="hover(this)">إِنَّا</span> 
  <span id=v2 onmouseout="normal(this)" onmouseover="hover(this)">أَنزَلْنَا</span>
  <span id=v3 onmouseout="normal(this)" onmouseover="hover(this)">ه</span>
   <span id=v4 onmouseout="normal(this)" onmouseover="hover(this)">فِي</span>
    <span id=v5 onmouseout="normal(this)" onmouseover="hover(this)">لَيْلَةِ</span> 
    <span id=v6 onmouseout="normal(this)" onmouseover="hover(this)">الْقَدْرِ</span>
</div>
<div id="translation" class="verse">
    <span id=v1 onmouseout="normal(this)" onmouseover="hover(this)">همانا ما</span>
    <span id=v2 onmouseout="normal(this)" onmouseover="hover(this)"> فرو فرستادیم</span>
    <span id=v3 onmouseout="normal(this)" onmouseover="hover(this)"> آن را</span>
    <span id=v4 onmouseout="normal(this)" onmouseover="hover(this)">در</span>
    <span id=v5 onmouseout="normal(this)" onmouseover="hover(this)">شب</span>
    <span id=v6 onmouseout="normal(this)" onmouseover="hover(this)"> قدر</span>
</div>
<div id="tajziye" class="verse">
    <span id=v1 onmouseout="normal(this)" onmouseover="hover(this)">حرف مشبه بالفعل  واسم ان(نا) خبر ان  ادامه جمله</span>
    <span id=v2 onmouseout="normal(this)" onmouseover="hover(this)"> فرو فرستادیم</span>
    <span id=v3 onmouseout="normal(this)" onmouseover="hover(this)"> آن را</span>
    <span id=v4 onmouseout="normal(this)" onmouseover="hover(this)">در</span>
    <span id=v5 onmouseout="normal(this)" onmouseover="hover(this)">شب</span>
    <span id=v6 onmouseout="normal(this)" onmouseover="hover(this)"> قدر</span>
</div>
<script>
  function normal(x) {
    var element = "#text"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "25px";
    var element = "#translation"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "25px";
    var element = "#tajziye"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "25px";


  }
  
  function hover(x) {
    var element = "#text"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "35px";
    var element = "#translation"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "35px";
    var element = "#tajziye"+ " #"+x.id; 
    document.querySelector(element).style.fontSize = "35px";
  }
</script>
</body>
</html>