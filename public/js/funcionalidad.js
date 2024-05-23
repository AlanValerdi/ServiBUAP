var dropdowns = document.querySelectorAll('.opener');

dropdowns.forEach(function(dropdown) {
    dropdown.addEventListener('click', function() {
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
});


var toggleButton = document.querySelector('.toggle-button');
var sidebar = document.getElementById('sidebar');

toggleButton.addEventListener('click', function() {
    if (sidebar.style.marginLeft === '0px') {
        sidebar.style.marginLeft = '-420px';
        toggleButton.style.left = '10px';
    } else {
        sidebar.style.marginLeft = '0px';
        toggleButton.style.left = '420px';
    }
});

