//Getting all required elements
const inputField = document.querySelector(".input-field textarea"),
  F_work = document.querySelector(".formLists"),
  F_language = document.querySelector(".formLists-language"),
  F_talent = document.querySelector(".formLists-talent"),
  F_checkBox = document.querySelector("#Sdate"),
  countWork = document.querySelector(".count-num"),
  countlanguage = document.querySelector(".count-language"),
  bt_work = document.querySelector(".bt-work-addform"),
  bt_language = document.querySelector(".bt-language-addform"),
  bt_talent = document.querySelector(".bt-talent-addform");


function themeChange() {
  document.getElementById('Sdate').classList.toggle('checkdateClose');
  document.getElementById("dateEnd").value = "";
}

function allwork() {
  let a = document.querySelectorAll(".list-work");

  countWork.textContent = a.length === 0 ? ":" : a.length;

  let allLists = document.querySelectorAll(".list-work");
  if (allLists.length > 0) {
    F_work.style.marginTop = "20px";
    return;
  }
  F_work.style.marginTop = "0px";
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
  var x = 0;
  let liTag = ` 
         <li class="list-work pending" name="row[]">
            <i class="uil uil-trash" onclick="deleteWork(this)"></i>
            <div class="input-control">
                <label for="phone" class="form-label">??????????????????????????????</label>
                <input type="text" class="form-control" name="W[]" placeholder="??????????????????????????????????????????????????????????????????????????????">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone" class="form-label">??????????????????</label>
                <input type="text" class="form-control" name="W[]" placeholder="??????????????????????????????????????????????????????????????????">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone" class="form-label">?????????????????????</label>
                <input type="text" class="form-control" name="W[]" placeholder="?????????????????????????????????????????????????????????????????????">
                <div id="error" class="error"></div>
            </div>
            <div class="input-control-area">
                <label for="W_nature" class="form-label">???????????????????????????</label>
                <textarea class="form-control" name="W[]" rows="3" placeholder="???????????????????????????????????????????????????????????????????????????"></textarea>
                <div id="error" class="error"></div>
            </div>
            <div id="conDate" class"con-flex">
                <div class="input-field">
                    <label>?????????????????????????????????</label>
                    <input name="W[]" type="date" placeholder="Enter your issued date" >
                </div>
                <div id="Sdate" class="input-field checkdate">
                    <label >??????????????????????????????</label>
                    <input id="dateEnd" name="W[]" type="date" placeholder="Enter expiry date">
                </div>
            </div>
            <div  class="conCheck">
                <label>
                  <input onclick="themeChange()" type="checkbox" name="W_check">
                  ???????????????????????????????????????????????????
                </label>
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
                    <input type="text" class="form-control" name="Lmore[]" placeholder="????????????">
                    <div id="error" class="error"></div>
                </div>
                <label class="form-label">?????????</label>
                <select id=workplace name="Lmore[]" class="form-select" aria-label="Default select example">
                    <option value="" selected disabled hidden>????????????</option>
                    <option>?????????</option>
                    <option>??????????????????</option>
                </select>
                <label class="form-label">????????????</label>
                <select id=workplace name="Lmore[]" class="form-select" aria-label="Default select example">
                    <option value="" selected disabled hidden>????????????</option>
                    <option>?????????</option>
                    <option>??????????????????</option>
                </select>
                <label class="form-label">???????????????</label>
                <select id=workplace name="Lmore[]" class="form-select" aria-label="Default select example">
                    <option value="" selected disabled hidden>????????????</option>
                    <option>?????????</option>
                    <option>??????????????????</option>
                </select>
            <div id="error" class="error"></div>
            </div>
          <hr/>
        </li>
        `;
  console.log("intput.value");
  F_language.insertAdjacentHTML("beforeend", liTag); //inserting li tag inside the todolist div



});

bt_talent.addEventListener("click", () => {
  // onclick="handleStatus(this)
  // onclick="deleteTask(this)
  // ${inputVal}
  // members[0][name]

  let liTag = ` 
         <li class="list-talent pending">
            <i class="uil uil-trash-alt" onclick="deletelanguage(this)"></i>
            <div class="input-control-dropdown">
                <div class="form-label">
                    <input type="text" class="form-control" name="Tmore[]" placeholder="?????????????????????????????????????????????">
                    <div id="error" class="error"></div>
                </div>
                <select name="Tmore[]" class="form-select" aria-label="Default select example">
                    <option value="" selected disabled hidden>????????????</option>
                    <option>???????????????????????????</option>
                    <option>???????????????</option>
                    <option>??????????????????</option>
                </select>
            <div id="error" class="error"></div>
            </div>
          <hr/>
        </li>
        `;
  console.log("intput.value");
  F_talent.insertAdjacentHTML("beforeend", liTag); //inserting li tag inside the todolist div



});





function oncheckBox(e) {
  C = e.checked;
  if (e.checked) {
    // ant = e.querySelector("input-field");
    // document.getElementById('Sdate').classList.toggle('checkdateClose');
    // document.getElementById('Sdate').classList.toggle('checkdateClose');
    document.getElementById("dateEnd").value = "";
    console.log(C);
  } else {
    // document.getElementById('Sdate').classList.toggle('checkdateClose');
    // document.getElementById("dateEnd").reset();
    document.getElementById("dateEnd").value = "";
    // document.getElementById('Sdate').classList.toggle('checkdate');
    console.log(C); 
  }
};









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

function deletedateEnd(e) {
  e.parentElement.remove();
}

function deletelanguage(e) {
  e.parentElement.remove(); //getting parent element and remove it
  allLanguage();
}