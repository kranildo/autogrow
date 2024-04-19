jQuery(document).ready(function ($) { 
    $('.btn-product').click(function () { 
      var card = $(this).closest('.card-body');
       
      var productName = card.find('.card-title').text();
      var productPrice = card.find('.card-text').text().replace('Price: $', '');
       
      $('#amount').val(productPrice);
      $('#description').val(productName);
    });
   
    $("#paymentForm").submit(function (event) {
      event.preventDefault();
      var cardNumber = $("#cardNumber").val();
      var expiryMonth = $("#expiryMonth").val();
      var expiryYear = $("#expiryYear").val();
      var cardName = $("#cardName").val();
      var cvv = $("#cvv").val();
      //The ideal would be to just use the product ID and not send the amount via the form - Felipe
      var amount = $("#amount").val();  
      var description = $("#description").val(); 

      $.post("./payment", {
        amount: amount,
        description: description,
        cardName: cardName,
        cardNumber: cardNumber,
        expiryMonth: expiryMonth,
        expiryYear: expiryYear,
        cvv: cvv,
      })
        .done(function (data) {
          alert("Payment successful!"); 
        })
        .fail(function () {
          alert("Payment failed. Please try again.");
        });
    });
  });
  