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



let xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);
        let moviesArray = [];
        data.movies.forEach(function(movie) {
            let newMovieObject = {
                title: movie.title,
                tags: movie.tags,
                posterURL: movie.posterURL,
                description: movie.description
            };
            moviesArray.push(newMovieObject);
        });
        console.log(moviesArray);
        console.log(data.movies[0].tags)
    }
};
xhttp.open("GET", "./filmDB/filmek.json", true);
xhttp.send();


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

function randomSwap() {
  var posterImage = document.getElementById("posterIMG");
  var mainTitle = document.getElementById("mainTitle");
  var description = document.querySelector(".description p");
  var slides = document.querySelectorAll(".smallPoster-slide");
  var randomIndex = Math.floor(Math.random() * slides.length);

  var slide = slides[randomIndex];
  var slideImage = slide.querySelector("img");
  var slideDesc = slide.querySelector(".slide-desc");
  var imageSrc = slideImage.getAttribute("src");
  var descText = slideDesc.textContent;
  var titleText = mainTitle.textContent;
  var tempImageSrc = posterImage.getAttribute("src");

  posterImage.style.transition = "opacity 0.5s ease-out";
  slideImage.style.transition = "opacity 0.5s ease-out";
  posterImage.style.opacity = 0;
  slideImage.style.opacity = 1;

  setTimeout(function() {
    posterImage.setAttribute("src", imageSrc);
    slideImage.setAttribute("src", tempImageSrc);
    
    mainTitle.textContent = descText;
    slideDesc.textContent = titleText;
    description.textContent = descText;
    posterImage.style.opacity = 1;
  }, 500);
}