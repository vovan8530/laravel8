/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/delete-item.js ***!
  \*************************************/
$('.delete').click(function (e) {
  e.preventDefault();
  var url = $(this).data('delete-url');
  $.ajax({
    dataType: 'json',
    type: "DELETE",
    url: url,
    data: {
      '_token': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(response) {
      var id = url.split('/').pop();
      console.log(response);
      $('a[data-element-id="' + id + '"]').parent().css("display", "none");
    }
  });
});
/******/ })()
;