'use strict';


function drowList(){
const cardsContainer = document.querySelector(".goods-wrap");
let card;
        for (let i = 0; i < tablete.length; i++) {
            card = document.createElement("div");
            card.classList.add("item_box");
            cardsContainer.appendChild(card);

            card.innerHTML = `
            
            <img src=${tablete[i].images[0]} alt="" width="190px" height="189px" class="card-img">
            <h1 class="card-title item-title">${tablete[i].name}</h1>
            <p>Preț: <span class="card-price item_price">${tablete[i].price}</span>Lei</p>
            <button class="btnt">Pune în coș</button>
            `;   
        }  
}
/*function search(let value){
    for(let i = 0; i < smartphones.length; i++){
        //verifica daca value se contine in smartphones[i].name
        // in caz de succes => result.push(smartphones[i])
    }
}*/
/*function order(let value){
    //ordonam result dupa pret, directia din value 
   
}*/



 