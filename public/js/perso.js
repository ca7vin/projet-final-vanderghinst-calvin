function chercher(){
    var input, filter, monpost, monitem, montitre, i, contenu;
    input = document.getElementById('monInput');
    filter = input.value.toUpperCase();
    monpost = document.getElementById('monpost');
    monitem = document.getElementsByClassName('classic-item');

    for(i = 0; i < monitem.length; i++){
        montitre = monitem[i].getElementsByTagName('a')[1];
        contenu = montitre.textContent || montitre.innerText;
        if(contenu.toUpperCase().indexOf(filter) > -1){
            monitem[i].style.display = "block";
        } else {
            monitem[i].style.display = "none";
        }
    }
}