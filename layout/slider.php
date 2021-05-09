<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - slick slider layer sliding with animate css</title>
  <link href="https://fonts.googleapis.com/css?family=Playball&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>

</head>
<style>


@media (min-width: 992px) {
  .slider, .slide {
    height: 80vh;
  }
}

.slide {
  position: relative;
  transition: 1s;
}
.slide .slide__img {
  width: 100%;
  height: auto;
  overflow: hidden;
}
@media (min-width: 992px) {
  .slide .slide__img {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
  }
}
.slide .slide__img img {
  max-width: 100%;
  height: auto;
  opacity: 1 !important;
  -webkit-animation-duration: 3s;
          animation-duration: 3s;
  transition: all 1s ease;
}
.slide .slide__content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.slide .slide__content.slide__content__left {
  left: 15%;
  transform: translate(-15%, -50%);
}
.slide .slide__content.slide__content__right {
  right: 15%;
  left: auto;
  transform: translate(5%, -50%);
}
.slide .slide__content--headings {
  color: #FFF;
}
.slide .slide__content--headings h2 {
  font-size: 4.5rem;
  margin: 10px 0;
}
.slide .slide__content--headings .animated {
  transition: all 0.5s ease;
}
.slide .slide__content--headings .top-title {
  font-family: "Playball", cursive;
  font-size: 2.5rem;
}
.slide .slide__content--headings .title {
  font-size: 3.5rem;
}
.slide .slide__content--headings .button-custom {
  text-decoration: none;
  color: #333;
  padding: 1.2rem 2.5rem;
  font-size: 1.5rem;
}

.slider [data-animation-in] {
  opacity: 0;
  -webkit-animation-duration: 1.5s;
          animation-duration: 1.5s;
  transition: opacity 0.5s ease 0.3s;
  transition: 1s;
}

.slick-dotted .slick-slider {
  margin-bottom: 30px;
}

