import { writable, type Writable } from "svelte/store";
import { setContext, getContext } from "svelte";

interface ISidebarStore {
  open: boolean;
}
const defaultSidebarValues: ISidebarStore = {
  open: true,
};
const SIDEBAR_CONTEXT_KEY = "sidebarContext";

export const createSidebarStore = (
  sidebarOptions?: ISidebarStore
): Writable<ISidebarStore> => {
  return writable({ ...defaultSidebarValues, ...(sidebarOptions ?? {}) });
};

export const setSidebarContext = (sidebarOptions?: ISidebarStore) => {
  const store = createSidebarStore(sidebarOptions);
  setContext(SIDEBAR_CONTEXT_KEY, store);
};

export const getSidebarContext = (): Writable<ISidebarStore> => {
  return getContext(SIDEBAR_CONTEXT_KEY);
};
