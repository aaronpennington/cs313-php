function submitFormData() {
  let user_id = $("#userList").val();

  $.post("submit.php", {
      user_id: user_id
    },
    function (data) {
      $('#posts').html(data);
    });
}

$('#nav').affix({
  offset: {
    top: $('header').height()
  }
});