<script lang="ts">
  export let opened = false;
  export let maxWidth = 200;
  import { setSidebarContext, getSidebarContext } from "./context";
  setSidebarContext({ open: opened });
  const store = getSidebarContext();
</script>

<section class="w-full min-h-screen flex">
  <div class="flex items-start">
    <aside
      class="transition-all overflow-hidden duration-300 border-r bg-sidebar min-h-screen p-2 flex flex-col"
      style:width={!$store.open ? `55px` : `${maxWidth}px`}
    >
      <div>
        <slot name="sidebar-header" />
      </div>

      <div class="flex flex-col flex-grow space-y-3 mt-3 overflow-auto">
        <slot name="sidebar-content" />
      </div>

      <div class="mt-auto">
        <slot name="sidebar-footer" />
      </div>
    </aside>
  </div>
  <div
    class={$$slots["sidebar-trigger"] ? "flex flex-col gap-2 py-3 px-4" : ""}
  >
    <slot name="sidebar-trigger" />
    <slot />
  </div>
</section>
