<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Classroom Seat Generator</title>
  <link rel="icon" type="image/png" href="logo.png"> 
    <link rel="stylesheet" href="">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
</head>
<style>
    /*==========================
        ROOT
===========================*/

:root{

    --primary:#2563eb;
    --primary-dark:#1d4ed8;

    --male:#dbeafe;
    --female:#fce7f3;

    --bg:#f8fafc;
    --card:#ffffff;

    --text-primary:#0f172a;
    --text-secondary:#64748b;

    --border:#e2e8f0;

    --shadow:
    0 4px 20px rgba(15,23,42,.05);

    --shadow-hover:
    0 10px 30px rgba(15,23,42,.08);

    --radius:18px;

    --transition:.35s;

}

/*==========================
        RESET
===========================*/

*{

    margin:0;
    padding:0;
    box-sizing:border-box;

}

body{
  font-family: "Manrope", sans-serif;
    background:var(--bg);

    color:var(--text-primary);

}

.container{

    width:min(1300px,90%);
    margin:auto;

}

/*==========================
        HEADER
===========================*/

.header{

    background:white;

    border-bottom:
    1px solid var(--border);

    padding:20px 0;

}
.logo{

    display:flex;

    align-items:center;

    gap:14px;

}

.logo img{

    width:58px;

    height:58px;

    object-fit:contain;

}

.logo-text{

    display:flex;

    flex-direction:column;

    line-height:1.1;

}

.logo-text h2{

    font-size:1.15rem;

    font-weight:800;

    color:var(--text-primary);

}

.logo-text span{

    font-size:.82rem;

    color:var(--text-secondary);

    font-weight:600;

    letter-spacing:.5px;

}
/*==========================
        DASHBOARD
===========================*/

.dashboard{

    display:grid;

    grid-template-columns:
    360px 1fr;

    gap:30px;

    margin-top:40px;

    margin-bottom:40px;

}

/*==========================
      SETTINGS PANEL
===========================*/

.settings-panel{

    background:var(--card);

    padding:30px;

    border-radius:var(--radius);

    box-shadow:var(--shadow);

    border:1px solid var(--border);

}

.panel-header{

    display:flex;

    align-items:center;

    gap:12px;

    margin-bottom:25px;

}

.panel-header i{

    color:var(--primary);

    font-size:1.5rem;

}

.form-group{

    margin-bottom:20px;

}

.form-group label{

    display:block;

    margin-bottom:8px;

    font-weight:600;

}

input,
select,
textarea{

    width:100%;

    border:1px solid var(--border);

    border-radius:12px;

    padding:14px;

    font-size:.95rem;

    outline:none;

}

textarea{

    min-height:180px;

    resize:none;

}

.generate-btn{

    width:100%;

    border:none;

    padding:15px;

    border-radius:14px;

    background:var(--primary);

    color:white;

    font-size:1rem;

    font-weight:600;

    cursor:pointer;

    transition:var(--transition);

}

.generate-btn:hover{

    background:var(--primary-dark);

}



/*==========================
      TOOLBAR ANIMATION
===========================*/

@keyframes fadeDown{

    from{

        opacity:0;

        transform:translateY(-15px);

    }

    to{

        opacity:1;

        transform:translateY(0);

    }

}
.teacher-desk{

    width:280px;

    margin:0 auto 40px;

    text-align:center;

    padding:16px;

    background:#1e293b;

    color:white;

    border-radius:14px;

    font-weight:600;

}
.preview-panel{

    background:var(--card);

    border:1px solid var(--border);

    border-radius:var(--radius);

    padding:30px;

    box-shadow:var(--shadow);

}

.preview-header{

    margin-bottom:25px;

}

.preview-header h2{

    margin-bottom:6px;

}

.preview-header p{

    color:var(--text-secondary);

}

.print-info{

    text-align:center;
    display: none;
    margin-bottom:25px;
   
}

.print-info h2{

    margin-bottom:8px;

}

.print-info p{

    color:#555;

}
/*==========================
      PREVIEW TOOLBAR
===========================*/

.preview-toolbar{

    display:none;

    justify-content:space-between;

    align-items:flex-start;

    gap:18px;

    margin-bottom:28px;

}

.preview-toolbar.active{

    display:flex;

    animation:fadeDown .35s ease;

}

@keyframes fadeDown{

    from{

        opacity:0;

        transform:translateY(-12px);

    }

    to{

        opacity:1;

        transform:translateY(0);

    }

}


