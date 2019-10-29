function submitFormData() {
  let user_id = $("#userList").val();

  $.post("submit.php", {
      user_id: user_id
    },
    function (data) {
      $('#posts').html(data);
    });
}

function editPost() {
  // Replace tags with text inputs using AJAX
  let post_title = $("#post_title").val();
  let post_subtitle = $("#post_subtitle").val();
  let post_text = $("#post_text").val();

  $("#post_title").remove();

  var edit_title = document.createElement("input");
  edit_title.setAttribute("type", "text");
  edit_title.setAttribute("value", post_title);
  edit_title.setAttribute("id", "post_title");
  $("#post_div").prepend(edit_title);
}

function editComment() {



}