<script lang="ts">
  import Account from "$lib/components/account/Account.svelte";
  import Sidebar from "$lib/components/sidebar/Sidebar.svelte";
  import SidebarFooter from "$lib/components/sidebar/SidebarFooter.svelte";
  import SidebarHeader from "$lib/components/sidebar/SidebarHeader.svelte";
  import SidebarList from "$lib/components/sidebar/SidebarList.svelte";
  import SidebarTrigger from "$lib/components/sidebar/SidebarTrigger.svelte";
  import { Button } from "$lib/components/ui/button";
  import { Home, Settings, User } from "lucide-svelte";
  import { PanelLeft } from "lucide-svelte";
  const sidebarItems = [{ label: "Home", icon: Home }];
</script>

<Sidebar>
  <SidebarHeader slot="sidebar-header">
    <Account accountName="Arnab" avatarLetter="G"/>
  </SidebarHeader>
  <SidebarTrigger slot="sidebar-trigger"><PanelLeft size={18} /></SidebarTrigger
  >
  <!-- <SidebarFooter slot="sidebar-footer"/> -->
  <div slot="sidebar-content">
    <SidebarList items={sidebarItems} />
    <Button class="w-full">Helo</Button>
  </div>

  <h1>sldfj</h1>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores
    quaerat nobis praesentium magnam nostrum odio labore at sapiente eligendi
    ducimus atque dignissimos sint, asperiores perferendis illum consequuntur?
    Voluptatem, officia.
  </p>
</Sidebar>
