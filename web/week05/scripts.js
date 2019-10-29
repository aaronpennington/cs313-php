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
  let post_title = $("#post_title").text();
  let post_subtitle = $("#post_subtitle").text();
  let post_text = $("#post_text").text();

  $("#post_title").remove();
  $("#post_subtitle").remove();
  $("#post_text").remove();

  var edit_title = document.createElement("input");
  edit_title.setAttribute("type", "text");
  edit_title.setAttribute("value", post_title);
  edit_title.setAttribute("id", "post_title");
  $("#post_div").append(edit_title);

  var label_title = document.createElement("label");
  label_title.setAttribute("for", "post_title");
  label_title.setAttribute("value", "Title: ");
  $("#post_div").prepend(label_title);

  var edit_subtitle = document.createElement("input");
  edit_subtitle.setAttribute("type", "text");
  edit_subtitle.setAttribute("value", post_subtitle);
  edit_subtitle.setAttribute("id", "post_subtitle");
  $("#post_div").append(edit_subtitle);

  var edit_text = document.createElement("textarea");
  edit_text.setText
  edit_text.setAttribute("id", "post_text");
  edit_text.setAttribute("value", post_text);
  edit_text.setAttribute("rows", "10");
  edit_text.setAttribute("cols", "75");
  $("#post_div").append(edit_text);

}

function editComment() {



}