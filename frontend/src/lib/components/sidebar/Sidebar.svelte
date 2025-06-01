<script lang="ts">
  import { setSidebarContext, getSidebarContext } from "./context";
  setSidebarContext();
  const store = getSidebarContext();
</script>

<section class="w-full min-h-screen flex">
  <div class="flex items-start">
    <aside
      class={`transition-all duration-300 border-r-[1px] bg-sidebar min-h-screen p-2 flex flex-col space-y-3 ${!$store.open ? "w-[60px]" : "w-[160px]"}`}
    >
      <slot name="sidebar-list" />
    </aside>
  </div>
  <div class="flex flex-col gap-2 py-3 px-4">
    <slot name="sidebar-trigger" />
    <slot />
  </div>
</section>
