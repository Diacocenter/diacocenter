import { configureStore } from '@reduxjs/toolkit';
import infoReducer, {saveInfo} from './info';
import {QueryClient} from "react-query";
import axios from "../../axiosConfig";
import {route} from "../helpers";

const queryClient = new QueryClient();
const data = async function () {
    const { data } = await queryClient.fetchQuery('userInfo', async () => {
        const {data} = await axios.get(route("api.web.v1.admin-panel.user-general-info"));
        return data;
    });
    console.log(data);
    store.dispatch(saveInfo(data));
}
data();

export default function (){
    const store = configureStore({
        reducer: {
            information : infoReducer
        },
    })
}