/*==========================
        SEARCH BOX
===========================*/

.search-box{

    position:relative;
    display:flex;
    flex:1;
    flex-direction: column;
}
.search-input{

    position:relative;

    width:100%;

}
.search-box i{

    position:absolute;

    left:16px;

    top:50%;

    transform:translateY(-50%);

    color:var(--text-secondary);

    font-size:1.1rem;

}

.search-box input{

    width:100%;

    padding:14px 18px 14px 46px;

    border:1px solid var(--border);

    border-radius:12px;

    background:var(--bg);

    color:var(--text-primary);

    font-size:.95rem;

    outline:none;

    transition:var(--transition);

}

.search-box input::placeholder{

    color:var(--text-secondary);

}

.search-box input:focus{

    border-color:var(--primary);

    box-shadow:0 0 0 4px rgba(37,99,235,.15);

}

.search-box input:disabled{

    opacity:.6;

    cursor:not-allowed;

}


/*==========================
        SEARCH RESULT
===========================*/

.seat.found{

    border:3px solid #FFD54A;

    box-shadow:0 0 18px rgba(255,213,74,.55);

    animation:pulse .8s infinite alternate;

}

@keyframes pulse{

    from{

        transform:scale(1);

    }

    to{

        transform:scale(1.05);

    }

}

/*==========================
      SEARCH RESULT
===========================*/

.search-result{

    display:none;

    margin-top:10px;

    padding:12px 15px;

    border-radius:10px;

    background:var(--card);

    border:1px solid var(--border);

    font-size:.9rem;

    color:var(--text-primary);

    animation:fadeDown .25s ease;
    width: 100%;

}

.search-result.show{

    display:block;

}

.search-result.success{

    border-left:4px solid #22c55e;

}

.search-result.error{

    border-left:4px solid #ef4444;

}
/*==========================
      TOOLBAR ACTIONS
===========================*/

.toolbar-actions{

    display:flex;

    align-items:center;

    gap:12px;

}

.toolbar-actions button{

    display:flex;

    align-items:center;

    justify-content:center;

    gap:8px;

    border:none;

    padding:13px 18px;

    border-radius:12px;

    background:var(--primary);

    color:#fff;

    font-size:.9rem;

    font-weight:600;

    cursor:pointer;

    transition:var(--transition);

}

.toolbar-actions button:hover{

    background:var(--primary-dark);

    transform:translateY(-2px);

}

.toolbar-actions button:active{

    transform:translateY(0);

}

.toolbar-actions button i{

    font-size:1.05rem;

}


/*==========================
      CLASSROOM GRID
===========================*/

.classroom-grid{

    display:grid;

    grid-template-columns:
    repeat(8,1fr);

    gap:14px;

}

.seat{
   padding:8px;
  overflow: hidden;
    aspect-ratio:1;

    border:2px solid var(--border);

    border-radius:14px;

    background:white;

    display:flex;

    justify-content:center;

    align-items:center;

    transition:var(--transition);

    cursor:pointer;

    position:relative;

}

.seat:hover{

    transform:translateY(-5px);

    border-color:var(--primary);

    box-shadow:var(--shadow-hover);

}

.seat-number{

    font-size:.95rem;

    font-weight:700;

    color:var(--text-secondary);

}

.seat-card{

    display:flex;

    flex-direction:column;

    justify-content:center;

    align-items:center;

    gap:6px;

    width:100%;

    height:100%;
}
.seat-label{

    font-size:.72rem;

    font-weight:800;

    color:var(--text-secondary);

    letter-spacing:.6px;

    text-transform:uppercase;

}
.seat-initial{

    width:46px;

    height:46px;

    border-radius:50%;

    display:flex;

    justify-content:center;

    align-items:center;

    font-size:1rem;

    font-weight:700;

    background:white;

    color:var(--text-primary);

    box-shadow:0 2px 8px rgba(0,0,0,.08);

}

.seat-name{

    font-size:.75rem;

    font-weight:600;

    text-align:center;

    color:var(--text-primary);

}
.student-seat{

    display:flex;

    justify-content:center;

    align-items:center;

    width:100%;

    height:100%;

}

.initials{

    font-size:1rem;

    font-weight:700;

}

