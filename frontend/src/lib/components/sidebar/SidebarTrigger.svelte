<script lang="ts">
  import { getSidebarContext } from "./context";
  const store = getSidebarContext();
  function toggleSidebar() {
    store.update((current) => ({ ...current, open: !current.open }));
  }
</script>

<button on:click={toggleSidebar}>
  <slot />
</button>
