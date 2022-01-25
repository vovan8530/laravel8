$('.delete').click(function (e) {
  e.preventDefault();

  let url = $(this).data('delete-url');

  $.ajax({
    dataType: 'json',
    type: "DELETE",
    url: url,
    data: {
      '_token': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (response) {
      let id = url.split('/').pop()
      console.log(response)
      $('a[data-element-id="' + id + '"]').parent().css("display", "none");
    },
  });
});