

gsap.registerPlugin(ScrollTrigger);

// Using Locomotive Scroll from Locomotive https://github.com/locomotivemtl/locomotive-scroll

const locoScroll = new LocomotiveScroll({
  el: document.querySelector("#main"),
  smooth: true
});
// each time Locomotive Scroll updates, tell ScrollTrigger to update too (sync positioning)
locoScroll.on("scroll", ScrollTrigger.update);

// tell ScrollTrigger to use these proxy methods for the "#main" element since Locomotive Scroll is hijacking things
ScrollTrigger.scrollerProxy("#main", {
  scrollTop(value) {
    return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
  }, // we don't have to define a scrollLeft because we're only scrolling vertically.
  getBoundingClientRect() {
    return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
  },
  // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
  pinType: document.querySelector("#main").style.transform ? "transform" : "fixed"
});






let tl = gsap.timeline();
tl.from(".top-bar",{
  opacity:0.3,
    
  },"asa")
tl.from(".top-bar .top-bar-img,.top-bar .l-btn",{
  y:"-130%",
  duration:0.5,
  delay:0.5,
  stagger:0.5
},"asa")
tl.from(".nav",{
opacity:0,
  
},"asa")
tl.from(".nav .l img",{
  x:"-100%",
  delay:0.3,
  duration:0.5,
  opacity:0
},"asa")
tl.from(".nav .r a, .search",{
  x:"100%",
  delay:0.1,
  duration:0.1,
  opacity:0,
  stagger:0.2,

},"asa")
tl.from(".page1",{
    x:"100%",
    // delay:0.5,
    // duration:0,
    // stagger:1

},"asa")
tl.from(".page1 .page1-l .intro,.page1-l h1,.page1-l p,.page1-l .read-btn",{
    x:"-100%",
    delay:0.5,
    duration:0.5,
    opacity:0,
    stagger:0.2,

},"asa")
tl.from(".page1 .page1-r img",{
    x:"100%",
    delay:0.2,
    duration:0.2,
    opacity:0
},"asa")

// tl.from(".page2 .feature .f1",{
//   scale:0,
//   opacity:0,
//   duration:1,
//   stagger:0.3,
//   scrollTrigger:{
//       trigger:".feature .f1",
//       scroller:"body",
//       markers:true,
//       scrub:true,
//       start:"top 80%",
//   }
// })
tl.from(".page2 .page2-h1 ",{
  // scale:0,
    opacity:0,
    duration:1,
    stagger:0.3,
    scrollTrigger:{
      trigger:".page2 .page2-h1",
      scroller:"#main",
      // markers:true,
      scrub:true,
      start:"top 80%",
  }
},"asa")
tl.from(".page2 .feature .f1",{
  scale:0,
    opacity:0,
    duration:1,
    stagger:0.3,
    scrollTrigger:{
      trigger:".page2 .feature .f1",
      scroller:"#main",
      // markers:true,
      scrub:1,
      start:"top 80%",
      end:"top 80%",
  }
},"asa")

tl.from(".page3 .coming-soon h1",{
  x:1000,
  delay:0.3,
  duration:0.5,
  opacity:0,
  stagger:0.2,
  scrollTrigger:{
    trigger:".page3 .coming-soon",
    scroller:"#main",
    // markers:true,
    scrub:1,
    start:"top 80%",
    end:"top 80%",
}
},"asa")
tl.from(".page3 .cooming-soon-service .swiper .swiper-slide ",{
  x:1000,
  scale:0,
  delay:2,
  duration:2,
  opacity:0,
  stagger:0.2,
  scrollTrigger:{
    trigger:".page3 .coming-soon",
    scroller:"#main",
    scrub:1,
    // markers:true,
    start:"top 70%",
    end:"top 90%",
}
},"asa")
tl.from(".page4 .l .box,.page4 .l .box .box-flex-l ,.page4 .l .box .box-flex-r  ",{
  // x:1000,
  // scale:0,
  x:-1000,
  delay:0.5,
  duration:0.5,
  opacity:0,
  stagger:0.2,
  scrollTrigger:{
    trigger:".page4 .l .box ",
    scroller:"#main",
    scrub:1,
    // markers:true,
    start:"top 70%",
    end:"top 90%",
}
},"asa")
tl.from(".page4 .r h1,.page4 .r p,.page4 .r .citys",{
  // x:1000,
  // scale:0,
  x:700,
  delay:0.5,
  duration:0.5,
  opacity:0,
  stagger:0.3,
  scrollTrigger:{
    trigger:".page4 .r h1,.page4 .r p,.page4 .r .citys ",
    scroller:"#main",
    scrub:1,
    // markers:true,
    start:"top 70%",
    end:"top 90%",
}
},"asa")

