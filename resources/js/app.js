
import 'bootstrap';




window.addEventListener('scroll', () =>{
    
    let scroll = window.scrollY;
    var nav = document.getElementById('nav').classList;
/*
    if (scroll >= 80 ){
        nav.add('scrolled');
    }else  {
        nav.remove('scrolled');

    }
*/
})

window.addEventListener('load', ()=> {
    let href = window.location.href
    let cards = document.querySelectorAll('#card')
    console.log(cards)
    if(href.includes('http://127.0.0.1:8000/')){
       for(let card of cards){
        card.classList.add('swipe')
       }
    }
 
})