.slick-dots {
  position: absolute;
  bottom: 25px;
  list-style: none;
  display: block;
  text-align: center;
  padding: 0;
  margin: 0;
  width: 100%;
}
.slick-dots li {
  position: relative;
  display: inline-block;
  margin: 0 5px;
  padding: 0;
  cursor: pointer;
}
.slick-dots li button {
  border: 0;
  display: block;
  outline: none;
  line-height: 0px;
  font-size: 0px;
  color: transparent;
  padding: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.slick-dots li button:hover, .slick-dots li button:focus {
  outline: none;
}

.simple-dots .slick-dots li {
  width: 20px;
  height: 20px;
}
.simple-dots .slick-dots li button {
  border-radius: 50%;
  background-color: white;
  opacity: 0.25;
  width: 20px;
  height: 20px;
}
.simple-dots .slick-dots li button:hover, .simple-dots .slick-dots li button:focus {
  opacity: 1;
}
.simple-dots .slick-dots li.slick-active button {
  color: white;
  opacity: 0.75;
}

.stick-dots .slick-dots li {
  height: 3px;
  width: 50px;
}
.stick-dots .slick-dots li button {
  position: relative;
  background-color: white;
  opacity: 0.25;
  width: 50px;
  height: 3px;
  padding: 0;
}
.stick-dots .slick-dots li button:hover, .stick-dots .slick-dots li button:focus {
  opacity: 1;
}
.stick-dots .slick-dots li.slick-active button {
  color: white;
  opacity: 0.75;
}
.stick-dots .slick-dots li.slick-active button:hover, .stick-dots .slick-dots li.slick-active button:focus {
  opacity: 1;
}

/* /////////// IMAGE ZOOM /////////// */
@-webkit-keyframes zoomInImage {
  from {
    transform: scale3d(1, 1, 1);
    transition: 1s;
  }
  to {
    transform: scale3d(1.1, 1.1, 1.1);
    transition: 1s;
  }
}
@keyframes zoomInImage {
  from {
    transform: scale3d(1, 1, 1);
    transition: 1s;
  }
  to {
    transform: scale3d(1.1, 1.1, 1.1);
    transition: 1s;
  }
}
.zoomInImage {
  -webkit-animation-name: zoomInImage;
          animation-name: zoomInImage;
}

@-webkit-keyframes zoomOutImage {
  from {
    transform: scale3d(1.1, 1.1, 1.1);
    transition: 1s;
  }
  to {
    transform: scale3d(1, 1, 1);
    transition: 1s;
  }
}

@keyframes zoomOutImage {
  from {
    transform: scale3d(1.1, 1.1, 1.1);
    transition: 1s;
  }
  to {
    transform: scale3d(1, 1, 1);
    transition: 1s;
  }
}
.zoomOutImage {
  -webkit-animation-name: zoomOutImage;
          animation-name: zoomOutImage;
  transition: 1s;
}

.slick-nav {
  --active: #fff;
  --border: rgba(255, 255, 255, .12);
  width: 44px;
  height: 44px;
  position: absolute;
  cursor: pointer;
  top: calc(50% - 44px);
}
.slick-nav.prev-arrow {
  left: 3%;
  transform: scaleX(-1);
  z-index: 999;
}
.slick-nav.next-arrow {
  left: auto;
  right: 3%;
}
.slick-nav i {
  display: block;
  position: absolute;
  margin: -10px 0 0 -10px;
  width: 20px;
  height: 20px;
  left: 50%;
  top: 50%;
}
.slick-nav i:before, .slick-nav i:after {
  content: "";
  width: 10px;
  height: 2px;
  border-radius: 1px;
  position: absolute;
  left: 50%;
  top: 50%;
  background: var(--active);
  margin: -1px 0 0 -5px;
  display: block;
  transform-origin: 9px 50%;
}
.slick-nav i:before {
  transform: rotate(-40deg);
}
.slick-nav i:after {
  transform: rotate(40deg);
}
.slick-nav:before, .slick-nav:after {
  content: "";
  display: block;
  position: absolute;
  left: 1px;
  right: 1px;
  top: 1px;
  bottom: 1px;
  border-radius: 50%;
  border: 2px solid var(--border);
}
.slick-nav svg {
  width: 44px;
  height: 44px;
  display: block;
  position: relative;
  z-index: 1;
  color: var(--active);
  stroke-width: 2px;
  stroke-dashoffset: 126;
  stroke-dasharray: 126 126 0;
  transform: rotate(0deg);
}
.slick-nav.animate svg {
  -webkit-animation: stroke 1s ease forwards 0.3s;
          animation: stroke 1s ease forwards 0.3s;
}
.slick-nav.animate i {
  -webkit-animation: arrow 1.6s ease forwards;
          animation: arrow 1.6s ease forwards;
}
.slick-nav.animate i:before {
  -webkit-animation: arrowUp 1.6s ease forwards;
          animation: arrowUp 1.6s ease forwards;
}
.slick-nav.animate i:after {
  -webkit-animation: arrowDown 1.6s ease forwards;
          animation: arrowDown 1.6s ease forwards;
}

@-webkit-keyframes stroke {
  52% {
    transform: rotate(-180deg);
    stroke-dashoffset: 0;
  }
  52.1% {
    transform: rotate(-360deg);
    stroke-dashoffset: 0;
  }
  100% {
    transform: rotate(-180deg);
    stroke-dashoffset: 126;
  }
}

@keyframes stroke {
  52% {
    transform: rotate(-180deg);
    stroke-dashoffset: 0;
  }
  52.1% {
    transform: rotate(-360deg);
    stroke-dashoffset: 0;
  }
  100% {
    transform: rotate(-180deg);
    stroke-dashoffset: 126;
  }
}
@-webkit-keyframes arrow {
  0%, 100% {
    transform: translateX(0);
    opacity: 1;
  }
  23% {
    transform: translateX(17px);
    opacity: 1;
  }
  24%, 80% {
    transform: translateX(-22px);
    opacity: 0;
  }
  81% {
    opacity: 1;
    transform: translateX(-22px);
  }
}
@keyframes arrow {
  0%, 100% {
    transform: translateX(0);
    opacity: 1;
  }
  23% {
    transform: translateX(17px);
    opacity: 1;
  }
  24%, 80% {
    transform: translateX(-22px);
    opacity: 0;
  }
  81% {
    opacity: 1;
    transform: translateX(-22px);
  }
}
@-webkit-keyframes arrowUp {
  0%, 100% {
    transform: rotate(-40deg) scaleX(1);
  }
  20%, 80% {
    transform: rotate(0deg) scaleX(0.1);
  }
}
@keyframes arrowUp {
  0%, 100% {
    transform: rotate(-40deg) scaleX(1);
  }
  20%, 80% {
    transform: rotate(0deg) scaleX(0.1);
  }
}
@-webkit-keyframes arrowDown {
  0%, 100% {
    transform: rotate(40deg) scaleX(1);
  }
  20%, 80% {
    transform: rotate(0deg) scaleX(0.1);
  }
}
@keyframes arrowDown {
  0%, 100% {
    transform: rotate(40deg) scaleX(1);
  }
  20%, 80% {
    transform: rotate(0deg) scaleX(0.1);
  }
}</style>
<body>
<!-- partial:index.partial.html -->
<section class="banner__slider">
  <div class="slider stick-dots">
    <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="https://images.unsplash.com/photo-1533777857889-4be7c70b33f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
      <div class="slide__content ">
        <div class="slide__content--headings text-center">
           
           <p class="animated top-title" data-animation-in="fadeInUp" data-delay-in="0.3">Welcome to Shareat restaurant</p>
					<h2 class="animated title" data-animation-in="fadeInUp">Let Enjoy The Rhym Of Fooday Dishes</h2>
					<button class="btn-light btn button-custom animated" data-animation-in="fadeInUp">Our menu</button>
        </div>
      </div>
    </div>
    <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="https://images.unsplash.com/photo-1550461716-dbf266b2a8a7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" class="full-image animated" data-animation-in="zoomOutImage"/>
      </div>
      <div class="slide__content slide__content__right">
        <div class="slide__content--headings text-right">
					<p class="animated top-title" data-animation-in="fadeInLeft" data-delay-in="0.2">Wish you have good food at our restaurant</p>
           <h2 class="animated title" data-animation-in="fadeInLeft">Experience the food</h2>
           <button class="btn-success btn button-custom animated text-white" data-animation-in="fadeInUp">Order Now</button>
        </div>
      </div>
    </div>
		<div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="https://images.unsplash.com/photo-1502741126161-b048400d085d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
      <div class="slide__content slide__content__left">
        <div class="slide__content--headings text-left">
					<p class="animated top-title" data-animation-in="fadeInRight" data-delay-in="0.2">Purchase today. just $76</p>
           <h2 class="animated title" data-animation-in="fadeInRight">SUPER DEAL LUNCH</h2>
           <button class="btn-light btn button-custom animated" data-animation-in="fadeInUp">Today's Menu</button>
        </div>
      </div>
    </div>
  </div>
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
        <circle r="20" cy="22" cx="22" id="test">
    </symbol>
</svg>
</section>
<script>
/*
** With Slick Slider Plugin : https://github.com/marvinhuebner/slick-animation
** And Slick Animation Plugin : https://github.com/marvinhuebner/slick-animation
*/

// Init slick slider + animation
$('.slider').slick({
  autoplay: true,
  speed: 800,
  lazyLoad: 'progressive',
  arrows: true,
  dots: false,
	prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
	nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
}).slickAnimation();



$('.slick-nav').on('click touch', function(e) {

    e.preventDefault();

    var arrow = $(this);

    if(!arrow.hasClass('animate')) {
        arrow.addClass('animate');
        setTimeout(() => {
            arrow.removeClass('animate');
        }, 1600);
    }

});</script>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
<script src='https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js'></script>

</body>
</html>
