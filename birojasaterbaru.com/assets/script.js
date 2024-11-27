// Animasi fade-in untuk formulir
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    form.style.opacity = 0;
    form.style.transform = 'translateY(50px)';
    form.style.transition = 'all 0.8s ease';

    setTimeout(() => {
        form.style.opacity = 1;
        form.style.transform = 'translateY(0)';
    }, 200); // Mulai animasi setelah 200ms
});

// Efek getar (shake) jika input kosong saat tombol diklik
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    const inputs = form.querySelectorAll('input, textarea');
    let isValid = true;

    inputs.forEach(input => {
        if (input.value.trim() === '') {
            isValid = false;
            input.classList.add('shake'); // Tambahkan kelas animasi
            setTimeout(() => input.classList.remove('shake'), 500); // Hapus kelas setelah animasi selesai
        }
    });

    if (!isValid) {
        event.preventDefault(); // Jangan kirim form jika ada input kosong
        alert('Harap isi semua kolom!');
    }
});
