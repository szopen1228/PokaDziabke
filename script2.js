function exportPDF() {
    var print = document.getElementById('print');

    html2pdf(print, {
        margin:         0,
        filename:       'Protokół przekazania sprzętu.pdf',
        html2canvas:    { scale: 2 },
        jsPDF:          { unit: 'in', format: 'letter', orientation: 'portrait' }
    });
};

function exportPDF2() {
    var print = document.getElementById('print');

    html2pdf(print, {
        margin:         0,
        filename:       'Protokół zdawczy sprzętu.pdf',
        html2canvas:    { scale: 2 },
        jsPDF:          { unit: 'in', format: 'letter', orientation: 'portrait' }
    });
};









const canvas = document.getElementById("signature-pad");
const form = document.querySelector('.signature-pad-from');

function size() 
    {
        document.getElementById("signature-pad").style.width = "280px";
        document.getElementById("signature-pad").style.height = "100px";
    };

const signaturePad = new SignaturePad(canvas, {
    minWidth:  6,
    maxWidth:  8,
});


function show() {
    document.getElementById('sign').style.display = "block";
    document.getElementById('confirmBtn').style.display = "none";
    document.getElementById('signature-pad').style.border = "none";
    document.getElementById('signature-pad').style.background = "#fff";
    canvas.style.width="280px";
    canvas.style.height="100px";
    canvas.style.cursor="not-allowed";
}

function hide() {
    document.getElementById('exportBtn').style.display = "none";
    document.getElementById('backBtn').style.display = "none";
}



var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;

document.getElementById("demo").innerHTML = today;