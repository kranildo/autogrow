<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<head>
    <title>Products</title>
    <link href="./css/products.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="container mt-5">
            <h2 class="text-center mb-4">Products</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ABC</h5>
                            <p class="card-text">Price: $1</p>
                            <button type="button" class="btn btn-yellow btn-product" data-bs-toggle="modal" data-bs-target="#buyModal" >
                                Select
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">BDC</h5>
                            <p class="card-text">Price: $2</p>
                            <button type="button" class="btn btn-yellow btn-product" data-bs-toggle="modal" data-bs-target="#buyModal" >
                                Select
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ACD</h5>
                            <p class="card-text">Price: $3</p>
                            <button type="button" class="btn btn-yellow btn-product" data-bs-toggle="modal" data-bs-target="#buyModal" >
                                Select
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="buyModalLabel">Enter Card Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="paymentForm">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="cardName">Your Name</label>
                                <input type="text" class="form-control" id="cardName" required>
                            </div>
                            <div class="form-group">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number" required>
                            </div>
                            <div class="form-group">
                                <label for="expiryMonth">Expiry Month</label>
                                <input type="text" class="form-control" id="expiryMonth" placeholder="MM" required>
                            </div>
                            <div class="form-group">
                                <label for="expiryYear">Expiry Year</label>
                                <input type="text" class="form-control" id="expiryYear" placeholder="YYYY" required>
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvv" placeholder="Enter CVV" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Buy Now</button>
                        </div>
                        <input type="hidden" id="amount" name="amount">
                        <input type="hidden" id="description" name="description">
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="./" class="btn btn-yellow mb-3 mt-3">Calculator</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/products.js"></script>
</body>
<?= $this->endSection() ?>