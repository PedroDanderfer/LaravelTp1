const d = document;

let navPerfilBtn = d.getElementById('navPerfilBtn');

navPerfilBtn.addEventListener('click', displayPerfilMenu);

function displayPerfilMenu(){

    let navPerfil = d.getElementById('navPerfilMenu');

    if(window.screen.width > 900){

        console.log(navPerfil.getBoundingClientRect().top);
        
        if(navPerfil.getBoundingClientRect().top < 0){
        
            navPerfil.style.transform = 'translateY(0)';
    
        }else{
            
            navPerfil.style.transform = 'translateY(-100vh)';
    
        }
    
        return navPerfil.style.transition = '0.5s';
        
    }else{
        
        return false;

    }
    
}