//Getting all required elements
const inputField = document.querySelector(".input-field textarea"),
  todoLists = document.querySelector(".formLists"),
  countNum = document.querySelector(".count-num"),
  addNewButton = document.querySelector(".head-addform");
  

function allTasks() {
  let tasks = document.querySelectorAll(".pending");

  countNum.textContent = tasks.length === 0 ? ":" : tasks.length;
  
  let allLists = document.querySelectorAll(".list");
  if (allLists.length > 0) {
    todoLists.style.marginTop = "20px";
    clearButton.style.pointerEvents = "auto";
    return;
  }
  todoLists.style.marginTop = "0px";
  clearButton.style.pointerEvents = "none";
}

//add task while we put value in text area and press enter
addNewButton.addEventListener("click", () => {
    // onclick="handleStatus(this)
    // onclick="deleteTask(this)
    // ${inputVal}
  
    let liTag = ` 
         <li class="list pending">
         <i class="uil uil-trash" onclick="deleteTask(this)"></i>
            <div class="input-control">
                <label for="phone" class="form-label">ตำแหน่งงาน</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="กรอกข้อมูลตำแหน่งงานของคุณ">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone" class="form-label">บริษัท</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="กรอกข้อมูลบริษัทของคุณ">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone" class="form-label">ที่ตั้ง</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="กรอกข้อมูลที่ตั้งของคุณ">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control-area">
                <label for="Address" class="form-label">ลักษณะงาน</label>
                <textarea class="form-control" name="Address" id="Address" rows="3" placeholder="กรอกข้อมูลลักษณะงานของคุณ"></textarea>
                <div id="error" class="error"></div>
            </div>
          <hr/>
        </li>
        `;

    todoLists.insertAdjacentHTML("afterbegin", liTag); //inserting li tag inside the todolist div
    allTasks();
  
});

//checking and unchecking the chekbox while we click on the task
function handleStatus(ant) {
  const checkbox = ant.querySelector("input"); //getting checkbox
  checkbox.checked = checkbox.checked ? false : true;
  ant.classList.toggle("pending");
  allTasks();
}

//deleting task while we click on the delete icon.
function deleteTask(e) {
  e.parentElement.remove(); //getting parent element and remove it
  allTasks();
}