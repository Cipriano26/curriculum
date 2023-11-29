
document.addEventListener("DOMContentLoaded", function() {
    var tabs = document.querySelectorAll('.tab-link');

    tabs.forEach(function(tab) {
        tab.addEventListener('click', function(event) {
            event.preventDefault();
            var targetId = tab.getAttribute('data-target');
            hideAllSections();
            document.getElementById(targetId + '-section').style.display = 'block';
        });
    });

    function hideAllSections() {
        var sections = document.querySelectorAll('.tab-content');
        sections.forEach(function(section) {
            section.style.display = 'none';
        });
    }
});
