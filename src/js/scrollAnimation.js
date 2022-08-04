


function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
    //   console.log(elementTop + " elementoTop");
      if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        
      } else {
        reveals[i].classList.remove("active");
      }

    }

    // console.log(reveals);
    // console.log(windowHeight);
    // console.log(elementVisible);
  }


  window.addEventListener("scroll", reveal);

 