var allCustomAnimationsHelper = {

  desk_drawer: function(){

    var drawer   = document.getElementById("desk-drawer");
    var dialogue = document.getElementById("desk-drawer-dialog");

    if( !drawer.classList.contains('this--open') ){
      // console.log('not open')
      drawer.setAttribute("animation", "property: position; to: 6 -4.99191 0.125; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.add('this--open');
      dialogue.setAttribute("visible", "true");

    }else{
      // console.log('is open')
      drawer.setAttribute("animation", "property: position; to: 8.77143 -4.99191 0.125; dur: 500; easing: easeOutQuad; loop: false");
      drawer.classList.remove('this--open');
      dialogue.setAttribute("visible", "false");
    }
  }

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
