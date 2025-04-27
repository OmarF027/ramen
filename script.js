// Versione ultra-semplificata
document.querySelector('.toggle').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.navigation').classList.toggle('active');
});