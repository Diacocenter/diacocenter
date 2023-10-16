import axios from 'axios';
//console.log(import.meta.env.VITE_APP_URL);

const instance = axios.create({
    baseURL: import.meta.env.VITE_APP_URL,
    withCredentials: true,
    headers: {
        // 'Authorization': 'Bearer ' + localStorage.getItem('access_token'),
        'Content-Type': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').getAttribute("content"),
    },
});

export default instance;
