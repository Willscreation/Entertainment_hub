function checkLogin() {
    const isLoggedIn = document.getElementById('auth-button').innerText === 'Sign Out';
    if (!isLoggedIn) {
        document.getElementById('login-form').style.display = 'flex';
    } else {
        // Logic for sign out (if needed)
        document.getElementById('auth-button').innerText = 'Sign In';
        // Reset session (if using PHP session)
        window.location.href = 'logout.php'; // Implement this for logout
    }
}

// function showVideo(videoSrc) {
//     const videoPopup = document.getElementById('video-popup');
//     const videoPlayer = document.getElementById('video-player');
//     const videoSource = document.getElementById('video-source');

//     const isLoggedIn = document.getElementById('signInOutBtn').innerText === 'Sign Out';
//     if (!isLoggedIn) {
//         document.getElementById('login-form').style.display = 'flex';
//     } else {
//         videoSource.src = videoSrc;
//         videoPlayer.load();
//         videoPopup.style.display = 'flex';
//     }
// }

// function closePopup() {
//     document.getElementById('video-popup').style.display = 'none';
// }

function closeLoginForm() {
    document.getElementById('login-form').style.display = 'none';
}

function handleLogin(event) {
    event.preventDefault();
    
    // Simulate a login
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Check credentials (this is just a simulation)
    if (username === 'admin' && password === 'password') {
        document.getElementById('auth-button').innerText = 'Sign Out';
        closeLoginForm();
        // You would set the session variable in your PHP code here
    } else {
        alert('Invalid credentials. Please try again.');
    }
}


