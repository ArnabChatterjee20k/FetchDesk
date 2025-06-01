<script lang="ts">
  import Account from "$lib/components/account/Account.svelte";
  import Sidebar from "$lib/components/sidebar/Sidebar.svelte";
  import SidebarButton from "$lib/components/sidebar/SidebarButton.svelte";
  import SidebarHeader from "$lib/components/sidebar/SidebarHeader.svelte";
  import SidebarList from "$lib/components/sidebar/SidebarList.svelte";
  import SidebarTrigger from "$lib/components/sidebar/SidebarTrigger.svelte";
  import { PlusIcon } from "lucide-svelte";
  import { Home, Database } from "lucide-svelte";
  import { PanelLeft } from "lucide-svelte";
  let sidebarItems = [{ label: "Database", icon: Database }];
  function addDatastore() {
    const randomDbs = ["Mongo", "SQLITE", "MySQL"];
    const randomIdx = Math.floor(Math.random() * randomDbs.length);
    sidebarItems = [
      ...sidebarItems,
      { label: randomDbs[randomIdx], icon: Database },
    ];
  }
</script>

<Sidebar>
  <SidebarHeader slot="sidebar-header">
    <Account accountName="Arnab" avatarLetter="G" />
  </SidebarHeader>
  <SidebarTrigger slot="sidebar-trigger"><PanelLeft size={18} /></SidebarTrigger
  >
  <!-- <SidebarFooter slot="sidebar-footer"/> -->
  <div slot="sidebar-content">
    <SidebarList items={sidebarItems} />
  </div>
  <div slot="sidebar-footer">
    <SidebarButton icon={PlusIcon} onClick={addDatastore}
      >Add datastore</SidebarButton
    >
  </div>

  <h1>sldfj</h1>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto maiores
    quaerat nobis praesentium magnam nostrum odio labore at sapiente eligendi
    ducimus atque dignissimos sint, asperiores perferendis illum consequuntur?
    Voluptatem, officia.
  </p>
</Sidebar>
