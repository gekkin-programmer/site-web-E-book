    document.querySelectorAll('.remove-item').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            this.closest('.product-item').remove();
            updatePrices();
        });
    });
    
    // Update all prices
    function updatePrices() {
        let subtotal = 0;
        const taxRate = 0.24; // 24% tax
        
        // Calculate item totals and subtotal
        document.querySelectorAll('.product-item').forEach(item => {
            const price = parseFloat(item.dataset.price);
            const quantity = parseInt(item.querySelector('.quantity').textContent);
            const itemTotal = price * quantity;
            
            item.querySelector('.item-total').textContent = itemTotal.toFixed(2);
            subtotal += itemTotal;
        });
        
        // Calculate tax and total
        const tax = subtotal * taxRate;
        const total = subtotal + tax;
        
        // Update summary
        document.querySelector('.subtotal').textContent = '$' + subtotal.toFixed(2);
        document.querySelector('.tax').textContent = '$' + tax.toFixed(2);
        document.querySelector('.total').textContent = '$' + total.toFixed(2);
    }
    
// Show success modal
document.querySelector('.checkout-btn').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('successModal').style.display = 'flex';
});

// Close modal handlers
document.querySelector('.success-modal-overlay').addEventListener('click', function(e) {
    if (e.target === this) {
        this.style.display = 'none';
    }
});

document.querySelector('.continue-shopping').addEventListener('click', function() {
    window.location.href = '/products'; // Change to your products page
});

document.querySelector('.view-order').addEventListener('click', function() {
    window.location.href = '/orders/12345'; // Change to actual order page
});



   
 
 
            