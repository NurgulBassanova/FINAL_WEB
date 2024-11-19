function resetForm() {
    document.querySelectorAll('input').forEach(input => {
        if (input.type === 'text' || input.type === 'email' || input.type === 'number' || input.type === 'password') {
            input.value = '';
        }
    });
    document.getElementById("error-message").style.display = "none";
}

