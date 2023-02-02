function exportPDF() {
    var print = document.getElementById('print');

    html2pdf(print, {
        margin:         0,
        filename:       'test.pdf',
        image:          { type: 'pdf', quality: 0.98 },
        html2canvas:    { scale: 2 },
        jsPDF:          { unit: 'in', format: 'letter', orientation: 'portrait' }
    });
};

var canvas = document.getElementById("signature-pad");

var signaturePad = new SignaturePad(canvas, {
    backgroundColor: 'rgb(250,250,250)',
});

