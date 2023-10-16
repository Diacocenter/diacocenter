import { configureStore } from '@reduxjs/toolkit';
import infoReducer from './info.js';

const store = configureStore({
    reducer: {
        info : infoReducer
    },
})
export default store;
