const titleContainer = document.getElementById("title");

titleContainer.innerHTML = "Hello World";

const container = document.getElementsByClassName("container")[0];
const paragraphElement = document.createElement("p");
paragraphElement.innerHTML =
  "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores minus alias qui perferendis? Ut natus officiis et accusamus repudiandae iure eveniet at fugiat reprehenderit consequatur, animi, maxime mollitia ipsa quasi!";

container.appendChild(paragraphElement);

// create a list from an array
const friends = ["Chandler", "Joey", "Phoebe", "Ross", "Monica", "Rachel"];

const ulElement = document.createElement("ul");

friends.forEach((friend) => {
  const liElement = document.createElement("li");
  liElement.innerHTML = friend;
  ulElement.appendChild(liElement);
});

container.appendChild(ulElement);
container.innerHTML += "<hr/>";

const olElement = document.createElement("ol");
friends.forEach((friend) => {
  olElement.innerHTML += "<li>" + friend + "</li>";
});
container.appendChild(olElement);

// create an image element
const imageElement = document.createElement("img");
imageElement.src =
  "https://images.pexels.com/photos/4372486/pexels-photo-4372486.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500";
imageElement.alt = "Leaves";
imageElement.style.borderRadius = "2rem";
container.appendChild(imageElement);
