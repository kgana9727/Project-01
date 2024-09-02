<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4"> Calculator</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="calculatorForm">
                    <div class="mb-3">
                        <label for="num1" class="form-label">Numerical 1</label>
                        <input type="text" class="form-control" id="num1" placeholder="Enter first number">
                    </div>
                    <div class="mb-3">
                        <label for="num2" class="form-label">Numerical 2</label>
                        <input type="text" class="form-control" id="num2" placeholder="Enter second number">
                    </div>
                    <div class="mb-3">
                        <label for="result" class="form-label">Result</label>
                        <input type="text" class="form-control" id="result" placeholder="Result" readonly>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <button type="button" class="btn btn-primary me-2" onclick="calculate('add')">Add</button>
                        <button type="button" class="btn btn-secondary me-2" onclick="calculate('subtract')">Subtract</button>
                        <button type="button" class="btn btn-success me-2" onclick="calculate('multiply')">Multiply</button>
                        <button type="button" class="btn btn-danger" onclick="calculate('divide')">Divide</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function calculate(operation) {
            // Get the values of the input fields
            var num1 = parseFloat(document.getElementById('num1').value);
            var num2 = parseFloat(document.getElementById('num2').value);
            var result = 0;

            // Perform the calculation based on the operation
            if (!isNaN(num1) && !isNaN(num2)) {
                switch(operation) {
                    case 'add':
                        result = num1 + num2;
                        break;
                    case 'subtract':
                        result = num1 - num2;
                        break;
                    case 'multiply':
                        result = num1 * num2;
                        break;
                    case 'divide':
                        if (num2 !== 0) {
                            result = num1 / num2;
                        } else {
                            alert("Cannot divide by zero!");
                            return;
                        }
                        break;
                }
                // Display the result in the result input field
                document.getElementById('result').value = result;
            } else {
                alert("Please enter valid numbers.");
            }
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
