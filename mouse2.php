<!DOCTYPE html>
<html>
  <head>
    <title>Mouse Click Example - A-Frame</title>
    <meta name="description" content="Mouse Click Example - A-Frame">
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <!-- <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script> -->


    <!-- <script src="assets/aframe-master.min.js"></script> -->
    <script src="assets/aframe-orbit-controls.min.js"></script>
    <script src="assets/aframe-teleport-controls.min.js"></script>
    <script src="assets/aframe-look-at-component.js"></script>
    <script src="assets/animation-mixer.js"></script>



    <link rel="stylesheet" href="assets/styles/styles.css" />

    <!--
    The event-set component gives you a quick way to add events
    to elements (like click, mouseenter, mouseleave, mousedown, mouseup, and fusing)
    without having to write Javascript for each event.

    For exmample if you want to give the user feedback when they hover over the element,
    you can do event-set__enter="_event: mouseenter; material.color: blue"
    -->
    <script src="https://unpkg.com/aframe-event-set-component@^4.0.0/dist/aframe-event-set-component.min.js"></script>

  </head>
  <body>



    <a-scene shadow="type: pcfsoft">
      <a-assets>
        <img id="img_sky" src="src/Villas-on-Rio_B6_360_1.png">
        <img id="img_poi" src="src/poi.png">
        <img id="transparent" src="data:image/gif;base64,R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs=">
        <img id="transpImage" crossorigin="anonymous" src="http://ekladata.com/hXTGfWnZm170W274zDRObDlqOlc.png">
      </a-assets>

<a-entity id="camera" camera="far: 5000" look-controls="" cursor="rayOrigin: mouse" position="-0.12365 1.34538 0.72366" rotation="" raycaster="direction: 0.9218844171533822 -0.07934214953674647 -0.37925445905968874; origin: -1.8387398940563615 2.3769941735180065 -0.12375643952806391; useWorldCoordinates: true; objects: .clickable;" data-aframe-inspector-original-camera=""></a-entity>

      <!-- <a-entity id="camera" camera="" look-controls="" cursor="rayOrigin: mouse" position="-0.12365 1.34538 0.72366" rotation="3.4377467707849454 -3.208563652732527 0" raycaster="direction: -0.6481069671855063 -0.6221383356118224 -0.43920524865688537; origin: 2.8888617887268344 11.049112962311197 8.089424428829291; useWorldCoordinates: true" data-aframe-inspector-original-camera=""></a-entity> -->



      <!-- <a-entity pizza-component="pizzatime" id="tbHotspot3" class="clickable sceneHotspotIcon tbHotspotIcon" hotspots-component="hstarget: #tbHs3; closetarget: #tbHsClose3; assetlocation: assets/hotspots/tb/hs3.png; hsshader: flat; hotspotname: tbHotspot3" position="8.719916328763487 0.25367212691156427 -0.2765201813968341" look-at="#camera" geometry="primitive: circle" material="shader: flat; side: double" scale="0.25 0.25 0.25" rotation="-19.955599134398284 -65.2657478102569 0" visible="">
        <a-entity id="tbHotspotBtn3" geometry="" scale="4 4 4" material="opacity: 0; transparent: true; depthTest: false"></a-entity>
      </a-entity>

      <a-entity id="tbHs3" class="sceneHotspot" position="10.20874 -0.35 1.89189" look-at="#camera" geometry="" material="shader: flat; transparent: true" scale="5 5 0.001" rotation="-20.64251562719098 -70.32699263609142 1.6993806395721393e-15" visible="false">
        <a-entity id="tbHsClose3" geometry="" material="alphaTest: 0.99; opacity: 1; blending: none; depthTest: false; depthWrite: false" scale="0.27 0.2 -429.8" position="0.44 0.45 50" class="clickable"></a-entity>
      </a-entity> -->

<a-entity light="angle: 20; decay: 7; castShadow: true; distance: 10; shadowCameraFov: 88.5; shadowCameraNear: 2.22; shadowCameraTop: 6.06; shadowCameraRight: 16.83; shadowCameraBottom: -4.91; shadowCameraLeft: -13.19;" position="-7.52044 6.6806 2.678"></a-entity>






      <!-- <a-entity light="angle: 0; decay: 7; castShadow: true" position="-7.52044 6.6806 2.678"></a-entity> -->
      <a-entity light="intensity: 0.5; type: ambient"></a-entity>


      <a-sphere position="6.96188 -0.37915 -9.11629" id="pizzaSphere" radius="1.25" color="#EF2D5E" shadow="" event-set__enter="[object Object]" event-set__leave="[object Object]" material="" geometry="radius: 0.5" animation="property: position; to: 5 -4.6 2; dur: 5500; easing: linear; loop: NaN">
      </a-sphere>

<a-plane id="television" shadow="cast: false" sshadow-material="" position="11.16747 1.936 0.12" width="4" height="4" geometry="primitive: plane; width: 15; height: 9" material="opacity: 0.5" rotation="0 -90 0"></a-plane>

<a-box shadow="cast: false" sshadow-material="" position="8.72688 -3.66488 -7.75" width="4" height="4" geometry="width: 4.5; height: 2.04; depth: 6" material="opacity: 0.25"></a-box>
<!-- <a-box shadow="cast: false" sshadow-material="" position="8.72972 -6.69092 0.09461" width="4" height="4" geometry="width: 4.5; depth: 9.7" material="opacity: 0.25"></a-box> -->
<a-box shadow="cast: false" sshadow-material="" position="8.72688 -3.66488 7.95" width="4" height="4" geometry="width: 4.5; height: 2.04; depth: 6" material="opacity: 0.25"></a-box>




<!--
  /**
   * Desk Drawer Animation and related
   */
-->

<!-- This box hides both the overflow of the drawer underneath as well as provide a surface for shadows -->
<a-box id="desk-top" shadow="cast: false" shadow-material="" position="8.77143 -4.62456 0.125" width="4" height="4" geometry="width: 4.5; height: 0.35; depth: 9.37" material="opacity: 0.0000"></a-box>

<!-- Desk Drawer functinoality set in main.js through the animation-click-handler attirbute -->
<a-box
  animation-click-handler="desk_drawer"
  id="desk-drawer"
  class="clickable"
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




      <a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E" shadow
                event-set__enter="_event: mouseenter; color: #026fc9"
                event-set__leave="_event: mouseleave; color: #EF2D5E">

        <!-- This animation begins when the sphere is clicked with the mouse. -->
        <a-animation attribute="position"
               dur="1000"
               fill="forwards"
               to="0 2.5 -6"
               direction="alternate"
               begin="click"></a-animation>
      </a-sphere>


<!--       <a-box shadow="receive: true" not-shadow-material position="1.0855 -0.96953 -5.45128" width="4" height="4" shadow="" geometry=""></a-box>
      <a-image look-at="#camera" src="#transpImage" alpha-test></a-image>
 -->



      <a-sky src="#img_sky"></a-sky>







    </a-scene>










    <div class="dialogue">
      <div class="dialogue__closer"></div>
      <div class="dialogue__text">
        This is a pizzpizzpizzpizzzpizzzzzzz
      </div>
    </div>


    <script src="assets/main.js"></script>

  </body>
</html>