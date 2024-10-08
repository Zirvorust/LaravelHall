import "./bootstrap";
import Alpine from 'alpinejs';
import Precognition from 'laravel-precognition-alpine';
 
window.Alpine = Alpine;
 
Alpine.plugin(Precognition);
Alpine.start();
