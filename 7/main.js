let numbers = [2, 5, 12, 13, 15, 18, 22];

//ここに答えを実装してください。↓↓↓
function isEven(num) {
    return num % 2 == 0
}
 for(let i = 0; i< 7; i++)
    if(isEven(numbers[i])) {
    console.log(numbers[i]+"は偶数です");
  } 


  class car{ 
    constructor(gass,num){
        this.gassa = gass;
        this.numa = num;
    }
    getNumGas(){
        console.log(`ガソリンは${this.gassa}です。ナンバーは${this.numa}です。`)
    }
}
    let carcar = new car(20,1234);
    carcar.getNumGas();