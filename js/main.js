var timesClicked = 0;

function DontHavePassword ()
{
  if (timesClicked == 0)
  {
    document.getElementById("tooltip").style.display = "block";
    document.getElementById("btn_tooltip").innerHTML = "I still don't have a clue";
    timesClicked++;
  }
  else if (timesClicked == 1)
  {
    document.getElementById("tooltip").innerHTML = "<p>Gosh, just try anything really.</p>";
    timesClicked++;
  }
  else if (timesClicked == 2)
      document.getElementById("tooltip").innerHTML = "<p>Gosh, just try <strong>anything</strong> really.</p>";
}

function PasswordCheck ()
{
  var input = document.getElementById("passwordInput").value.length;

  if (input >= 2)
        window.location.href = "reg.html";
}
