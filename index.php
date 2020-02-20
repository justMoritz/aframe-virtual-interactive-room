<!DOCTYPE html>
<html>
  <head>
    <title>Villas on Rio Virtual Pod Tour 1</title>
    <meta name="description" content="Mouse Click Example - A-Frame">

    <!-- Loading Aframe and Dependencies -->
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <script src="assets/aframe-orbit-controls.min.js"></script>
    <script src="assets/aframe-teleport-controls.min.js"></script>
    <script src="assets/aframe-look-at-component.js"></script>
    <script src="assets/animation-mixer.js"></script>
    <script src="assets/aframe-event-set-component.min.js"></script>

    <link rel="stylesheet" href="assets/styles/styles.css" />

    <!-- <script src="https://unpkg.com/aframe-event-set-component@^4.0.0/dist/aframe-event-set-component.min.js"></script> -->

  </head>

  <body>

    <a-scene shadow="type: pcfsoft">

      <!-- All Images -->
      <a-assets>
        <img id="img_sky" src="src/Villas-on-Rio_B6_360_1.png">
        <img id="img_poi" src="src/poi.png">
        <img id="img_iphone" src="src/iphone.png">
        <img id="img_ipad" src="src/ipad.png">
        <img id="img_headphones" src="src/headphones.png">
        <img id="img_poi" src="src/poi.png">
        <img id="transparent" src="data:image/gif;base64,R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs=">
        <img id="transpImage" crossorigin="anonymous" src="http://ekladata.com/hXTGfWnZm170W274zDRObDlqOlc.png">
      </a-assets>

      <!-- Camera with Raycaster -->
      <a-entity id="camera" camera="far: 5000" look-controls="" cursor="rayOrigin: mouse" position="-0.12365 1.34538 0.72366" rotation="" raycaster="direction: 0.9218844171533822 -0.07934214953674647 -0.37925445905968874; origin: -1.8387398940563615 2.3769941735180065 -0.12375643952806391; useWorldCoordinates: true; objects: .clickable;" data-aframe-inspector-original-camera=""></a-entity>

      <!-- Spotlight and fill lights -->
      <a-entity light="angle: 20; decay: 7; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.22; shadowCameraTop: 6.06; shadowCameraRight: 16.83; shadowCameraBottom: -4.91; shadowCameraLeft: -13.19;" position="-7.52044 6.6806 2.678"></a-entity>

<a-entity light="angle: 20; decay: 10; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.04; shadowCameraTop: 9.48; shadowCameraRight: 16.74; shadowCameraBottom: -4.67; shadowCameraLeft: -13.27" position="4.69131 6.6806 0.50657"></a-entity>


      <a-entity light="intensity: 0.5; type: ambient"></a-entity>


<a-sphere position="6.96188 -0.37915 -9.11629" id="pizzaSphere" radius="1.25" color="#EF2D5E" shadow="" event-set__enter="[object Object]" event-set__leave="[object Object]" material="" geometry="radius: 0.5" animation="property: position; to: 5 -4.6 2; dur: 5500; dir: alternate; easing: linear; loop: true"></a-sphere>

<a-plane id="television" shadow="cast: false" sshadow-material="" position="11.16747 1.936 0.12" width="4" height="4" geometry="primitive: plane; width: 15; height: 9" material="opacity: 0.5" rotation="0 -90 0"></a-plane>


      <!-- Far-side Counter Top -->
      <a-box shadow="cast: false" shadow-material="" position="8.72688 -3.66488 -7.75" width="4" height="4" geometry="width: 4.5; height: 2.04; depth: 6" material="opacity: 0.25"></a-box>












<!--
  /**
   * Desk Drawer Animation and related
   */
-->

<!-- This box hides both the overflow of the drawer underneath as well as provide a surface for shadows -->
<a-box id="desk-top" class="clickable" shadow="cast: false" shadow-material="" position="8.77143 -4.62456 0.125" width="4" height="4" geometry="width: 4.5; height: 0.35; depth: 9.37" material="opacity: 0.0000"></a-box>

<!-- Desk Drawer functinoality set in main.js through the animation-click-handler attirbute -->
<a-box
  animation-click-handler="desk_drawer"
  id="desk-drawer"
  class="clickable custom-animation-object"
  shadow="cast: false"
  sshadow-material=""
  position="8.77143 -4.99191 0.125"
  width="4" height="4"
  geometry="width: 4.5; height: 0.45; depth: 9.37"
  material="opacity: 0.25"
  animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
  animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
>
  <a-image id="desk-drawer-poi" look-at="#camera" src="#img_poi"  animation-click-handler="desk_drawer" alpha-test position="-2.55 -0.40 0" class="not-clickable"></a-image>
</a-box>

<!-- This is the info dialog for the desk drawer, with close and show more buttons -->
<a-entity id="desk-drawer-dialog" look-at="#camera" shadow="cast: true" geometry="primitive: plane; height: 5; width: 3" position="8.72461 -0.75065 -0.30113" visible="false">
  <a-entity id="desk-drawer-dialog-close" animation-click-handler="desk_drawer" geometry="" position="1.25 2.25 0" class="desk-drawer-dialog-internal"></a-entity>
  <a-entity id="desk-drawer-dialog-more" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" dialog-more-button="desk-drawer" class="desk-drawer-dialog-internal"></a-entity>
