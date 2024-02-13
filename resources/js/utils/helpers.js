// 日付をフォーマットするヘルパー関数
export function formatDate(date) {
    if (!date) return '';
    return new Date(date).toLocaleDateString('ja-JP', {
        year: 'numeric',
        month: 'numeric',
        day: 'numeric',
    });
}

// 金額をフォーマットするヘルパー関数
export function formatCurrency(amount) {
    return new Intl.NumberFormat('ja-JP', {
        style: 'currency',
        currency: 'JPY',
    }).format(amount);
}

// 文字列をトリミングするヘルパー関数
export function trimString(text, maxLength) {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + '...';
    }
    return text;
}

// 他にも必要なヘルパー関数があればここに追加する
