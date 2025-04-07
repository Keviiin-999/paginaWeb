document.addEventListener('DOMContentLoaded', () => {
    const countdownElement = document.getElementById('countdown');
    let timeLeft = 3600; // 1 hour in seconds

    const updateCountdown = () => {
        let hours = Math.floor(timeLeft / 3600);
        let minutes = Math.floor((timeLeft % 3600) / 60);
        let seconds = timeLeft % 60;

        countdownElement.textContent = `${hours.toString().padStart(2, '0')}h:${minutes.toString().padStart(2, '0')}m:${seconds.toString().padStart(2, '0')}s`;
        timeLeft--;

        if (timeLeft >= 0) {
            setTimeout(updateCountdown, 1000);
        }
    };

    updateCountdown();

    const cartCountElement = document.getElementById('cart-count');
    let cartCount = parseInt(cartCountElement.textContent);

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const product = button.getAttribute('data-product');
            const price = button.getAttribute('data-price');
            
            fetch('web/add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ product, price })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    cartCount++;
                    cartCountElement.textContent = cartCount;
                } else {
                    alert('Error al agregar al carrito');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });

    const loginModal = document.getElementById('login-modal');
    const loginButton = document.getElementById('login-button');
    const closeModal = document.getElementsByClassName('close')[0];

    loginButton.addEventListener('click', () => {
        loginModal.style.display = 'block';
    });

    closeModal.addEventListener('click', () => {
        loginModal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target == loginModal) {
            loginModal.style.display = 'none';
        }
    });
});
