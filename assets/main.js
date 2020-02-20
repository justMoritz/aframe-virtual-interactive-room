var allCustomAnimationsHelper = {

  closeAllOthers: function( input ){
    //Checks which animation was called, and foce-closes all others
    if(input != 'desk_drawer')
      allCustomAnimationsHelper.desk_drawer(true);
    if(input != 'cooler_drawer')
      allCustomAnimationsHelper.cooler_drawer(true);
    if(input != 'curtain')
      allCustomAnimationsHelper.curtain(true);
  },


  desk_drawer: function( forceClose ){
    var drawer   = document.getElementById("desk-drawer");
    var dialogue = document.getElementById("desk-drawer-dialog");
    var poi      = document.getElementById("desk-drawer-poi");
    var internal = document.querySelectorAll(".desk-drawer-dialog-internal");

    // opening animation and dialogue activation
    var _set = function(){
      drawer.setAttribute("animation", "property: position; to: 6 -4.99191 0.125; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");
      poi.setAttribute("visible", "false");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable')
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.setAttribute("animation", "property: position; to: 8.77143 -4.99191 0.125; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
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

  cooler_drawer: function( forceClose ){
    var drawer   = document.getElementById("cooler-drawer");
    var dialogue = document.getElementById("cooler-drawer-dialog");
    var poi      = document.getElementById("cooler-drawer-poi");
    var internal = document.querySelectorAll(".cooler-drawer-dialog-internal");

    // opening animation and dialogue activation
    var _set = function(){
      drawer.setAttribute("animation", "property: position; to: 7 -5.363 8.117; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");
      poi.setAttribute("visible", "false");

      for(var i=0; i<internal.length; i++ )
        internal[i].classList.add('clickable');
    };

    // hides dialoge and resets animation
    var _unset = function(){
      drawer.setAttribute("animation", "property: position; to: 8.727 -5.363 8.117; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
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





var allCustomAnimationsHandler = function( animationName ){

  console.log( animationName );

  allCustomAnimationsHelper[animationName]();

  // switch( animationName ) {
  // case 'desk-drawer':
  //   // code block
  //   break;
  // case y:
  //   // code block
  //   break;
  // default:
  //   // code bl

};



/**
 * If the deskdrawer element is clicked,
 * expand if not open, close if open
 */
AFRAME.registerComponent('animation-click-handler', {
  init: function () {

    this.el.addEventListener('mousedown', function () {

      console.log('click')

      // calls the animation with the name that was passed from the
      allCustomAnimationsHelper[ this.getAttribute('animation-click-handler') ]();
      allCustomAnimationsHelper.closeAllOthers( this.getAttribute('animation-click-handler') );

    }); // end addEventListener
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
 * Any Element with the shadow-material will not be visible, but WILL catch a shadow
 * used for matte-boxing!
 */
AFRAME.registerComponent('shadow-material', {
  init: function(){
    console.log('shadow-material');
    let el = this.el;
    let self = this;
    let mesh = el.getObject3D('mesh');
    console.log(mesh);
    if (!mesh){return;}
    mesh.material = new THREE.ShadowMaterial();
    mesh.material.opacity = 0.5;
  }
});






var toggleDialoge = function( input ){
  console.log( input );
  document.querySelector(".dialogue").classList.toggle('this--visible');
};



var el = document.querySelector(".dialogue__closer");
console.log(el);
document.querySelector(".dialogue__closer").addEventListener('click', function(){
  toggleDialoge();
});
