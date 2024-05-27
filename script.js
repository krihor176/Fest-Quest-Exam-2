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