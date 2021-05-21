function submitForm(event) {
  console.log(event.target.parentElement);
  event.target.parentElement.submit();
}