.seat.male .seat-initial{

    background:#dbeafe;

    color:#2563eb;

}
.seat.female .seat-initial{

    background:#fce7f3;

    color:#db2777;

}
/*==========================
      RESPONSIVE
===========================*/

@media(max-width:1000px){

    .dashboard{

        grid-template-columns:1fr;

    }

    .preview-toolbar{

        flex-direction:column;

        align-items:stretch;

    }

    .toolbar-actions{

        width:100%;

        justify-content:space-between;

    }

    .toolbar-actions button{

        flex:1;

    }

}

@media(max-width:700px){

    .classroom-grid{

        grid-template-columns:
        repeat(4,1fr);

    }

    .teacher-desk{

        width:100%;

    }
        .preview-toolbar{

        flex-direction:column;

        align-items:stretch;

    }

    .toolbar-actions{

        width:100%;

        justify-content:space-between;

    }

    .toolbar-actions button{

        flex:1;

        justify-content:center;

    }

}

@media(max-width:480px){

    .settings-panel,
    .preview-panel{

        padding:20px;

    }
    .toolbar-actions{

        flex-direction:column;

    }

    .toolbar-actions button{

        width:100%;

    }

    .classroom-grid{

        gap:10px;

    }

}
/*==========================
        PRINT
===========================*/

@media print{

    body{

        background:#fff;

        color:#000;

    }

    .no-print{

        display:none !important;

    }

    .print-area{

        width:100%;

        max-width:100%;

        margin:0;

        padding:0;

        box-shadow:none;

        border:none;

    }

    .preview-panel{

        box-shadow:none;

        border:none;

        padding:0;

    }

    .classroom-grid{

        page-break-inside:avoid;

    }

    .seat{

        break-inside:avoid;

    }
    .print-info{
      display:block;
    }

}
</style>
<body>

    <!-- HEADER -->

    <header class="header">

        <div class="container header-content">
<div class="logo">

    <img src="logo.png" alt="Logo">

    <div class="logo-text">

        <h2>Smart Classroom</h2>

        <span>Seat Generator</span>

    </div>

</div>

        </div>

    </header>

    <!-- MAIN -->

    <main class="container">

        <div class="dashboard">

            <!-- LEFT PANEL -->

            <aside class="settings-panel no-print" >

                <div class="panel-header">

                    <i class='bx bx-cog'></i>

                    <h2>Classroom Settings</h2>

                </div>
<div class="form-group">

    <label for="rows">Rows</label>

    <input
        type="number"
        id="rows"
        min="1"
        max="20"
        value="5">

</div>

<div class="form-group">

    <label for="columns">Columns</label>

    <input
        type="number"
        id="columns"
        min="1"
        max="20"
        value="8">

</div>

                <div class="form-group">

                    <label>Arrangement</label>
<select id="arrangement">

    <option value="random">
        Random
    </option>

    <option value="alphabetical">
        Alphabetical
    </option>

    <!---  <option value="male-left-random">
        Male Left • Female Right (Random)
    </option>

  <option value="male-left-alpha">
        Male Left • Female Right (Alphabetical)
    </option>-->

    <option value="alternate-random">
        Alternate Boy/Girl (Random)
    </option>

    <option value="alternate-alpha">
        Alternate Boy/Girl (Alphabetical)
    </option>

</select>
                </div>

                <div class="form-group">

                    <label>Student List</label>

                    <textarea placeholder="Juan Dela Cruz,Male&#10;Maria Santos,Female" id="student-list"></textarea>

                </div>

                <button class="generate-btn" id="generate-btn">

                    <i class='bx bx-shuffle'></i>

                    Generate Seats

                </button>

            </aside>

            <!-- RIGHT PANEL -->

            <section class="preview-panel">
<div class="print-info">

    <h2>Classroom Seating Plan</h2>

    <p id="print-arrangement">

        Arrangement :
        Random

    </p>

    <p id="print-date">

        Generated :
        July 13, 2026

    </p>

</div>
                <div class="preview-header no-print">

                    <h2>Classroom Preview</h2>

                    <p>Live classroom seating layout</p>

                </div>
                <div class="preview-toolbar no-print"  id="preview-toolbar">

    <div class="search-box">

        <div class="search-input">

            <i class='bx bx-search'></i>

            <input
                id="search-student"
                type="text"
                placeholder="Search student...">

        </div>

        <div id="search-result"
             class="search-result">

        </div>

    </div>

    <div class="toolbar-actions">
      <button id="print-btn">Print</button>

        <button id="pdf-btn">PDF</button>

        <button id="png-btn">PNG</button>
    </div>

