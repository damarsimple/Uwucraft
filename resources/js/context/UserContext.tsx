import { createContext } from "react";
import { IUserContext, Usercart } from "../type/type";
interface Context {
    session: IUserContext;
    setSession?: React.Dispatch<React.SetStateAction<IUserContext>>;
    destroySession?: () => void;
    carts: Array<Usercart | null>;
    setCarts?: React.Dispatch<React.SetStateAction<(Usercart | null)[]>>;
}

const UserContext = createContext<Context>({
    session: { isLogged: false },
    carts: []
});
export default UserContext;
