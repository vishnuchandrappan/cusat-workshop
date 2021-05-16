const person = {
  firstName: "John",
  lastName: "Doe",
};
console.log("person", person);

person.age = 41;
console.log("after age", person);

// traversal

for (key in person) {
  console.log(`${key} => ${person[key]}`);
}

delete person.age;

console.log("After delete", person);

let data = {
  firstName: "John",
  lastName: "Doe",
  id: 5566,
  fullName: function () {
    return this.firstName + " " + this.lastName;
  },
};

console.log("==> fullName", data.fullName());

// Object Accessors: Getter and setter
var person = {
  firstName: "John",
  lastName: "Doe",
  language: "en",
  get lang() {
    return this.language;
  },
  set lang(lang) {
    this.language = lang;
  },
};

console.log("getter", person.lang);
person.lang = "en";
console.log("after setter", person);
