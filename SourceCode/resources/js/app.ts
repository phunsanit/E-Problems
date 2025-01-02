//global variables
const userLanguage = navigator.language || 'en-US';
console.log('User Language:', userLanguage);

import '../css/app.css';
import './bootstrap';

//date-fns
// utils/date.ts
import { format } from 'date-fns';
import formatDistance from 'date-fns/formatDistance';
import formatRelative from 'date-fns/formatRelative';
import subDays from 'date-fns/subDays';
import { formatWithOptions } from 'date-fns/fp'; 
import * as locales from 'date-fns/locale'

// Type for locale keys
type DateFnsLocaleKey = keyof typeof locales

// Function to get locale dynamically
export const getLocale = (language: string) => {
  // Convert language code to match date-fns locale naming
  const localeKey = language === 'en' ? 'enUS' : language
  
  // Safely access locale
  const locale = locales[localeKey as DateFnsLocaleKey]
  return locale || locales.enUS // Fallback to English
}

// Helper function for date formatting
export const formatDate = (
  date: Date | string,
  formatString: string,
  language: string
): string => {
  const dateObject = typeof date === 'string' ? new Date(date) : date
  return formatWithOptions(
    { locale: getLocale(language) },
    formatString
  )(dateObject)
}

// Common date patterns
export const PATTERNS = {
  full: 'PPPPp',    // วันอังคารที่ 15 มกราคม 2567 11:00
  long: 'PPPP',     // วันอังคารที่ 15 มกราคม 2567
  medium: 'PP',     // 15 ม.ค. 2567
  short: 'P',       // 15/01/2567
  time: 'p'         // 11:00
} as const

const currentDate = new Date();

console.log('Date:', currentDate);

// Format the date using the user's locale and a pattern
const formattedDate = formatDate(currentDate, PATTERNS.full, userLanguage); 

console.log('Formatted Date:', formattedDate); 

//Font Awesome
import '@fortawesome/fontawesome-free/css/all.css';

//jQuery
import $ from "jquery";

declare global {
    interface Window {
        $: typeof $;
    }
}

window.$ = $;

//jQuery.DataTables.net
import 'datatables.net';
import 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.min.css';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, DefineComponent, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