</div>
<div class="print-area">
                <div class="teacher-desk">

                    Teacher's Desk

                </div>

                <div class="classroom-grid" id="classroom-grid">

                </div>
</div>
            </section>

        </div>

    </main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
/*==========================
      DOM ELEMENTS
===========================*/
const arrangementSelect = document.getElementById("arrangement");
const rowsInput = document.getElementById("rows");
const columnsInput = document.getElementById("columns");

const studentInput = document.getElementById("student-list");
const generateButton = document.getElementById("generate-btn");

const classroomGrid = document.getElementById("classroom-grid");

const previewToolbar =
document.getElementById("preview-toolbar");

const searchInput =
document.getElementById("search-student");
const searchResult =
document.getElementById("search-result");
const printButton =
document.getElementById("print-btn");

const pngButton =
document.getElementById("png-btn");

const pdfButton =
document.getElementById("pdf-btn");


/*==========================
      SHUFFLE ANIMATION
===========================*/

function shuffleAnimation(finalStudents){

    const seats = document.querySelectorAll(".seat");

    const fakeInitials = [

        "AA","BB","CC","DD","EE",
        "FF","GG","HH","II","JJ",
        "KK","LL","MM","NN","OO",
        "PP","QQ","RR","SS","TT",
        "UU","VV","WW","XX","YY","ZZ"

    ];

    generateButton.disabled = true;

    generateButton.textContent = "Generating...";

    let counter = 0;

    const animation = setInterval(()=>{

        seats.forEach(seat=>{

            const randomInitial =

                fakeInitials[

                    Math.floor(

                        Math.random() *

                        fakeInitials.length

                    )

                ];

            seat.innerHTML = `

                <div class="seat-card">

                    <span class="seat-label">

                        ${seat.dataset.label}

                    </span>

                    <div class="seat-initial">

                        ${randomInitial}

                    </div>

                </div>

            `;

        });

        counter++;

        if(counter >= 18){

            clearInterval(animation);

            assignSeats(finalStudents);

            showPreviewToolbar();

            generateButton.disabled = false;

            generateButton.textContent = "Generate Seats";

        }

    },100);

}
/*==========================
      SEAT LABEL
===========================*/

function getSeatLabel(row, column){

    const rowLetter = String.fromCharCode(64 + row);

    return `${rowLetter}${column}`;

}


/*==========================
    GENERATE CLASSROOM
===========================*/

function generateClassroom(){

    const rows = Number(rowsInput.value);
    const columns = Number(columnsInput.value);

    classroomGrid.innerHTML = "";

    classroomGrid.style.gridTemplateColumns =
        `repeat(${columns},1fr)`;

    let seatNumber = 1;

    for(let row = 1; row <= rows; row++){

        for(let column = 1; column <= columns; column++){

            const seat = document.createElement("div");

            seat.className = "seat";

            seat.dataset.row = row;
            seat.dataset.column = column;

            seat.dataset.number = seatNumber;

            seat.dataset.label = getSeatLabel(row,column);

            seat.innerHTML = `

                <div class="seat-card">

                    <span class="seat-label">

                        ${seat.dataset.label}

                    </span>

                </div>

            `;

            classroomGrid.appendChild(seat);

            seatNumber++;

        }

    }

}


/*==========================
      LIVE UPDATE
===========================*/

rowsInput.addEventListener("input",generateClassroom);

columnsInput.addEventListener("input",generateClassroom);


/*==========================
      INITIAL LOAD
===========================*/

generateClassroom();


/*==========================
      GET INITIALS
===========================*/

function getInitials(name){

    const words = name.trim().split(" ");

    if(words.length === 1){

        return words[0].substring(0,2).toUpperCase();

    }

    return (

        words[0][0] +

        words[words.length-1][0]

    ).toUpperCase();

}


/*==========================
      SHORT NAME
===========================*/

function shortenName(name){

    const words = name.split(" ");

    if(words.length < 2){

        return name;

    }

    return `${words[0]} ${words[words.length-1]}`;

}


/*==========================
      STUDENT PARSER
===========================*/

