<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bootstrap PDF Example</title>
</head>
<body>

<div id="pdfContent">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Group 1</h2>
                <p id="text1">This is some text in the first group.</p>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary" onclick="downloadPDF()">Download PDF</button>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table 1</h5>
                        <table id="table1" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Header 1</th>
                                <th>Header 2</th>
                                <th>Header 3</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Row 1</td>
                                <td>Row 1</td>
                                <td>Row 1</td>
                            </tr>
                            <tr>
                                <td>Row 2</td>
                                <td>Row 2</td>
                                <td>Row 2</td>
                            </tr>
                            <tr>
                                <td>Row 3</td>
                                <td>Row 3</td>
                                <td>Row 3</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Image 1</h5>
                        <img id="image1" src="synergy.png" class="img-fluid" alt="Image 1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Your existing content (Text, Table, Image) goes here -->
</div>


<script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>


<script>
    function downloadPDF() {
        // Options for html2pdf
        var options = {
            margin: 10,
            filename: 'group1.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        };

        // Element to be captured in the PDF
        var element = document.getElementById('table1');
        // var element2 = document.getElementById('text1');
        // var element3 = document.getElementById('image1');

        // // Use html2pdf to generate the PDF
        // element.innerHTML += element2.innerHTML;
        // element.innerHTML += element3.innerHTML;

        // Use html2pdf to generate the PDF
        html2pdf(element, options);
    }
</script>



</body>
</html>


