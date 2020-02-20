<!DOCTYPE html>
<html>
  <head>
    <title>Mouse Click Example - A-Frame</title>
    <meta name="description" content="Mouse Click Example - A-Frame">
    <!-- <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script> -->
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
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



    <a-scene>

      <a-assets>
        <img id="sky" src="src/Villas-on-Rio_B6_360_1.png">
      </a-assets>
      <!--
           The camera has a cursor component,
           which uses the mouse as the rayOrigin,
           so that you can click entities in the scene
           with the mouse.
      -->
<a-entity id="camera" camera="" look-controls="" cursor="rayOrigin: mouse" position="-0.12365 1.34538 0.72366" rotation="3.4377467707849454 -3.208563652732527 0" raycaster="direction: -0.6481069671855063 -0.6221383356118224 -0.43920524865688537; origin: 2.8888617887268344 11.049112962311197 8.089424428829291; useWorldCoordinates: true" data-aframe-inspector-original-camera="">
  <a-entity id="tbHsClose3" geometry="" material="alphaTest: 0.99; opacity: 1; blending: none; depthTest: false; depthWrite: false" scale="0.27 0.2 -429.8" position="0.44 0.45 50" class="clickable"></a-entity>
</a-entity>

      <a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9" shadow
             event-set__enter="_event: mouseenter; color: #026fc9"
             event-set__click="_event: click; console.log"
             event-set__leave="_event: mouseleave; color: #4CC3D9">
        <!-- This animation begins when the box is clicked with the mouse. -->
        <!-- <a-animation attribute="rotation"
               dur="3000"
               fill="forwards"
               to="0 360 0"
               direction="alternate"
               begin="click"></a-animation> -->
      </a-box>


<a-entity id="tbHotspot3" class="clickable sceneHotspotIcon tbHotspotIcon" hotspots-component="hstarget: #tbHs3; closetarget: #tbHsClose3; assetlocation: assets/hotspots/tb/hs3.png; hsshader: flat; hotspotname: tbHotspot3" position="8.719916328763487 0.25367212691156427 -0.2765201813968341" look-at="#camera" geometry="primitive: circle" material="src: [object HTMLImageElement]; shader: flat; side: double" scale="0.25 0.25 0.25" rotation="-19.955599134398284 -65.2657478102569 0" visible="">
  <a-entity id="tbHotspotBtn3" geometry="" scale="4 4 4" material="opacity: 0; transparent: true; depthTest: false"></a-entity>
</a-entity>

<a-entity id="tbHs3" class="sceneHotspot" position="10.20874 -0.35 1.89189" look-at="#camera" geometry="" material="shader: flat; transparent: true" scale="5 5 0.001" rotation="-20.64251562719098 -70.32699263609142 1.6993806395721393e-15" visible="false">
  <a-entity id="tbHsClose3" geometry="" material="alphaTest: 0.99; opacity: 0; blending: none; depthTest: false; depthWrite: false" scale="0.27 0.2 -429.8" position="0.44 0.45 50" class="clickable"></a-entity>
</a-entity>


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
      <a-plane look-at="#camera"  position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4" shadow></a-plane>
      <a-sky src="#sky"></a-sky>
    </a-scene>



  </body>
</html>