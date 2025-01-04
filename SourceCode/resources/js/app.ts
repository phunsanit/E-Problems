//config variables
const datetimeOptions = {
    day: 'numeric',
    hour: 'numeric',
    minute: 'numeric',
    month: 'short',
    year: 'numeric'
};
window.datetimeOptions = datetimeOptions;

const userLocales = (navigator.languages && navigator.languages.length) ? navigator.languages : navigator.language || 'en';
window.userLocales = userLocales;

// global variables
declare global {
    interface Window {
        datetimeOptions: typeof datetimeOptions;
        userLocales: typeof userLocales;
    }
}

import '../css/app.css';
import './bootstrap';

//date-fns
import {
    DATETIME_PATTERNS,
    format,
    formatDistance,
    formatWithOptions,
    getLocale,
    locales,
    subDays
} from './date-fns';

window.DATETIME_PATTERNS = DATETIME_PATTERNS;
window.format = format;
window.formatDistance = formatDistance;
window.formatWithOptions = formatWithOptions;
window.getLocale = getLocale;

//Font Awesome
import '@fortawesome/fontawesome-free/css/all.css';

//jQuery
import './jquery';

//Vue.js
import "./vue";