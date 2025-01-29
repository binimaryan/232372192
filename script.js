document.getElementById('toggleCertifications').addEventListener('click', function() {
    const certificationsList = document.getElementById('certificationsList');
    if (certificationsList.style.display === 'none') {
        certificationsList.style.display = 'block';
        this.textContent = 'Hide Certifications';
    } else {
        certificationsList.style.display = 'none';
        this.textContent = 'Show Certifications';
    }
});