import {createSlice} from "@reduxjs/toolkit";

const initialState = {
    data : {
        name: "",
        profile_picture: "",
        slug:"",
        role_is:""
    },
    loading:true
};

export const infoSlice = createSlice({
    name: "info",
    initialState,
    reducers: {
        getInfo: (state, action) => {
            state.loading = false
            state.data = action.payload
        },
    },
});

export const {getInfo} = infoSlice.actions;
export default infoSlice.reducer;
