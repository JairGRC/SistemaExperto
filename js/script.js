document.addEventListener("DOMContentLoaded", function () {
  
  var select1 = document.getElementById("p1");
  var select2 = document.getElementById("p2");
  var select3 = document.getElementById("p3");
  var select4 = document.getElementById("p4");
  var select5 = document.getElementById("p5");
  var select6 = document.getElementById("p6");
  var Optionp1;
  var Optionp2;
  var Optionp3;

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
        Optionp3.value == "no") ||
      (Optionp1.value == "si" &&
        Optionp2.value == "no" &&
        Optionp3.value == "si")
    ) {
      document.getElementById("Ingeniero_Agricola").style.display = "none";
      if (
        document.getElementById("Ingeniero_Agricola").style.display == "none"
      ) {
        document.getElementById("Ingeniero_Zooctenista").style.display =
          "block";
      } 
    } else if (
      Optionp1.value == "si" &&
      Optionp2.value == "si" &&
      Optionp3.value == "si"
    ) {
      document.getElementById("enviar").style.display = "block";
    }
  });

  select4.addEventListener("change", function () {
    Optionp1 = this.options[select4.selectedIndex];
  });
  select5.addEventListener("change", function () {
    Optionp2 = this.options[select5.selectedIndex];
    console.log(Optionp2);
  });

  select6.addEventListener("change", function () {
    Optionp3 = this.options[select6.selectedIndex];
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
        Optionp3.value == "no") ||
      (Optionp1.value == "si" &&
        Optionp2.value == "no" &&
        Optionp3.value == "si")
    ) {
      document.getElementById("Ingeniero_Zooctenista").style.display = "none";
      if (
        document.getElementById("Ingeniero_Zooctenista").style.display == "none"
        
      ) {
        document.getElementById("Ingeniero_Agronomo").style.display =
          "block";
      }
    } else if (
      Optionp1.value == "si" &&
      Optionp2.value == "si" &&
      Optionp3.value == "si"
    ) {
      document.getElementById("enviar").style.display = "block";
    }
  });
});
