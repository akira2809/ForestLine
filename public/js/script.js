document.getElementById('openPopupLink').addEventListener('click', function(event) {
    event.preventDefault(); // Ngăn không cho link điều hướng
    document.getElementById('popup').style.display = 'flex';
});

document.getElementById('closePopupBtn').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
});
