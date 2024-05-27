/*VIDEO AUTOPLAYS WHEN 50% OF THE VIDEO IS VISIBLE */      
document.addEventListener('DOMContentLoaded', function() {
    var video = document.querySelector('.video-template');

    var observer = new IntersectionObserver(function(entries) {
      if(entries[0].isIntersecting === true)
        video.play();
      else
        video.pause();
    }, { threshold: [0.5] });

    observer.observe(video);
  });

/*HAMBURGER MENU */
var modal = document.getElementById("modal");
var btn = document.getElementById("hamburger");

function closeModal() {
  btn.classList.remove('active');
  modal.style.transform = "translateX(-100%)";
  setTimeout(function() {
    modal.style.display = "none";
    document.body.style.overflow = "auto";
  }, 500);
}

btn.onclick = function() {
  if (modal.style.display === "block") {
    closeModal();
  } else {
    this.classList.add('active');
    modal.style.display = "block";
    setTimeout(function() {
      modal.style.transform = "translateX(0)";
      document.body.style.overflow = "hidden";
    }, 50);
  }
}

window.onclick = function(event) {
  if (event.target == modal) {
    closeModal();
  }
}

  /* FOR DRAGON TO FLY */
  window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;
    var image = document.querySelector('.small-flying-dragon-image');
    
    var translateXValue = 0;
    var translateYValue = 0;
  
    if (scrollPosition <= 140) {
      translateXValue = scrollPosition * 3; 
      translateYValue = scrollPosition * 3; 
    } else {
      translateXValue = 140 * 3 + (scrollPosition - 140) * 1;
      translateYValue = 140 * 3; 
    }
  
    image.style.transform = 'translate(' + translateXValue + 'px, ' + translateYValue + 'px)';
    image.style.opacity = 1 - scrollPosition / 2000;
  });

var images = document.querySelectorAll('.all-images-group img');

var observer = new IntersectionObserver(function(entries) {
  entries.forEach(function(entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add('loaded');
    }
  });
}, { threshold: 0.2 }); 

images.forEach(function(img) {
  if (img.complete) {
    observer.observe(img);
  } else {
    img.onload = function() {
      observer.observe(img);
    };
  }
});

var images = document.querySelectorAll('.all-images-group img');

var observer = new IntersectionObserver(function(entries) {
  entries.forEach(function(entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add('loaded');
    }
  });
}, { threshold: 0.2 }); 

images.forEach(function(img) {
  if (img.complete) {
    observer.observe(img);
  } else {
    img.onload = function() {
      observer.observe(img);
    };
  }
});

var imagesGroup = document.querySelector('.all-images-group');
var isDown = false;
var startX;
var scrollLeft;

imagesGroup.addEventListener('mousedown', (e) => {
  isDown = true;
  startX = e.pageX - imagesGroup.offsetLeft;
  scrollLeft = imagesGroup.scrollLeft;
});

imagesGroup.addEventListener('mouseleave', () => {
  isDown = false;
});

imagesGroup.addEventListener('mouseup', () => {
  isDown = false;
});

imagesGroup.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - imagesGroup.offsetLeft;
  const walk = (x - startX) * 1;
  imagesGroup.scrollLeft = scrollLeft - walk;
});

