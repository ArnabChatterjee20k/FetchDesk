<script lang="ts">
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
</script>

<div class="flex items-center gap-2">
  <Avatar>
    <AvatarFallback class={`transition-all duration-300 ease-in-out`}
      >{avatar}</AvatarFallback
    >
    {#if imageURL}
      <AvatarImage>{imageURL}</AvatarImage>
    {/if}
  </Avatar>
  <span class="font-medium text-md">{accountName}</span>
</div>
