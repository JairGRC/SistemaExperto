document.addEventListener("DOMContentLoaded", function () {
  var select1 = document.getElementById("p1");
  var select2 = document.getElementById("p2");
  var select3 = document.getElementById("p3");
  var Optionp1;
  var Optionp1;
  var Optionp1;
  select1.addEventListener("change", function () {
    Optionp1 = this.options[select1.selectedIndex];
    
  });
  select2.addEventListener("change", function () {
    Optionp2 = this.options[select2.selectedIndex];
  });

  select3.addEventListener("change", function () {
    Optionp3 = this.options[select3.selectedIndex];
    if (
      (Optionp1.value == "no" &&
        Optionp2.value == "no" &&
        Optionp3.value == "no") ||
      (Optionp1.value == "no" &&
        Optionp2.value == "no" &&
        Optionp3.value == "si") ||
      (Optionp1.value == "no" &&
        Optionp2.value == "si" &&
        Optionp3.value == "si") ||
      (Optionp1.value == "si" &&
        Optionp2.value == "no" &&
        Optionp3.value == "no") ||
      (Optionp1.value == "si" &&
        Optionp2.value == "si" &&
        Optionp3.value == "no") ||
      (Optionp1.value == "no" &&
        Optionp2.value == "si" &&
        Optionp3.value == "no")
    ) {
      document.getElementById("Ingeniero_Agricola").style.display = "none";
      document.getElementById("Ingeniero_Zooctenista").style.display = "block";
    } else if (
      Optionp1.value == "si" &&
      Optionp2.value == "si" &&
      Optionp3.value == "si"
    ) {
        document.getElementById("enviar").style.display = "block";
    }
  });
});

