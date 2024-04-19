jQuery(document).ready(function ($) {
  
  // Function to handle click event on product buttons
  $('.btn-product').click(function () {

      // Find the closest card body
      var card = $(this).closest('.card-body');

      // Extract product name and price from the card
      var product_name = card.find('.card-title').text();
      var product_price = card.find('.card-text').text().replace('Price: $', '');

      // Set the value of amount and description fields in the form
      $('#amount').val(product_price);
      $('#description').val(product_name);
  });

  // Submit form event handler
  $("#paymentForm").submit(function (event) {

      // Prevent default form submission
      event.preventDefault();

      // Get input values from the form
      var card_number = $("#cardNumber").val();
      var expiry_month = $("#expiryMonth").val();
      var expiry_year = $("#expiryYear").val();
      var card_name = $("#cardName").val();
      var cvv = $("#cvv").val();
      // The ideal would be to just use the product ID and not send the amount via the form - Felipe
      var amount = $("#amount").val();
      var description = $("#description").val();

      // Send payment data to the server using AJAX
      $.post("./payment", {
          amount: amount,
          description: description,
          cardName: card_name,
          cardNumber: card_number,
          expiryMonth: expiry_month,
          expiryYear: expiry_year,
          cvv: cvv,
      })
      .done(function (data) {
          // Display success message if payment is successful
          alert("Payment successful!");
      })
      .fail(function () {
          // Display error message if payment fails
          alert("Payment failed. Please try again.");
      });
  });
});
