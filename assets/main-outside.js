var allCustomAnimationsHelper = {

  updateHTMLDialogText: function( input ){
    // var title   = document.querySelector(".dialogue__headline");
    // var content = document.querySelector(".dialogue__content");
    // title.innerHTML = dialogueInformation[input].title;
    // content.innerHTML = dialogueInformation[input].content;
  },

  closeAllOthers: function( input ){
    //Checks which animation was called, and foce-closes all others
    // if(input != 'desk_drawer')
    //   allCustomAnimationsHelper.desk_drawer(true);
    // if(input != 'cooler_drawer')
    //   allCustomAnimationsHelper.cooler_drawer(true);
    // if(input != 'curtain')
    //   allCustomAnimationsHelper.curtain(true);
    // if(input != 'iphone')
    //   allCustomAnimationsHelper.iphone(true);
    // if(input != 'ipad')
    //   allCustomAnimationsHelper.ipad(true);
    // if(input != 'headphones')
    //   allCustomAnimationsHelper.headphones(true);
    // if(input != 'television')
    //   allCustomAnimationsHelper.television(true);
    // if(input != 'headboard')
    //   allCustomAnimationsHelper.headboard(true);
  },


  clothes_drawer: function( forceClose ){
    var drawer   = document.getElementById("clothes-drawer");
    var drawer_2 = document.getElementById("clothes-drawer-2");
    var dialogue = document.getElementById("clothes-drawer-dialog");
    var poi      = document.getElementById("clothes-drawer-poi");
    var internal = document.querySelectorAll(".clothes-drawer-dialog-internal");
    // var camera   = document.getElementById('camera');

    // opening animation and dialogue activation
    var _set = function(){
      drawer.setAttribute("animation", "property: position; to: -8.25 -8.824 4.917; delay: 80; dur: 500; easing: easeOutQuad; loop: false");
      drawer_2.setAttribute("animation", "property: position; to: 0.15 0 -5.141; dur: 610; easing: easeOutQuad; loop: false");
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");
      dialogue.setAttribute("animation", "property: material.opacity; from: 0; to: 0.85; dur: 350;");
      poi.setAttribute("visible", "false");
      // camera.setAttribute("look-at", "#clothes-drawer-dialog");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable')
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.setAttribute("animation", "property: position; to: -9.679 -8.824 4.917; dur: 500; easing: easeOutQuad; loop: false");
      drawer_2.setAttribute("animation", "property: position; to: 0 0 -5.141; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
      dialogue.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
      poi.setAttribute("visible", "true");
      // camera.removeAttribute("look-at");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.remove('clickable');
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
  },

  cooler_drawer: function( forceClose ){
    var drawer   = document.getElementById("cooler-drawer");
    var dialogue = document.getElementById("cooler-drawer-dialog");
    // var dialogue_2 = document.getElementById("cooler-drawer-dialog-2");
    var poi      = document.getElementById("cooler-drawer-poi");
    var internal = document.querySelectorAll(".cooler-drawer-dialog-internal");

    // opening animation and dialogue activation
    var _set = function(){
      drawer.setAttribute("animation", "property: position; to: 7 -5.363 8.117; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");
      dialogue.setAttribute("animation", "property: material.opacity; from: 0; to: 0.85; dur: 350;");
      // dialogue_2.setAttribute("visible", "true");
      // dialogue_2.setAttribute("animation", "property: material.opacity; from: 0; to: 1; dur: 450;");
      poi.setAttribute("visible", "false");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable');
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.setAttribute("animation", "property: position; to: 8.727 -5.363 8.117; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
      dialogue.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
      // dialogue_2.setAttribute("visible", "false");
      // dialogue_2.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
      poi.setAttribute("visible", "true");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.remove('clickable');
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
  },

  curtain: function( forceClose ){
    var drawer   = document.getElementById("curtain");
    var dialogue = document.getElementById("curtain-dialog");
    var poi      = document.getElementById("curtain-poi");
    var internal = document.querySelectorAll(".curtain-dialog-internal");

    // opening animation and dialogue activation
    var _set = function(){
      // console.log('not open')
      drawer.setAttribute("animation", "property: position; to: 1 0.463 11.643; dur: 500; easing: easeOutQuad; loop: false");
      drawer.setAttribute("animation__2", "property: scale; to: 1.33 1 1; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");
      dialogue.setAttribute("animation", "property: material.opacity; from: 0; to: 0.85; dur: 350;");
      poi.setAttribute("visible", "false");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable')
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.setAttribute("animation", "property: position; to: 3.646 0.463 11.643; dur: 500; easing: easeOutQuad; loop: false");
      drawer.setAttribute("animation__2", "property: scale; to: 1 1 1; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
      dialogue.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
      poi.setAttribute("visible", "true");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.remove('clickable');
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
  },

  headphones: function( forceClose ){
    var drawer   = document.getElementById("headphones");
    var dialogue = document.getElementById("headphones-dialog");
    var poi      = document.getElementById("headphones-poi");
    var internal = document.querySelectorAll(".headphones-dialog-internal");


    // opening animation and dialogue activation
    var _set = function(){
      // console.log('not open')
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");
      dialogue.setAttribute("animation", "property: material.opacity; from: 0; to: 0.85; dur: 350;");
      // poi.setAttribute("visible", "false");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable')
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
      dialogue.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
      // poi.setAttribute("visible", "true");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.remove('clickable');
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
  },

  headboard: function( forceClose ){
    var drawer   = document.getElementById("headboard");
    var dialogue = document.getElementById("headboard-dialog");
    var poi      = document.getElementById("headboard-poi");
    var internal = document.querySelectorAll(".headboard-dialog-internal");


    // opening animation and dialogue activation
    var _set = function(){
      // console.log('not open')
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");
      dialogue.setAttribute("animation", "property: material.opacity; from: 0; to: 0.85; dur: 350;");
      // poi.setAttribute("visible", "false");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable')
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
      dialogue.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
      // poi.setAttribute("visible", "true");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.remove('clickable');
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
  },

  iphone: function( forceClose ){
    var drawer   = document.getElementById("iphone");
    var dialogue = document.getElementById("iphone-dialog");
    var poi      = document.getElementById("iphone-poi");
    var internal = document.querySelectorAll(".iphone-dialog-internal");
    var camera   = document.getElementById("camera");

 // -0.573 -20.970 -0.0

    // opening animation and dialogue activation
    var _set = function(){
      // console.log('not open')
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");
      dialogue.setAttribute("animation", "property: material.opacity; from: 0; to: 0.85; dur: 350;");
      // poi.setAttribute("visible", "false");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable')
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
      dialogue.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
      // poi.setAttribute("visible", "true");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.remove('clickable');
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
  },

  ipad: function( forceClose ){
    var drawer   = document.getElementById("ipad");
    var dialogue = document.getElementById("ipad-dialog");
    var poi      = document.getElementById("ipad-poi");
    var internal = document.querySelectorAll(".ipad-dialog-internal");


    // opening animation and dialogue activation
    var _set = function(){
      // console.log('not open')
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");
      dialogue.setAttribute("animation", "property: material.opacity; from: 0; to: 0.85; dur: 350;");
      // poi.setAttribute("visible", "false");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable')
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
      dialogue.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
      // poi.setAttribute("visible", "true");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.remove('clickable');
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
  },

  television: function( forceClose ){
    var drawer   = document.getElementById("television");
    var drawer_2 = document.getElementById("television-appletv");
    var dialogue = document.getElementById("television-dialog");
    var poi      = document.getElementById("television-poi");
    var internal = document.querySelectorAll(".television-dialog-internal");


    // opening animation and dialogue activation
    var _set = function(){
      // console.log('not open')
      drawer.classList.add('this--open');
      drawer.setAttribute("animation", "property: position; to: 10.265 2.459 -0.12; dur: 500; easing: easeOutQuad; loop: false");
      drawer_2.setAttribute("animation", "property: position; to: 0 -5 1; dur: 500; easing: easeOutQuad; loop: false");
      drawer_2.setAttribute("animation__2", "property: material.opacity; from: 0; to: 0.66; dur: 350;");
      dialogue.setAttribute("visible", "true");
      dialogue.setAttribute("animation", "property: material.opacity; from: 0; to: 0.85; dur: 350;");
      poi.setAttribute("visible", "false");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable')
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.classList.remove('this--open');
      drawer.setAttribute("animation", "property: position; to: 11.16747 1.936 0.12; dur: 500; easing: easeOutQuad; loop: false");
      drawer_2.setAttribute("animation", "property: position; to: 0 -3 -2; dur: 500; easing: easeOutQuad; loop: false");
      drawer_2.setAttribute("animation__2", "property: material.opacity; from: 0.66; to: 0; dur: 350;");
      dialogue.setAttribute("visible", "false");
      dialogue.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
      poi.setAttribute("visible", "true");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.remove('clickable');
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
  },

};






/**
 * If an animation-click-handler is clicked,
 * run the animation with that attribute's name
 * reset all others with that name
 * and update the dialogue in case it gets clickeded
 */
AFRAME.registerComponent('animation-click-handler', {
  init: function () {

    this.el.addEventListener('mouseenter', function () {
      console.log('droidbishop');
    }); // end addEventListener mouseenter


    this.el.addEventListener('mousedown', function () {
      console.log('click');

      // calls the animation with the name that was passed from the
      allCustomAnimationsHelper[ this.getAttribute('animation-click-handler') ]();
      allCustomAnimationsHelper.closeAllOthers( this.getAttribute('animation-click-handler') );
      allCustomAnimationsHelper.updateHTMLDialogText( this.getAttribute('animation-click-handler') );

    }); // end addEventListener mousedown
  } // end init
});



AFRAME.registerComponent('dialog-more-button', {
  init: function () {
    this.el.addEventListener('mousedown', function () {
      toggleDialoge( this.getAttribute('dialog-more-button') );
    });
  }
});



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
    mesh.material.opacity = 0.25;
  }
});


// hides and shows the dialog
var toggleDialoge = function( input ){
  document.querySelector(".dialogue").classList.toggle('this--visible');
};


var el = document.querySelector(".dialogue__closer");
console.log(el);
document.querySelector(".dialogue__closer").addEventListener('click', function(){
  toggleDialoge();
});
