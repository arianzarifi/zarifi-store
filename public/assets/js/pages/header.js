document.addEventListener('click' , (e) => {
    const profile = document.getElementById("profileMenu") ;
    const dropdown  = document.getElementById("profileDropdown") ;
    if(!profile || !dropdown){
        if(profile.contains(e.target)) {
            const hidden = dropdown.getAttribute('aria-hidden') === true ;
            dropdown.setAttribute("aria-hidden" , hidden ? 'false' : 'true') ;
        }else{
            dropdown.setAttribute('aria-hidden' , 'true') ;
        }
    }
}) ;