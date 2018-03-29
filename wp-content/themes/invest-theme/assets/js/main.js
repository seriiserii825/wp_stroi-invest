"use strict";

$(function () {
  /*
      https://www.jqueryscript.net/animation/Smooth-Mouse-Wheel-Scrolling-Plugin-With-jQuery-easeScroll.html
      ===========================*/
  $("html").easeScroll({
    frameRate: 60,
    animationTime: 1000,
    stepSize: 90,
    pulseAlgorithm: 1,
    pulseScale: 8,
    pulseNormalize: 1,
    accelerationDelta: 20,
    accelerationMax: 1,
    keyboardSupport: true,
    arrowScroll: 50,
    touchpadSupport: true,
    fixedBackground: true
  });

  /*slick-carousel directions
  =======================================*/
  $('#js-directions').slick({
    arrows: false,
    dots: true,
    slidesToScroll: 2,
    slidesToShow: 4
  });
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1haW4uanMiXSwibmFtZXMiOlsiJCIsImVhc2VTY3JvbGwiLCJmcmFtZVJhdGUiLCJhbmltYXRpb25UaW1lIiwic3RlcFNpemUiLCJwdWxzZUFsZ29yaXRobSIsInB1bHNlU2NhbGUiLCJwdWxzZU5vcm1hbGl6ZSIsImFjY2VsZXJhdGlvbkRlbHRhIiwiYWNjZWxlcmF0aW9uTWF4Iiwia2V5Ym9hcmRTdXBwb3J0IiwiYXJyb3dTY3JvbGwiLCJ0b3VjaHBhZFN1cHBvcnQiLCJmaXhlZEJhY2tncm91bmQiLCJzbGljayIsImFycm93cyIsImRvdHMiLCJzbGlkZXNUb1Njcm9sbCIsInNsaWRlc1RvU2hvdyJdLCJtYXBwaW5ncyI6Ijs7QUFBQUEsRUFBRSxZQUFZO0FBQ1o7OztBQUdBQSxJQUFFLE1BQUYsRUFBVUMsVUFBVixDQUFxQjtBQUNuQkMsZUFBVyxFQURRO0FBRW5CQyxtQkFBZSxJQUZJO0FBR25CQyxjQUFVLEVBSFM7QUFJbkJDLG9CQUFnQixDQUpHO0FBS25CQyxnQkFBWSxDQUxPO0FBTW5CQyxvQkFBZ0IsQ0FORztBQU9uQkMsdUJBQW1CLEVBUEE7QUFRbkJDLHFCQUFpQixDQVJFO0FBU25CQyxxQkFBaUIsSUFURTtBQVVuQkMsaUJBQWEsRUFWTTtBQVduQkMscUJBQWlCLElBWEU7QUFZbkJDLHFCQUFpQjtBQVpFLEdBQXJCOztBQWVBOztBQUVBYixJQUFFLGdCQUFGLEVBQW9CYyxLQUFwQixDQUEwQjtBQUN4QkMsWUFBUSxLQURnQjtBQUV4QkMsVUFBTSxJQUZrQjtBQUd4QkMsb0JBQWdCLENBSFE7QUFJeEJDLGtCQUFjO0FBSlUsR0FBMUI7QUFRRCxDQTdCRCIsImZpbGUiOiJtYWluLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbiAoKSB7XG4gIC8qXG4gICAgICBodHRwczovL3d3dy5qcXVlcnlzY3JpcHQubmV0L2FuaW1hdGlvbi9TbW9vdGgtTW91c2UtV2hlZWwtU2Nyb2xsaW5nLVBsdWdpbi1XaXRoLWpRdWVyeS1lYXNlU2Nyb2xsLmh0bWxcbiAgICAgID09PT09PT09PT09PT09PT09PT09PT09PT09PSovXG4gICQoXCJodG1sXCIpLmVhc2VTY3JvbGwoe1xuICAgIGZyYW1lUmF0ZTogNjAsXG4gICAgYW5pbWF0aW9uVGltZTogMTAwMCxcbiAgICBzdGVwU2l6ZTogOTAsXG4gICAgcHVsc2VBbGdvcml0aG06IDEsXG4gICAgcHVsc2VTY2FsZTogOCxcbiAgICBwdWxzZU5vcm1hbGl6ZTogMSxcbiAgICBhY2NlbGVyYXRpb25EZWx0YTogMjAsXG4gICAgYWNjZWxlcmF0aW9uTWF4OiAxLFxuICAgIGtleWJvYXJkU3VwcG9ydDogdHJ1ZSxcbiAgICBhcnJvd1Njcm9sbDogNTAsXG4gICAgdG91Y2hwYWRTdXBwb3J0OiB0cnVlLFxuICAgIGZpeGVkQmFja2dyb3VuZDogdHJ1ZVxuICB9KTtcblxuICAvKnNsaWNrLWNhcm91c2VsIGRpcmVjdGlvbnNcbiAgPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09Ki8gXG4gICQoJyNqcy1kaXJlY3Rpb25zJykuc2xpY2soe1xuICAgIGFycm93czogZmFsc2UsXG4gICAgZG90czogdHJ1ZSxcbiAgICBzbGlkZXNUb1Njcm9sbDogMixcbiAgICBzbGlkZXNUb1Nob3c6IDRcbiAgfSk7XG5cblxufSk7Il19
