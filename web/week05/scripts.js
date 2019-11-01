function submitFormData() {
  let user_id = $("#userList").val();

  $.post("submit.php", {
      user_id: user_id
    },
    function (data) {
      $('#posts').html(data);
    });
}

function verifyPassword() {
  var password = $("#password");
  var v_password = $("#verify_password");
  var message = $('#confirm-message');

  //Set the colors we will be using ...
  var good_color = "#66cc66";
  var bad_color = "#ff6666";
  if (password.val() == v_password.val()) {
    v_password.css('background-color', good_color);
    message.css('color', good_color).html("Passwords Match!");
  } else {
    v_password.css('background-color', bad_color);
    message.css('color', bad_color).html("Passwords Do Not Match!");
  }
}

function editPost() {
  // Replace tags with text inputs using AJAX
  var post_title = $("#post_title").text();
  var post_subtitle = $("#post_subtitle").text();
  var post_text = $("#post_text").text();

  $("#post_title").remove();
  $("#post_subtitle").remove();
  $("#post_text").remove();

  var submit_edit_btn = document.createElement("button");
  submit_edit_btn.setAttribute("onclick", "submitEditPost()");
  submit_edit_btn.setAttribute("id", "submit_edit_btn");
  submit_edit_btn.innerHTML = "Submit Changes";
  $("#post_div").prepend(submit_edit_btn);

  var edit_text = document.createElement("textarea");
  edit_text.setAttribute("id", "post_text");
  edit_text.innerHTML = post_text;
  edit_text.setAttribute("rows", "10");
  edit_text.setAttribute("cols", "75");
  $("#post_div").prepend(edit_text);

  var br = document.createElement("br");
  br.setAttribute("id", "edit_br");
  $("#post_div").prepend(br);

  var edit_subtitle = document.createElement("input");
  edit_subtitle.setAttribute("type", "text");
  edit_subtitle.setAttribute("value", post_subtitle);
  edit_subtitle.setAttribute("id", "post_subtitle");
  $("#post_div").prepend(edit_subtitle);

  var br2 = document.createElement("br");
  br2.setAttribute("id", "edit_br");
  $("#post_div").prepend(br2);

  var edit_title = document.createElement("input");
  edit_title.setAttribute("type", "text");
  edit_title.setAttribute("value", post_title);
  edit_title.setAttribute("id", "post_title");
  $("#post_div").prepend(edit_title);

  var label_title = document.createElement("label");
  label_title.setAttribute("for", "post_title");
  label_title.setAttribute("value", "Title: ");
  $("#post_div").append(label_title);

  // add a submit button, labels, and an AJAX call to a php file.
  // the php file, btw, will update the entry in the database with 
  // the new data. :)


}

function submitEditPost() {
  // AJAX call to php file here.
  // php will update database entry.
  var post_title = $("#post_title").val();
  var post_subtitle = $("#post_subtitle").val();
  var post_text = $("#post_text").val();

  console.log(post_title);
  console.log(post_subtitle);
  console.log(post_text);

  $.post("submit_edit_post.php", {
      post_title: post_title,
      post_subtitle: post_subtitle,
      post_text: post_text
    },
    function (data) {
      console.log("Success! Updated database.");
      $("#post_title").remove();
      $("#post_subtitle").remove();
      $("#post_text").remove();
      $("#submit_edit_btn").remove();
      $("#edit_br").remove();

      var new_text = document.createElement("p");
      new_text.setAttribute("id", "post_text");
      new_text.innerHTML = post_text;
      $("#post_div").prepend(new_text);

      var new_subtitle = document.createElement("h3");
      new_subtitle.setAttribute("id", "post_subtitle");
      new_subtitle.innerHTML = post_subtitle;
      $("#post_div").prepend(new_subtitle);

      var new_title = document.createElement("h1");
      new_title.setAttribute("id", "post_title");
      new_title.innerHTML = post_title;
      $("#post_div").prepend(new_title);
    });
}

function editComment() {



}