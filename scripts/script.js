function openNav() {
    document.getElementById("menuOverlay").style.height = "100%";
  }
  
 function closeNav() {
  document.getElementById("menuOverlay").style.height = "0%";
}

function openSearch() {
  document.getElementById("searchOverlay").style.height = "100%";
  animateSearchPlaceholder();
}

function closeSearch() {
  document.getElementById("searchOverlay").style.height = "0%";
  clearInterval(searchInterval);
}

function animateSearchPlaceholder() {
  var placeholder = "Keresés";
  var count = 0;
  searchInterval = setInterval(function() {
    count++;
    switch(count % 4) {
      case 1:
        placeholder += ".";
        break;
      case 2:
        placeholder += ".";
        break;
      case 3:
        placeholder += ".";
        break;
      default:
        placeholder = "Keresés";
        break;
    }
    document.getElementById("overlaySearch").setAttribute("placeholder", placeholder);
  }, 500);
}

function replaceImage(slide) {  
  var posterImage = document.getElementById("posterIMG");
  var mainTitle = document.getElementById("mainTitle");
  var description = document.querySelector(".description p");
  var slideImage = slide.querySelector("img");
  var slideDesc = slide.querySelector(".slide-desc");
  var imageSrc = slideImage.getAttribute("src");
  var descText = slideDesc.textContent;
  var titleText = mainTitle.textContent;
  var tempImageSrc = posterImage.getAttribute("src");

  posterImage.setAttribute("src", imageSrc);
  slideImage.setAttribute("src", tempImageSrc);
  mainTitle.textContent = descText;
  slideDesc.textContent = titleText;
  description.textContent = descText;
}