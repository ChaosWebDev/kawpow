import $ from 'jquery';
window.$ = $;

import axios from 'axios';
window.axios = axios;
//window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

import Chart from 'chart.js/auto';
window.Chart = Chart;

import "./formatting";
