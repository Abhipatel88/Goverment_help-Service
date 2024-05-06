const mobile_btns=document.querySelector(".mobile-bar")
const navs=document.querySelector(".nav")
let toogglenav= () => {
    navs.classList.toggle("active")
}
mobile_btns.addEventListener("click",()=>toogglenav())


    const l_btn=document.querySelector(".l-btn")
    const lang=document.querySelector(".top-bar")

    let toogglelan= () => {
        lang.classList.toggle("ac")
    }
    lang.addEventListener("click",()=>toogglelan())




// var myIndex = 0;
// carousel();

// function carousel() {
//   var i;
//   var x = document.getElementsByClassName("img-slides");
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";  
//   }
//   myIndex++;
//   if (myIndex > x.length) {myIndex = 1}    
//   x[myIndex-1].style.display = "block";  
//   setTimeout(carousel, 4000); // Change image every 2 seconds
// }




const form = document.querySelector("#form")
form.addEventListener("click",()=>{
    window.location.href="combeforlogin.html";
})

const blog = document.querySelector("#blog")
blog.addEventListener("click",()=>{
    window.location.href="blog.html"
})




// for swiper in document for swiper in documentfor swiper in documentfor swiper in documentfor swiper in document
// for swiper in document for swiper in documentfor swiper in documentfor swiper in documentfor swiper in document

// for swiper in document for swiper in documentfor swiper in documentfor swiper in documentfor swiper in document

