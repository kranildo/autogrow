<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<head> 
    <title>Calculator</title>
    <!-- Link to external CSS file for styling -->
    <link href="./css/calculator.css" rel="stylesheet">

 </head>

<body>
    <div class="container mt-5">
        <form>
            <div class="row">
                <div class="col-md-8">
                    <!-- Description of the calculator -->
                    <p class="form-text calculator-description">To get a better understanding of what your cost and return on investment (ROI) would be depending on your industry, successful conversions, and budget, check out the calculator below.</p>

                    <div class="row">
                        <div class=" col-md-6">
                            <div class="mb-3">
                                <label for="industry" class="form-label label">Your industry</label>
                                <!-- Description for selecting industry -->
                                <p class="form-text description">Choose your industry, or pick Average if you can't find it.</p>
                                <!-- Dropdown for selecting industry -->
                                <select id="industry" class="form-select-border form-select">
                                    <option selected disabled>Select Industry</option>
                                    <option value="technology">Technology</option>
                                    <option value="average">Average</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="mb-3">
                                <label for="dealSize" class="form-label label">Average Deal Size: $<span id="dealSizeText"></span></label>
                                <!-- Description for selecting average deal size -->
                                <p class="form-text description">Choose the average size of your deals.</p>
                                <!-- Range input for selecting average deal size -->
                                <input type="range" class="form-range" min="1000" max="10000" step="100" value="1000" id="dealSize">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col-md-6">
                            <div class="mb-3">
                                <label for="prospects" class="form-label label">Number of B2B Prospects: <span id="prospectsText"></span></label>
                                <!-- Description for selecting number of B2B prospects -->
                                <p class="form-text description">Choose the number of prospects you want to engage each month.</p>
                                <!-- Range input for selecting number of B2B prospects -->
                                <input type="range" class="form-range" min="1" max="36" id="prospects">
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="mb-3">
                                <label for="closeRatio" class="form-label label">Close Ratio (after appointment): <span id="closeRatioText"></span>%</label>
                                <!-- Description for selecting close ratio -->
                                <p class="form-text description">To calculate this number, divide the number of sales you made by the number of quotes you sent out.</p>
                                <!-- Range input for selecting close ratio -->
                                <input type="range" class="form-range" min="1" max="100" id="closeRatio">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <!-- Description for the card -->
                        <label class="form-label label">B2B lead generation that sees your business through</label>
                        <!-- Card displaying lead generation value -->
                        <div class="card">
                            <span class="year-data">$<span name="valueLeadGeneration" id="valueLeadGeneration"></span> / Year</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <div class="card">
                                <!-- Output for approx. number of appointments booked monthly -->
                                <output id="appointments" class="approx-data">9</output>
                                <!-- Description for approx. number of appointments -->
                                <label for="appointments" class="form-label appointments-description">Approx. number of appointments booked monthly</label>
                            </div>
                        </div>

                        <div class="mb-3 col-md-6">
                            <div class="card">
                                <!-- Output for return on investment -->
                                <output id="roi" class="approx-data"><span id="closeRatioSpan"></span>%</output>
                                <!-- Description for return on investment -->
                                <label for="roi" class="form-label roi-description">Return on Marketing Investment</label>
                            </div>
                        </div>
                        <!-- Additional description -->
                        <p class="form-text description">Each model offers flexible pricing to fit your lead generation needs and stay within the limits of your budget.</p>

                    </div>
                </div>
            </div>
        </form>
        <!-- Button to view products -->
        <div class="text-center">
            <a href="./products" class="btn btn-product mb-3">View Products</a>
        </div>
    </div>

    <!-- Link to external JavaScript file -->
    <script src="./js/calculator.js"></script> 
</body>
<?= $this->endSection() ?>
