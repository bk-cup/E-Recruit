let topHeader = document.querySelector('header')
let lastScrollY = 0
console.log("hide")
window.addEventListener('scroll', () => {
    if (window.scrollY > lastScrollY){
        topHeader.classList.add('hide')
        console.log("เข้าแล้วววววววว")
    }else{
        topHeader.classList.remove('hide')
        console.log("ม่ายยยยยยยยยยย")
    }
    lastScrollY = window.scrollY
})













//selecting all required elements
console.log("Hi")
const dropArea = document.querySelector(".content-input-6 .container")
// drageText = dropArea.dropSelector("header")


let file //this is a global variable and we'll use it inside multiple functions


//If user Drag File Over DragArea
dropArea.addEventListener("dragover", (event)=>{
    event.preventDefault() //preventing from default behaviour
    console.log("File is over DragArea")
    dropArea.classList.add("active")
});

//If user leave dragged File from DrgArea
dropArea.addEventListener("dragleave", ()=>{
    console.log("File is outside from DragArea")
    dropArea.classList.remove("active")
});

//If user drop File on DropArea
dropArea.addEventListener("drop", (event)=>{
    event.preventDefault() //preventing from default behaviour
    //getting user select file and [0] this means if user select mutiple file then we'll select only the frist one
    file = event.dataTransfer.files[0]
    let fileType = file.type //let pull show name is type
    console.log(file.type)

    let validExtenstions =["image/jpeg","image/jpg","image/png"] //adding some vaild imge extensions in array
    if(validExtenstions.includes(fileType)){//classify the type and he only wanted
        let fileReader = new FileReader()//create new FileReader object
        fileReader.onload = ()=>{
            let fileURL = fileReader.result //passing user file source in fileURL variable
            console.log(fileURL)
            let imgTag = '<img src="${fileURL}" alt="">'// createing an img tag and passing user select file source inside src attribute
            //let imgTg =<img src="">
            dropArea.innerHTML = imgTag //adding that created img tag inside dropArea container
        }
        fileReader.readAsDataURL(file)
        // console.log("This is an Imge File")
    }else{
        alert("This is not an Imge File")
        dropArea.classList.remove("active")
    }
});



