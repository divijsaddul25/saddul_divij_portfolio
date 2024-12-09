//Green sock animation : https://gsap.com/scroll/
gsap.registerPlugin(ScrollTrigger);


const tl = gsap.timeline({
  scrollTrigger: {
    trigger: "#testimonials",     
    start: "top center",           
    end: "bottom center",          
    scrub: 1,                     
    pin: true,                    
  }
});

tl.to(".testimonial-image img", {
  rotateZ: 720,                 
  duration: 0.5,                  
  ease: "none",                 
});




