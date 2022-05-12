let result = [];

function drowList(){
const cardsContainer = document.querySelector(".goods-wrap");
let card;
        for (let i = 0; i < result.length; i++) { 
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
    result = tablete;
    drowList();
} 

function resetList(){
    if(result.length != 0) {
        document.querySelectorAll(".item_box").forEach(item => {
            item.remove();
        })
    }
    result = [];  
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
    for(let i = 0; i < tablete.length; i++){
        let name = tablete[i].name.toLocaleLowerCase();
        //verifica daca value se contine in tablete[i].name
          if(name.indexOf(filter) > -1){
              result.push(tablete[i]);
          }      
        // in caz de succes => result.push(tablete[i])
       // if(1) result.push(smartphones[i]);
    }
}



 