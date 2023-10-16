import { configureStore } from '@reduxjs/toolkit';
import infoReducer from './info.js';


const store = configureStore({
    reducer: {
        information : infoReducer
    },
})

export default store;
