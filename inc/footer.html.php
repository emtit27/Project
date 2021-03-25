
<script>

</script>
<!-- Footer -->
<div id="push_footer">
<footer>

<div class="slideshow-container">

<div class="mySlides">
  <p><em>Fly to focus team words:</em></p>
  <q>The thing I love most in my life is when I help someone who needs me, we designed this website for that purpose</q>
  <p class="author">- Raghad Bin Suhaym </p>
</div>

<div class="mySlides">
  <p><em>Fly to focus team words:</em></p>
  <q>My dream was to create an app that changes the world.</q>
  <p class="author">- Emtenan Alzahrani</p>
</div>

<div class="mySlides">
  <p><em>Fly to focus team words:</em></p>
  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
  <p class="author">- Hana Alrabeiah</p>
</div>

<div class="mySlides">
  <p><em>Fly to focus team words:</em></p>
  <q>It is well worth the effort the result is amazing.</q>
  <p class="author">- Sarah Ba jabea</p>
</div>
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-dot", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active-dot";
}

</script>

</footer>
</div>

<script src = "js/publicJs.js"></script>
<?php
// اذا كان يوجد ملف جافا سكريبت خاص بالصفحة سيتم تضمينه 

$jsForCurrentPage  ='js/' . $currentPageName . '.js';
if (is_file($jsForCurrentPage))

echo '<script src="'.$jsForCurrentPage.'"></script>';
?>

</body>



</html>

<?php ob_end_flush(); ?>
