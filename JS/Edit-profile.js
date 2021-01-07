$("#Change_Email").on("click", function () {
  $(".target").empty();
  $(".target").load("./template/change-email.php");
});

$("#Change_Profile_Picture").on("click", function () {
  $(".target").empty();
  $(".target").load("./template/Change_Profile_Picture.php");
});

$("#password").on("click", function () {
  $(".target").empty();
  $(".target").load("./template/change-password.php");
});

$("#general-infos").on("click", function () {
  $(".target").empty();
  $(".target").load("./template/general-infos.php");
});
