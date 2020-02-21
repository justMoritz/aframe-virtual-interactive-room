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
        <img id="img_sky" src="src/Villas-on-Rio_B6_360_2.png">
        <img id="img_poi" src="src/poi.png">
        <img id="img_iphone" src="src/iphone.png">
        <img id="img_ipad" src="src/ipad.png">
        <img id="img_headphones" src="src/headphones.png">
        <img id="img_appletv" src="src/appletv.png">
        <img id="img_poi" src="src/poi.png">
        <img id="img_button" src="src/button.png">
        <img id="img_close" src="src/close.png">
        <img id="img_desk-drawer" src="src/desk-drawer.png">
        <img id="img_cooler-drawer" src="src/cooler-drawer.png">
        <img id="img_iphone-d" src="src/iphone-d.png">
        <img id="img_ipad-d" src="src/ipad-d.png">
        <img id="img_headphones-d" src="src/headphones-d.png">
        <img id="img_curtain" src="src/curtain.png">
        <img id="img_television" src="src/television.png">
        <img id="img_headboard" src="src/headboard.png">
        <img id="transparent" src="data:image/gif;base64,R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs=">
        <img id="transpImage" crossorigin="anonymous" src="http://ekladata.com/hXTGfWnZm170W274zDRObDlqOlc.png">
      </a-assets>


      <!-- Camera with Raycaster -->
      <a-entity id='cameraWrapper' rotation="0 88 0" position="-0.12365 1.34538 0.72366" >
        <a-entity id="camera" camera="far: 5000; zoom: 0.8" look-controls="" cursor="rayOrigin: mouse" raycaster="direction: 0.9218844171533822 -0.07934214953674647 -0.37925445905968874; origin: -1.8387398940563615 2.3769941735180065 -0.12375643952806391; useWorldCoordinates: true; objects: .clickable;" data-aframe-inspector-original-camera=""></a-entity>
      </a-entity>


      <!-- Spotlight and fill lights -->
      <a-entity light="angle: 20; decay: 7; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.22; shadowCameraTop: 6.06; shadowCameraRight: 16.83; shadowCameraBottom: -4.91; shadowCameraLeft: -13.19;" position="-7.52044 6.6806 2.678"></a-entity>
      <a-entity light="angle: 20; decay: 10; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.04; shadowCameraTop: 9.48; shadowCameraRight: 16.74; shadowCameraBottom: -4.67; shadowCameraLeft: -13.27" position="4.69131 6.6806 0.50657"></a-entity>
      <a-entity light="intensity: 0.5; type: ambient"></a-entity>


      <!-- Goodbye, Friend :'(' -->
      <a-sphere position="6.96188 -0.37915 -9.11629" id="pizzaSphere" radius="1.25" color="#EF2D5E" shadow="" event-set__enter="[object Object]" event-set__leave="[object Object]" material="" geometry="radius: 0.5" animation="property: position; to: 5 -4.6 2; dur: 5500; dir: alternate; easing: linear; loop: true"></a-sphere>


      <!-- Far-side Counter Top Matte -->
      <a-box shadow="cast: false" sshadow-material="" position="8.72688 -3.66488 -7.75" width="4" height="4" geometry="width: 4.5; height: 2.04; depth: 6" material="opacity: 0.25"></a-box>


