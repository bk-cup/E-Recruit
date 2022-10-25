//Getting all required elements
const inputField = document.querySelector(".input-field textarea"),
  F_work = document.querySelector(".formLists"),
  F_language = document.querySelector(".formLists-language"),
  countWork = document.querySelector(".count-num"),
  countlanguage = document.querySelector(".count-language"),
  bt_work = document.querySelector(".bt-work-addform"),
  bt_language = document.querySelector(".bt-language-addform");


  function themeChange(){
    document.getElementById('Sdate').classList.toggle('checkdateClose');
}
function allwork() {
  let a = document.querySelectorAll(".list-work");

  countWork.textContent = a.length === 0 ? ":" : a.length;

  let allLists = document.querySelectorAll(".list-work");
  if (allLists.length > 0) {
    F_work.style.marginTop = "20px";
    clearButton.style.pointerEvents = "auto";
    return;
  }
  F_work.style.marginTop = "0px";
  clearButton.style.pointerEvents = "none";
}
function allLanguage() {
  let b = document.querySelectorAll(".list-language");

  countlanguage.textContent = b.length === 0 ? ":" : b.length;

  let allLists = document.querySelectorAll(".list-work");
  if (allLists.length > 0) {
    F_work.style.marginTop = "20px";
    clearButton.style.pointerEvents = "auto";
    return;
  }
  F_work.style.marginTop = "0px";
  clearButton.style.pointerEvents = "none";
}

//add task while we put value in text area and press enter
bt_work.addEventListener("click", () => {
  // onclick="handleStatus(this)
  // onclick="deleteTask(this)
  // ${inputVal}
  // members[0][name]

  let liTag = ` 
         <li class="list-work pending" name="">
            <i class="uil uil-trash" onclick="deleteWork(this)"></i>
            <div class="input-control">
                <label for="phone" class="form-label">ตำแหน่งงาน</label>
                <input type="text" class="form-control" name="W_depart" id="W_depart" placeholder="กรอกข้อมูลตำแหน่งงานของคุณ">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone" class="form-label">บริษัท</label>
                <input type="text" class="form-control" name="W_company" id="W_company" placeholder="กรอกข้อมูลบริษัทของคุณ">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone" class="form-label">ที่ตั้ง</label>
                <input type="text" class="form-control" name="W_location" id="W_location" placeholder="กรอกข้อมูลที่ตั้งของคุณ">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control-area">
                <label for="W_nature" class="form-label">ลักษณะงาน</label>
                <textarea class="form-control" name="W_nature" id="W_nature" rows="3" placeholder="กรอกข้อมูลลักษณะงานของคุณ"></textarea>
                <div id="error" class="error"></div>
            </div>
            <div id="conDate" class"con-flex">
                <div class="input-field">
                    <label>วันที่เริ่ม</label>
                    <input id="W_startDate" type="date" placeholder="Enter your issued date" >
                </div>
                <div id="Sdate" class="input-field checkdate">
                <label id="End">วันสิ้นสุด</label>
                <input id="W_endDate" type="date" placeholder="Enter expiry date">
                </div>
            </div>
            <div  class="conCheck">
                <input id="DateEnd" type="checkbox" >
                <label for="DateEnd" onclick="themeChange()"> ปัจจุบันทำงานอยู่</label><br>
            </div>
          <hr/>
        </li>
        `;
        console.log("intput.value"); 
  F_work.insertAdjacentHTML("afterbegin", liTag); //inserting li tag inside the todolist div
  allwork();

});
bt_language.addEventListener("click", () => {
  // onclick="handleStatus(this)
  // onclick="deleteTask(this)
  // ${inputVal}
  // members[0][name]

  let liTag = ` 
         <li class="list-language pending" name="">
            <i class="uil uil-trash" onclick="deletelanguage(this)"></i>
            <div id="grid" class="input-control-dropdown">
                <label class="title">ภาษาอังกฤษ</label>
                <label class="form-label">พูด</label>
                <select id=workplace name="workplace" class="form-select" aria-label="Default select example">
                    <option value="" selected disabled hidden>ระบุ</option>
                    <option>ได้</option>
                    <option>ไม่ได้</option>
                </select>
                <label class="form-label">อ่าน</label>
                <select id=workplace name="workplace" class="form-select" aria-label="Default select example">
                    <option value="" selected disabled hidden>ระบุ</option>
                    <option>ได้</option>
                    <option>ไม่ได้</option>
                </select>
                <label class="form-label">เขียน</label>
                <select id=workplace name="workplace" class="form-select" aria-label="Default select example">
                    <option value="" selected disabled hidden>ระบุ</option>
                    <option>ได้</option>
                    <option>ไม่ได้</option>
                </select>
            <div id="error" class="error"></div>
            </div>
          <hr/>
        </li>
        `;
        console.log("intput.value"); 
  F_language.insertAdjacentHTML("afterbegin", liTag); //inserting li tag inside the todolist div
  allLanguage();

});














//checking and unchecking the chekbox while we click on the task
function handleStatus(ant) {
  const checkbox = ant.querySelector("input"); //getting checkbox
  checkbox.checked = checkbox.checked ? false : true;
  ant.classList.toggle("pending");
  allwork();
}

//deleting task while we click on the delete icon.
function deleteWork(e) {
  e.parentElement.remove(); //getting parent element and remove it
  allwork();
}
function deletelanguage(e) {
  e.parentElement.remove(); //getting parent element and remove it
  allLanguage();
}