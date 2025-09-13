function changeImage(thumbnail) {
    document.getElementById('main-image').src = thumbnail.src;
  }

  function addToCart() {
    alert("محصول به سبد خرید اضافه شد!");
  }
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');
  tabBtns.forEach(btn => {
    btn.addEventListener('click' , () => {
        tabBtns.forEach(b => b.classList.remove('active')) ;

        btn.classList.add('active') ;

        const target = btn.dataset.tab;

        tabPanels.forEach(panel => {
            if(panel.id === target){
                panel.classList.add('active') ;
            }else{
                panel.classList.remove('active');
            }
        });
    })
  }) ;
  //comments
  let modal = document.getElementById('commentModal');
  let openBtn = document.querySelector('.add-comment-btn');
  let closeBtn = document.getElementById('closeModal');

  openBtn.addEventListener('click' , () => {
    modal.style.display = 'flex' ;
  });
  closeBtn.addEventListener('click' , () => {
    modal.style.display = 'none';
  });
  window.addEventListener('click' , (e) => {
    if(e.target === modal){
      modal.style.display = 'none';
    }
  });
document.getElementById('sendComment').addEventListener('click' , () =>{
  const text = document.querySelector('textarea').value ;
  if(text.trim()){
    console.log("نظر کاربر:" , text) ;
    modal.style.display = 'none' ;
  }
 
});



const decreaseBtn = document.querySelector('.quantity-decrease');
const increaseBtn = document.querySelector('.quantity-increase');
const quantityInput = document.querySelector('.quantity-wrapper input');
const pricePerUnitElem = document.querySelector('.price'); // قیمت واحد
const totalPriceElem = document.querySelector('.price-details .price-row span:nth-child(2)'); // قیمت کل
const priceTo =document.getElementById('priceTo') ;
// عدد قیمت واحد بدون تومان
let pricePerUnit = parseInt(pricePerUnitElem.textContent.replace(/\D/g, ''));

function updateTotalPrice() {
  let quantity = parseInt(quantityInput.value);
  let total = pricePerUnit * quantity;
  let totalTo =  pricePerUnit * quantity ;
  totalPriceElem.textContent = total.toLocaleString() + " تومان";

  priceTo.textContent = total.toLocaleString() + "تومان" ;

}

decreaseBtn.addEventListener('click', () => {
  let current = parseInt(quantityInput.value);
  if(current > 1) {
    quantityInput.value = current - 1;
    updateTotalPrice();
  }
});

increaseBtn.addEventListener('click', () => {
  let current = parseInt(quantityInput.value);
  quantityInput.value = current + 1;
  updateTotalPrice();
});

// مقدار اولیه قیمت کل
updateTotalPrice();
