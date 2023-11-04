import { routes } from "./routes.json";
import lodash from "lodash";

export function route(name, params = {}, page = null , pageSize= null) {
    let result = lodash.cloneDeep(routes[name]);

    if(Object.keys(params).length !== 0 && params.constructor === Object) {
        for (const key in params) {
            result.uri = result.uri.replace(`{${key}}`, encodeURIComponent(params[key]));
        }
    }

    if(typeof(page) === "number") {
        result.uri = result.uri + "?page=" + page + "&pageSize=" + pageSize;
    }
    return import.meta.env.VITE_APP_URL + "/" + result.uri;
}
