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