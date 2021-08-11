function filter(ambito)
{
    if (ambito === 3) {
        const municipales=document.getElementsByClassName('municipal');
        municipales.style.display='none';
    }
    else if(ambito === 4){
        const estatales=document.getElementsByClassName('estatal');
        estatales.style.display='none';

    }
}