<!-- Door- and bedframe mattes -->
<a-box shadow="cast: false" shadow-material="" position="-6.95214 -2.97154 10.46272" geometry="width: 0.5; height: 15; depth: 6" material="opacity: 0.25"></a-box>
<a-box shadow="cast: false" shadow-material="" position="-6.952 -2.972 -5.86206" geometry="width: 0.5; height: 15; depth: 6.3" material="opacity: 0.25"></a-box>
<a-box shadow="cast: false" shadow-material="" position="-12.25215 -9.49217 2.34542" geometry="width: 10; height: 4; depth: 0.13" material="opacity: 0.25"></a-box>
<a-box shadow="cast: false" shadow-material="" position="-9.80093 -7.2446 2.37312" geometry="width: 5; height: 0.2; depth: 11.42" material="opacity: 0.25"></a-box>


      <!-- This box hides both the overflow of the drawer underneath as well as provide a surface for shadows -->
      <a-box id="desk-top" class="clickable" shadow="cast: false" sshadow-material="" position="8.77143 -4.62456 0.125" width="4" height="4" geometry="width: 4.5; height: 0.35; depth: 9.37" material="opacity: 0.0000"></a-box>

      <!-- clothes Drawer functinoality set in main.js through the animation-click-handler attirbute -->
      <a-box
        animation-click-handler="clothes_drawer"
        id="clothes-drawer"
        class="clickable custom-animation-object"
        shadow="cast: false"
        sshadow-material=""
        position="-9.679 -8.824 4.917"
        geometry="width: 4.5; height: 2.8; depth: 5"
        material="opacity: 0.25"
        animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
      >
        <a-box
          id="clothes-drawer-2"
          class="clickable custom-animation-object"
          shadow="cast: false"
          sshadow-material=""
          position="0 0 -5.141"
          geometry="width: 4.5; height: 2.8; depth: 5"
          material="opacity: 0.25"
          animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
          animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        >
        </a-box>
        <a-image id="clothes-drawer-poi" look-at="#camera" src="#img_poi" animation-click-handler="clothes_drawer" alpha-test position="-2.55 -0.40 0" class="not-clickable"></a-image>
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
        position="3.646 0.463 11.643"
        width="4" height="4"
        geometry="width: 5.470; height: 25.0; depth: 0.2"
        material="opacity: 0.55"
        animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
      >
        <a-image class="clickable" id="curtain-poi" look-at="#camera" src="#img_poi"  animation-click-handler="curtain" alpha-test position="-2.55 -0.40 -1" class="not-clickable"></a-image>
      </a-box>
      <!-- This is the info dialog for the curtain, with close and show more buttons -->
      <a-image src="#img_curtain" id="curtain-dialog" look-at="#camera" shadow="cast: false; receive:  false" geometry="primitive: plane; height: 5; width: 4.25" position="-3.366 1.400 6.560" visible="false">
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
        position="-13.2 4.4 0.4"
        geometry="width: 1.85; height: 1.85; depth: 0.5;"
        material="opacity: 0.95"
        rotation="0 -90 0"
        src="#img_poi"
        animation="property: position; to: -13.2 3.6 0.4; dur: 2250; easing: easeOutQuad; dir: alternate; loop: true"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.05 1.05 1.05; startEvents: mouseenter; dur: 500"
        animation__mouseleave_scale="property: scale; to: 1 1 1; startEvents: mouseleave; dur: 500"
      >
      </a-image>

      <!-- This is the info dialog for the desk drawer, with close and show more buttons -->
      <a-image src="#img_headboard" id="headboard-dialog" look-at="#camera" shadow="cast:  false;  receive:  false" geometry="primitive: plane; height: 5; width: 4.25" position="-7.476 3.969 -2.664" visible="false">
        <a-entity id="headboard-dialog-close" animation-click-handler="headboard" geometry="" position="1.5 2.05 0" alpha-test material="opacity: 0;" class="headboard-dialog-internal"></a-entity>
        <a-entity id="headboard-dialog-more" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" alpha-test material="opacity: 0;" dialog-more-button="headboard" class="headboard-dialog-internal"></a-entity>
      </a-image>


      <!-- iPhone / Charging Information -->
      <a-image
        animation-click-handler="iphone"
        id="iphone"
        class="clickable"
        look-at="#camera"
        src="#img_iphone"
        alpha-test=""
        material="opacity: 0.66"
        geometry="height: 1.5; width: 1.1"
        shadow="receive: false"
        position="4.337 0.16674 -3.01447"
        animation="property: position; to: 4.337 0.32674 -3.01447; dur: 2000; easing: easeOutQuad; dir: alternate; loop: true"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.1 1.1 1.1; startEvents: mouseenter; dur: 500"
        animation__mouseleave_scale="property: scale; to: 1 1 1; startEvents: mouseleave; dur: 500"
      ><
        <!-- <a-image id="iphone-poi" look-at="#camera" src="#img_poi" animation-click-handler="iphone" alpha-test position="0.2 -0.7 1.5" sclae="0.85 0.85 0.85" class="not-clickable"></a-image> -->
      </a-image>
      <!-- This is the info dialog for the iphone, with close and show more buttons -->
      <a-image src="#img_iphone-d"  id="iphone-dialog" look-at="#camera" shadow="cast:  true;  receive:  false" geometry="primitive: plane; height: 5; width: 4.25" position="2.687 1.636 -5.713" visible="false">
        <a-entity id="iphone-dialog-close" animation-click-handler="iphone" geometry="" position="1.5 2.05 0" alpha-test material="opacity: 0;" class="iphone-dialog-internal"></a-entity>
        <a-entity id="iphone-dialog-more" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" alpha-test material="opacity: 0;" dialog-more-button="iphone" class="iphone-dialog-internal"></a-entity>
      </a-image>


      <!-- Pillow Top Matte -->
      <a-box id="pillowtop-matte" shadow="cast: false" shadow-material="" position="-14.8693 -7.20108 -0.4575" width="4" height="4" geometry="width: 7; height: 2.04; depth: 15" material="opacity: 0.25" rotation="0 0 -41.76"></a-box>


      <!-- Ipad -->
      <a-image
        animation-click-handler="ipad"
        id="ipad"
        class="clickable"
        look-at="#camera"
        animation="property: position; to: -10.28996 -2.5849 -3.01447; dur: 4500; easing: easeOutQuad; dir: alternate; loop: true"
        src="#img_ipad"
        alpha-test=""
        material="opacity: 0.75"
        geometry="height: 1.5; width: 1.1"
        shadow="receive: false"
        position="-10.28996 -3.5849 -3.01447"
        scale="1.5 1.5 1.5"
        animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
        animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
        animation__mousedown_scale="property: scale; to: 1.6 1.6 1.6; startEvents: mouseenter; dur: 350; easing: easeOutQuad;"
        animation__mouseleave_scale="property: scale; to: 1.5 1.5 1.5; startEvents: mouseleave; dur: 350; easing: easeOutQuad;"
      >
        <!-- <a-image id="ipad-poi" look-at="#camera" src="#img_poi" animation-click-handler="ipad" alpha-test position="0.2 -0.7 1.5" sclae="0.85 0.85 0.85" class="not-clickable"></a-image> -->
      </a-image>

      <!-- This is the info dialog for the ipad, with close and show more buttons -->
      <a-image src="#img_ipad-d" id="ipad-dialog" look-at="#camera" shadow="cast:  true;  receive:  false" geometry="primitive: plane; height: 5; width: 4.25" position="-6.860 2.385 -3.014" visible="false">
        <a-entity id="ipad-dialog-close" animation-click-handler="ipad" geometry="" position="1.5 2.05 0" alpha-test material="opacity: 0;" class="ipad-dialog-internal"></a-entity>
        <a-entity id="ipad-dialog-more" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" alpha-test material="opacity: 0;" dialog-more-button="ipad" class="ipad-dialog-internal"></a-entity>
      </a-image>


      <!-- Headphones -->
      <a-image
        animation-click-handler="headphones"
        id="headphones"
        class="clickable"
        look-at="#camera"
        animation="property: position; to: -10.06309 -5.92725 7.29273; dur: 4000; easing: easeOutQuad; dir: alternate; loop: true"
        src="#img_headphones"
        alpha-test=""
        material="opacity: 0.75"
        geometry="height: 1.5; width: 1.3"
        shadow="receive: false"
        position="-10.06309 -6.92725 7.29273"
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


      <!-- Background Image -->
      <a-sky src="#img_sky"></a-sky>


    </a-scene>

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

    <!-- Loads custom scripts for events and animations -->
    <script>
      var dialogueInformation = {
        desk_drawer:{
          title: 'Pull-out Desk',
          content: 'Work on your laptop, do homework, or eat meals on this desk on a pull-out track.',
        },
        cooler_drawer:{
          title: 'Insulated Beverage Drawer & Wireless iPhone Charging Port',
          content: 'Wirelessly charge your phone on this invisible, built-in phone charger. Store Drinks and Snacks in a First-of-its-Kind Insulated Pod Drawer – WOW!!',
        },
        curtain:{
          title: 'Designer Privacy Curtain',
          content: 'Curtain Curated by Interior Designer for Pod Privacy on a Seamless Track with Heavy Fabric to Cut out Noise.',
        },
        iphone:{
          title: 'USB, HDMI, Built-in Charging Ports',
          content: 'USB, HDMI, and Power Plugs Galore for Electronics Charging, Game Consoles, and Accessories.',
        },
        ipad:{
          title: 'Connectivity',
          content: 'With TV, Lighting, Wireless Charging, Bluetooth, and Wireless Headphone Connectivity, You Have it All.',
        },
        headphones:{
          title: 'Airport/Bluetooth (Private)',
          content: '',
        },
        television:{
          title: '50" Multimedia TV & AppleTV',
          content: 'Huge Personal Screen for Plug and Play TV/Computer, including AppleTV for each screen—allowing for Private, Wireless, Bluetooth Headphone Connections in Your Separate Pods.',
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