function parseStudents(){

    const lines = studentInput.value
        .trim()
        .split("\n");

    const students = [];

    lines.forEach(line=>{

        if(line.trim()==="") return;

        const parts = line.split(",");

        if(parts.length !== 2) return;

        students.push({

            name:parts[0].trim(),

            gender:parts[1].trim().toLowerCase(),

            initials:getInitials(parts[0].trim())

        });

    });

    return students;

}


/*==========================
      SHUFFLE ARRAY
===========================*/

function shuffleArray(array){

    const shuffled=[...array];

    for(let i=shuffled.length-1;i>0;i--){

        const j=Math.floor(Math.random()*(i+1));

        [shuffled[i],shuffled[j]]=[shuffled[j],shuffled[i]];

    }

    return shuffled;

}


/*==========================
      ASSIGN SEATS
===========================*/

function assignSeats(students){

    const seats=document.querySelectorAll(".seat");

    seats.forEach(seat=>{

        seat.classList.remove("male","female");

        seat.dataset.name="";
        seat.dataset.gender="";

        seat.innerHTML=`

            <div class="seat-card">

                <span class="seat-label">

                    ${seat.dataset.label}

                </span>

            </div>

        `;

    });

    students.forEach((student,index)=>{

        if(index>=seats.length) return;

        const seat=seats[index];

        seat.dataset.name=student.name;

        seat.dataset.gender=student.gender;

        seat.innerHTML=`

            <div class="seat-card">

                <span class="seat-label">

                    ${seat.dataset.label}

                </span>

                <div class="seat-initial">

                    ${student.initials}

                </div>

                <span class="seat-name">

                    ${shortenName(student.name)}

                </span>

            </div>

        `;

        if(student.gender==="male"){

            seat.classList.add("male");

        }else{

            seat.classList.add("female");

        }

    });

}

/*==========================
    ALPHABETICAL ARRANGEMENT
===========================*/

function alphabeticalArrangement(students){

   return [...students].sort((a,b)=>{

        const surnameA = a.name.trim().split(" ").pop();

        const surnameB = b.name.trim().split(" ").pop();

        return surnameA.localeCompare(surnameB);

    });


}
/*==========================
  MALE LEFT RANDOM


function maleLeftRandomArrangement(students){

    const males = students.filter(student =>
        student.gender === "male"
    );

    const females = students.filter(student =>
        student.gender === "female"
    );

    return [

        ...shuffleArray(males),

        ...shuffleArray(females)

    ];

}===========================*/
/*==========================
  MALE LEFT ALPHABETICAL


function maleLeftAlphabeticalArrangement(students){

    const males = students
        .filter(student => student.gender === "male")
        .sort((a,b)=>a.name.localeCompare(b.name));

    const females = students
        .filter(student => student.gender === "female")
        .sort((a,b)=>a.name.localeCompare(b.name));

    return [

        ...males,

        ...females

    ];

}===========================*/
/*==========================
  ALTERNATE RANDOM
===========================*/

function alternateRandomArrangement(students){

    const males = shuffleArray(

        students.filter(student =>
            student.gender === "male")

    );

    const females = shuffleArray(

        students.filter(student =>
            student.gender === "female")

    );

    const arranged = [];

    while(males.length || females.length){

        if(males.length){

            arranged.push(males.shift());

        }

        if(females.length){

            arranged.push(females.shift());

        }

    }

    return arranged;

}
/*==========================
  ALTERNATE ALPHABETICAL
===========================*/

function alternateAlphabeticalArrangement(students){

    const males = students

        .filter(student =>
            student.gender === "male")
.sort((a,b)=>{

        const surnameA = a.name.trim().split(" ").pop();

        const surnameB = b.name.trim().split(" ").pop();

        return surnameA.localeCompare(surnameB);

    });

     

    const females = students

        .filter(student =>
            student.gender === "female")
.sort((a,b)=>{

        const surnameA = a.name.trim().split(" ").pop();

        const surnameB = b.name.trim().split(" ").pop();

        return surnameA.localeCompare(surnameB);

    });

     

    const arranged = [];

    while(males.length || females.length){

        if(males.length){

            arranged.push(males.shift());

        }

        if(females.length){

            arranged.push(females.shift());

        }

    }

    return arranged;

}

/* Hide on page load */

previewToolbar.classList.remove("active");

searchInput.disabled = true;


/*==========================
      ENABLE TOOLBAR
===========================*/

function enablePreviewToolbar(){

    previewToolbar.classList.add("show");

    searchInput.disabled = false;

}


