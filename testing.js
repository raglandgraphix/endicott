// for(let i=1;i<=10;i++){
//     let row = '';
//     for(let j=1;j<=10;j++){
//         row += i*j;
//     }
//     //console.log(row);
// }
// //console.log('shit');
// /**
//  * 
//  */

// const numbers = [1,2,3,4,5,6,7,8,9,10];

// //Filter out all the odd numbers

// const oddNumbers = numbers.filter(number => number % 2 !==0);

// console.log(oddNumbers);

// let divBy3 = numbers.filter(number => number %3 ===0 );

// console.log(divBy3);

// let newNumbs  = [2,0,9,5,4,6,];

// newNumbs.sort((a,b)=>b-a);
// console.log(newNumbs);

// let x='';
// let z = ['ted','fred','tom','scott'];
// for(let blue of z){
//     x+=blue;
// }
// console.log(x);

let myPromise = new Promise(function(resolve, reject) {
    setTimeout(function(){
        resolve("I am a fricking RockStar")
    },5000);
    
  });
  
  // Attach callbacks to handle promise fulfillment or rejection
  myPromise.then(function(value) {
    console.log('Promise fulfilled:', value);
  }).catch(function(error) {
    console.error('Promise rejected:', error);
  });
