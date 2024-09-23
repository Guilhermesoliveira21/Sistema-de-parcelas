function showSuccessNotification(message, redirectUrl) {
    showNotification(message, 'success', redirectUrl);
}

function showErrorNotification(message, redirectUrl) {
    showNotification(message, 'error', redirectUrl);
}

function showNotification(message, type, redirectUrl) {
    const notificationContainer = document.getElementById('notifications');

    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerText = message;

    notificationContainer.appendChild(notification);

    // Remove a notificação após 3 segundos
    setTimeout(() => {
        notification.remove();
        if (redirectUrl) {
            window.location.href = redirectUrl; // Redireciona se uma URL for fornecida
        }
    }, 3000);
}