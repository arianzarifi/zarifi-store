const minusBtn = document.querySelector(".minus");
const plusBtn = document.querySelector(".plus") ;
const qtyInput = document.querySelector(".quantity input");
const totalPrice = document.getElementById("total-price") ;
const unitPrice = 150000 ;

const toggleBtn = document.getElementById("toggle-btn"); 

plusBtn.addEventListener('click' , () => {
    let qty = parseInt(qtyInput.value) ;
    qtyInput.value = qty + 1;
    updateTotal() ;
});
minusBtn.addEventListener('click' , () => {
    let qty = parseInt(qtyInput.value) ;
    if(qty > 1){
        qtyInput.value = qty + 1 ;
        updateTotal() ;
    }
}) ;
function updateTotal() {
    const qty = parseInt(qtyInput.value) ;
    totalPrice.textContent = (qty * unitPrice).toLocaleString("fa-IR") ;
}
toggleBtn.addEventListener('click' , () => {
    cartItems.classList.toggle("hidden");
    emptyMessage.classList.toggle("hidden") ;
});
const cartItems = document.getElementById('cart-items');
const emptyMsg = document.getElementById('empty-message');

// داده تستی
const items = [
  { title: 'محصول آزمایشی', price: 150000, qty: 1, img: 'https://via.placeholder.com/100' }
];

// اگر آیتم وجود داشت، پیام خالی رو مخفی کن و کارت بساز
if (items.length > 0) {
  emptyMsg.style.display = 'none';

  items.forEach(item => {
    const card = document.createElement('div');
    card.className = 'cart-card';
    card.innerHTML = `
      <img src="${item.img}" alt="${item.title}">
      <div class="info">
        <h2>${item.title}</h2>
        <p class="price">${item.price.toLocaleString()} <span>تومان</span></p>
        <div class="quantity">
          <button class="minus">-</button>
          <input type="text" value="${item.qty}" readonly>
          <button class="plus">+</button>
        </div>
      </div>
    `;
    cartItems.appendChild(card);
  });
}
