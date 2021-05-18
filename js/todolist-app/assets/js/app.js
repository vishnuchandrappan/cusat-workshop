const todoForm = document.getElementById("todo-form");
const todoContainer = document.getElementById("todo-container");

function getInitialTodoValues() {
  const appValues = localStorage.getItem("appValues");
  if (appValues) {
    return JSON.parse(appValues);
  }

  return [];
}

const createTodoNode = (todoItem) => {
  const liElement = document.createElement("li");
  liElement.classList.add("list-group-item", "custom-group-item");
  if (todoItem.completed) {
    liElement.classList.add("completed");
  }
  liElement.innerHTML = `<span>${todoItem.todo}</span>`;
  liElement.setAttribute("id", `attrId${todoItem.id}`);

  liElement.addEventListener("click", () => {
    todoItem.completed = !todoItem.completed;
    renderTodos();
  });

  const closeBtn = document.createElement("button");
  closeBtn.classList.add("btn", "btn-danger");
  closeBtn.innerHTML = "<i class='bi bi-x'></i>";

  closeBtn.addEventListener("click", () => {
    deleteTodo(todoItem.id);
  });

  liElement.appendChild(closeBtn);

  return liElement;
};

const saveTodos = () => {
  const stringifiedTodos = JSON.stringify(todos);
  localStorage.setItem("appValues", stringifiedTodos);
};
const clearInput = () => {
  todoForm.children[0].value = "";
};

const renderTodos = () => {
  saveTodos();

  todoContainer.innerHTML = "";
  todos.forEach((todo) => {
    todoContainer.appendChild(createTodoNode(todo));
  });
  clearInput();
};

let todos = getInitialTodoValues();
renderTodos();

setTodos = (newTodos) => {
  todos = newTodos;
  renderTodos();
};

addTodo = (todo) => {
  todos.push({
    id: Date.now(),
    todo,
    completed: false,
  });
  renderTodos();
};

const deleteTodo = (todoIdToBeDeleted) => {
  setTodos(todos.filter((todo) => todo.id !== todoIdToBeDeleted));
};

const handleFormSubmission = (event) => {
  event.preventDefault();
  addTodo(event.target.children[0].value);
};

todoForm.addEventListener("submit", handleFormSubmission);
