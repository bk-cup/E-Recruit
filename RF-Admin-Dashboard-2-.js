// -------------------- Darkmode ------------------------
const body = document.querySelector("body"),
modeToggle = body.querySelector(".mode-toggle");
modeSelect = body.querySelector(".mode-select");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});
// -----------Select un Select--------------//
modeSelect.addEventListener("click", () =>{
    body.classList.toggle("select");
    if(body.classList.contains("select")){
        localStorage.setItem("mode", "select");
    }else{
        localStorage.setItem("mode", "un select");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})
// -------------------- Darkmode ------------------------

// --------------------- Dropdowm sile bar ---------------------------

// --------------------- Dropdowm sile bar ---------------------------