// ----- Variables -----
var timesClicked = 0;
var formProgress = 0;   // 0 = no input yet, 4 = conpleted, needs to submit
var summaryElements = [];
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
    $("#tooltip").html ("<p>Gosh! Just try <strong>anything</strong> really.</p>");
}

function PasswordCheck ()
{
  var input = $("#passwordInput").val().length;

  if (input >= 2)
        window.location.href = "reg.html";
}

// ----- Registration Page -----
function CheckboxEvent(checkboxNo)
{
  UpdateSummary(2, "in company, I will bring someone");

  // Revealer
  var level = 2;
  if (checkboxNo >=2 && checkboxNo <= 5)
    level = 3;
  else if (checkboxNo > 5)
    level = 4;
  RevealSummary(level);
}

function DisplayName ()
{
    if (formProgress == 0)
    {
      formProgress = 1;
      RevealSummary (formProgress);
    }

    var x = $("input[name=name]").val();
    $("#response1 span").html(x);
}

function RevealSummary (level)
{
  summaryElements.push ( $("#response1"), $("#response2"), $("#response3"), $("#response4"));

  level = (level > summaryElements.length) ? summaryElements.length : level;
  for (var i = 0; i < level; i++)
    summaryElements[i].css('display', 'block');
}

function UpdateSummary (responsePart, text)
{
  var element = "#response" + responsePart + " span";
  $(element).html(text);
}
