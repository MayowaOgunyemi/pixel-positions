import './bootstrap';

// Import my css file for the app: This is used by Vite to compile our CSS for an SPA setup
import '../css/app.css';

// Tell Vite about our image assets so it can include them in the build
import.meta.glob([
    '../images/**'
]);
