document.addEventListener("DOMContentLoaded", function () {
  
  var select1 = document.getElementById("p1");
  var select2 = document.getElementById("p2");
  var select3 = document.getElementById("p3");
  var select4 = document.getElementById("p4");
  var select5 = document.getElementById("p5");
  var select6 = document.getElementById("p6");
  var select7 = document.getElementById("p7");
  var select8 = document.getElementById("p8");
  var select9 = document.getElementById("p9");
  var select10 = document.getElementById("p10");
  var select11 = document.getElementById("p11");
  var select12 = document.getElementById("p12");
  var select13 = document.getElementById("p13");
  var select14 = document.getElementById("p14");
  var select15 = document.getElementById("p15");
  var select16 = document.getElementById("p16");
  var select17 = document.getElementById("p17");
  var select18 = document.getElementById("p18");
  var select19 = document.getElementById("p19");
  var select20 = document.getElementById("p20");
  var select21 = document.getElementById("p21");
  var select22 = document.getElementById("p22");
  var select23 = document.getElementById("p23");
  var select24 = document.getElementById("p24");
  var select25 = document.getElementById("p25");
  var select26 = document.getElementById("p26");
  var select27 = document.getElementById("p27");
  var select28 = document.getElementById("p28");
  var select29 = document.getElementById("p29");
  var select30 = document.getElementById("p30");
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
  select7.addEventListener("change", function () {
    Optionp1 = this.options[select7.selectedIndex];
  });
  select8.addEventListener("change", function () {
    Optionp2 = this.options[select8.selectedIndex];
    console.log(Optionp2);
  });

  select9.addEventListener("change", function () {
    Optionp3 = this.options[select9.selectedIndex];
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
      document.getElementById("Ingeniero_Agronomo").style.display = "none";
      if (
        document.getElementById("Ingeniero_Agronomo").style.display == "none"
        
      ) {
        document.getElementById("Ingeniero_Informatico").style.display =
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




  select10.addEventListener("change", function () {
    Optionp1 = this.options[select10.selectedIndex];
  });
  select11.addEventListener("change", function () {
    Optionp2 = this.options[select11.selectedIndex];
    console.log(Optionp2);
  });

  select12.addEventListener("change", function () {
    Optionp3 = this.options[select12.selectedIndex];
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
      document.getElementById("Ingeniero_Informatico").style.display = "none";
      if (
        document.getElementById("Ingeniero_Informatico").style.display == "none"
        
      ) {
        document.getElementById("Ingeniero_Estadistico").style.display =
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


  
  select13.addEventListener("change", function () {
    Optionp1 = this.options[select10.selectedIndex];
  });
  select14.addEventListener("change", function () {
    Optionp2 = this.options[select11.selectedIndex];
    console.log(Optionp2);
  });

  select15.addEventListener("change", function () {
    Optionp3 = this.options[select12.selectedIndex];
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
      document.getElementById("Ingeniero_Estadistico").style.display = "none";
      if (
        document.getElementById("Ingeniero_Estadistico").style.display == "none"
        
      ) {
        document.getElementById("Licenciado_en_Fisica").style.display =
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
