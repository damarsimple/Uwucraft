import { createContext } from "react";
import Echo from "laravel-echo";
import EchoInstance from "../components/Echo";
interface Context {
    EchoClient: Echo;
}

const EchoContext = createContext<Context>({ EchoClient: EchoInstance });
export default EchoContext;
