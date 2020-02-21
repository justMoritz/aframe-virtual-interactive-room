<?php

  $globalVersion = '1.0.0';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Villas on Rio Virtual Pod Tour 2</title>
    <meta name="description" content="Mouse Click Example - A-Frame">

    <!-- Loading Aframe and Dependencies -->
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <script src="assets/aframe-orbit-controls.min.js"></script>
    <script src="assets/aframe-teleport-controls.min.js"></script>
    <script src="assets/aframe-look-at-component.js"></script>
    <script src="assets/animation-mixer.js"></script>
    <script src="assets/aframe-event-set-component.min.js"></script>

    <link rel="stylesheet" href="assets/styles/styles.css?v=<?=$globalVersion?>" />
    <link rel="stylesheet" href="https://use.typekit.net/foo7sru.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet">

    <!-- <script src="https://unpkg.com/aframe-event-set-component@^4.0.0/dist/aframe-event-set-component.min.js"></script> -->

  </head>

  <body>

    <a-scene shadow="type: pcfsoft">


      <!-- All Images -->
      <a-assets>
        <img id="img_sky" src="src/Villas-on-Rio_B6_360_2.jpg">
        <img id="img_poi" src="src/poi-min.png">
        <img id="img_headphones" src="src/headphones-min.png">
        <img id="img_direction-in" src="src/direction-in-min.png">
        <img id="img_poi" src="src/poi-min.png">
        <img id="img_button" src="src/button-min.png">
        <img id="img_close" src="src/close-min.png">
        <img id="img_clothes-drawer" src="src/clothes-drawer-min.png">
        <img id="img_headphones-d" src="src/headphones-d-min.png">
        <img id="img_curtain" src="src/curtain-min.png">
        <img id="img_headboard" src="src/headboard-min.png">
        <img id="transparent" src="data:image/gif;base64,R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs=">
        <img id="transpImage" crossorigin="anonymous" src="http://ekladata.com/hXTGfWnZm170W274zDRObDlqOlc.png">
      </a-assets>


      <!-- Camera with Raycaster -->
      <a-entity id='cameraWrapper' rotation="0 105.768 0" position="-0.12365 1.34538 0.72366" >
        <a-entity id="camera" camera="far: 5000; zoom: 0.8" look-controls="" cursor="rayOrigin: mouse" raycaster="direction: 0.9218844171533822 -0.07934214953674647 -0.37925445905968874; origin: -1.8387398940563615 2.3769941735180065 -0.12375643952806391; useWorldCoordinates: true; objects: .clickable;" data-aframe-inspector-original-camera=""></a-entity>
      </a-entity>


      <!-- Spotlight and fill lights -->
      <a-entity light="angle: 20; decay: 7; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.22; shadowCameraTop: 6.06; shadowCameraRight: 16.83; shadowCameraBottom: -4.91; shadowCameraLeft: -13.19;" position="-7.52044 6.6806 2.678"></a-entity>
      <a-entity light="angle: 20; decay: 10; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.04; shadowCameraTop: 9.48; shadowCameraRight: 16.74; shadowCameraBottom: -4.67; shadowCameraLeft: -13.27" position="4.69131 6.6806 0.50657"></a-entity>
      <a-entity light="intensity: 0.5; type: ambient"></a-entity>


      <!-- Goodbye, Friend :'(' -->
      <!-- <a-sphere position="6.96188 -0.37915 -9.11629" id="pizzaSphere" radius="1.25" color="#EF2D5E" shadow="" event-set__enter="[object Object]" event-set__leave="[object Object]" material="" geometry="radius: 0.5" animation="property: position; to: 5 -4.6 2; dur: 5500; dir: alternate; easing: linear; loop: true"></a-sphere> -->


      <!-- Far-side Counter Top Matte -->
      <a-box shadow="cast: false" sshadow-material="" position="8.72688 -3.66488 -7.75" width="4" height="4" geometry="width: 4.5; height: 2.04; depth: 6" material="opacity: 0.25"></a-box>


<!-- Door- and bedframe mattes -->
<a-box shadow="cast: false" shadow-material="" position="-6.95214 -2.97154 10.46272" geometry="width: 0.5; height: 15; depth: 6" material="opacity: 0.25"></a-box>
<a-box shadow="cast: false" shadow-material="" position="-6.952 -2.972 -5.86206" geometry="width: 0.5; height: 15; depth: 6.3" material="opacity: 0.25"></a-box>
<a-box shadow="cast: false" shadow-material="" position="-12.25215 -9.49217 2.34542" geometry="width: 10; height: 4; depth: 0.13" material="opacity: 0.25"></a-box>
<a-box shadow="cast: false" shadow-material="" position="-17.30051 -7.2446 2.37312" geometry="width: 20; height: 0.2; depth: 17" material="opacity: 0.25"></a-box>