</a-entity>


<!--
  /**
   * Storage Cooler Animation and Related
   */
-->

<!-- This box hides both the overflow of the drawer underneath as well as provide a surface for shadows -->
<a-box id="cooler-top" shadow="cast: false" shadow-material="" position="8.771 -2.836 8.125" width="4" height="4" geometry="width: 4.5; height: 0.35; depth: 6.6" material="opacity: 0.400"></a-box>
<a-box id="cooler-side" shadow="cast: false" shadow-material="" position="8.771 -5.330 5" width="4" height="4" geometry="width: 4.5; height: 4.62; depth: 0.35" material="opacity: 0.400"></a-box>

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
  <a-image id="cooler-drawer-poi" look-at="#camera" src="#img_poi"  animation-click-handler="desk_drawer" alpha-test position="-2.55 -0.40 0" class="not-clickable"></a-image>
</a-box>

<!-- Info dialog for the cooler drawer, with close and show more buttons -->
<a-entity id="cooler-drawer-dialog" look-at="#camera" shadow="cast: true" geometry="primitive: plane; height: 5; width: 3" position="4.3 1.8 6.4" visible="false">
  <a-entity id="cooler-drawer-dialog-close" animation-click-handler="cooler_drawer" geometry="" position="1.25 2.25 0" class="cooler-drawer-dialog-internal"></a-entity>
  <a-entity id="cooler-drawer-dialog-more" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" dialog-more-button="cooler-drawer" class="cooler-drawer-dialog-internal"></a-entity>
</a-entity>





<!--
  /**
   * Curtain Animation and related
   */
-->

<!-- Curtain functinoality set in main.js through the animation-click-handler attirbute -->
<a-box
  animation-click-handler="curtain"
  id="curtain"
  class="clickable custom-animation-object"
  shadow="cast: false"
  sshadow-material=""
  position="3.646 0.463 11.643"
  width="4" height="4"
  geometry="width: 5.470; height: 25.0; depth: 0.2"
  material="opacity: 0.55"
  animation__mousedown="property: components.material.material.color; type: color; from: red; to: blue; startEvents: mouseenter; dur: 500"
  animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
>
  <a-image id="curtain-poi" look-at="#camera" src="#img_poi"  animation-click-handler="curtain" alpha-test position="-2.55 -0.40 0" class="not-clickable"></a-image>
</a-box>

<!-- This is the info dialog for the curtain, with close and show more buttons -->
<a-entity id="curtain-dialog" look-at="#camera" shadow="cast: true" geometry="primitive: plane; height: 5; width: 3" position="-3.366 1.400 6.560" visible="false">
  <a-entity id="curtain-dialog-close" animation-click-handler="curtain" geometry="" position="1.25 2.25 0" class="curtain-dialog-internal"></a-entity>
  <a-entity id="curtain-dialog-more" geometry="primitive: plane; height: 1; width: 2" position="0 -1.75 2" dialog-more-button="curtain" class="curtain-dialog-internal"></a-entity>
</a-entity>





<!-- Charging Information -->
<a-image
  id="iphone"
  class="clickable"
  look-at="#camera"
  src="#img_iphone"
  alpha-test=""
  material="opacity: 0.75"
  geometry="height: 1.5; width: 1.1"
  shadow="receive: false"
  position="4.337 0.16674 -3.01447"
  animation="property: position; to: 4.337 0.26674 -3.01447; dur: 2000; easing: easeOutQuad; dir: alternate; loop: true"
  animation__mousedown="property: components.material.material.color; type: color; from: #fffefe; to: #aaffff; startEvents: mouseenter; dur: 500"
  animation__mouseleave="property: components.material.material.color; type: color; to: white; startEvents: mouseleave; dur: 500"
  animation__mousedown_scale="property: scale; to: 1.1 1.1 1.1; startEvents: mouseenter; dur: 500"
  animation__mouseleave_scale="property: scale; to: 1 1 1; startEvents: mouseleave; dur: 500"
></a-image>





      <!-- Pillow Top Matte -->
<a-box id="pillowtop-matte" shadow="cast: false" shadow-material="" position="-14.8693 -7.20108 -0.4575" width="4" height="4" geometry="width: 7; height: 2.04; depth: 15" material="opacity: 0.25" rotation="0 0 -41.76"></a-box>

<!-- <a-box id="pillowbed-matte" shadow="cast: false" sshadow-material="" position="-10.11271 -9.80205 -0.4575" width="4" height="4" geometry="width: 3.47; height: 2.04; depth: 15" material="opacity: 0.25" rotation=""></a-box> -->
<!-- Connectivity Information -->


<a-image
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
></a-image>



<a-image
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
></a-image>


      <!-- Background Image -->
      <a-sky src="#img_sky"></a-sky>
    </a-scene>

    <!-- External HTML overlay, hidden by default, will show over the Aframe canvas -->
    <div class="dialogue">
      <div class="dialogue__closer"></div>
      <div class="dialogue__text">
        This is a where some information goez
      </div>
    </div>

    <!-- Loads custom scripts for events and animations -->
    <script src="assets/main.js"></script>

  </body>
</html>