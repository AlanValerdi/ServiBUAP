
if (window.location.search.indexOf('logged_out=true') > -1) {
    alert('Has cerrado sesión correctamente.');
    history.replaceState({}, document.title, window.location.pathname);
}

if (window.location.search.indexOf('registered=true') > -1) {
    alert('Te has registrado correctamente. Por favor, inicia sesión.');
    history.replaceState({}, document.title, window.location.pathname);
}
