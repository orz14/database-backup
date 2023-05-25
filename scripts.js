function selects() {
  let ele = document.getElementsByName("db_name[]");
  for (let i = 0; i < ele.length; i++) {
    ele[i].checked = true;
  }
}

function deSelect() {
  let ele = document.getElementsByName("db_name[]");
  for (let i = 0; i < ele.length; i++) {
    ele[i].checked = false;
  }
}
