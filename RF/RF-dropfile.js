const form = document.querySelector("form"),
 fileInput = document.querySelector(".file-input"),
 progressArea = document.querySelector(".progress-area"),
 uploadedArea = document.querySelector(".uploaded-area")

 form.addEventListener("click", ()=>{
    fileInput.click()
 })

//  fileInput.onchange = (e) =>{   //View All Element
//     console.log(e)
//  }

// when selected for search target files
 fileInput.onchange = ({target}) =>{
    // console.log(target.files)
    let file = target.files[0]; //getting file and [0] this means if user has selected multiples files then get first one only
    if(file) { // if file is selected
        let fileName = file.name;   //getting selected file name
        // console.log(fileName)
        if(fileName.length >= 12){ //if filename length is greater or equal to 12 the split the name and add ...
            let splitName = fileName.split('.');
            fileName = splitName[0].substring(0, 12) + "... ." + splitName[1]
        }
        uploadFile(fileName);  //calling uploadFile with passing file name as an argument
    }

}
function uploadFile(name){
    let xhr = new XMLHttpRequest(); // Create new xml obj (AJAX)
    xhr.open("POST" ,"php/RF-dropfile.php"); //sending post request to the specified URL/File
    xhr.upload.addEventListener("progress", ({loaded, total}) =>{
        // console.log(e);
        let fileLoaded = Math.floor((loaded / total) * 100);  //getting pecentage of loaded file size (1to100%)
        let fileTotal = Math.floor(total / 1000);  // getting file size in KB from bytes
        let fileSize;
        //if file size is less than 1024 then add only KB else convert ize into KB to MB
        (fileTotal < 1024) ? fileSize = fileTotal + "KB" : fileSize = (loaded / (1024 * 1024)).toFixed(2) + "MB";
        // console.log(fileLoaded, fileTotal);
        let progressHTML = `<li class="row">
                                <i class="uil uil-file-alt"></i>
                                <div class="content">
                                    <div class="details">
                                        <span class="name">${name} • Uploading</span>
                                        <span class="percent">${fileLoaded}</span>
                                    </div>
                                        <div class="progress-bar">
                                            <div class="progress" style="width: ${fileLoaded}%"></div>
                                        </div>
                                </div>
                            </li>`;
        progressArea.innerHTML = progressHTML;
        if(loaded == total){
            progressArea.innerHTML = "";
            let uploadedHTML = `<li class="row">
                                    <div class="content">
                                        <i class="uil uil-file-alt"></i>
                                        <div class="details">
                                            <span class="name">${name} • Uploading</span>
                                            <span class="size">${fileSize}</span>
                                        </div>
                                    </div>
                                    <i class="uil uil-check"></i>
                                </li>`;
            uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
            
        }
    })
    let formData = new FormData(form); //forData is an object to easily send form data
    xhr.send(formData);  //sending form data to php
}
