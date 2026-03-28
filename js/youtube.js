document.querySelectorAll(".youtube").forEach(function (el) {
  let videoId = el.dataset.embed;
  el.style.backgroundImage = `url('https://img.youtube.com/vi/${videoId}/mqdefault.jpg')`;

  el.addEventListener("click", function () {
    let iframe = document.createElement("iframe");
    iframe.setAttribute(
      "src",
      "https://www.youtube.com/embed/" + videoId + "?autoplay=1"
    );
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allowfullscreen", "1");
    iframe.setAttribute(
      "allow",
      "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    );

    this.innerHTML = "";
    this.appendChild(iframe);
  });
});