<a-box shadow="cast: false" shadow-material="" position="-7.29852 -6.8679 -1.96624" geometry="width: 0.2; height: 2; depth: 4" material="opacity: 0.25;"></a-box>

      <!-- This box hides both the overflow of the drawer underneath as well as provide a surface for shadows -->
      <a-box id="desk-top" class="clickable" shadow="cast: false" sshadow-material="" position="8.77143 -4.62456 0.125" width="4" height="4" geometry="width: 4.5; height: 0.35; depth: 9.37" material="opacity: 0.0000"></a-box>

      <!-- clothes Drawer functinoality set in main.js through the animation-click-handler attirbute -->
      <a-box
        animation-click-handler="clothes_drawer"
        id="clothes-drawer"
        class="not-clickable custom-animation-object clothes_drawer_click_class"
        shadow="cast: false"
        sshadow-material=""
        position="-9.679 -8.824 4.917"
        geometry="width: 4.5; height: 2.8; depth: 5"
        material="opacity: 0.25"
        animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
      >
        <a-box
          animation-click-handler="clothes_drawer"
          id="clothes-drawer-2"
          class="not-clickable custom-animation-object clothes_drawer_click_class"
          shadow="cast: false"
          sshadow-material=""
          position="0 0 -5.141"
          geometry="width: 4.5; height: 2.8; depth: 5"
          material="opacity: 0.25"
          animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
          animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        >
          <a-image id="clothes-drawer-poi" geometry="primitive: circle; radius: 0.7" look-at="#camera" src="#img_poi" animation-click-handler="clothes_drawer" alpha-test position="4.885 3.225 2.313" class="clickable" animation="property: position; to: 4.885 2.225 2.313; dur: 4050; easing: easeOutQuad; dir: alternate; loop: true"></a-image>
        </a-box>
      </a-box>

      <!-- This is the info dialog for the clothes drawer, with close and show more buttons -->
      <a-image src="#img_clothes-drawer" id="clothes-drawer-dialog" look-at="#camera" shadow="cast:  false;  receive:  false" geometry="primitive: plane; height: 5; width: 4.25" position="-4.060 -1.200 8.144" visible="false">
        <a-entity id="clothes-drawer-dialog-close" animation-click-handler="clothes_drawer" geometry="" position="1.5 2.05 0" alpha-test material="opacity: 0;" class="clothes-drawer-dialog-internal"></a-entity>
        <a-entity id="clothes-drawer-dialog-more" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" alpha-test material="opacity: 0;" dialog-more-button="clothes-drawer" class="clothes-drawer-dialog-internal"></a-entity>
      </a-image>



      <!-- Curtain functinoality set in main.js through the animation-click-handler attirbute -->
      <a-box
        id="curtain"
        shadow="cast: false"
        sshadow-material=""
        position="-5.834 0.178 -1.029"
        rotation="0 90 0"
        width="4" height="4"
        geometry="width: 2.400; height: 12.400; depth: 0.100"
        material="opacity: 0.25"
        animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
      >
        <a-image class="clickable" id="curtain-poi" src="#img_poi" geometry="primitive: circle; radius: 0.5" animation-click-handler="curtain" alpha-test position="-1.12 -0.5 0.5" class="not-clickable" animation="property: position; to: -1.12 -0.6 0.5; dur: 3500; easing: easeOutQuad; dir: alternate; loop: true"></a-image>
      </a-box>
      <!-- This is the info dialog for the curtain, with close and show more buttons -->
      <a-image src="#img_curtain" id="curtain-dialog" scale="0.66 0.66 0.66" look-at="#camera" shadow="cast: false; receive:  false" geometry="primitive: plane; height: 5; width: 4.25" position="-4.328 1.4 -0.9" visible="false">
        <a-entity id="curtain-dialog-close" animation-click-handler="curtain" geometry="" position="1.5 2.05 0" alpha-test material="opacity: 0;" class="curtain-dialog-internal"></a-entity>
        <a-entity id="curtain-dialog-more" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" alpha-test material="opacity: 0;" dialog-more-button="curtain" class="curtain-dialog-internal"></a-entity>
      </a-image>



      <!-- Headboard handlers -->
      <a-image
        animation-click-handler="headboard"
        id="headboard"
        class="clickable custom-animation-object"
        shadow="cast: false"
        sshadow-material=""
        position="-22 6.861 17.717"
        geometry="primitive: circle; radius: 1.3"
        material="opacity: 0.95"
        rotation="0 -90 0"
        scale="1.5 1.5 1.5"
        src="#img_poi"
        animation="property: position; to: -22 5.861 17.717; dur: 2250; easing: easeOutQuad; dir: alternate; loop: true"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.05 1.05 1.05; startEvents: mouseenter; dur: 500"
        animation__mouseleave_scale="property: scale; to: 1 1 1; startEvents: mouseleave; dur: 500"
      >
      </a-image>

      <!-- This is the info dialog for the headoard, with close and show more buttons -->
      <a-image src="#img_headboard" id="headboard-dialog" look-at="#camera" shadow="cast:  false;  receive:  false" geometry="primitive: plane; height: 5; width: 4.25" position="-4.340 3.083 7.9" visible="false">
        <a-entity id="headboard-dialog-close" animation-click-handler="headboard" geometry="" position="1.5 2.05 0" alpha-test material="opacity: 0;" class="headboard-dialog-internal"></a-entity>
        <a-entity id="headboard-dialog-more" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" alpha-test material="opacity: 0;" dialog-more-button="headboard" class="headboard-dialog-internal"></a-entity>
      </a-image>


      <!-- Headphones -->
      <a-image
        animation-click-handler="headphones"
        id="headphones"
        class="clickable"
        look-at="#camera"
        animation="property: position; to: -10.75 -5.0 9.5; dur: 4000; easing: easeOutQuad; dir: alternate; loop: true"
        src="#img_headphones"
        alpha-test=""
        material="opacity: 0.75"
        geometry="primitive: circle; radius: 0.9"
        shadow="receive: false"
        position="-10.75 -5.5 9.5"
        scale="1.75 1.75 1.75"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.8 1.8 1.8; startEvents: mouseenter; dur: 350; easing: easeOutQuad;"
        animation__mouseleave_scale="property: scale; to: 1.75 1.75 1.75; startEvents: mouseleave; dur: 350; easing: easeOutQuad;"
      >
        <!-- <a-image id="headphones-poi" look-at="#camera" src="#img_poi"  animation-click-handler="headphones" alpha-test position="0.2 -0.7 1.5" sclae="0.85 0.85 0.85" class="not-clickable"></a-image> -->
      </a-image>

      <!-- This is the info dialog for the headphones, with close and show more buttons -->
      <a-image src="#img_headphones-d" id="headphones-dialog" look-at="#camera" shadow="cast:  true;  receive:  false" geometry="primitive: plane; height: 5; width: 4.25;" position="-7.575 1.25 5.487" visible="false">
        <a-entity id="headphones-dialog-close" shadow="cast: false" animation-click-handler="headphones" geometry="primitive: plane;" position="1.5 2.05 0" alpha-test material="opacity: 0;" class="headphones-dialog-internal"></a-entity>
        <a-entity id="headphones-dialog-more" shadow="cast: false" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" alpha-test material="opacity: 0;" dialog-more-button="headphones" class="headphones-dialog-internal"></a-entity>
      </a-image>






      <!-- Link to Interior -->
      <a-image
        framechange-click-handler="index.php"
        id="arrow"
        class="clickable"
        look-at="#camera"
        src="#img_direction-in"
        alpha-test=""
        material="opacity: 0.75"
        geometry="primitive: circle; radius: 0.9"
        shadow="receive: false"
        position="-14 -5.5 4"
        animation="property: position; to: -14 -5.1 4; dur: 3000; easing: easeOutQuad; dir: alternate; loop: true"
        scale="1 1 1"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.1 1.1 1.1; startEvents: mouseenter; dur: 350; easing: easeOutQuad;"
        animation__mouseleave_scale="property: scale; to: 1 1 1; startEvents: mouseleave; dur: 350; easing: easeOutQuad;"
      >
        <!-- <a-image id="headphones-poi" look-at="#camera" src="#img_poi"  animation-click-handler="headphones" alpha-test position="0.2 -0.7 1.5" sclae="0.85 0.85 0.85" class="not-clickable"></a-image> -->
      </a-image>


      <!-- Background Image -->
      <a-sky src="#img_sky"></a-sky>


    </a-scene>


    <span class="patent-pending">Patent Pending</span>

    <!-- External HTML overlay, hidden by default, will show over the Aframe canvas -->
    <div class="dialogue">
      <div class="dialogue__closer"></div>
      <div class="dialogue__closerX"></div>
      <div class="dialogue__text">
        <div class="dialogue__wrapper">
          <div class="dialogue__inner">
            <h2 class="dialogue__headline">Headline</h2>
            <div class="dialogue__content">Headline</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right now spaces live in different files, this element is used to hide the transition -->
    <div class="frame-blend-overlay">
    </div>

    <!-- Loads custom scripts for events and animations -->
    <script>
      var dialogueInformation = {
        clothes_drawer:{
          title: 'Clothing Storage',
          content: 'Generous Drawer/Storage Space Built into your Pod',
        },
        curtain:{
          title: 'Designer Privacy Curtain',
          content: 'Curtain Curated by Interior Designer for Pod Privacy on a Seamless Track with Heavy Fabric to Cut out Noise.',
        },
        headphones:{
          title: 'Airport / Bluetooth (Private)',
          content: '',
        },
        headboard:{
          title: 'Designer Cushioned Headboard',
          content: 'Floor-to-Ceiling, Plush, Leather Designer Headboards.',
        },
      }
    </script>
    <script src="assets/main-outside.js?v=<?=$globalVersion?>"></script>

  </body>
</html>