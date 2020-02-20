<html>
  <head>
    <meta charset="utf-8" >
    <title>Test</title>
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-orbit-controls@1.2.0/dist/aframe-orbit-controls.min.js"></script>
  </head>
  <script>
    AFRAME.registerComponent('shadow-material', {
      init: function(){
        console.log('shadow-material');
        let el = this.el;
        let self = this;
        let mesh = el.getObject3D('mesh');
        console.log(mesh);
        if (!mesh){return;}
        mesh.material = new THREE.ShadowMaterial();
        mesh.material.opacity = 1.0;
      }
    });
  </script>

  <body>
    <a-scene shadow="type: pcfsoft">
    <a-entity id="plane" geometry="primitive:plane; width: 2; height: 2"  rotation="-90 0 0" shadow="receive: true" shadow-material></a-entity>
    <a-entity id="sphere" geometry="primitive: torusKnot; radius: 0.125; radius-tubular: 0.01" position="0 0.135 0" shadow="cast: true" material="color:orange"></a-entity>
    <a-entity camera orbit-controls="initialPosition: 0 1 1"></a-entity>
    <a-entity id="lightDirShadowcaster" light="type: directional; castShadow: true" position="1 1 1"></a-entity>
    <a-sky color="#6ebaa7"></a-sky>
    </a-scene>
  </body>
</html>