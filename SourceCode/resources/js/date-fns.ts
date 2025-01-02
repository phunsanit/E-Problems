//date-fns
import { format } from 'date-fns';
import { formatWithOptions } from 'date-fns/fp';
// import { getLocale } from 'date-fns';
import * as locales from 'date-fns/locale'
import formatDistance from 'date-fns/formatDistance';
import formatRelative from 'date-fns/formatRelative';
import subDays from 'date-fns/subDays';

// Type for locale keys
type DateFnsLocaleKey = keyof typeof locales
export { format, formatWithOptions };
// Common date patterns
// https://date-fns.org/v4.1.0/docs/format
export const DATETIME_PATTERNS = {
    datetime: 'Pp',
    full: 'PPPPp',
    long: 'PPPP',
    medium: 'PP',
    short: 'P',
    time: 'p'
} as const;

// Function to get locale dynamically
export const getLocale = (language: string) => {
    // Convert language code to match date-fns locale naming
    const localeKey = language === 'en' ? 'enUS' : language

    // Safely access locale
    const locale = locales[localeKey as DateFnsLocaleKey]
    return locale || locales.enUS // Fallback to English
}

/*
const date = new Date();

const formattedDate = format(date, 'PPPP');

const formattedDate = format(date, 'PPPP', { locale: th }); //format date with locale

const formattedDate = format(new Date(row.sla_dt), DATETIME_PATTERNS.datetime, userLanguage); //format date from const DATETIME_PATTERNS

const formattedDate = formatWithOptions({ locale: th }, 'PPPP')(date);

console.log(formattedDate);

const locale = getLocale('jp');

console.log(locale);
*/