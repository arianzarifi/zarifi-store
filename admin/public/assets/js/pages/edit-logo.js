document.getElementById('siteLogo').addEventListener('change', function(event){
    const preview = document.getElementById('logoPreview');
    const file = event.target.files[0];
    if(file){
        const reader = new FileReader();
        reader.onload = function(e){
            preview.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});
