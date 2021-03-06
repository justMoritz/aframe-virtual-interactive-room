<?php

  $globalVersion = '1.5.0';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Villas on Rio Virtual Pod Tour</title>
    <meta name="description" content="Mouse Click Example - A-Frame">
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- If this GET parameter is set, we will display beautiful shadows on mattes, something I really regret losing in the production verion -->
    <script>
      var showShadows = <?=(( isset($_GET['shadows']) && $_GET['shadows'] == 'false' ) ? 'false' : 'true')?>
    </script>

    <!-- Loading Aframe and Dependencies -->
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <script src="assets/aframe-orbit-controls.min.js"></script>
    <!-- <script src="assets/aframe-teleport-controls.min.js"></script> -->
    <script src="assets/aframe-look-at-component.js"></script>
    <script src="assets/animation-mixer.js"></script>
    <script src="assets/aframe-event-set-component.min.js"></script>

    <link rel="stylesheet" href="assets/styles/styles.css?v=<?=$globalVersion?>" />
    <link rel="stylesheet" href="https://use.typekit.net/foo7sru.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet">

    <!-- Loads custom scripts for events and animations <-->
    <script src="assets/main.js?v=<?=$globalVersion?>"></script>

  </head>

  <body>

    <a-scene shadow="type: pcfsoft">


      <!-- All Images -->
      <a-assets>
        <img id="img_sky" src="src/B6_360_22.jpg?v=<?=$globalVersion?>">
        <img id="img_circle0" src="src/circle0.png?v=<?=$globalVersion?>">
        <img id="img_circle1" src="src/circle1.png?v=<?=$globalVersion?>">
        <img id="img_circle2" src="src/circle2.png?v=<?=$globalVersion?>">
        <img id="img_appletv" src="src/appletv-min.png?v=<?=$globalVersion?>">
      </a-assets>


      <!-- Camera with Raycaster (so we can interact with the scene with the mouse/touch) -->
      <a-entity id='cameraWrapper' rotation="0 -114.36237590811224 0" position="-0.12365 1.34538 0.72366" >
        <a-entity id="camera" camera="far: 5000; zoom: 0.66" look-controls="" cursor="rayOrigin: mouse" raycaster="direction: 0.9218844171533822 -0.07934214953674647 -0.37925445905968874; origin: -1.8387398940563615 2.3769941735180065 -0.12375643952806391; useWorldCoordinates: true; objects: .clickable;" data-aframe-inspector-original-camera=""></a-entity>
      </a-entity>


      <!-- Spotlight and fill lights -->
      <a-entity light="angle: 20; decay: 7; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.22; shadowCameraTop: 6.06; shadowCameraRight: 16.83; shadowCameraBottom: -4.91; shadowCameraLeft: -13.19;" position="-7.52044 6.6806 2.678"></a-entity>
      <a-entity light="angle: 20; decay: 10; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.04; shadowCameraTop: 9.48; shadowCameraRight: 16.74; shadowCameraBottom: -4.67; shadowCameraLeft: -13.27" position="4.69131 6.6806 0.50657"></a-entity>
      <a-entity light="intensity: 0.5; type: ambient"></a-entity>


      <!-- Goodbye, Friend :'(' -->
      <a-sphere position="6.96188 -0.37915 -9.11629" id="pizzaSphere" radius="1.25" color="#EF2D5E" shadow="" material="opacity: 0.6" geometry="radius: 0.5" animation="property: position; to: 5 -4.6 2; dur: 5500; dir: alternate; easing: linear; loop: true"></a-sphere>


      <!-- MATTES: -->
      <!-- These are used to both hide the overflow of overlapping objects such as drawers and POIs, as well as provide a surface to recieve shadows -->
      <!-- The shadow-material component (registered in main.js) is used to provide a transparent object which still reveieves a shadow. -->
      <!-- Note that the material component here is not neccesary, but I left it on the element for debugging. We can temporarily remvoe the shadow material -->

      <!-- Far-side Counter Top Matte -->
      <a-box shadow="cast: false" shadow-material="" position="8.72688 -3.66488 -7.75" width="4" height="4" geometry="width: 4.5; height: 2.04; depth: 6" material="opacity: 0.25"></a-box>

      <!-- Desk-Matte. -->
      <a-box id="desk-top" class="clickable" shadow="cast: false;" shadow-material="" position="8.77143 -4.62456 0.125" width="4" height="4" geometry="width: 4.5; height: 0.35; depth: 9.37" material="opacity: 0.0000"></a-box>

      <!-- Desk and Drawer Mattes -->
      <a-box id="cooler-top" shadow="cast: false" shadow-material="" position="8.771 -2.836 8.125" width="4" height="4" geometry="width: 4.5; height: 0.35; depth: 6.6" material="opacity: 0.400"></a-box>
      <a-box id="cooler-side" shadow="cast: false; receive: false;" shadow-material="" position="8.771 -5.330 5" width="4" height="4" geometry="width: 4.5; height: 4.62; depth: 0.35" material="opacity: 0.400"></a-box>

      <!-- Pillow Top Matte -->
      <a-box id="pillowtop-matte" shadow="cast: false" shadow-material="" position="-14.52108 -6.46216 -0.54332" width="4" height="4" geometry="width: 7.5; height: 0.001; depth: 15.31" material="opacity: 0.25" rotation="-1.60 0 -41.76"></a-box>


      <!-- Desk Drawer functinoality set in main.js through the animation-click-handler attirbute -->
      <!-- Note how the click handler (the actual POI) is cascading through its parent-elements -->
      <!-- That means when you click the child (and child-child), its parents will also inherit all these handlers -->
      <!-- It's important to turn off the other handlers, otherwise you would trigger the animation/whatever twice! -->
      <a-box
        sanimation-click-handler="desk_drawer"
        dialog-more-button="desk-drawer"
        id="desk-drawer"
        class="not-clickable custom-animation-object"
        shadow="cast: false"
        sshadow-material=""
        position="8.77143 -4.99191 0.125"
        width="4" height="4"
        geometry="width: 4.5; height: 0.45; depth: 9.37"
        material="opacity: 0.25"
        animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
      >
        <a-image id="desk-drawer-poi" look-at="#camera" src="#img_circle0" geometry="primitive: circle; radius: 0.6" desktop-geometry="primitive: circle; radius: 0.40" scale="1 1 1" alpha-test position="-2.7 -0.25 0" animation="property: position; to: -2.7 -0.75 0; dur: 4200; easing: easeOutQuad; dir: alternate; loop: true">
          <a-entity material="opacity: 0.00" geometry="primitive: circle; radius: 1.33;" position="0 0 -2" class="clickable" animation-click-handler="desk_drawer"></a-entity>
        </a-image>
      </a-box>



      <!-- The storage cooler drawer -->
      <a-box
        animation-click-handler="cooler_drawer"
        id="cooler-drawer"
        class="clickable custom-animation-object"
        position="8.727 -5.363 8.117"
        width="4"
        height="4"
        geometry="width: 4.5; height: 4.590; depth: 5.780"
        material="opacity: 0.25"
        animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
      >
        <a-image id="cooler-drawer-poi" look-at="#camera" src="#img_circle0" geometry="primitive: circle; radius: 0.6" desktop-geometry="primitive: circle; radius: 0.4" animation-click-handler="desk_drawer" alpha-test position="-2.910 -0.290 -0.4" class="not-clickable" animation="property: position; to: -2.910 -0.120 -0.4; dur: 3700; easing: easeOutQuad; dir: alternate; loop: true"></a-image>
      </a-box>



      <!-- Curtain functinoality set in main.js through the animation-click-handler attirbute -->
      <a-box
        id="curtain"
        shadow="cast: false"
        sshadow-material=""
        position="3.646 0.463 11.643"
        width="4" height="4"
        geometry="width: 5.470; height: 25.0; depth: 0.2"
        material="opacity: 0.55"
        animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
      >
        <a-image id="curtain-poi" look-at="#camera" src="#img_circle0" geometry="primitive: circle; radius: 0.66" desktop-geometry="primitive: circle; radius: 0.425" alpha-test position="-2.55 -0.40 -1" animation="property: position; to: -2.55 -0.60 -1; dur: 3500; easing: easeOutQuad; dir: alternate; loop: true">
          <a-entity material="opacity: 0.00" geometry="primitive: circle; radius: 1.33;" position="0 0 -2" class="clickable" animation-click-handler="curtain"></a-entity>
        </a-image>
      </a-box>



      <!-- Television and Apple TV Handlers -->
      <a-box
        id="television"
        shadow="cast: false"
        sshadow-material=""
        position="11.16747 1.936 0.12"
        geometry="primitive: box; width: 13.5; height: 7.5; depth: 0.5;"
        material="opacity: 0.35"
        rotation="0 -90 0"
        animation__mousedown="property: components.material.material.color; type: color; from: #ff7777; to: #7777ff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
      >
        <a-image id="television-poi" rotation="0 0 0" src="#img_circle0" geometry="primitive: circle; radius: 0.6" desktop-geometry="primitive: circle; radius: 0.4" alpha-test position="0 0 2" class="not-clickable" animation="property: position; to: 0 -0.3 2; dur: 3800; easing: easeOutQuad; dir: alternate; loop: true">
          <a-entity material="opacity: 0.00" geometry="primitive: circle; radius: 1.33;" position="0 0 -2" class="clickable" animation-click-handler="television"></a-entity>
        </a-image>
        <a-image id="television-appletv" rotation="0 0 0" scale="1.5 1.5 1.5" geometry="height: 1.55; width: 2" src="#img_appletv" animation-click-handler="television" alpha-test position="0 -3 -2" shadow="cast: true;" material="opacity: 0;" class="not-clickable"></a-image>
      </a-box>



      <!-- Headboard handlers -->
      <a-image
        animation-click-handler="headboard"
        id="headboard"
        class="clickable custom-animation-object"
        shadow="cast: false"
        sshadow-material=""
        position="-13.2 4.4 0.4"
        geometry="primitive: circle; radius: 0.75"
        desktop-geometry="primitive: circle; radius: 0.5"
        material="opacity: 0.95"
        rotation="0 -90 0"
        src="#img_circle0"
        animation="property: position; to: -13.2 3.6 0.4; dur: 2250; easing: easeOutQuad; dir: alternate; loop: true"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.05 1.05 1.05; startEvents: mouseenter; dur: 500"
        animation__mouseleave_scale="property: scale; to: 1 1 1; startEvents: mouseleave; dur: 500"
      >
      </a-image>



      <!-- Plugs and Charging Information -->
      <a-image
        id="charging"
        look-at="#camera"
        src="#img_circle0"
        alpha-test=""
        material="opacity: 0.85"
        geometry="primitive: circle; radius: 0.45"
        desktop-geometry="primitive: circle; radius: 0.3"
        shadow="receive: false"
        position="4.337 0.16674 -3.6447"
        animation="property: position; to: 4.337 0.32674 -3.6447; dur: 2000; easing: easeOutQuad; dir: alternate; loop: true"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.1 1.1 1.1; startEvents: mouseenter; dur: 500"
        animation__mouseleave_scale="property: scale; to: 1 1 1; startEvents: mouseleave; dur: 500"
      >
        <a-entity material="opacity: 0.00" geometry="primitive: circle; radius: 1.33;" position="0 0 -2" class="clickable" animation-click-handler="charging"></a-entity>
      </a-image>


      <!-- wireless / Charging Information -->
      <a-image
        id="wireless"
        look-at="#camera"
        src="#img_circle0"
        alpha-test=""
        material="opacity: 0.85"
        geometry="primitive: circle; radius: 0.56"
        desktop-geometry="primitive: circle; radius: 0.325"
        scale="1.25 1.25 1.25"
        shadow="receive: false"
        position="7.5 -1.0 6.25"
        animation="property: position; to: 7.5 -1.25 6.25; dur: 3400; easing: easeOutQuad; dir: alternate; loop: true"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.4 1.4 1.4; startEvents: mouseenter; dur: 500"
        animation__mouseleave_scale="property: scale; to: 1.25 1.25 1.25; startEvents: mouseleave; dur: 500"
      >
        <a-entity material="opacity: 0.00" geometry="primitive: circle; radius: 1.33;" position="0 0 -2" class="clickable" animation-click-handler="wireless"></a-entity>
      </a-image>



      <!-- Connectivity Information -->
      <a-image
        id="connectivity"
        look-at="#camera"
        animation="property: position; to: -10.28996 -2.5849 -3.01447; dur: 4500; easing: easeOutQuad; dir: alternate; loop: true"
        src="#img_circle0"
        alpha-test=""
        material="opacity: 0.9"
        geometry="primitive: circle; radius: 0.5"
        desktop-geometry="primitive: circle; radius: 0.33"
        shadow="receive: false"
        position="-10.28996 -3.5849 -3.01447"
        scale="1.25 1.25 1.25"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.6 1.6 1.6; startEvents: mouseenter; dur: 350; easing: easeOutQuad;"
        animation__mouseleave_scale="property: scale; to: 1.5 1.5 1.5; startEvents: mouseleave; dur: 350; easing: easeOutQuad;"
      >
        <a-entity material="opacity: 0.00" geometry="primitive: circle; radius: 1.33;" position="0 0 -2" class="clickable" animation-click-handler="connectivity"></a-entity>
      </a-image>



      <!-- lighting -->
      <a-image
        id="lighting"
        look-at="#camera"
        src="#img_circle0"
        alpha-test=""
        material="opacity: 0.75"
        geometry="primitive: circle; radius: 0.56"
        desktop-geometry="primitive: circle; radius: 0.4"
        shadow="receive: false"
        position="-5 12 -9"
        animation="property: position; to: -5 11 -9; dur: 3650; easing: easeOutQuad; dir: alternate; loop: true"
        scale="1.75 1.75 1.75"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.8 1.8 1.8; startEvents: mouseenter; dur: 350; easing: easeOutQuad;"
        animation__mouseleave_scale="property: scale; to: 1.75 1.75 1.75; startEvents: mouseleave; dur: 350; easing: easeOutQuad;"
      >
      <a-entity material="opacity: 0.00" geometry="primitive: circle; radius: 1.33;" position="0 0 -2" class="clickable" animation-click-handler="lighting_outside"></a-entity>
      </a-image>



      <!-- Bluetooth -->
      <a-image
        id="bluetooth"
        look-at="#camera"
        animation="property: position; to: -10.06309 -6.0 7.29273; dur: 4000; easing: easeOutQuad; dir: alternate; loop: true"
        src="#img_circle0"
        alpha-test=""
        material="opacity: 0.75"
        geometry="primitive: circle; radius: 0.475;"
        desktop-geometry="primitive: circle; radius: 0.35;"
        shadow="receive: false"
        position="-10.06309 -6.92725 7.29273"
        scale="1.85 1.85 1.85"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.8 1.8 1.8; startEvents: mouseenter; dur: 350; easing: easeOutQuad;"
        animation__mouseleave_scale="property: scale; to: 1.75 1.75 1.75; startEvents: mouseleave; dur: 350; easing: easeOutQuad;"
      >
        <a-entity material="opacity: 0.00" geometry="primitive: circle; radius: 1.33;" position="0 0 -2" class="clickable" animation-click-handler="bluetooth"></a-entity>
      </a-image>


      <!-- bed -->
      <a-image
        id="bed"
        look-at="#camera"
        animation="property: position; to: -5.06309 -6.0 -5.29273; dur: 4000; easing: easeOutQuad; dir: alternate; loop: true"
        src="#img_circle0"
        alpha-test=""
        material="opacity: 0.75"
        geometry="primitive: circle; radius: 0.475;"
        desktop-geometry="primitive: circle; radius: 0.35;"
        shadow="receive: false"
        position="-5.06309 -6.92725 -5.29273"
        scale="1.85 1.85 1.85"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.8 1.8 1.8; startEvents: mouseenter; dur: 350; easing: easeOutQuad;"
        animation__mouseleave_scale="property: scale; to: 1.75 1.75 1.75; startEvents: mouseleave; dur: 350; easing: easeOutQuad;"
      >
        <a-entity material="opacity: 0.00" geometry="primitive: circle; radius: 1.33;" position="0 0 -2" class="clickable" animation-click-handler="bed"></a-entity>
      </a-image>



      <!-- Link to Exterior -->
      <a-image
        framechange-click-handler="outside.php<?=(( isset($_GET['shadows']) ) ? '?shadows='.$_GET['shadows'] : '')?>"
        id="arrow"
        class="clickable"
        look-at="#camera"
        src="#img_circle2"
        alpha-test=""
        material="opacity: 0.8"
        geometry="primitive: circle; radius: 2.3"
        desktop-geometry="primitive: circle; radius: 2.0"
        shadow="receive: false"
        position="-5.2 -10 17.7"
        animation="property: position; to: -5.2 -9 17.7; dur: 3000; easing: easeOutQuad; dir: alternate; loop: true"
        scale="1 1 1"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.1 1.1 1.1; startEvents: mouseenter; dur: 350; easing: easeOutQuad;"
        animation__mouseleave_scale="property: scale; to: 1 1 1; startEvents: mouseleave; dur: 350; easing: easeOutQuad;"
      >
      </a-image>

      <!-- Background Image -->
      <a-sky id="mainsky" src="#img_sky"></a-sky>


    </a-scene>

    <!-- Dialog related markup -->
    <?php require 'blocks/dialogue.php'; ?>


  </body>
</html>