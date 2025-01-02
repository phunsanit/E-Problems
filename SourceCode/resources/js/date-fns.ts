//date-fns
import { format } from 'date-fns';
import { formatWithOptions } from 'date-fns/fp';
import * as locales from 'date-fns/locale'
import formatDistance from 'date-fns/formatDistance';
import formatRelative from 'date-fns/formatRelative';
import subDays from 'date-fns/subDays';

// Type for locale keys
type DateFnsLocaleKey = keyof typeof locales

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

const formattedDate1 = formatDate(date, DATETIME_PATTERNS.full);
console.log(formattedDate1);

const formattedDate2 = formatDate(date, DATETIME_PATTERNS.full, 'th');
console.log(formattedDate2);

const locale = getLocale('jp');
console.log(locale);
*/