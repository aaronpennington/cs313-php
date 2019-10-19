function submitFormData() {
  var user_id = $("#userList").val();
  $.post("submit.php", {
      user_id: user_id
    },
    function (data) {
      $('#posts').html(data);
    });
}