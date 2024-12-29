const accordionBtns = document.querySelectorAll('.accordion-btn');

accordionBtns.forEach(btn => {
    btn.addEventListener('click', function() {
        const content = this.nextElementSibling;

        this.classList.toggle('active');

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const notifications = JSON.parse(localStorage.getItem('notifications')) || [];

    document.querySelectorAll('.apply-btn').forEach(button => {
        const competitionItem = button.closest('.competition-item');
        const title = competitionItem.querySelector('.competition-title').innerText;

        const isRegistered = notifications.some(notification => notification.title === title);
        if (isRegistered) {
            button.style.backgroundColor = '#ccc';
            button.style.color = '#666';
            button.innerText = 'Sudah Terdaftar';
            button.disabled = true;
        }

        button.addEventListener('click', function () {
            if (!isRegistered) {
                const timestamp = new Date().toLocaleString();
                notifications.push({ title, timestamp });
                localStorage.setItem('notifications', JSON.stringify(notifications));

                this.style.backgroundColor = '#ccc';
                this.style.color = '#666';
                this.innerText = 'Sudah Terdaftar';
                this.disabled = true;

                alert(`Selamat, Anda telah mendaftar untuk: ${title}`);
            }
        });
    });
});


//script js pencarian//
const searchInput = document.getElementById('search');
const competitionItems = document.querySelectorAll('.competition-item');

function searchCompetitions() {
    const searchTerm = searchInput.value.toLowerCase();

    competitionItems.forEach(item => {
        const title = item.querySelector('.competition-title').textContent.toLowerCase();
        const description = item.querySelector('.accordion-content').textContent.toLowerCase();

        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
}

searchInput.addEventListener('input', searchCompetitions);