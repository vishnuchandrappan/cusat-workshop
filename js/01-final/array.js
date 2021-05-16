// Array
const friends = ["Chandler", "Phoebe", "Joey"];
friends[3] = "Ross";

console.log(friends);

console.log("length", friends.length);
console.log("includes", friends.includes("Chandler"));
console.log("sorted", friends.sort());

friends.push("Gunther");
console.log("after push", friends);

friends.pop();
console.log("after pop", friends);

friends.unshift("Monica");
console.log("unshift", friends);

friends.shift();
console.log("shift", friends);

console.log("concat", friends.concat(["Monica", "Rachel"]));

// Function methods
friends.forEach(function (friend) {
  console.log("=>", friend);
});

friends.forEach(function (friend, index) {
  console.log(`${index} => `, friend);
});

const Friends = friends.map(function (friend) {
  return "Dr. " + friend;
});

console.log("Friends", Friends);

const maleFriends = friends.filter(function (friend) {
  return friend === "Chandler" || friend === "Ross" || friend === "Joey";
});

console.log("Male Friends", maleFriends);

const sarcasticFriend = friends.find(function (friend) {
  return friend === "Chandler";
});
console.log("Sarcastic Friend", sarcasticFriend);
