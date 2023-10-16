import {createSlice} from "@reduxjs/toolkit";

const initialState = {
    firstName: "",
    lastName: "",
    profile_picture: "",
    profile_alt: "",
    slug:"",
    email:"",
    title:"",
    location:""

};

export const infoSlice = createSlice({
    name: "info",
    initialState,
    reducers: {
        getInfo: (state) => state,
        saveInfo: (state, action) => {
            return action.payload;
        },
    },
});

export const {getInfo, saveInfo} = infoSlice.actions;
export default infoSlice.reducer;
