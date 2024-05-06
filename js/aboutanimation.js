


gsap.registerPlugin(ScrollTrigger);

// Using Locomotive Scroll from Locomotive https://github.com/locomotivemtl/locomotive-scroll

const locoScroll = new LocomotiveScroll({
  el: document.querySelector(".main2"),
  smooth: true
});
// each time Locomotive Scroll updates, tell ScrollTrigger to update too (sync positioning)
locoScroll.on("scroll", ScrollTrigger.update);

// tell ScrollTrigger to use these proxy methods for the "#main" element since Locomotive Scroll is hijacking things
ScrollTrigger.scrollerProxy(".main2", {
  scrollTop(value) {
    return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
  }, // we don't have to define a scrollLeft because we're only scrolling vertically.
  getBoundingClientRect() {
    return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
  },
  // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
  pinType: document.querySelector(".main2").style.transform ? "transform" : "fixed"
});




let tl = gsap.timeline();
tl.from(".top-bar",{
  opacity:0.3,
    
  },"d")
tl.from(".top-bar .top-bar-img,.top-bar .l-btn",{
  y:"-130%",
  duration:0.5,
  delay:0.5,
  stagger:0.5
},"d")
tl.from(".nav",{
opacity:0.3,
  
},"d")

tl.from(".nav .l img",{
  x:"-100%",
  delay:0.3,
  duration:0.5,
  opacity:0
},"d")
tl.from(".nav .r a, .search",{
  x:"100%",
  delay:0.1,
  duration:0.1,
  opacity:0,
  stagger:0.2,

},"d")
tl.from(".l .img",{
    x:"-120%",
    delay:0.5,
    duration:0.5

},"d")
tl.from(".r h2,.r p,.r .rrr",{
    x:"1200px",
    delay:0.5,
    duration:0.5,
    stagger:0.3
},"d")
tl.from(".page2 h1",{
    opacity:0,
    stagger:0.5,
    delay:1,
    duration:1,
    scrollTrigger:{
        trigger:".card-con .card",
        scroller:".main2",
        // markers:true,
        scrub:true,
        start:"top 80%", 
        end:"top 50%"
    }
},"d")
tl.from(".card-con .card",{
    opacity:0,
    stagger:1,
    delay:1,
    duration:1,
    scrollTrigger:{
        trigger:".card-con .card",
        scroller:".main2",
        // markers:true,
        scrub:true,
        start:"top 80%", 
        end:"top 50%"
    }
},"d")
tl.from(".footer .links,.social-icon,h4",{
    scale:0,
      opacity:0,
      delay:1,
      duration:1,
      stagger:0.3,
      scrollTrigger:{
        trigger:".footer .links,.social-icon,h4",
        scroller:".main2",
        // markers:true,
        scrub:true,
        start:"top 80%", 
        end:"top 50%"
    }
  },"d")