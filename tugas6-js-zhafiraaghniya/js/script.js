$("document").ready(() => {
  $("img").css({ cursor: "pointer", "border-radius": "1rem" });
  $(".dummy-1").click(() => {
    $(".dummy-1").fadeOut("slow");
  });
  $(".dummy-2").click(() => {
    $(".dummy-2").fadeOut("slow");
  });
  $(".dummy-3").click(() => {
    $(".dummy-3").fadeOut("slow");
  });
});
