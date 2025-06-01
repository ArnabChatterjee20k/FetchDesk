<script lang="ts">
  import { setSidebarContext, getSidebarContext } from "./context";
  setSidebarContext();
  const store = getSidebarContext();
</script>

<section class="w-full min-h-screen flex">
  <div class="flex items-start">
    <aside
      class={`transition-all overflow-hidden duration-300 border-r bg-sidebar min-h-screen p-2 flex flex-col ${!$store.open ? "w-[55px]" : "w-[200px]"}`}
    >
      <div>
        <slot name="sidebar-header" />
      </div>

      <div
        class="flex flex-col flex-grow space-y-3 mt-3 overflow-auto max-h-[90vh]"
      >
        <slot name="sidebar-content" />
      </div>

      <div class="mt-auto">
        <slot name="sidebar-footer" />
      </div>
    </aside>
  </div>
  <!-- for the main content of the sites -->
  <div class="flex flex-col gap-2 py-3 px-4">
    <slot name="sidebar-trigger" />
    <slot />
  </div>
</section>
