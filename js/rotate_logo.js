
  window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;
    const rotationValue = scrollPosition / 10;
    const image = document.getElementById('image');
    image.style.transform = 'rotateY(' + rotationValue + 'deg)';
  });
