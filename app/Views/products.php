<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<head>
    <title>Products</title>
    <!-- Link to external CSS file for styling -->
    <link href="./css/products.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="container mt-5">
            <h2 class="text-center mb-4">Products</h2>
            <div class="row">
                <!-- Product cards -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ABC</h5>
                            <p class="card-text">Price: $1</p>
                            <!-- Button to select a product -->
                            <button type="button" class="btn btn-yellow btn-product" data-bs-toggle="modal" data-bs-target="#buyModal" >
                                Select
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Similar product cards for other products -->
                <!-- ... -->

            </div>
        </div>

        <!-- Modal for entering card details -->
        <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="buyModalLabel">Enter Card Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Form for entering payment details -->
                    <form id="paymentForm">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="cardName">Your Name</label>
                                <input type="text" class="form-control" id="cardName" required>
                            </div>
                            <!-- Similar form fields for card number, expiry, and CVV -->
                            <!-- ... -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- Button to submit payment -->
                            <button type="submit" class="btn btn-success">Buy Now</button>
                        </div>
                        <!-- Hidden input fields for amount and description -->
                        <input type="hidden" id="amount" name="amount">
                        <input type="hidden" id="description" name="description">
                    </form>
                </div>
            </div>
        </div>
        <!-- Button to go back to the calculator -->
        <div class="text-center">
            <a href="./" class="btn btn-yellow mb-3 mt-3">Calculator</a>
        </div>
    </div>

    <!-- Link to jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Link to external JavaScript file -->
    <script src="./js/products.js"></script>
</body>
<?= $this->endSection() ?>
