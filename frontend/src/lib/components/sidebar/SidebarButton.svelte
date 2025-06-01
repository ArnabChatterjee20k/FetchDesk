<script lang="ts">
  import { Tween } from "svelte/motion";
  import { cn } from "$lib/utils";
  import Button from "../ui/button/button.svelte";
  import type { SvelteComponent } from "svelte";
  import { getSidebarContext } from "./context";
  import type { IconProps } from "lucide-svelte";
  import { cubicOut } from "svelte/easing";

  const store = getSidebarContext();
  export let icon: typeof SvelteComponent<IconProps> | undefined;
  export let classname: string[] = [];
  export let onClick: () => void;
  const buttonWidth = new Tween(200, {
    duration: 200,
    easing: cubicOut,
  });

  $: buttonWidth.set($store.open ? 180 : 40);
</script>

<Button
  on:click={onClick}
  class={cn("flex justify-center", $store.open ? "gap-2" : "gap-0", classname)}
  style={`width: ${buttonWidth.current}px`}
>
  {#if icon}
    <svelte:component this={icon} class="w-5 h-5 flex-shrink-0" />
  {/if}

  <span class="truncate whitespace-nowrap">
    <slot />
  </span>
</Button>
