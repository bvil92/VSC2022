let a = -5;
let b = 0;
let c = -4;
let d = 4;

if (a > b || d < c || d < a || c > b) {
    window.alert('Sankirta neimanoma');
}
else {
    if (c <= a && a <= d) {
        let x = a;
    }
    if (a <= c && a <= d) {
        let x = d;
    }
    if (a <= d && d <= b) {
        let y = d;
    }
    if (c <= b && b <= d) {
        let y = b;
        let atsakymas = '[x ; y]'
    }

    console.log(sprendimas)
:
    'Rasta sankirta: atsakymas';
}




