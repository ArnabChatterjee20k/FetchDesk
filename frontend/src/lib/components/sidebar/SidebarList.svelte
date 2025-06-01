<script lang="ts">
  import type { SvelteComponent } from "svelte";
  import { getSidebarContext } from "./context";
  import type { IconProps } from "lucide-svelte";

  interface SidebarListItem {
    label: string;
    icon: typeof SvelteComponent<IconProps>;
  }

  export let items: SidebarListItem[];
  const store = getSidebarContext();
</script>

<ul>
  {#each items as item}
    <li
      class={`group/menu-item relative flex items-center space-x-2 text-sm font-medium cursor-pointer hover:bg-accent border border-transparent rounded py-2 transition-all px-2 w-full overflow-hidden`}
    >
      <svelte:component
        this={item.icon}
        class={`text-gray-500 transition-all duration-300 w-5 h-5 flex-shrink-0`}
        color={"white"}
      />
    <span>{item.label}</span>
    </li>
  {/each}
</ul>
