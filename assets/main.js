// I would like to apologize for this horribly oranized, super WET code.
// My only excuse is that I had to learn an EXTREMELY COMPLEX library, and make TWO rooms in less than 48 hours.
// So there you have it, enjoy!

var allCustomAnimationsHelper = {

  updateHTMLDialogText: function( input ){
    var title   = document.querySelector(".dialogue__headline");
    var content = document.querySelector(".dialogue__content");
    title.innerHTML = dialogueInformation[input].title;
    content.innerHTML = dialogueInformation[input].content;
  },

  closeAllOthers: function( input ){
    //Checks which animation was called, and foce-closes all others
    if(input != 'desk_drawer')
      allCustomAnimationsHelper.desk_drawer(true);
    if(input != 'cooler_drawer')
      allCustomAnimationsHelper.cooler_drawer(true);
    if(input != 'curtain')
      allCustomAnimationsHelper.curtain(true);
    if(input != 'iphone')
      allCustomAnimationsHelper.iphone(true);
    if(input != 'ipad')
      allCustomAnimationsHelper.ipad(true);
    if(input != 'headphones')
      allCustomAnimationsHelper.headphones(true);
    if(input != 'television')
      allCustomAnimationsHelper.television(true);
    if(input != 'headboard')
      allCustomAnimationsHelper.headboard(true);
    if(input != 'wireless')
      allCustomAnimationsHelper.wireless(true);
  },



  // desk_drawer_old: function( forceClose ){
  //   var drawer   = document.getElementById("desk-drawer");
  //   var dialogue = document.getElementById("desk-drawer-dialog");
  //   var poi      = document.getElementById("desk-drawer-poi");
  //   var internal = document.querySelectorAll(".desk-drawer-dialog-internal");

  //   // opening animation and dialogue activation
  //   var _set = function(){
  //     drawer.setAttribute("animation", "property: position; to: 6 -4.99191 0.125; dur: 500; easing: easeOutQuad; loop: false");
  //     drawer.classList.add('this--open');
  //     dialogue.setAttribute("visible", "true");
  //     dialogue.setAttribute("animation", "property: material.opacity; from: 0; to: 0.85; dur: 350;");
  //     poi.setAttribute("visible", "false");

  //     setTimeout(function( ){
  //       toggleDialoge( drawer.getAttribute('dialog-more-button') );
  //     }, 200);

  //     for(var i=0; i<internal.length; i++ )
  //       internal[i].classList.add('clickable')
  //   };

  //   // hides dialoge and resets animation
  //   var _unset = function(){
  //     drawer.setAttribute("animation", "property: position; to: 8.77143 -4.99191 0.125; dur: 500; easing: easeOutQuad; loop: false");
  //     drawer.classList.remove('this--open');
  //     dialogue.setAttribute("visible", "false");
  //     dialogue.setAttribute("animation", "property: material.opacity; from: 1; to: 0; dur: 350;");
  //     poi.setAttribute("visible", "true");

  //     for(var i=0; i<internal.length; i++ )
  //       internal[i].classList.remove('clickable');
  //   };

  //   // if we received the request to force-close
  //   if( forceClose ){
  //     _unset();
  //   }
  //   // otherwise proceed with regular logic
  //   else{
  //     if( !drawer.classList.contains('this--open') ){
  //       _set();
  //     }else{
  //       _unset();
  //     }
  //   }
  // },

  desk_drawer: function( forceClose ){
    var drawer   = document.getElementById("desk-drawer");
    var poi      = document.getElementById("desk-drawer-poi");

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
  },

  cooler_drawer: function( forceClose ){
    var drawer   = document.getElementById("cooler-drawer");
    var poi      = document.getElementById("cooler-drawer-poi");

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
  },

  curtain: function( forceClose ){
    var drawer   = document.getElementById("curtain");
    var poi      = document.getElementById("curtain-poi");

    // opening animation and dialogue activation
    var _set = function(){
      // console.log('not open')
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
  },

  headphones: function( forceClose ){
    var drawer   = document.getElementById("headphones");
    var poi      = document.getElementById("headphones-poi");

    // opening animation and dialogue activation
    var _set = function(){
      // console.log('not open')
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
  },

  headboard: function( forceClose ){
    var drawer   = document.getElementById("headboard");
    var poi      = document.getElementById("headboard-poi");

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
  },

  iphone: function( forceClose ){
    var drawer   = document.getElementById("iphone");
    var poi      = document.getElementById("iphone-poi");

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
  },

  wireless: function( forceClose ){
    var drawer   = document.getElementById("wireless");
    var poi      = document.getElementById("wireless-poi");

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
  },

  ipad: function( forceClose ){
    var drawer   = document.getElementById("ipad");
    var poi      = document.getElementById("ipad-poi");

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
  },

  television: function( forceClose ){
    var drawer   = document.getElementById("television");
    var drawer_2 = document.getElementById("television-appletv");
    var poi      = document.getElementById("television-poi");

    // opening animation and dialogue activation
    var _set = function(){
      // console.log('not open')
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
  },

};




/**
 * Switches Rooms, which right now is switching html files,
 * because I ran out of time to program them into a single application
 */
AFRAME.registerComponent('framechange-click-handler', {
  init: function () {

    this.el.addEventListener('mouseenter', function () {
      console.log('switch rooms!');
    }); // end addEventListener mouseenter


    this.el.addEventListener('mousedown', function () {
      console.log('click');
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



// No longer used, left for reference
// AFRAME.registerComponent('dialog-more-button', {
//   init: function () {
//     this.el.addEventListener('mousedown', function () {
//       toggleDialoge( this.getAttribute('dialog-more-button') );
//     });
//   }
// });



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
  if( document.querySelector(".dialogue").classList.contains('this--visible') ){
    document.querySelector(".dialogue").classList.remove('this--visible');
    // also reset all animations
    allCustomAnimationsHelper.closeAllOthers( false );
  }else{
    document.querySelector(".dialogue").classList.add('this--visible');
  }
  // sorry buddy, you were nice too
  // document.querySelector(".dialogue").classList.toggle('this--visible');
};


var closerels = document.querySelectorAll(".dialogue__closer");
for(var c=0; c<closerels.length; c++){
  closerels[c].addEventListener('click', function(){
    toggleDialoge();
  });
}
