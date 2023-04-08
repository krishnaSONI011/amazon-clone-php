if(document.readyState =='loading'){
    document.addEventListener('DOMContentLoaded',ready);
}
else{
    ready();
}
function ready(){
    let Rbutton =document.getElementsByClassName('radio');
    for(let i =0;i<Rbutton.length;i++){
        let input =Rbutton[i];
        input.addEventListener('click',Choose);
    }
}

function Choose(event){
    let input =event.target;
    let element =input.parentElement.innerText;
    let select=document.getElementById('address-here')
    select.innerText =element;
    let forDatabse =document.getElementById('address-here-database')
    forDatabse.value =element;
    // console.log(child);
    // let content =element.getElementsByClassName("label").innerText;  kaam nahi kar raha  
    // console.log(content)
}

let address_btn = document.getElementById('address_btn');
address_btn.onclick= ()=>{

let se =document.getElementById('sele')
let main_add =document.getElementById("main-address")

if(!(se.style.display)){
    se.style.display ='block';
    main_add.style.display ='none';
    address_btn.innerText ="Another Address";
}
else if(se.style.display === "block"){
    se.style.display ='none';
    main_add.style.display ='block';
    address_btn.innerText ="Select Address";
}
else if(se.style.display === "none"){
    se.style.display ='block';
    main_add.style.display ='none';
    address_btn.innerText ="Another Address";
}
}