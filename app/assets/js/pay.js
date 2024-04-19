const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_20330f92b800b6b2692b9742f52c70f1aab84ffd', // Replace with your public key
    email: document.getElementById('email').value,
    firstname: document.getElementById('first_name').value,
    lastname: document.getElementById('last_name').value,
    amount: document.getElementById('amount').value * 100,
    currency: 'NGN',
    ref: 'REF_'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    metadata: {
      custom_fields: [
        {
        display_name: "Subscription Plan",
        variable_name: "subscription_plan",
        value: document.getElementById('subscription_plan').value
        },
        {
          display_name: "Diet",
          variable_name: "diet",
          value: document.getElementById('diet').value
        }
      ]
    },
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      window.location = "./verify_basic_transaction?reference=" + response.reference; // Verify transaction Reference
    }
  });
  handler.openIframe();
}