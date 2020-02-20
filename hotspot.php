<!DOCTYPE html>
<html>
  <head>
    <title>Mouse Click Example - A-Frame</title>
    <meta name="description" content="Mouse Click Example - A-Frame">
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <!-- <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script> -->
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

    <a-scene embedded="true">
      <a-box position="0 3.5 -2" rotation="30 30 0" color="skyblue"
             event-set__enter="_event: mouseenter; material.color: yellowgreen; scale: 3 1 1"
             event-set__leave="_event: mouseleave; material.color: skyblue; scale: 1 1 1">
        <a-animation attribute="rotation" begin="click" dur="500" fill="backwards" to="30 30 360"></a-animation>
      </a-box>

      <a-sky color="pink"></a-sky>

      <a-entity position="0 1.8 4">
        <a-entity camera look-controls mouse-cursor>
          <a-cursor fuse="true" color="yellow"></a-cursor>
        </a-entity>
      </a-entity>

    </a-scene>



  </body>
</html>