//Getting all required elements
const inputField = document.querySelector(".input-field textarea"),
  F_work = document.querySelector(".formLists"),
  F_language = document.querySelector(".formLists-language"),
  countWork = document.querySelector(".count-num"),
  countlanguage = document.querySelector(".count-language"),
  bt_work = document.querySelector(".bt-work-addform"),
  bt_language = document.querySelector(".bt-language-addform");
  
function workprocess(){
  const   W_depart = document.getElementById("W_depart").value,
          W_company = document.getElementById("W_company").value,
          W_location = document.getElementById("W_location").value,
          W_nature = document.getElementById("W_nature").value,
          W_startDate = document.getElementById("W_startDate").value,
          W_EndDate = document.getElementById("W_EndDate").value;
  const Work = [W_depart,W_company,W_location,W_nature,W_startDate];
  // Work.push(W_EndDate);
  console.log(Work);
  $.post('insert-process.php', {'Work': [W_depart,W_company,W_location,W_nature,W_startDate]});
}

  function themeChange(){
    document.getElementById('Sdate').classList.toggle('checkdateClose');
}
function allwork() {
  let a = document.querySelectorAll(".list-work");

  countWork.textContent = a.length === 0 ? ":" : a.length;

  // let allLists = document.querySelectorAll(".list-work");
  // if (allLists.length > 0) {
  //   F_work.style.marginTop = "20px";
  //   clearButton.style.pointerEvents = "auto";
  //   return;
  // }
  // F_work.style.marginTop = "0px";
  // clearButton.style.pointerEvents = "none";
}
function allLanguage() {
  let b = document.querySelectorAll(".list-language");

  countlanguage.textContent = b.length === 0 ? ":" : b.length;

  // let allLists = document.querySelectorAll(".list-work");
  // if (allLists.length > 0) {
  //   F_work.style.marginTop = "20px";
  //   clearButton.style.pointerEvents = "auto";
  //   return;
  // }
  // F_work.style.marginTop = "0px";
  // clearButton.style.pointerEvents = "none";
}

//add task while we put value in text area and press enter
bt_work.addEventListener("click", () => {
  // onclick="handleStatus(this)
  // onclick="deleteTask(this)
  // ${inputVal}
  // members[0][name]
  // document.getElementById("W_depart").input.name = "w1-1";
  var  x = 0;
  let liTag = ` 
         <li class="list-work pending" name="row[]">
            <i class="uil uil-trash" onclick="deleteWork(this)"></i>
            <div class="input-control">
                <label for="phone" class="form-label">ตำแหน่งงาน</label>
                <input type="text" class="form-control" name="W[]" id="W_depart" placeholder="กรอกข้อมูลตำแหน่งงานของคุณ">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone" class="form-label">บริษัท</label>
                <input type="text" class="form-control" name="W[]" id="W_company" placeholder="กรอกข้อมูลบริษัทของคุณ">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone" class="form-label">ที่ตั้ง</label>
                <input type="text" class="form-control" name="W[]" id="W_location" placeholder="กรอกข้อมูลที่ตั้งของคุณ">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control-area">
                <label for="W_nature" class="form-label">ลักษณะงาน</label>
                <textarea class="form-control" name="W[]" id="W_nature" rows="3" placeholder="กรอกข้อมูลลักษณะงานของคุณ"></textarea>
                <div id="error" class="error"></div>
            </div>
            <div id="conDate" class"con-flex">
                <div class="input-field">
                    <label>วันที่เริ่ม</label>
                    <input id="W_startDate" type="date" placeholder="Enter your issued date" >
                </div>
                <div id="Sdate" class="input-field checkdate">
                <label id="End">วันสิ้นสุด</label>
                <input id="W_EndDate" type="date" placeholder="Enter expiry date">
                </div>
            </div>
            <div  class="conCheck">
                <input id="c" type="checkbox" >
                <label for="c" onclick="themeChange()"> ปัจจุบันทำงานอยู่</label><br>
            </div>
          <hr/>
        </li>
        `;
        console.log("intput.value"); 
  F_work.insertAdjacentHTML("beforeend", liTag); //inserting li tag inside the todolist div
  allwork();

});
bt_language.addEventListener("click", () => {
  // onclick="handleStatus(this)
  // onclick="deleteTask(this)
  // ${inputVal}
  // members[0][name]

  let liTag = ` 
         <li class="list-language pending" name="">
            <i class="uil uil-trash-alt" onclick="deletelanguage(this)"></i>
            <div id="grid" class="input-control-dropdown">
                <div class="form-label">
                    <input type="text" class="form-control" name="More_input" id="W_depart" placeholder="ภาษา">
                    <div id="error" class="error"></div>
                </div>
                <label class="form-label">พูด</label>
                <select id=workplace name="More_speak" class="form-select" aria-label="Default select example">
                    <option value="" selected disabled hidden>ระบุ</option>
                    <option>ได้</option>
                    <option>ไม่ได้</option>
                </select>
                <label class="form-label">อ่าน</label>
                <select id=workplace name="More_read" class="form-select" aria-label="Default select example">
                    <option value="" selected disabled hidden>ระบุ</option>
                    <option>ได้</option>
                    <option>ไม่ได้</option>
                </select>
                <label class="form-label">เขียน</label>
                <select id=workplace name="More_write" class="form-select" aria-label="Default select example">
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
  F_language.insertAdjacentHTML("beforeend", liTag); //inserting li tag inside the todolist div
  workprocess();
  
  

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