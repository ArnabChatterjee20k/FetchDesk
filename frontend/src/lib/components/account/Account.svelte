<script lang="ts">
  import { Tween, tweened } from "svelte/motion";
  import { cubicOut } from "svelte/easing";
  import { getSidebarContext } from "../sidebar/context";
  import AvatarFallback from "../ui/avatar/avatar-fallback.svelte";
  import AvatarImage from "../ui/avatar/avatar-image.svelte";
  import Avatar from "../ui/avatar/avatar.svelte";

  export let accountName: string;
  export let imageURL: string = "";
  export let avatarLetter: string = "";

  const avatar = avatarLetter
    ? avatarLetter
    : accountName.charAt(0).toUpperCase();

  const store = getSidebarContext();

  const borderRadius = new Tween(50, {
    duration: 100,
    easing: cubicOut,
  });

  $: borderRadius.set($store.open ? 50 : 16);
</script>

<div class="flex items-center gap-2">
  <Avatar
    class="transition-all"
    style="border-radius: {borderRadius.current}%;"
  >
    <AvatarFallback
      style="border-radius: {borderRadius.current}%;"
      class={`w-full h-full flex items-center justify-center`}
    >
      {avatar}
    </AvatarFallback>

    {#if imageURL}
      <AvatarImage>{imageURL}</AvatarImage>
    {/if}
  </Avatar>

  <span class="font-medium text-md">{accountName}</span>
</div>
