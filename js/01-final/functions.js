function greet(name) {
  console.log(`Hi, My name is ${name}`);
}

greet("John Doe");

function sum(a, b) {
  return a + b;
}

const result = sum(2, 3);
console.log("result", result);

const getResults = function (a, b) {
  return a + b;
};
console.log("getResults", getResults(3, 4));

// Fat Arrow Functions
const product = (a, b) => a * b;
const difference = (a, b) => {
  return a - b;
};

console.log("product", product(2, 5));
console.log("difference", difference(2, 5));

const divide = (a, b = 1) => a / b;
console.log("quotient", divide(3));

[1, 2, 3].map((item) => item + 1);
[1, 2, 3].find((item) => item === 2);

