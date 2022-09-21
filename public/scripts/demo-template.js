window.onload=function() {
  var textHolder = document.querySelector('.video-guide');
  var btn = document.querySelector('.video-readMore');

  function toggleText() {
    textHolder.classList.toggle("multiline-ellipsis");
  }

  if (btn) {
    btn.addEventListener('click', toggleText);
  }
  toggleText(); //to truncate at first time
}
