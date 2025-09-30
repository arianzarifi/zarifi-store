function previewImage(input, previewId){
    const file = input.files[0];
    if(file){
      const reader = new FileReader();
      reader.onload = e => {
        document.getElementById(previewId).src = e.target.result;
      }
      reader.readAsDataURL(file);
    }
  }

  document.getElementById('banner1').addEventListener('change', function(){
    previewImage(this, 'preview1');
  });
  document.getElementById('banner2').addEventListener('change', function(){
    previewImage(this, 'preview2');
  });
  document.getElementById('banner3').addEventListener('change', function(){
    previewImage(this, 'preview3');
  });