
var btnClose = document.querySelectorAll('.close'),
    card = document.querySelectorAll('.card'),
    btnAction = document.querySelectorAll('.btn');

    card.forEach(function(e){
        e.addEventListener('click', openCard)
    });

    btnClose.forEach(function(e){
        e.addEventListener('click', closeCard)
    });
    btnAction.forEach(function(e){
        e.addEventListener('click', clickCard)
    });

function closeCard(event)
{
    event.stopPrpagation();
    event.target.closest('.card').classList.add('closed');
}

function openCard(event)
{
    if(event.currentTarget.classList.)
}
