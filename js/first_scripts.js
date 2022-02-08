let lemposBusena = false;
let lempa = document.getElementById ('lempute');

function toggleLamp() {
    if (lemposBusena) {
        lempa.src = 'https://www.pinclipart.com/picdir/big/101-1015704_spiral-clipart-light-bulb-light-bulb-off-clipart.png';
    } else {
        lempa.src = 'https://www.pinclipart.com/picdir/big/579-5797390_free-light-bulb-off-light-bulb-filament-clipart.png';
    }
    lemposBusena = !lemposBusena;
}

