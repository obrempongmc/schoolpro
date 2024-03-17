
console.log(2**35)

const mynames={
    firstName: "kofi",
   middleName : "felix",
     LastName:"Opoku",
     fullName :function names() {
    return this.firstName+ " "+this.middleName + "  "+this.LastName;
}

}
 console.log(mynames.fullName());


// console.log(mynames())

// function mynames() {
//     var firstName = 'Kofi';
//     var middleName = 'Felix';
//     var lastName = 'Opoku';
//     var fullName = firstName + ' ' + middleName + ' ' + lastName;
//     return fullName;
// }

// console.log(mynames());
// const stringWithFormFeed = "This is the first page.\fThis is the second page.";
// console.log(stringWithFormFeed);

const stringWithCarriageReturn = "Hello\nWorld!bro";
console.log(stringWithCarriageReturn);


const txt= "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
console.log(txt.charAt(2)+'\t'+txt.charCodeAt(2)+'\t'+ txt.length+' \t'+txt[25]+'\t')

console.log(txt.substring(6,5)+'\t'+ txt.substring(5)+'\t'+txt.substring(-5)+'\r'+ txt.toLowerCase())

console.log(txt.padStart(50,'*')+'\r'+txt.padEnd(50,'abaa'))

let text ="a,s,d,f,g,h,j,k,l,i,y,t,r,e,w,b";
const myarray=text.split(",");
console.log(myarray[4]);
const sent= text.replace(myarray[1],myarray[8]);
console.log(sent);



let firstName ='kofi';
let secondname='manu';
console.log( `welome ${firstName} \t ${secondname}`);

let x=0.2 +0.1 ;
console.log(x)