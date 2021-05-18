const todoForm = document.getElementById("todo-form");
const todoContainer = document.getElementById("todo-container");

let todos = [];

const createTodoNode = (todo) => {
  const liElement = document.createElement("li");
  liElement.classList.add("list-group-item", "custom-group-item");
  liElement.innerHTML = `<span>${todo}</span>`;

  const closeBtn = document.createElement("button");
  closeBtn.classList.add("btn", "btn-danger");
  closeBtn.innerHTML = "<i class='bi bi-x'></i>";

  closeBtn.addEventListener("click", () => {
    deleteTodo(todo);
  });

  liElement.appendChild(closeBtn);

  return liElement;
};

setTodos = (newTodos) => {
  todos = newTodos;
  renderTodos();
};

addTodo = (todo) => {
  todos.push(todo);
  renderTodos();
};

const deleteTodo = (todoToBeDeleted) => {
  setTodos(todos.filter((todo) => todo !== todoToBeDeleted));
};

const renderTodos = () => {
  todoContainer.innerHTML = "";
  todos.forEach((todo) => {
    todoContainer.appendChild(createTodoNode(todo));
  });
  clearInput();
};

const handleFormSubmission = (event) => {
  event.preventDefault();
  addTodo(event.target.children[0].value);
};

const clearInput = () => {
  todoForm.children[0].value = "";
};

todoForm.addEventListener("submit", handleFormSubmission);
