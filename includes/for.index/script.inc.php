<script>
  var navbar = document.querySelector('nav')

  window.onscroll = function() {

  // pageYOffset or scrollY
  if (window.pageYOffset > 500) {
    navbar.classList.add('scrolled')
  } else {
    navbar.classList.remove('scrolled')
  }
}
</script>