import { routes } from "./routes.json";
import lodash from "lodash";

export function route(name, params = {}) {
    let result = lodash.cloneDeep(routes[name]);

    if(Object.keys(params).length !== 0 && params.constructor === Object) {
        for (const key in params) {
            result.uri = result.uri.replace(`{${key}}`, encodeURIComponent(params[key]));
        }
    }

    console.log(result, "helper.js");
    return import.meta.env.VITE_APP_URL + "/" + result.uri;
}
