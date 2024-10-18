window.formatHashrate = (rate) => {
    let count = 0;
    const metrics = ['H/s', 'Kh/s', 'Mh/s', 'Gh/s', 'Th/s', 'Ph/s', 'Eh/s'];

    while (count < metrics.length - 1 && rate >= 1000) {
        rate /= 1000;
        count++;
    }

    const formattedRate = Number(rate).toFixed(3);

    return `${formattedRate} ${metrics[count]}`;
};

window.formatDifficulty = (rate) => {
    rate = formatHashrate(rate);
    return rate.replace(/\/s$/, '');
}

window.formatSeconds = (seconds) => {
    const hours = Math.floor(seconds / 3600);
    const minutes = Math.floor((seconds % 3600) / 60);
    const remainingSeconds = seconds % 60;

    const formatUnit = (value, unit) => {
        return value === 1 ? `${value} ${unit}` : `${value} ${unit}s`;
    };

    let result = [];

    if (hours > 0) result.push(formatUnit(hours, 'Hour'));
    if (minutes > 0) result.push(formatUnit(minutes, 'Minute'));
    if (remainingSeconds > 0 || result.length === 0) result.push(formatUnit(remainingSeconds, 'Second'));

    return result.join(', ');
};

window.formatPercentages = (value, format = '%', decimals = 2) => {
    if (format == '.') {
        value *= 100;
    }

    value = Number(value).toFixed(decimals);

    return `${value}%`;
}

window.formatPayment = (amount, decimals = 3) => {
    return Number(amount).toFixed(decimals);
}

window.shortenString = (str, endLength = 5, startOnly = false) => {
    const start = str.substring(0, endLength);
    const end = str.substring(str.length - endLength);

    if (startOnly) {
        return `${start}...`;
    }

    if (str.length <= 2 * endLength) {
        return str;
    }

    return `${start}...${end}`;
}

window.lastBlock = (blocks) => {
    const allBlocks = [...blocks.confirmed, ...blocks.pending];

    if (allBlocks.length === 0) {
        return "No confirmed or pending blocks available.";
    }

    const newestBlock = allBlocks.reduce((latest, current) => {
        return current.time > latest.time ? current : latest;
    });

    const currentTime = Date.now();
    const timeDifference = currentTime - newestBlock.time;

    const seconds = Math.floor(timeDifference / 1000);
    const minutes = Math.floor(seconds / 60);
    const hours = Math.floor(minutes / 60);
    const days = Math.floor(hours / 24);

    let timeAgo = '';

    if (days > 0) {
        timeAgo = `${days} day${days > 1 ? 's' : ''} ago`;
    } else if (hours > 0) {
        timeAgo = `${hours} hour${hours > 1 ? 's' : ''} ago`;
    } else if (minutes > 0) {
        timeAgo = `${minutes} minute${minutes > 1 ? 's' : ''} ago`;
    } else {
        timeAgo = `${seconds} second${seconds > 1 ? 's' : ''} ago`;
    }

    return `~${timeAgo}`;
}

window.counter = (arr) => {
    return arr.length ?? 0;
}

window.lastBlockFound = (data, ps = 'pool') => {
    const allBlocks = [...data.confirmed, ...data.pending];

    let filteredBlocks;
    if (ps === 'all') {
        filteredBlocks = allBlocks;
    } else {
        const isSolo = ps === 'solo';
        filteredBlocks = allBlocks.filter(block => block.solo === isSolo);
    }

    if (filteredBlocks.length === 0) {
        return `N/A`;
    }

    const lastBlock = filteredBlocks.reduce((latest, current) => {
        return current.time > latest.time ? current : latest;
    });

    const currentTime = Date.now();
    const timeDifference = currentTime - lastBlock.time;

    const seconds = Math.floor(timeDifference / 1000);
    const minutes = Math.floor(seconds / 60);
    const hours = Math.floor(minutes / 60);
    const days = Math.floor(hours / 24);

    let timeAgo = '';

    if (days > 0) {
        timeAgo = `${days} day${days > 1 ? 's' : ''} ago`;
    } else if (hours > 0) {
        timeAgo = `${hours} hour${hours > 1 ? 's' : ''} ago`;
    } else if (minutes > 0) {
        timeAgo = `${minutes} minute${minutes > 1 ? 's' : ''} ago`;
    } else {
        timeAgo = `${seconds} second${seconds > 1 ? 's' : ''} ago`;
    }

    return `~${timeAgo}`;
}


