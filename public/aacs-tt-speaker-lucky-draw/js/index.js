$(function(){
  var tms = ["Lyhour","yifei","xiaoming","jinsong","aifen","leslie","beulah","harley","joe","haifeng","yuanwei","renxing","richard","jinrong","vivian","chengsi","james","vicky"];
  var candidates = [];
  var animate = false;
  var guestsum = 0;
  var started = true;
  tms = tms.sort();
  for (var i = 0; i < tms.length; i++) {
    $("#tms").append("<div class='tm tm_selected'>" + tms[i] + "</div>");
  };
  $("#guests_add").click(function(){
    guestsum++;
    $("#guests").append("<div class='tm tm_selected'>guest" + guestsum + "</div>");
  })
  $(".tm").click(function(){$(this).toggleClass("tm_selected")});
  $("#draw").click(function(){draw();});
  $("#start").click(function(){start();});
  $(document).on("keydown",function(){started?draw():start();});

  function draw(){
    candidates = [];
    var length = $(".tm_selected").length;
    for (var i = 0; i < length; i++) {
      var dude = $(".tm_selected").eq(i).html();
      candidates.push(dude);
    };
    cancelAnimationFrame(animate);
    var index = Math.floor(Math.random()*candidates.length);
    $("#result").html(candidates[index]);
    $(".tm_selected").eq(index).removeClass("tm_selected");
    $("#draw").hide();
    $("#start").show();
    started = false;
  };
  function start(){
    slots();
    $("#start").hide();
    $("#draw").show();
    started = true;
  };
  function slots(){
    $("#result").html(tms[Math.floor(Math.random()*(tms.length-1))]);
    animate = requestAnimationFrame(slots);
  };
  slots();
})