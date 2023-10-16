const description = document.querySelector('.description');
const documents = document.querySelector('.documents');
const prerequisite = document.querySelector('.prerequisite');
const who_need = document.querySelector('.who_need');

description.addEventListener('click', () => {
    let progress_phase = document.getElementById('progress-phase');
    progress_phase.value = 10;
})

documents.addEventListener('click', () => {
    let progress_phase = document.getElementById('progress-phase');
    progress_phase.value = 35;
})

prerequisite.addEventListener('click', () => {
    let progress_phase = document.getElementById('progress-phase');
    progress_phase.value = 65;
})

who_need.addEventListener('click', () => {
    let progress_phase = document.getElementById('progress-phase');
    progress_phase.value = 100;
})