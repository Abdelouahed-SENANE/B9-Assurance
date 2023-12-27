// import { checkInput } from './helpers.js';

// // ======== Validation Assureur ============

// const inputNom = document.getElementById('fieldNom');
// const inputAdress = document.getElementById('fieldAdress');
// const buttonAssureur = document.getElementById("addAssureur");
// const nomErr = document.getElementById("nomErr");
// const adressErr = document.getElementById("adressErr");
// const formAssureur = document.getElementById("formAssureur");
// const btnAdd = document.getElementById("btnAdd");
// const btnClose = document.getElementById("btnClose");

// // ========= Display FOrmulaire Assureur ========
// btnAdd.addEventListener('click' , () =>{
//     if (formAssureur.classList.contains('hidden')) {
//         formAssureur.classList.remove('hidden')
//     }
// })
// btnClose.addEventListener('click' , () =>{
//     if (!formAssureur.classList.contains('hidden')) {
//         formAssureur.classList.add('hidden');
//     }
// })

// buttonAssureur.addEventListener('click' , (e) =>{
//     e.preventDefault();
//     // ========== Validation nom =================
//     if (inputNom.value == '' || inputNom.value.length  == null) {
//         nomErr.innerText = "Please Enter Nom";
//         inputNom.classList.add('border-red-500');
//     }else {
//         const pattern = /^[A-Za-z'-]+$/;
//         const input = inputNom.value;
        
//         if (!checkInput(input , pattern)) {
//         nomErr.innerText = "Please correct nom"; 
//         inputNom.classList.add('border-red-500');

//         }else {
//         nomErr.innerText = "";
//         inputNom.classList.remove('border-red-500');

//         }
//     }
//     if (inputAdress.value == '' || inputAdress.value.length  == null) {
//         adressErr.innerText = "Please Enter adress";
//         inputAdress.classList.add('border-red-500');

//     }else {
//         const pattern = /^[0-9A-Za-z\s,'-]+$/;
//         const input = inputAdress.value;
        
//         if (!checkInput(input , pattern)) {
//         adressErr.innerText = "Please correct adress"; 
//         inputAdress.classList.add('border-red-500');
            
//         }else {
//         adressErr.innerText = "";   
//         inputAdress.classList.remove('border-red-500');

//         }
//     }

// }) 

