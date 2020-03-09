var aframeInteractions = (function(){


  /**
   * Helper functions that define the interactivity of
   * every single POI, and the animations associated with it!
   */
  var _allCustomAnimationsHelper = {
    // I would like to apologize for this horribly oranized, super WET code.
    // My only excuse is that I had to learn an EXTREMELY COMPLEX library, and make TWO rooms in less than 48 hours.
    // So there you have it, enjoy!

    // This updates the text in the Dialogue that is not part of aframe but will overlay it
    updateHTMLDialogText: function( input ){
      var title   = document.querySelector(".dialogue__headline");
      var content = document.querySelector(".dialogue__content");
      title.innerHTML = dialogueInformation[input].title;
      content.innerHTML = dialogueInformation[input].content;
    },

    // this resets all animatinos, except the one current clicked
    // Checks which animation was called, and force-closes all others (calls it with `true`)
    closeAllOthers: function( input ){
      if(input != 'desk_drawer')
        _allCustomAnimationsHelper.desk_drawer(true);
      if(input != 'cooler_drawer')
        _allCustomAnimationsHelper.cooler_drawer(true);
      if(input != 'curtain')
        _allCustomAnimationsHelper.curtain(true);
      if(input != 'charging')
        _allCustomAnimationsHelper.charging(true);
      if(input != 'connectivity')
        _allCustomAnimationsHelper.connectivity(true);
      if(input != 'bluetooth')
        _allCustomAnimationsHelper.bluetooth(true);
      if(input != 'television')
        _allCustomAnimationsHelper.television(true);
      if(input != 'headboard')
        _allCustomAnimationsHelper.headboard(true);
      if(input != 'wireless')
        _allCustomAnimationsHelper.wireless(true);
      if(input != 'curtain_outside')
        _allCustomAnimationsHelper.curtain_outside(true);
      if(input != 'bluetooth_outside')
        _allCustomAnimationsHelper.bluetooth_outside(true);
      if(input != 'headboard_outside')
        _allCustomAnimationsHelper.headboard_outside(true);
      if(input != 'clothes_drawer_outside')
        _allCustomAnimationsHelper.clothes_drawer_outside(true);
      if(input != 'lighting_outside')
        _allCustomAnimationsHelper.lighting_outside(true);
    },


    clothes_drawer_outside: function( forceClose ){
      var drawer   = document.getElementById("clothes-drawer");
      var drawer_2 = document.getElementById("clothes-drawer-2");
      var poi      = document.getElementById("clothes-drawer-poi");

      if(drawer){

        // opening animation and dialogue activation
        var _set = function(){
          drawer.setAttribute("animation", "property: position; to: -8.25 -8.824 4.917; delay: 100; dur: 500; easing: easeOutQuad; loop: false");
          drawer_2.setAttribute("animation", "property: position; to: 0.15 0 -5.141; dur: 610; easing: easeOutQuad; loop: false");
          drawer.classList.add('this--open');
          poi.setAttribute("visible", "false");

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 200);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.setAttribute("animation", "property: position; to: -9.679 -8.824 4.917; dur: 500; easing: easeOutQuad; loop: false");
          drawer_2.setAttribute("animation", "property: position; to: 0 0 -5.141; dur: 500; easing: easeOutQuad; loop: false");
          drawer.classList.remove('this--open');
          poi.setAttribute("visible", "true");

        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    curtain_outside: function( forceClose ){
      var drawer   = document.getElementById("curtain_outside");
      var poi      = document.getElementById("curtain_outside-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.setAttribute("animation", "property: position; to: -5.834 0.178 0.529; dur: 500; easing: easeOutQuad; loop: false");
          drawer.setAttribute("animation__2", "property: scale; to: 1.66 1 1; dur: 500; easing: easeOutQuad; loop: false");
          drawer.classList.add('this--open');
          poi.setAttribute("visible", "false");

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 200);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.setAttribute("animation", "property: position; to: -5.834 0.178 -1.029; dur: 500; easing: easeOutQuad; loop: false");
          drawer.setAttribute("animation__2", "property: scale; to: 1 1 1; dur: 500; easing: easeOutQuad; loop: false");
          drawer.classList.remove('this--open');
          poi.setAttribute("visible", "true");
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    bluetooth_outside: function( forceClose ){
      var drawer   = document.getElementById("bluetooth");
      var poi      = document.getElementById("bluetooth-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.classList.add('this--open');

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 20);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.classList.remove('this--open');
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    lighting_outside: function( forceClose ){
      var drawer   = document.getElementById("lighting");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.classList.add('this--open');

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 20);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.classList.remove('this--open');
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    headboard_outside: function( forceClose ){
      var drawer   = document.getElementById("headboard_outside");
      var poi      = document.getElementById("headboard_outside-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.classList.add('this--open');

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 20);    };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.classList.remove('this--open');
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },


    desk_drawer: function( forceClose ){
      var drawer   = document.getElementById("desk-drawer");
      var poi      = document.getElementById("desk-drawer-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.setAttribute("animation", "property: position; to: 6 -4.99191 0.125; dur: 500; easing: easeOutQuad; loop: false");
          drawer.classList.add('this--open');
          poi.setAttribute("visible", "false");

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 200);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.setAttribute("animation", "property: position; to: 8.77143 -4.99191 0.125; dur: 500; easing: easeOutQuad; loop: false");
          drawer.classList.remove('this--open');
          poi.setAttribute("visible", "true");
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    cooler_drawer: function( forceClose ){
      var drawer   = document.getElementById("cooler-drawer");
      var poi      = document.getElementById("cooler-drawer-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.setAttribute("animation", "property: position; to: 7 -5.363 8.117; dur: 500; easing: easeOutQuad; loop: false");
          drawer.classList.add('this--open');
          poi.setAttribute("visible", "false");

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 200);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.setAttribute("animation", "property: position; to: 8.727 -5.363 8.117; dur: 500; easing: easeOutQuad; loop: false");
          drawer.classList.remove('this--open');
          poi.setAttribute("visible", "true");
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    curtain: function( forceClose ){
      var drawer   = document.getElementById("curtain");
      var poi      = document.getElementById("curtain-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.setAttribute("animation", "property: position; to: 1 0.463 11.643; dur: 500; easing: easeOutQuad; loop: false");
          drawer.setAttribute("animation__2", "property: scale; to: 1.33 1 1; dur: 500; easing: easeOutQuad; loop: false");
          drawer.classList.add('this--open');
          poi.setAttribute("visible", "false");

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 200);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.setAttribute("animation", "property: position; to: 3.646 0.463 11.643; dur: 500; easing: easeOutQuad; loop: false");
          drawer.setAttribute("animation__2", "property: scale; to: 1 1 1; dur: 500; easing: easeOutQuad; loop: false");
          drawer.classList.remove('this--open');
          poi.setAttribute("visible", "true");
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    bluetooth: function( forceClose ){
      var drawer   = document.getElementById("bluetooth");
      var poi      = document.getElementById("bluetooth-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.classList.add('this--open');

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 20);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.classList.remove('this--open');
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    headboard: function( forceClose ){
      var drawer   = document.getElementById("headboard");
      var poi      = document.getElementById("headboard-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.classList.add('this--open');

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 20);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.classList.remove('this--open');
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    charging: function( forceClose ){
      var drawer   = document.getElementById("charging");
      var poi      = document.getElementById("charging-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.classList.add('this--open');

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 20);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.classList.remove('this--open');

        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    wireless: function( forceClose ){
      var drawer   = document.getElementById("wireless");
      var poi      = document.getElementById("wireless-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.classList.add('this--open');

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 20);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.classList.remove('this--open');

        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    connectivity: function( forceClose ){
      var drawer   = document.getElementById("connectivity");
      var poi      = document.getElementById("connectivity-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.classList.add('this--open');

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 20);
        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.classList.remove('this--open');

        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },

    television: function( forceClose ){
      var drawer   = document.getElementById("television");
      var drawer_2 = document.getElementById("television-appletv");
      var poi      = document.getElementById("television-poi");

      if(drawer){
        // opening animation and dialogue activation
        var _set = function(){
          drawer.classList.add('this--open');
          drawer.setAttribute("animation", "property: position; to: 10.265 2.459 -0.12; dur: 500; easing: easeOutQuad; loop: false");
          drawer_2.setAttribute("animation", "property: position; to: 0 -5 1; dur: 500; easing: easeOutQuad; loop: false");
          drawer_2.setAttribute("animation__2", "property: material.opacity; from: 0; to: 0.66; dur: 350;");
          poi.setAttribute("visible", "false");

          setTimeout(function( ){
            toggleDialoge( drawer.getAttribute('animation-click-handler') );
          }, 200);

        };

        // hides dialoge and resets animation
        var _unset = function(){
          drawer.classList.remove('this--open');
          drawer.setAttribute("animation", "property: position; to: 11.16747 1.936 0.12; dur: 500; easing: easeOutQuad; loop: false");
          drawer_2.setAttribute("animation", "property: position; to: 0 -3 -2; dur: 500; easing: easeOutQuad; loop: false");
          drawer_2.setAttribute("animation__2", "property: material.opacity; from: 0.66; to: 0; dur: 350;");
          poi.setAttribute("visible", "true");
        };

        // if we received the request to force-close
        if( forceClose ){
          _unset();
        }
        // otherwise proceed with regular logic
        else{
          if( !drawer.classList.contains('this--open') ){
            _set();
          }else{
            _unset();
          }
        }
      }
    },
  };



  /**
   * Not Aframe Related, hides and shows the dialog
   * This is a public Method, and being returned to be used elsewhere
   */
  var toggleDialoge = function( input ){
    if( document.querySelector(".dialogue").classList.contains('this--visible') ){
      document.querySelector(".dialogue").classList.remove('this--visible');
      // also reset all animations
      _allCustomAnimationsHelper.closeAllOthers( false );
    }else{
      document.querySelector(".dialogue").classList.add('this--visible');
    }
    // sorry buddy, you were nice too
    // document.querySelector(".dialogue").classList.toggle('this--visible');
  };



  /* * * * * * * * * * * * AFRAME COMPONENT EXTENSIONS * * * * * * * * * * * * * */



  /**
   * Switches Rooms, which right now is switching html files,
   * because I ran out of time to program them into a single application
   */
  AFRAME.registerComponent('framechange-click-handler', {
    init: function () {

      this.el.addEventListener('mousedown', function () {
        var fileTraget = this.getAttribute('framechange-click-handler')
        var camera            = document.getElementById('camera');
        var frameBlendOverlay = document.querySelector('.frame-blend-overlay');

        camera.setAttribute("animation", "property: camera.zoom; from: 0.8; to: 2; dur: 350;");
        frameBlendOverlay.classList.add('this--visible');

        setTimeout(function(){
          window.location.href = fileTraget;
        }, 175);

      }); // end addEventListener mousedown
    } // end init
  });



  /**
   * If an animation-click-handler is clicked,
   * run the animation with that attribute's name
   * reset all others with that name
   * and update the dialogue in case it gets clickeded
   */
  AFRAME.registerComponent('animation-click-handler', {
    init: function () {

      // this.el.addEventListener('mouseenter', function () {
        // not used
      // }); // end addEventListener mouseenter


      this.el.addEventListener('mousedown', function () {

        // calls the animation with the name that was passed from the
        _allCustomAnimationsHelper[ this.getAttribute('animation-click-handler') ]();
        _allCustomAnimationsHelper.closeAllOthers( this.getAttribute('animation-click-handler') );
        _allCustomAnimationsHelper.updateHTMLDialogText( this.getAttribute('animation-click-handler') );

      }); // end addEventListener mousedown
    } // end init
  });



  /**
   * Helper function for the Custom Desktop size component defined below
   * Allows for different geometry (ie POI size) on Desktop
   */
  var _handle_desktop_geometry = function( passed_el ){
    // caches the mobile and desktop geometroies
    var desktop_geometry = passed_el.getAttribute('desktop-geometry');
    var regular_geometry = passed_el.getAttribute('geometry');

    // gets window width
    var window_width = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;

    // if a desktop style is detected, apply the desktop geometry
    if( window_width >= 768 ){
      passed_el.setAttribute('geometry', desktop_geometry);
    }else{
      passed_el.setAttribute('geometry', regular_geometry);
    }
  };



  /**
   * This custom component allows for a different size POI on a certain
   * screen size (defined in the helper function above)
   * That way we can have larger icons on mobile than on desktop,
   * or something similar!
   */
  AFRAME.registerComponent('desktop-geometry', {
    schema: {
      radius: {type: 'string', default: ''},
      primitive: {type: 'string', default: ''},
    },
    init: function () {
      _handle_desktop_geometry( this.el );
    }
  });



  /**
   * This custom Component is responsible for allowing the use
   * of transparent PNGs in images with the ability to see through the items
   */
  AFRAME.registerComponent('alpha-test', {
    dependencies: ['material'],
    init: function () {
      this.el.getObject3D('mesh').material.alphaTest = 0.5;
    }
  });



  /**
   * Any Element with the shadow-material will not be visible,
   * but WILL catch a shadow.
   * Used for matte-boxing!
   */
  AFRAME.registerComponent('shadow-material', {
    init: function(){
      let el = this.el;
      let self = this;
      let mesh = el.getObject3D('mesh');
      if (!mesh){return;}
      mesh.material = new THREE.ShadowMaterial();
      mesh.material.opacity = 0.015;
    }
  });



  /**
   * Helper function that assits in
   * zooming with the mousewheel and pinch to zoom
   */
  var _cameraZoomAdjustment = function( modifier ){

    // fetches the camera and its original `camera`` attribute
    var camera = document.getElementById("camera");
    var initialCameraConfig = camera.getAttribute('camera');

    // modifies the camera attribute by the zoom factor
    // and writes it back to the camer
    initialCameraConfig.zoom = initialCameraConfig.zoom + modifier;

    if( initialCameraConfig.zoom > 0.33 && initialCameraConfig.zoom < 3 ){
      camera.setAttribute('camera', initialCameraConfig);
    }
  };



  /**
   * Determins if scrolled forward or backward
   * scroll listening code below adapted from
   * https://www.sitepoint.com/html5-javascript-mouse-wheel/
   */
  function _mouseWheelHandler(e) {
    // cross-browser wheel delta
    var e = window.event || e; // old IE support
    var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));

    // adjusts the camera zoom by the delta,
    // either + or - 1
    _cameraZoomAdjustment( delta*0.01 );

    return false;
  }



  /**
   * cross-browser scroll listeners
   */
  if (document.addEventListener) {
    // IE9, Chrome, Safari, Opera
    document.addEventListener("mousewheel", _mouseWheelHandler, false);
    // Firefox
    document.addEventListener("DOMMouseScroll", _mouseWheelHandler, false);
  }
  // IE 6/7/8
  else document.attachEvent("onmousewheel", _mouseWheelHandler);



  /**
   * pinch to zoom end event
   */
  document.addEventListener('gestureend', function(e) {
    if (e.scale < 1.0) {
      // User moved fingers closer together
      // alert('zoom out');
      _cameraZoomAdjustment( -0.15 );

    } else if (e.scale > 1.0) {
      // User moved fingers further apart
      // alert('zoom in');
      _cameraZoomAdjustment( 0.15 );
    }
  }, false);



  /**
   * pinch to zoom change event
   */
  document.addEventListener('gesturechange', function(e) {
    // 1-e.scale, because everything smaller than one should be treated as negaive
    // then the whole thing is revered again, and made smaller and fed to the same
    _cameraZoomAdjustment( -( (1-e.scale)*0.1) );
  }, false);


  /**
   * Executes all the code that needs to run right away
   */
  var init = function(){

  };


 /**
  * Any JavaScript needed outside this object
  * is returned as a public method
  */
  return{
    toggleDialoge: toggleDialoge
  };

})();


