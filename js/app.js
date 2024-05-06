const API_KEY="2ebed46607d54e76bdcc6b121d8d216d";
const url="https://newsapi.org/v2/everything?q="

window.addEventListener("load",()=> fetchNews("India"))
async function fetchNews(query){
    const res= await fetch(`${url}${query}&apiKey=${API_KEY}`)
    const result= await res.json();
    console.log(result);
    bindData(result.articles)
}
function reload(){
    window.location.reload()
}
function bindData(articles) {
    const cardContainer = document.getElementById('card-container');
    const   newTem=document.getElementById('Tem');
    cardContainer.innerHTML='';
    articles.forEach(article => {
        if(!article.urlToImage) {
            return;
        }
        const cardClone= newTem.content.cloneNode(true)
        fillDataInCard(cardClone,article)
        cardContainer.appendChild(cardClone)
        
    })

}  
 function fillDataInCard(cardClone ,article){
    const newsimg=cardClone.querySelector("#news-img");
    const newsTitle= cardClone.querySelector("#news-title")
    const newsSource= cardClone.querySelector("#news-source")
    const newsdis= cardClone.querySelector("#news-dis")
   newsimg.src=article.urlToImage;
    newsTitle.innerHTML=article.title;
    newsdis.innerHTML=article.description;

    const date=new Date(article.publishedAt).toLocaleString("en-US",{timeZone:"Asia/Jakarta"})
    newsSource.innerHTML=`${article.source.name}, ${date}`;
    const r = cardClone.querySelector("#r");
    r.addEventListener("click",()=>{
        window.open(article.url,"_blank")
    })

}
let curSelectedNav=null
function onNavItemClick(id){
    fetchNews(id)
    const navItem= document.getElementById(id);
    curSelectedNav?.classList.remove("active")
    curSelectedNav=navItem
    curSelectedNav.classList.add("active")
}

const Search =document.getElementById("Search")
const stext= document.getElementById("stext")
Search.addEventListener("click",()=>{
    const query=stext.value
    if(!query) return;
    fetchNews(query)
    curSelectedNav?.classList.remove("active")
    curSelectedNav=null



})