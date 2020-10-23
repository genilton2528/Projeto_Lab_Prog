window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("logo").style.width = "150px";
  } else {
    document.getElementById("logo").style.width = "200px";
  }
}

function fillField(elem) {
  document.getElementById('search-id').value = elem.text;
}
