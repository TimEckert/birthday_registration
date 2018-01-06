// ----- Variables -----
var timesClicked = 0;

// ----- Password Page -----
function DontHavePassword ()
{
  if (timesClicked == 0)
  {
    $("#tooltip").css('display', 'block');;
    $("#btn_tooltip").html ("I still don't have a clue");
    timesClicked++;
  }
  else if (timesClicked == 1)
  {
    $("#tooltip").html ("<p>Gosh, just try anything really.</p>");
    timesClicked++;
  }
  else if (timesClicked == 2)
    $("#tooltip").html ("<p>Gosh, just try <strong>anything</strong> really.</p>");
}

function PasswordCheck ()
{
  var input = $("#passwordInput").val().length;

  if (input >= 2)
        window.location.href = "reg.html";
}

// ----- Registration Page -----
// $(".checkbox").change(function() {
//     if(this.checked) {
//         //Do stuff
//     }
// });
