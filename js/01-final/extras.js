// Math Object

console.log(Math.PI);
console.log(Math); // check this for more

const nums = Math.floor(Math.random() * 10);
console.log("numbers", nums);

// Comparisons
a = 1;
b = 2;
c = false;
d = "abc";

console.log(a > b);
console.log(a < b);
console.log(a !== b);
console.log(a === b);
console.log(a <= b);
console.log(a >= b);
console.log(c && b);
console.log(!c && d);

// Conditionals : if, else, elseif, switch
if (a > b) {
  console.log("a is greater");
} else if (a === b) {
  console.log("both are same");
} else {
  console.log("b is greater");
}

// Loops
numbers = [1, 2, 3];
for (let i = 0; i < numbers.length; i++) {
  console.log(`i => ${i} || value => ${numbers[i]}`);
}

// For In Loop : used with objects
// For Of Loop : used with arrays or strings

// While loop
while (i < 10) {
  console.log("The number is " + i);
  i++;
}

// do while loop
do {
  console.log("The number is " + i);
  i++;
} while (i < 10);