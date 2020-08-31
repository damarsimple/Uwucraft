import { createContext } from 'react'
import { IUserContext } from '../type/type';
interface Context {
  session: IUserContext;
  setSession?: React.Dispatch<React.SetStateAction<IUserContext>>;
  destroySession?: () => void;
}

const UserContext = createContext<Context>({ session: { isLogged: false } });
export default UserContext;
