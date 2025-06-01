<script lang="ts">
  import Sidebar from "$lib/components/sidebar/Sidebar.svelte";
  import SidebarFooter from "$lib/components/sidebar/SidebarFooter.svelte";
  import SidebarHeader from "$lib/components/sidebar/SidebarHeader.svelte";
  import SidebarList from "$lib/components/sidebar/SidebarList.svelte";
  import SidebarTrigger from "$lib/components/sidebar/SidebarTrigger.svelte";
  import { Button } from "$lib/components/ui/button";
  import { Home, Settings, User } from "lucide-svelte";
  import {PanelLeft} from "lucide-svelte"
  const sidebarItems = [{ label: "Home", icon: Home }];
</script>

<Sidebar>
  <!-- <SidebarHeader slot="sidebar-header"/> -->
  <SidebarTrigger slot="sidebar-trigger"><PanelLeft size={18}/></SidebarTrigger>
  <!-- <SidebarFooter slot="sidebar-footer"/> -->
  <SidebarList slot="sidebar-list" items={sidebarItems} />
  <h1>sldfj</h1>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores quaerat nobis praesentium magnam nostrum odio labore at sapiente eligendi ducimus atque dignissimos sint, asperiores perferendis illum consequuntur? Voluptatem, officia.
  </p>
</Sidebar>
