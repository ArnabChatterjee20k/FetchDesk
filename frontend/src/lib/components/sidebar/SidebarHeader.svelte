<script lang="ts">
    import { cn } from "$lib/utils";
    export let classname:string[] = [];
</script>
<div class={cn("w-full",classname)}>
    <slot/>
</div>
