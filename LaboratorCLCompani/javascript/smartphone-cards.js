'use strict';
let result = [];

function drowList(){
    //daca result este gol atunci result este egal cu smartphones
const cardsContainer = document.querySelector(".goods-wrap");
let card;
        for (let i = 0; i < result.length; i++) { //result
            card = document.createElement("div");
            card.classList.add("item_box");
            cardsContainer.appendChild(card);

            card.innerHTML = `
            <img src=${result[i].images[0]} alt="" width="190px" height="189px" class="card-img">
            <h1 class="card-title item-title">${result[i].name}</h1>
            <p>Preț: <span class="card-price item_price">${result[i].price}</span>Lei</p>
            <button class="btnt">Pune în coș</button>
            `;   
        }  
}
window.onload = function(){
    result = smartphones;
    drowList();
} 

function resetList(){
    if(result.length != 0) {
        document.querySelectorAll(".item_box").forEach(item => {
            item.remove();
        })
    }
    result = [];
    //var elem = document.getElementsByClassName("goods-wrap")[0]; 
    //elem.removeChild(document.getElementsByClassName("item_box")[0]);
}
function openSearch(){
    resetList();
    let inputValue = document.getElementsByClassName("domTextElement")[0].value; 
     search(inputValue);
     drowList(); 
}

function search(searchString){
    let filter = searchString.toLowerCase();
    console.log(filter);
    for(let i = 0; i < smartphones.length; i++){
        let name = smartphones[i].name.toLocaleLowerCase();
        //verifica daca value se contine in smartphones[i].name
          if(name.indexOf(filter) > -1){
              result.push(smartphones[i]);
          }      
       
        // in caz de succes => result.push(smartphones[i])
       // if(1) result.push(smartphones[i]);
    }
}
/*
function order(let value){
    //ordonam result dupa pret, directia din value  
}*/


function testjs(){
    alert("Alert");
}





 