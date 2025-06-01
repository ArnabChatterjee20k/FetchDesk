import { writable, type Writable } from "svelte/store";
import { setContext, getContext } from "svelte";

interface ISidebarStore {
  open: boolean;
}

const SIDEBAR_CONTEXT_KEY = "sidebarContext";

export const createSidebarStore = (): Writable<ISidebarStore> => {
  return writable({
    open: true,
  });
};

export const setSidebarContext = () => {
  const store = createSidebarStore();
  setContext(SIDEBAR_CONTEXT_KEY, store);
};

export const getSidebarContext = (): Writable<ISidebarStore> => {
  return getContext(SIDEBAR_CONTEXT_KEY);
};
