document.addEventListener("DOMContentLoaded", function() {
    const burger = document.querySelector(".burger");
    const menu = document.querySelector(".__menu");

    burger.addEventListener("click", function() {
        this.classList.toggle("active");
        menu.classList.toggle("active");
    });
});


// GSAP animation for scroll
gsap.registerPlugin(ScrollTrigger);

gsap.from('.hero-img', {
    y: '25%', // Initial position (move the image down initially)
    scale: 0.5, // Initial size of the image
    scrollTrigger: {
      trigger: '.hero', // The hero section triggers the animation
      start: 'top bottom', // Start when the hero section reaches the bottom of the viewport
      end: '60%', // End when the hero section reaches the top of the viewport
      scrub: true, // Smooth scroll
      markers: false, // Remove this line later for debugging
    },
    onUpdate: (self) => {
      // Control the scaling effect based on scroll progress
      const scale = 2 + self.progress * 0.5; // Gradually increase size
      const yPos = self.progress * 150; // Control the movement of the image upwards
      gsap.set('.hero-img', { scale: scale, y: -yPos }); // Update scale and position
    },
  });
  



