const mom = document.getElementById('mom');
const dad = document.getElementById('dad');

const _mom = document.getElementById('desc-mom');
const _dad = document.getElementById('desc-dad');


let t_mom = false;
let t_dad = false;

function repeat(msg, func) {
    Swal.fire({
        title: msg,
        showCancelButton: true,
        confirmButtonText: "Si",
        cancelButtonText: 'No'
    }).then((result) => {
        if(result.isConfirmed) {
            func();
        }
    });
}

mom.addEventListener('click', () => {
    repeat("Eres una Madre?", () => {
        _mom.classList.toggle('active');
    });
})

dad.addEventListener('click', () => {
    repeat("Eres un Padre?", () => {
        _dad.classList.toggle('active');
    });
})