/*==========================
      PRINT
===========================*/

printButton.addEventListener("click",()=>{

    const occupiedSeats =
    document.querySelectorAll(".seat[data-name]");

    if(occupiedSeats.length===0){

        alert("Generate seats first.");

        return;

    }

    window.print();

});


/*==========================
      DOWNLOAD PNG
===========================*/

pngButton.addEventListener("click",()=>{

    const occupiedSeats =
    document.querySelectorAll(".seat[data-name]");

    if(occupiedSeats.length===0){

        alert("Generate seats first.");

        return;

    }

    html2canvas(classroomGrid,{

        backgroundColor:null,

        scale:2

    }).then(canvas=>{

        const link =
        document.createElement("a");

        link.download="classroom-seating.png";

        link.href=canvas.toDataURL("image/png");

        link.click();

    });

});


/*==========================
      DOWNLOAD PDF
===========================*/

pdfButton.addEventListener("click",()=>{

    const occupiedSeats =
    document.querySelectorAll(".seat[data-name]");

    if(occupiedSeats.length===0){

        alert("Generate seats first.");

        return;

    }

    html2canvas(classroomGrid,{

        backgroundColor:"#ffffff",

        scale:2

    }).then(canvas=>{

        const img =
        canvas.toDataURL("image/png");

        const {jsPDF}=window.jspdf;

        const pdf =
        new jsPDF("landscape","mm","a4");

        const width =
        pdf.internal.pageSize.getWidth();

        const height =
        canvas.height*width/canvas.width;

        pdf.addImage(

            img,

            "PNG",

            10,

            10,

            width-20,

            height

        );

        pdf.save("Classroom-Seating.pdf");

    });

});
/*==========================
        SEARCH
===========================*/

searchInput.addEventListener("input",()=>{

    const keyword =
    searchInput.value.trim().toLowerCase();

    const seats =
    document.querySelectorAll(".seat");

    let foundSeat = null;

    seats.forEach(seat=>{

        seat.classList.remove("found");

    });

    if(keyword===""){

        searchResult.className="search-result";

        searchResult.innerHTML="";

        return;

    }

    seats.forEach(seat=>{

        const name =
        (seat.dataset.name || "").toLowerCase();

        if(name.includes(keyword) && !foundSeat){

            foundSeat = seat;

        }

    });

    if(foundSeat){

        foundSeat.classList.add("found");

        foundSeat.scrollIntoView({

            behavior:"smooth",

            block:"center"

        });

        searchResult.className="search-result show success";

        searchResult.innerHTML = `

            <strong>✓ ${foundSeat.dataset.name}</strong><br>

            Seat: ${foundSeat.dataset.label}

        `;

    }

    else{

        searchResult.className="search-result show error";

        searchResult.innerHTML =

        `❌ No student found.`;

    }

});
/*==========================
    PREVIEW TOOLBAR
===========================*/

function showPreviewToolbar(){

    previewToolbar.classList.add("active");

    searchInput.disabled = false;

}
/*==========================
        GENERATE
===========================*/

generateButton.addEventListener("click",()=>{

    let students = parseStudents();

    if(students.length === 0){
    Swal.fire({

        icon: "warning",

        title: "No Students Found",

        text: "Please add at least one student before generating the seating arrangement.",

        confirmButtonColor: "#2563eb",

        confirmButtonText: "OK"

    });

        return;

    }

    const totalSeats =
        Number(rowsInput.value) *
        Number(columnsInput.value);

    if(students.length > totalSeats){
Swal.fire({

    icon: "error",

    title: "Insufficient Seats",

    text: `Only ${totalSeats} seats are available, but ${students.length} students were entered.`,

    confirmButtonColor: "#2563eb"

});
        return;

    }

    switch(arrangementSelect.value){

        case "random":

            students = shuffleArray(students);

            break;

        case "alphabetical":

            students = alphabeticalArrangement(students);

            break;

  /*=====      case "male-left-random":

            students = maleLeftRandomArrangement(students);

            break;

        case "male-left-alpha":

            students = maleLeftAlphabeticalArrangement(students);

            break;=======*/

        case "alternate-random":

            students = alternateRandomArrangement(students);

            break;

        case "alternate-alpha":

            students = alternateAlphabeticalArrangement(students);

            break;

        default:

            students = shuffleArray(students);

    }
shuffleAnimation(students);
});
</script>
</body>
</html>