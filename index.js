// Managing active page
function setActivePage (num) {
    let list_items = document.getElementsByClassName('btm-nav-li-item');
    for(let i = 0; i < list_items.length; i++) {
        if (list_items[i].classList.contains('active')) {
            list_items[i].classList.remove('active');
            break;    
        }
    }
    if (!list_items[num].classList.contains('active')) {
        list_items[num].classList.add('active');
    }
}

// Valid number of passangers

function passengerNumber(num) {
    if(Math.abs(num) > 0) {
        return Math.abs(num);
    }
    else {
        return 1;
    }
}


// login

const greeting = document.querySelector('.btn-r');

greeting.onclick = () => {
    if(!sessionStorage.name){
        location.href = 'Log_in_page/login.html';
    } else{
        greeting.innerHTML = `logout ${sessionStorage.name}`;  //temp
    }
}

// const logOut = document.querySelector('.logout');

// logOut.onclick = () => {
//     sessionStorage.clear();
//     location.reload();
// }
